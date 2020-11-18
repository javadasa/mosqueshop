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
        <form>
            <button class="custom-btn btn-ghost">
                <img src="./img/google-icon.png" alt="" id="google-icon">
                ثبت نام با اکانت گوگل
            </button>
            <div class="form-control">
                <label for="email">نام کاربری</label>
                <input type="email" id="email" placeholder="نام کاربری خود را وارد نمایید" />
            </div>
            <div class="form-control">
                <label for="email">ایمیل</label>
                <input type="email" id="email" placeholder="ایمیل خود را وارد نمایید" />
            </div>
            <div class="form-control">
                <label for="password">رمز عبور</label>
                <input type="password" id="password" placeholder="رمز ورود خود را وارد نمایید" />
            </div>
            <div class="form-control">
                <label for="password">تکرار رمز عبور</label>
                <input type="password" id="password" placeholder="رمز ورود خود را تکرار نمایید" />
            </div>
            <button class="custom-btn">ثبت نام</button>
            <div>
                <small>حساب کاربری دارید؟</small>
                <a id="signUp-btn" href="login.php">ورود</a>
            </div>
        </form>
    </div>

    <!-- back-to-home-page -->
    <a href="index.php" id="back-to-home-page">
        <img src="./img/home.png" alt="">
    </a>
    <!-- back-to-home-page -->
</body>

</html>