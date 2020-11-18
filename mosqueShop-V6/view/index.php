<!doctype html>
<html lang="fa">

<?php include '../controller/index.php'; ?>
<?php // include('../controller/onlineUser.php'); ?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ستاد کارآفرینان مسجد و محله</title>
    <link rel="icon" href="./img/logo.png" sizes="500x500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.css">
    <link rel="stylesheet" href="css/jquery.simpleTicker.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>


<!--start-top-header-->

<div class="container-fluid bg-dark text-white p-2" id="custom-container-fluid">
    <div class="top-title">
        <div id="demo" class="ticker">
            <ul>
                <?php
                foreach ((array)$hadis_content as $h) {
                    echo '<li>';
                    echo $h[0];
                    echo '</li>';
                }

                ?>
            </ul>
        </div>
    </div>
</div>

<!--end-top-header-->


<!--start-menu-->

<nav id="scroll-spy1" class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-top mb-5">
    <a href="#" class="navbar-brand">
        <img src="img/logo.png" alt="ستاد کارآفرینان" width="70" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sub-menu-1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="sub-menu-1">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">خانه</a></li>
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
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر سه بعدی
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">لوازم جانبی پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">اسکنر
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                </div>
                                <ul class="list-group custom-dropdown-main-menu">
                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر سه بعدی
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">لوازم جانبی پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">اسکنر
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                </div>
                                <ul class="list-group custom-dropdown-main-menu">
                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر سه بعدی
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">لوازم جانبی پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">اسکنر
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="alert alert-secondary text-center font-weight-bold">ماشین‌های اداری
                                </div>
                                <ul class="list-group custom-dropdown-main-menu">
                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">پرینتر سه بعدی
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">لوازم جانبی پرینتر
                                        </a>
                                    </li>

                                    <li class="list-group-item border-0 bg-info px-1">
                                        <a href="product.php">
                                            <img src="./img/left-arrow.png" alt="">اسکنر
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a href="aboutUs.php" class="nav-link">درباره ما</a></li>
            <li class="nav-item"><a href="contactUs.php" class="nav-link">ارتباط با ما</a></li>
        </ul>

        <form action="" class="form-inline mr-auto">
            <input type="search" class="form-control rounded-0 w-75 text-center" placeholder="جستجو">
            <button type="submit" class="btn btn-warning rounded-0">
                <img src="./img/search.png" alt="" class="">
            </button>
        </form>

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
    </div>
</nav>

<!--end-menu-->


<!--start-slider & comment-->

