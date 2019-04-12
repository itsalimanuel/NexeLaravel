<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/logo2.png" type="image/x-icon"/>
    <!-- Theme tittle -->
    <title>Nexe - Creative Digital Agency &amp; Хай Из Москве</title>

    <!-- Theme style CSS -->
    <link href="images/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- modal of contact -->
<div class="modal fade centerBox" id="showContactPage" tabindex="-1" role="dialog" aria-labelledby="showContactPage"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title boxTitile" id="showContactPage">Перезвоним сейчас!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <p>Введите свой номер, так мы сможем с вами связаться и уточнить детали.</p>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="sendnumber.php">
                    <div class="modal-input-wrap">
                        <i class="tel-ico"></i><input type="tel"  name="tel" placeholder="Телефон">
                    </div>
                    <div class="modal-input-wrap">
                        <i class="ui-icon-person"></i><input type="text" name="name" placeholder="имя">
                    </div>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- End modal of contact -->
<!-- Header Area -->
<header class="main_header_area">
    <div class="searchForm">
        <form action="#" class="row">
            <div class="input-group">
                <span class="input-group-addon"><i class="flaticon-search"></i></span>
                <input type="search" name="search" class="form-control" placeholder="Введите и нажмите Enter">
                <span class="input-group-addon form_hide"><i class="flaticon-close"></i></span>
            </div>
        </form>
    </div>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php"><img src="images/logo2.png" alt=""></a>
        <!-- Small Divice Menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"
                aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- Right Nav bar -->
        <!-- Right Nav bar -->
        <ul class="right_nav">

            <li><a href="#" class="nav_searchFrom"><i class="flaticon-search"></i></a></li>


            <li><a id="showContactPage" href="#showContactPage" data-toggle="modal" data-toggle="#showContactPage"
                   class="theme_btn  modal-button ">Связаться</a></li>

            </div>
        </ul>
        <!-- Left Nav bar -->
        <div class="collapse navbar-collapse navbar_supported">
            <ul class="navbar-nav">
                <li><a href="index.php">Главны</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Наши проекты</a></li>
                <li><a href="contact.php">Контакты</a></li>
            </ul>
        </div>

    </nav>

    <!-- The modal of the contact page in Nexe -->


    <!-- Modal Section -->


</header>
<!-- Header Area -->


<section class="banner_area" id="parallax">
    <img src="images/bannar-img-2.png" alt="" class="layer_2" data-depth="0.35">
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="0.3s">Привет!</h2>
        <a id="showContactPage" href="#showContactPage" data-toggle="modal" data-toggle="#showContactPage"
           class="theme_btn wow fadeInUp modal-button" data-wow-delay="0.5s">заказать сейчас</a>

    </div>
    <a class="popup-youtube wow fadeInUp video_area" href="https://github.com/itsalimanuel">
        <img src="images/bannar-video-bg.png" alt="">
        <i class="fa fa-play-circle "></i>
    </a>
</section>

<!-- End Banner Area -->

<!-- Countarup Area -->
<section class="countarup_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="countraup_items mt_4">
                    <h4>Положительные взгляды</h4>
                    <h3>$<b class="counter">15</b></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="countraup_item mt_2">
                    <h4>Проект завершен</h4>
                    <h3><b class="counter">09</b></h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="countraup_item ">
                    <h4>Офисы</h4>
                    <h3><b>0</b><b class="counter">1</b></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="countraup_item mt_3">
                    <h4>Счастливый клиент</h4>
                    <h3><b class="counter">05</b></h3>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- End Countarup Area -->

<!-- About the Agency Area -->
<section class="about_agency_area">
    <div class="round_shap"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 agency_contant">
                <div class="icons"><i class="far fa-gem"></i></div>
                <h4>Об агентстве</h4>
                <h3>Инсайты и ресурсы, которые помогут быстрее продвинуть ваш бизнес.</h3>
                <p>Мы создаем ориентированные на результат стратегии бренда и постоянно совершенствуем ваши кампании для
                    достижения наилучшего результата. От полномасштабной стратегии цифрового маркетинга и рекламы,
                    вплоть до точного исполнения и отчетности..верно, мы обеспечим вас</p>
                <a href="about.php" class="theme_btn">Читать историю успеха</a>
            </div>
            <div class="col-lg-6">
                <img src="images/newst_2x_2x.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End About the Agency Area -->

<!-- Fantasy Area -->
<section class="fantasy_area fa_2">
    <div class="row fantasy_inner">
        <div class="col-xl-5 col-lg-12 fantasy_tittle">
            <h4>Наши услуги</h4>
            <h2>Построить прочные отношения с клиентом</h2>
            <a href="services.html" class="theme_btn">Смотреть больше</a>
        </div>
        <div class="col-xl-7 col-lg-12 row fantasy_items">
            <div class="col-md-6 wow fadeIn">
                <div class="fantasy fantasy_4">
                    <span class="icons"><i class="far fa-clone"></i></span>
                    <a href="services-single.html">веб-разработка</a>
                    <p>Каждый веб-сайт должен сделать заявление, и мы готовы создать его целостный подход к дизайну.</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="fantasy fantasy_2">
                    <span class="icons"><i class="fas fa-mobile"></i></span>
                    <a href="services-single.html">разработка мобильных приложений</a>
                    <p>Мы переводим ваши бизнес-цели <br> и цели в мобильных приложениях </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="fantasy fantasy_3">
                    <span class="icons"><i class="fab fa-google-drive"></i></span>
                    <a href="services-single.html">анализ бизнеса</a>
                    <p>Каждый продукт должен сделать заявление, и мы готовы создать его с целостным подходом к
                        дизайну.</p>
                </div>
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="fantasy">
                    <span class="icons"><i class="fas fa-feather-alt"></i></span>
                    <a href="services-single.html">Дизайн &amp; Развитие</a>
                    <p>Бизнес-анализ-это практика обеспечения изменений в организационном контексте путем определения
                        потребностей. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fantasy Area -->

