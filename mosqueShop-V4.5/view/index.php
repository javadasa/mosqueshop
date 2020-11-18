<?php include('../controller/index.php'); ?>
<?php// include('../controller/onlineUser.php'); ?>
<!doctype html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ستاد کارآفرینان مسجد و محله</title>
    <link rel="icon" href="./images/logo.png" sizes="500x500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/jquery.simpleTicker.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

<!-- scroll-top-btn -->
<!-- <button class="btn btn-info fixed-bottom ml-4 mb-4" id="scroll-top-btn">
    <img src="./img/up-arrow.png" alt="">
</button> -->
<!-- scroll-top-btn -->


<!--start-top-header-->

<div class="container-fluid bg-dark text-white p-2" id="custom-container-fluid">
    <div class="top-title">
        <div id="demo" class="ticker">
            <ul>
                <li>
                    <?php echo $hadis; ?>
                </li>
                <li>
                    <?php echo $hadis; ?>
                </li>
                <li>
                    <?php echo $hadis; ?>
                </li>
                <li>
                    <?php echo $hadis; ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--end-top-header-->


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


<!--start-slider-->

<div class="container mb-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 mt-3 mt-md-0">

            <div id="myCarousel" class="carousel slide carousel-fade shadow-sm" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>


                <div class="carousel-inner rounded">
                    <?php
                    foreach ((array)$sliderImage as $r) {
                        echo '<div class="carousel-item active">';
                        echo '<img class="d-block w-100" src= ' . $r . ' .alt="London" height="400">';
                        echo '</div>';
                    }
                    ?>
                </div>

                <!--<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">-->
                <!--<span class="carousel-control-prev-icon"></span>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#myCarousel" data-slide="next">-->
                <!--<span class="carousel-control-next-icon"></span>-->
                <!--</a>-->

            </div>

        </div>
    </div>
</div>

<!--end-slider-->


<!--start content-->

<div class="container bg-info text-center text-white rounded-top">
    <div class="row">
        <div class="col-12">
            <p class="my-2 py-1">اخبار</p>
        </div>
    </div>
</div>
<div class="container custom-content-container mb-5 py-2 rounded-bottom">
    <div class="row">
        <div class="col-12 col-lg-4 mb-3 custom-top-news">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $topRightImageNews; ?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsRightTitle; ?>
                    </a>
                    <p class="card-text">
                        <?php echo $topNewsRightSmallDescriptionNews; ?>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php?k=tnrld,user=<?php $_GET['user']?>">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 custom-top-news">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $topCenterImageNews; ?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsCenterTitle; ?>
                    </a>
                    <p class="card-text">
                        <?php echo $topNewsCenterSmallDescriptionNews; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php?k=tncld,user=<?php $_GET['user']?>">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 custom-top-news">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $topLeftImageNews; ?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsLeftTitle; ?>
                    </a>
                    <p class="card-text">
                        <?php echo $topNewsLeftSmallDescriptionNews; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php?k=tnlld,user=<?php $_GET['user']?>">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 mb-3 d-flex ">
            <img class="w-25" src="./img/news1-main.jpg" alt="">
            <div class="ml-4">
                <a href="#" class="card-title font-weight-bold">
                    کارگاه تولید خلاق چیه و کجاست؟
                </a>
                <p class="mt-3">
                    این کارگاه مکانی است صمیمی و در عین حال جهادی برای تمامی کسانی که به کارآفرینی ،تحقیق‌ و پژوهش در حوزه اشتغال و آی تی علاقه مندند. کارگاهی که اولین نتیجه جدی ستاد کارآفرینان مسجد و محله است و اولین مرکز آن در مسجد جامع المهدی (عج) واقع در میدان بریانک
                    تهران واقع است.
                </p>
                <a class="float-left" href="./newsDetail.html">ادامه مطلب</a>
            </div>
        </div>
        <div class="col-12 col-md-12 mb-3 d-flex">
            <img class="w-25" src="./img/news3-main.jpg" alt="">
            <div class="ml-4">
                <a href="#" class="card-title font-weight-bold">
                    حضور ستاد کارآفرینان در دهکده مقاومت
                </a>
                <p class="mt-3">
                    ستاد کارفرینان مسجد و محله در 17 شهریورماه 99 به دعوت سران این مرکز در یک نمایشگاه که در مکان مرکز رشد شهید تهرانی مقدم تهران بود شرکت نمود و همپای شرکت ها و استارت آپ های نخبه کشور به ارائه محصولات و دستاوردهای خویش پرداخت.
                </p>
                <a class="float-left" href="./newsDetail.html">ادامه مطلب</a>
            </div>
        </div>
        <div class="col-12 col-md-12 mb-3 d-flex">
            <img class="w-25" src="./img/news2-main.jpg" alt="">
            <div class="ml-4">
                <a href="#" class="card-title font-weight-bold">
                    تولید ماسک کودک و بزرگسال در کارگاه تولید خلاق
                </a>
                <p class="mt-3">
                    در این روزها که زندگی همه ما انسان‌ها با مقوله ای به نام بیماری کرونا عجین شده یکی از ملزومات همراه ما‌سک های بهداشتی است. ستاد کارآفرینان و کارگاه تولید خلاق بر خود لازم دید که با تولید انواع ماسک های بهداشتی مرغوب، باکیفیت و ارزان یکی از دغدغه های روزمره
                    شما را برطرف سازد.
                </p>
                <a class="float-left" href="./newsDetail.html">ادامه مطلب</a>
            </div>
        </div>
    </div>