<div class="container mb-5">
    <div class="row">
        <div class="col-12 mt-3 mt-md-0">

            <div id="myCarousel" class="carousel slide carousel-fade shadow-sm" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid d-block w-100" src="<?php echo $slider[0]['sliderImageAddress']; ?>" alt="" style="height: 400px">
                    </div>
                    <?php
                    foreach ((array)$slider as $s) {
                        echo '<div class="carousel-item">';
                        echo '<img class="img-fluid d-block w-100" src=' . $s[0] . ' alt="" style="height: 400px">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!--end-slider & comment-->


<!--start content-->

<div class="container bg-warning text-center text-white rounded-top">
    <div class="row">
        <div class="col-12">
            <p class="my-2 py-1">اخبار</p>
        </div>
    </div>
</div>
<div class="container custom-content-container mb-5 py-2 rounded-bottom">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/news1-main.jpg" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsRightTitle[0]['titleNews'] ?>
                    </a>
                    <p class="card-text">
                        <?php echo substr($topNewsRightLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=nrt">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/news2-main.jpg" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsCenterTitle[0]['titleNews'] ?>
                    </a>
                    <p class="card-text">
                        <?php echo substr($topNewsCenterLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=nct">ادامه مطلب</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/news3-main.jpg" alt="">
                <div class="card-body">
                    <a href="#" class="card-title font-weight-bold">
                        <?php echo $topNewsLeftTitle[0]['titleNews'] ?>
                    </a>
                    <p class="card-text">
                        <?php echo substr($topNewsLeftLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=nlt">ادامه مطلب</a>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-5">
        <?php
        $i=0;
        foreach ($normalNewsTitle as $t) {
            if($i==3){break;}
            echo '<div class="col-12 mb-3 d-flex flex-column flex-md-row align-items-center">';
            echo '<img class=" col-12 col-md-4" src="'.image($normalNewsTitle,$i).'" alt="">';
            echo '<div class="col-12 col-md-8 mt-4">';
            echo '<a href="#" class="card-title font-weight-bold">';
            echo  $t[0];
            echo '</a>';
            echo '<p class="mt-3 text-justify">';
            echo substr($normalNewsLongDescription[$i]['longDescriptionNews'],0,400);
            echo '</p>';
            echo '<a class="float-left" href="newsDetail.php?k=nnt&&t='.$t[0].'">ادامه مطلب</a>';
            echo '</div>';
            echo '</div>';
            $i++;
        }
        ?>
    </div>
</div>

<!--end content-->


<!--start-link-section-->

<div class="container bg-warning text-center text-white rounded-top">
    <div class="row">
        <div class="col-12">
            <p class="my-2 py-1">موفقیت‌ها</p>
        </div>
    </div>
</div>

<div class="container custom-content-container mb-5 p-5 rounded-bottom">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/success.jpg" alt="">
                <div class="card-body">
                    <a href="#"
                       class="card-title font-weight-bold"><?php echo $successNewsRightTitle[0]['titleNews'] ?></a>
                    <p class="card-text">
                        <?php echo substr($successNewsRightLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=snrt">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/3D-printer-main.jpg" alt="">
                <div class="card-body">
                    <a href="#"
                       class="card-title font-weight-bold"><?php echo $successNewsCenterTitle[0]['titleNews'] ?></a>
                    <p class="card-text">
                        <?php echo substr($successNewsCenterLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=snct">ادامه مطلب</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <div class="card custom-box border-1">
                <img class="card-img-top" src="./img/v.jpg" alt="">
                <div class="card-body">
                    <a href="#"
                       class="card-title font-weight-bold"><?php echo $successNewsLeftTitle[0]['titleNews'] ?></a>
                    <p class="card-text">
                        <?php echo substr($successNewsLeftLongDescription[0]['longDescriptionNews'], 0, 400) ?>
                    </p>
                </div>
                <div class="card-footer">
                    <a class="float-left" href="newsDetail.php?k=snlt">ادامه مطلب</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--end-link-section-->


<!--start-footer-->

<footer class="custom-footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <p class="text-white font-weight-bold ml-2">آمار وب سایت</p>
                <ul class="list-inline text-white mt-3">
                   <!-- <li class="p-1">کاربران آنلاین: <?php // print_r($count_user_online);?></li>-->
                    <li class="p-1">تعداد مطالب : <?php echo $count_content[0]['count(titleNews)']; ?></li>
                    <li class="p-1">تعداد کامنت : <?php echo $count_comment[0]['count(id)']; ?>></li>
                </ul>
            </div>
            <!--        <div class="col-12 col-md-4 text-white">
                       <p class="font-weight-bold">دسترسی های سریع
                        </p>
                        <ul class="list-inline footer-box-center">
                            <li><a href="#">آموزش کپی گرفتن</a></li>
                            <li><a href="#">آموزش پرینتر</a></li>
                            <li><a href="#">آموزش تولید محصولات صنعتی</a></li>
                            <li><a href="#">آموزش نوآوری</a></li>
                        </ul>
                    </div>       -->
            <div class="col-12 col-md-4 text-white">
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
        <p class="pt-2 col-12 col-xl-8 text-center mr-xl-5">کلیه حقوق مادی و معنوی سایت محفوظ و متعلق به ستاد کارآفرینان
            خلاق
            می باشد ، هر گونه کپی برداری پیگرد قانونی دارد</p>
        <div class="col-12 col-xl-2 mt-2 text-center">
            <a href="www.instagram.com/setad_karafarinan" id="instagram-icon"><img src="./img/instagram.png"></a>
            <a href="https://chat.whatsapp.com/JqVdAd3w6zH8NuDU4XTuyY" id="whatsapp-icon"><img
                        src="./img/whatsapp.png"></a>ّ
            <a href="https://t.me/karafarin_setad" id="telegram-icon"><img src="./img/telegram.png"></a>
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