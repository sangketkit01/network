# ใช้ PHP 8.2 กับ Apache
FROM php:8.2-apache

# ติดตั้ง dependencies และ PHP extensions
RUN apt-get update && apt-get install -y && apt-get install -y nano\
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd zip pdo pdo_mysql mbstring exif pcntl bcmath opcache

# ติดตั้ง Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ตั้งค่า Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# เปิดใช้งาน mod_rewrite สำหรับ Laravel
RUN a2enmod rewrite

# ตั้งค่า PHP
COPY php.ini /usr/local/etc/php/conf.d/app.ini

# ตั้งค่า working directory
WORKDIR /var/www/html

# คัดลอกไฟล์โปรเจค
COPY . /var/www/html

# ตั้งค่าสิทธิ์
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ติดตั้ง dependencies ของ Laravel
RUN composer install --no-interaction --no-plugins --no-scripts

# สร้าง .env file จาก .env.example (ถ้ามี)
RUN if [ -f .env.example ]; then cp .env.example .env; fi

# สร้าง application key
RUN php artisan key:generate

# Optimize
RUN php artisan optimize


# เปิดพอร์ต 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]