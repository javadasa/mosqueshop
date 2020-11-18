<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/loginStyle.css">
    <title>ورود</title>
</head>

<body>
<div class="container">
    <form action="../controller/login.php" method="post">
        <button class="custom-btn btn-ghost">
            <img src="./img/google-icon.png" alt="" id="google-icon">
            ورود با اکانت گوگل
        </button>
        <div class="form-control">
            <label for="email">نام کاربری</label>
            <input type="text" id="email" name="username" placeholder="نام کاربری خود را وارد نمایید" />
            <!-- v2 message -->
            <?php
            if(isset($_GET['x'])){
            if($_GET['x']==0){echo '<p id="wrong-input-message">نام کاربری اشتباه است</p>';}
            }
            ?>
        </div>
        <div class="form-control">
            <label for="password">رمز عبور</label>
            <input type="password" id="password" name="password" placeholder="رمز ورود خود را وارد نمایید" />
            <!-- v2 message -->
            <?php
            if(isset($_GET['x'])){
            if($_GET['x']==1){echo'<p id="wrong-input-message">رمز اشتباه است</p>';}
            }
            ?>
        </div>
        <button class="custom-btn" name="login">ورود</button>
        <div>
            <small>حساب کاربری ندارید؟</small>
            <a id="signUp-btn" href="./signUp.php">ثبت نام</a>
        </div>
    </form>


    <!-- v2 forgot-pass-modal -->
    <div class="forgot-pass-container">
        <button class="forgot-pass-btn">فراموشی رمز عبور</button>
    </div>
    <div class="overlay">
        <div class="close__btn">
            <span class="bar"></span>
            <span class="bar second"></span>
        </div>
        <div class="overlay__container">
            <p class="overlay__txt subtxt">رمز عبور برای شما پیامک شد</p>
        </div>
    </div>
</div>

<!-- back-to-home-page -->
<a href="./index.php" id="back-to-home-page">
    <img src="./img/home.png" alt="">
</a>
<!-- back-to-home-page -->



<script>
    const btn = document.querySelector('.forgot-pass-btn');
    const overlay = document.querySelector('.overlay');
    const close = document.querySelector('.close__btn');

    function modalInteraction() {
        overlay.classList.toggle('open');
    }
    close.addEventListener('click', modalInteraction);
    btn.addEventListener('click', modalInteraction);
</script>
</body>

</html>