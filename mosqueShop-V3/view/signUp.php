<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/loginStyle.css">
    <title>ثبت نام</title>
</head>

<body>
<div class="container">
    <form action="../controller/signUp.php" method="post">
        <button class="custom-btn btn-ghost">
            <img src="./img/google-icon.png" alt="" id="google-icon">
            ثبت نام با اکانت گوگل
        </button>
        <div class="form-control">
            <label for="email">نام کاربری</label>
            <input type="text" id="email" name="username" placeholder="نام کاربری خود را وارد نمایید"/>
            <?php
            if (isset($_GET['x'])) {
                if ($_GET['x'] == 4) {
                    echo '<p id="wrong-input-message">نام کاربری نا معتبر است</p>';
                } elseif ($_GET['x'] == 5) {
                    echo '<p id="wrong-input-message">نام کاربری توسط کاربر دیگری انتخاب شده است</p>';
                }
            }
            ?>
        </div>
        <div class="form-control">
            <label for="email">ایمیل</label>
            <input type="email" id="email" name="email" placeholder="ایمیل خود را وارد نمایید"/>
            <?php
            if (isset($_GET['x'])) {
                if ($_GET['x'] == 1) {
                    echo '<p id="wrong-input-message">ایمیل قبلا استفاده شده است</p>';
                } elseif ($_GET['x'] == 2) {
                    echo '<p id="wrong-input-message">ایمیل نادرست است</p>';
                }
            }
            ?>
        </div>
        <div class="form-control">
            <label for="password">شماره موبایل</label>
            <input type="text" id="password" name="phoneNumber" placeholder="شماره موبایل خود را وارد نمایید"/>
            <?php
            if (isset($_GET['x'])) {
                if ($_GET['x'] == 6) {
                    echo '<p id="wrong-input-message">شماره موبایل نا معتبر است</p>';
                }
            }
            ?>
        </div>
        <div class="form-control">
            <label for="password">رمز عبور</label>
            <input type="password" id="password" name="password" placeholder="رمز ورود خود را وارد نمایید"/>
            <?php
            if (isset($_GET['x'])) {
                if ($_GET['x'] == 3) {
                    echo '<p id="wrong-input-message">رمز نا معتبر است</p>';
                }
            }
            ?>
        </div>

        <button class="custom-btn" name="signUp" >ثبت نام</button>
        <div>
            <small>حساب کاربری دارید؟</small>
            <a id="signUp-btn" href="./login.php">ورود</a>
        </div>
    </form>
</div>

<!-- back-to-home-page -->
<a href="./index.php" id="back-to-home-page">
    <img src="./img/home.png" alt="">
</a>
<!-- back-to-home-page -->
</body>

</html>


