<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('userdbs', function (Blueprint $table) {
            //
            $table->string("fname")->after("password")->nullable();
            $table->string("lname")->after("fname")->nullable();
            $table->string("birthday")->after("lname")->nullable();
            $table->string("birthmonth")->after("birthday")->nullable();
            $table->string("birthyear")->after("birthmonth")->nullable();
            $table->string("sex")->after("birthyear")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('userdbs', function (Blueprint $table) {
            //
            $table->dropColumn("fname");
            $table->dropColumn("lname");
            $table->dropColumn("birthday");
            $table->dropColumn("birthmonth");
            $table->dropColumn("birthyear");
            $table->dropColumn("sex");
        });
    }
};
