<?php include('../controller/newsDetail.php'); ?>
<?php include('../controller/index.php'); ?>

<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اخبار</title>
    <link rel="icon" href="./images/logo.png" sizes="500x500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/jquery.simpleTicker.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/newsDetail.css">
</head>

<body>

    <!-- scroll-top-btn -->
    <!-- <button class="btn btn-info fixed-bottom ml-4 mb-4" id="scroll-top-btn"> 
        <img src="./img/up-arrow.png" alt="">
    </button> -->
    <!-- scroll-top-btn -->


    <!--start-menu-->

    <nav id="scroll-spy1" class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top mb-5">
        <a href="#" class="navbar-brand">
            <img src="images/logo.png" alt="ستاد کارآفرینان" width="70" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sub-menu-1">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="sub-menu-1">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="./index.php" class="nav-link">خانه</a></li>
                <li class="nav-item ">
                    <a href="#" class="nav-link dropdown-toggle custom-dropdown-toggle" data-toggle="dropdown">محصولات</a>
                    <div class="dropdown-menu bg-muted m-0 border-0" id="custom-mega-dropdown">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                    </div>
                                    <ul class="list-group custom-dropdown-main-menu">
                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر سه بعدی
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">لوازم جانبی پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">اسکنر
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                    </div>
                                    <ul class="list-group custom-dropdown-main-menu">
                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر سه بعدی
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">لوازم جانبی پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">اسکنر
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                    </div>
                                    <ul class="list-group custom-dropdown-main-menu">
                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر سه بعدی
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">لوازم جانبی پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">اسکنر
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                    </div>
                                    <ul class="list-group custom-dropdown-main-menu">
                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">پرینتر سه بعدی
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">لوازم جانبی پرینتر
                                            </a>
                                        </li>

                                        <li class="list-group-item border-0 bg-info px-1">
                                            <a href="./product.php">
                                                <img src="./images/left-arrow.png" alt="">اسکنر
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"><a href="./aboutUs.php" class="nav-link">درباره ما</a></li>
                <li class="nav-item"><a href="./contactUs.php" class="nav-link">ارتباط با ما</a></li>
            </ul>

            <form action="" class="form-inline mr-auto">
                <input type="search" class="form-control rounded-0 w-75 text-center" placeholder="جستجو">
                <button type="submit" class="btn btn-info rounded-0">
                    <img src="./images/search.png" alt="" class="">
                </button>
            </form>



            <!-- v5 login-btn -->

            <!-- <div class="ml-lg-2 mr-auto mt-3 mt-lg-0">
                <a href="./login.html" class="btn bg-info text-white my-auto">ورود</a>
            </div> -->

            <!-- v5 login-btn -->


            <!-- dropDown-profile -->
            <?php
            if (isset($_GET['user'])) {
                echo '<div class="ml-lg-2 mr-auto">';
                echo '<ul class="navbar-nav">';
                echo '<li class="nav-item dropdown ml-lg-5">';
                echo '<a href="#" class="nav-link dropdown-toggle avatar-a" data-toggle="dropdown">';
                echo '<span class="mr-1">' . $_GET['user'] . '</span>';
                echo '</a>';
                echo '<div class="dropdown-menu border-left-0 border-right-0 shadow-sm" id="custom-dropdown-menu">';
                echo '<a href="../view/shoppingCart.php" class="dropdown-item text-center">سبد خرید</a>';
                echo '<div class="dropdown-divider"></div>';
                echo '<a href="#" class="dropdown-item text-center">خروج</a>';
                echo '</div>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
            } else {
                echo '<div class="ml-lg-2 mr-auto mt-3 mt-lg-0">';
                echo '<a href="../view/login.php" class="btn bg-info text-white my-auto">ورود</a>';
                echo '</div>';
            }
            ?>
            <!-- dropDown-profile -->
        </div>
    </nav>


    <!--end-menu-->

    <!--start-main-content-->

    <div class="container custom-container">
        <div class="main-content">

            <img id="main-pic" src="<?php echo $newImage[0]['imageNewsAddress'];?>" alt="">
            <h2 class="mb-3"><?php echo $newDetailTitle?></h2>
            <p>
                <?php echo $newDetailContent[0]['LongDescriptionNews']?>
            </p>
            <ul id="news-gallery">
                <li id="img-wrapper">
                    <img src="<?php echo $newImage[1]['imageNewsAddress']?>" alt="">
                </li>

                <li id="img-wrapper">
                    <img src="<?php echo $newImage[2]['imageNewsAddress']?>" alt="">
                </li>
                <li id="img-wrapper">
                    <img src="<?php echo $newImage[3]['imageNewsAddress']?>" alt="">
                </li>
                <li id="img-wrapper">
                    <img src="<?php echo $newImage[4]['imageNewsAddress']?>" alt="">
                </li>
                <li id="img-wrapper">
                    <img src="<?php echo $newImage[5]['imageNewsAddress']?>" alt="">
                </li>
            </ul>
        </div>
    </div>

    <!--end-main-content-->


    <!--start-footer-->

    <footer class="custom-footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <p class="text-white font-weight-bold ml-2">آمار وب سایت</p>
                    <ul class="list-inline text-white mt-3">
                        <li class="p-1">کاربران آنلاین : <?php// echo $count_user_online;?></li>
                        <li class="p-1">تعداد مطالب : <?php echo $count_content;?></li>
                        <li class="p-1">تعداد کامنت : <?php echo $count_comment;?></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-white">
                    <p class="font-weight-bold">دسترسی های سریع
                    </p>
                    <ul class="list-inline footer-box-center">
                        <li><a href="#">آموزش کپی گرفتن</a></li>
                        <li><a href="#">آموزش پرینتر</a></li>
                        <li><a href="#">آموزش تولید محصولات صنعتی</a></li>
                        <li><a href="#">آموزش نوآوری</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-white">
                    <p class="font-weight-bold">درباره ما </p>
                    <p class="footer-box-left">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می با
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid text-white copyright p-2">
        <div class="row m-auto p-2">
            <p class="pt-2 col-12 col-xl-8 text-center mr-xl-5">کلیه حقوق مادی و معنوی سایت محفوظ و متعلق به ستاد کارآفرینی خلاق می باشد ، هر گونه کپی برداری پیگرد قانونی دارد</p>
            <div class="col-12 col-xl-2 mt-2 text-center">
                <a href="#" id="instagram-icon"><img src="www.instagram.com/setad_karafarinan"></a>
                <a href="#" id="whatsapp-icon"><img src="https://chat.whatsapp.com/JqVdAd3w6zH8NuDU4XTuyY"></a>ّ
                <a href="#" id="telegram-icon"><img src="https://t.me/karafarin_setad"></a>
            </div>
        </div>
    </div>

    <!--end-footer-->

    <!-- <script>
        const scrollTopBtn = document.querySelector('#scroll-top-btn');

        window.addEventListener('scroll', scrollTop);

        const scrollTop = () => {
            if (window.scrollTop > 500) {
                scrollTopBtn.style.display = "block !important";
            } else {
                scrollTopBtn.style.display = "none !important";
            }
        }
    </script> -->

    <script src="./js/index.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.simpleTicker.js"></script>
    <script src="js/jquery.bootstrap.newsbox.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>