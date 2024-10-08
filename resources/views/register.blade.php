<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครใช้งาน Facebook</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/icon.png') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>

    <!-- Bootstrap Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="CSS/style.css">

    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <img src="{{ url('img/logo.svg') }}" class="mt-4" alt="Facebook">
            <div class="border text-center mt-4 box-1">
                <h3 class="fw-bold mt-2" style="margin-bottom: 0;">สร้างบัญชีใหม่</h3>
                <p class="text-body-secondary">ง่ายและเร็ว</p>
                <hr>

                <form action="{{ route('regist') }}" method="get">
                    @csrf
                    <div class="input-container">
                        <input class="form-1 me-2" placeholder="ชื่อ" type="text" data-bs-toggle="tooltip"
                            data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="คุณชื่ออะไร"
                            name="f_name">
                        <i class="fa-solid fa-circle-exclamation input-error-icon d-none me-2"></i>
                    </div>
                    <div class="input-container">
                        <input class="form-1 popover-2" placeholder="นามสกุล" type="text" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="คุณชื่ออะไร"
                            name="l_name">
                        <i class="fa-solid fa-circle-exclamation input-error-icon d-none"></i>
                    </div>
                    <p class="ms-3 mt-2 text-body-secondary text-start" style="margin-bottom: 0;">วันเกิด <i
                            class="fa-solid fa-circle-question" style="color: #717171; font-size: 12px;"
                            data-bs-container="body" data-bs-toggle="popover" data-bs-html="true"
                            data-bs-placement="left"
                            data-bs-content="การระบุวันเกิดของคุณจะช่วยให้แน่ใจว่าคุณได้รับประสบการณ์การใช้งาน Facebook ที่เหมาะสมกับอายุของคุณ หากคุณต้องการเปลี่ยนผู้ที่จะเห็นข้อมูลนี้ ให้ไปที่ส่วน เกี่ยวกับ ของโปรไฟล์ของคุณ โปรดไปที่ <a href='https://www.facebook.com/privacy/policy' target='_blank'>นโยบายความเป็นส่วนตัว</a> ของเราเพื่อดูข้อมูลเพิ่มเติม"></i>
                    </p>
                    <div class="text-start ms-3">
                        <select class="form-2 me-2" name="day">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="21">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select class="form-2" name="month">
                            <option value="ม.ค.">ม.ค.</option>
                            <option value="ก.พ.">ก.พ.</option>
                            <option value="มี.ค.">มี.ค</option>
                            <option value="เม.ย.">เม.ย.</option>
                            <option value="พ.ค.">พ.ค.</option>
                            <option value="มิ.ย.">มิ.ย.</option>
                            <option value="ก.ค.">ก.ค.</option>
                            <option value="ส.ค." selected>ส.ค.</option>
                            <option value="ก.ย.">ก.ย.</option>
                            <option value="ต.ค.">ต.ค.</option>
                            <option value="พ.ย.">พ.ย.</option>
                            <option value="ธ.ค.">ธ.ค.</option>
                        </select>
                        <select id="year-select" class="form-2 ms-2" name="year"></select>
                    </div>
                    <p class="ms-3 mt-2 text-body-secondary text-start" style="margin-bottom: 0;">เพศ <i
                            class="fa-solid fa-circle-question" style="color: #717171; font-size: 12px;"
                            data-bs-container="body" data-bs-toggle="popover" data-bs-html="true"
                            data-bs-placement="left"
                            data-bs-content="คุณสามารถเปลี่ยนผู้ที่สามารถเห็นเพศของคุณบนโปรไฟล์ของคุณได้ในภายหลัง เลือก กำหนดเอง เพื่อเลือกเพศอื่นหรือหากคุณไม่ต้องการระบุเพศ"></i>
                    </p>
                    <div class="text-start ms-3">
                        <div class="box-2 d-inline-block">
                            <label for="" class="box-l">หญิง</label>
                            <input type="radio" class="me-2" name="sex" id="">
                        </div>
                        <div class="box-2 d-inline-block ms-2">
                            <label for="" class="box-l">ชาย</label>
                            <input type="radio" class="me-2" name="sex" id="">
                        </div>
                        <div class="box-2 d-inline-block ms-2">
                            <label for="" class="box-l-2">ไม่ระบุ</label>
                            <input type="radio" class="me-2" name="sex" id="">
                        </div>

                        <div class="input-container mt-3">
                            <input class="form-4 me-2" name="email" placeholder="หมายเลขโทรศัพท์มือถือหรืออีเมล"
                                type="text" data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-custom-class="custom-tooltip" data-bs-html="true"
                                data-bs-title="คุณจะต้องใช้ข้อมูลนี้เมื่อคุณเข้าสู่ระบบหรือหากคุณจำเป็นต้องรีเซ็ตรหัสผ่านของคุณ">
                            <i class="fa-solid fa-circle-exclamation input-error-icon d-none me-2"></i>
                        </div>

                        <div class="input-container mt-3">
                            <input class="form-4 me-2" name="password" placeholder="รหัสผ่านใหม่" type="text"
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-custom-class="custom-tooltip"
                                data-bs-title="ป้อนอักษรขระอย่างน้อยหกตัวให้ผสมกันทั้งเลขตัวอักษร และเครื่องหมายวรรคตอน (เช่น ! และ &)">
                            <i class="fa-solid fa-circle-exclamation input-error-icon d-none me-2"></i>
                        </div>
                    </div>
                    <div class="text-start text-body-secondary ms-3 mt-4 me-3">
                        <small class=" ">คนที่ใช้บริการของเราอาจอัพโหลดข้อมูลติดต่อของคุณไปยัง Facebook <a
                                href="https://th-th.facebook.com/help/637205020878504"
                                class="b">เรียนรู้เพิ่มเติม</a>
                        </small>
                        <div class="mt-3">
                            <small class="mt-3">เมื่อคลิกสมัคร แสดงว่าคุณยินยอมตาม
                                <a href="https://th-th.facebook.com/legal/terms/update" class="b">ข้อกำหนด</a>
                                <a href="https://th-th.facebook.com/privacy/policy/?entry_point=data_policy_redirect&entry=0"
                                    class="b">นโยบายความเป็นส่วนตัว</a> และ
                                <a href="https://th-th.facebook.com/privacy/policies/cookies/?entry_point=cookie_policy_redirect&entry=0"
                                    class="b">นโยบายคุกกี้</a>
                                ของเรา คุณอาจได้รับการแจ้งเตือนทาง SMS
                                จากเราและสามารถเลือกไม่รับได้ทุกเมื่อ</small>
                        </div>
                    </div>

                    <input class="mt-4 btn-submit fw-bold fs-5" type="submit" value="สมัคร">
                    <br>
                    <div class="mt-3">
                        <a href="/login" class="fs-5 text-decoration-none">มีบัญชีแล้วใช่ไหม</a>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <div style="background-color: rgb(255, 255, 255)">
        <footer class="">
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
            <p style="color: black; margin-left: 33px">Meta © 2024</p>
            <br>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rOycA7RZ39yPpYpDsN8/2sKPMKpXuhSzt0evshDseO1XwPlbZLBC9eq0eEIGm6LF" crossorigin="anonymous">
    </script>

    <script>
        // ฟังก์ชันตรวจสอบฟิลด์ input เมื่อสูญเสีย focus
        document.addEventListener("DOMContentLoaded", function() {
            // เรียกใช้ป๊อปโอเวอร์
            var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                return new bootstrap.Popover(popoverTriggerEl);
            });

            // ตรวจสอบ input ว่าไม่ได้กรอกข้อมูลเมื่อ blur
            var inputs = document.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    var errorIcon = input.parentNode.querySelector('.input-error-icon');
                    if (!input.value) {
                        input.classList.add('input-error');
                        errorIcon.classList.remove('d-none');
                    } else {
                        input.classList.remove('input-error');
                        errorIcon.classList.add('d-none');
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // เรียกใช้ Tooltip
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // ตรวจสอบ input ว่าไม่ได้กรอกข้อมูลเมื่อ blur
            var inputs = document.querySelectorAll('input');
            inputs.forEach(function(input) {
                input.addEventListener('blur', function() {
                    var errorIcon = input.parentNode.querySelector('.input-error-icon');
                    if (!input.value) {
                        input.classList.add('input-error');
                        errorIcon.classList.remove('d-none');
                    } else {
                        input.classList.remove('input-error');
                        errorIcon.classList.add('d-none');
                    }
                });
            });
        });

        // ฟังก์ชันสำหรับสร้างตัวเลือกปี
        function populateYearDropdown(startYear, endYear) {
            var select = document.getElementById('year-select');
            for (var year = startYear; year >= endYear; year--) {
                var option = document.createElement('option');
                option.value = year;
                option.text = year;
                select.appendChild(option);
            }
        }

        // เรียกใช้ฟังก์ชันโดยเริ่มจาก 2024 และสิ้นสุดที่ 1905
        populateYearDropdown(2024, 1905);
    </script>

</body>

</html>