</div>

<!--end content-->


<!--start-success-section-->

<div class="container bg-info text-center text-white rounded-top">
    <div class="row">
        <div class="col-12">
            <p class="my-2 py-1">موفقیت‌ها</p>
        </div>
    </div>
</div>

<div class="container custom-content-container mb-5 p-5 rounded-bottom">
    <div class="row">
        <div class="col-12 col-lg-4 mb-3">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $successImageRightNews;?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold"><?php echo $successTitleRightNews; ?></a>
                    <p class="card-text">
                       <?php echo $successSmallRightNews;?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $successImageCenterNews;?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold"><?php echo $successTitleCenterNews;?></a>
                    <p class="card-text">
                       <?php echo $successSmallCenterNews;?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-3">
            <div class="card custom-box border-1 h-100">
                <img class="card-img-top" src="<?php echo $successImageLeftNews;?>" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold"><?php echo $successTitleLeftNews;?></a>
                    <p class="card-text">
                       <?php echo $successSmallLeftNews;?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="../controller/newsDetail.php">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-success-section-->


<!--start-footer-->

<footer class="custom-footer py-4">
    <div class="container">
        <div class="row custom-footer-box">
            <div class="col-12 col-md-4">
                <p class="text-white font-weight-bold ml-2">آمار وب سایت</p>
                <ul class="list-inline text-white mt-3">
                    <li class="p-1">کاربران آنلاین: <?php// print_r($count_user_online);?></li>
                    <li class="p-1">تعداد مطالب : <?php echo $count_content;?></li>
                    <li class="p-1">تعداد کامنت : <?php echo $count_comment;?></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-md-0 text-white">
                <p class="font-weight-bold">دسترسی های سریع
                </p>
                <ul class="list-inline footer-box-center">
                    <li><a href="#">آموزش کپی گرفتن</a></li>
                    <li><a href="#">آموزش پرینتر</a></li>
                    <li><a href="#">آموزش تولید محصولات صنعتی</a></li>
                    <li><a href="#">آموزش نوآوری</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-3 mt-md-0 text-white">
                <p class="font-weight-bold">درباره ما </p>
                <p class="footer-box-left">
                    اهمیت استقرار اقتصاد مقاومتی در ایران منطبق با تغییرات معادلات اقتصادی جهان، تحریم های بیرحمانه
                    دشمنان علیه نظام و از همه مهم تر فرمایشات و تاکیدات مقام معظم رهبری در سخنرانی های متعدد و نامگذاری
                    های مکرر برای سالها توسط معظم له ، لازم بود که در سالهای
                    پیش رو قاطبه مردم به صورت جدی و کاربردی به این مهم بپردازند.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid text-white copyright p-2">
    <div class="row m-auto p-2">
        <p class="pt-2 col-12 col-xl-8 text-center mr-xl-5">کلیه حقوق مادی و معنوی سایت محفوظ و متعلق به ستاد کارآفرینی خلاق
            می باشد ، هر گونه کپی برداری پیگرد قانونی دارد</p>
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