<!-- Agency Task Area -->
<section class="protfolio_area">
    <div class="container coustom_container">
        <div class="tittle">
            <img src="images/tree.png" alt="">
            <h2>Мы сделали много задач агентства</h2>
            <div class="complete_task">
                <h1>05
                    <small>k</small>
                    <span>+</span></h1>
                <a href="#">Задача агентства выполнена</a>
            </div>
        </div>
        <ul class="protfoli_filter">
            <li class="active" data-filter="*"><a href="#">Все работы</a></li>
            <li data-filter=".creative"><a href="#">творческий</a></li>
            <li data-filter=".agency"><a href="#">Агентство</a></li>
            <li data-filter=".ui_ux"><a href="#">мобильное приложение</a></li>
            <li data-filter=".development"><a href="#">Дизайн сайта</a></li>
        </ul>
    </div>
    <div class="row protfoli_inner">
        <div class="col-md-4 col-sm-6 creative ui_ux agency">
            <a href="#" class="work-items"><img src="images/protfoilo/portfolio-1.png" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-6 development other agency">
            <a href="#" class="work-items"><img src="images/protfoilo/portfolio-2.png" alt=""></a>
        </div>
        <div class="col-md-4 col-sm-6 creative ui_ux agency">
            <a href="#" class="work-items"><img src="images/protfoilo/portfolio-3.png" alt=""></a>
        </div>

    </div>
</section>
<!-- End Agency Task Area -->
<!-- Contact Us Area -->
<section class="contact_us">
    <div class="container">
        <div class="contact_inner">
            <h2>Мы креативщики, так что это может быть о миньонах и прочем.</h2>
            <p>не опаздывайте, свяжитесь с нами сейчас ;)</p>
            <a href="contact.php" class="theme_btn">связаться с нами</a>
        </div>
    </div>
</section>
<!-- End Contact Us Area -->

<!-- Footer Area -->
<footer class="footer_area">
    <img src="images/footer-shap.png" alt="" class="shap">
    <div class="round_shap"></div>
    <div class="footer_inner row">
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 footer_logo wow fadeIn">
            <a href="index.php"><img src="images/logo2.png" alt="Nexe Group"></a>
            <div class="language">
                <h6>язык :</h6>
                <div class="language_select">
                    <select class="post_select">
                        <option>русский</option>
                        <option>испанский</option>
                        <option>арабский</option>
                        <option>Английский</option>
                    </select>
                </div>
            </div>
            <ul class="footer_menu">
                <li><a href="#">карьера</a></li>
                <li><a href="contact.php">контакт</a></li>
                <li><a href="#">политика</a></li>
            </ul>
            <ul class="footer_social">
                <li><a href="https://facebook.com/nexegroup"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://linkedin.com/comapny/nexegroup"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://vk.com/nexegroup"><i class="fa fa-vk"></i></a></li>
            </ul>
        </div>
        <div class="footer_widget fw_1 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
            <h4>Core Link</h4>
            <ul class="footer_nav">
                <li><a href="#">команды</a></li>
                <li><a href="#">Google Map</a></li>
                <li><a href="">Yandex Map</a></li>
                <li><a href="#">Apps store</a></li>
                <li><a href="#">О компании</a></li>
            </ul>
        </div>
        <div class="footer_widget fw_2 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
            <h4>Информация</h4>
            <address>
                Вадковский пер., 18, стр. 1 <br> Москва
                <a href="#" class="email">example@nexe.group</a>
                <a href="#" class="phone">+7 (000) 000-00-00</a>
            </address>
        </div>
        <div class="footer_widget fw_3 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.6s">
            <h4>Оставайтесь в курсе</h4>
            <p>Подпишитесь, чтобы получать раз в две недели советы по автоматизации и цифровой рекламе!</p>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ваш адрес электронной почты">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-caret-right"></i></span>
                </div>
            </div>
        </div>
        <div class="footer_widget fw_4 col-xl-2 col-lg-3 col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.8s">
            <h4>О компании</h4>
            <ul class="footer_nav">
                <li><a href="how_we_work.php#">Как это устроено</a></li>
                <li><a href="#">развитие </a></li>
                <li><a href="#">Цифровой маркетинг </a></li>
                <li><a href="#">Безопасность</a></li>
            </ul>
        </div>
    </div>
    
    <p class="copy_right">© 2019 Никси </p>
</footer>
<!-- End Footer Area -->

<!-- Scroll Top Button -->
<button class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
</button>

<!-- Preloader -->
<div class="preloader"></div>

<!-- jQuery v3.3.1 -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap v4.0.0 -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Extra Plugin -->
<script src="vendors/animate-css/wow.min.js"></script>
<script src="vendors/parallaxmouse/parallax.min.js"></script>
<script src="vendors/counterup/jquery.waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script>
<script src="vendors/parallaxmouse/jquery.jqlouds.min.js"></script>
<script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="vendors/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>
<!-- Theme js / Custom js -->
<script src="js/theme.js"></script>

</body>
</html>
