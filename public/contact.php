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
                            <form action="">
                                <div class="modal-input-wrap">
                                    <i class="tel-ico"></i><input type="tel" placeholder="Телефон">
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
                <input type="text" name="name" class="form-control" placeholder="ваше имя">
                <input type="tel" name="tel" class="form-control" placeholder="Телефон" im-insert="true">
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
        <ul class="right_nav">

            <li><a id="showContactPage" href="#showContactPage" data-toggle="modal" data-toggle="#showContactPage"
                   class="theme_btn  modal-button ">Связаться</a></li>
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
</header>
<!-- Header Area -->

<!-- Pages Banner Area -->
<section class="pages_banner" id="parallax">
    <img src="images/bannar-shap-1.png" alt="" class="layer layer_1" data-depth="0.10">
    <img src="images/bannar-shap-2.png" alt="" class="layer layer_2" data-depth="0.35">
    <div class="container">
        <img src="images/contact.jpg" alt="" class="bannar_img wow fadeInRight">
        <h2 class="wow fadeInUp">Связаться с нами</h2>
        <p class="wow fadeInUp" data-wow-delay="0.3s">Пишите нам и рассказывайте о вашем бизнесе, идеях, целях и
            задачах. Мы изучим ваш запрос и ответим максимально быстро.</p>
        <img src="" alt="" class="layer_3">
    </div>
</section>
<!-- End Pages Banner Area -->

<!-- Get In Touch With Us Area -->
<section class="get_touch_area">
    <div class="container">
        <h2>Свяжись с нами</h2>
        <div class="row">
            <div class="col-lg-6 map_area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15962.749973379458!2d90.35358130400583!3d23.861833852439656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1542189963132"></iframe>
            </div>
            <div class="col-lg-6">
                <form class="from_main" action="php/contact.php" method="post" id="phpcontactform"
                      novalidate="novalidate">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="ФИО">
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="email" class="form-control col-md-6" id="email" name="email"
                                   placeholder="Эл. адрес">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="message" name="message"
                                  placeholder="Твое сообщение"></textarea>
                    </div>
                    <div class="form-group m-0">
                        <button class="theme_btn btn" id="js-contact-btn" type="submit">послать</button>
                        <div id="js-contact-result" data-success-msg="Форма успешно отправлена."
                             data-error-msg="Сообщения успешно"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Get In Touch With Us Area -->
<section class="hero">
    <div class="hero-content">

        <a href="#" id="button" class="button">Click Me</a>
    </div>
</section>

<div class="bg-modal">
    <div class="modal-contents">

        <div class="close">+</div>
        <img src="https://richardmiddleton.me/comic-100.png" alt="">

        <form action="">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="E-Mail">
            <a href="#" class="button">Submit</a>
        </form>

    </div>
</div>
<!--General communication Area -->
<section class="general_communication">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="quick_find">
                    <li>Быстрый поиск нас</li>
                    <li>Эл. адрес: <a href="#">sale@nexe.group</a></li>
                    <li>+88 (0) 682648101 <span>С понедельника по пятницу с 9 до 18 часов</span></li>
                    <li>Адрес <span>Россия, <br>Москва</span></li>
                </ul>
            </div>
            <div class="col-lg-8 help_support row">
                <div class="col-md-6">
                    <div class="support">
                        <h4>Помощь и поддержка</h4>
                        <p>Мы здесь, чтобы помочь с любыми вопросами или кодом.</p>
                        <a href="#">Помощь</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="support">
                        <h4>Общее общение</h4>
                        <p>По общим вопросам, пожалуйста, пишите sale@nexe.group</p>
                        <a href="#">общение</a>
                    </div>
                </div>

                <ul class="socail_icons col-12">
                    <li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://linkedin.com/company/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://telegram.com/"><i class="fa fa-telegram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--General communication Area -->


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
                        <option>Английский</option>
                        <option>испанский</option>
                        <option>арабский</option>
                        <option>русский</option>
                    </select>
                </div>
            </div>
            <ul class="footer_menu">
                <li><a href="#">карьера</a></li>
                <li><a href="contact.php">контакт</a></li>
                <li><a href="#">политика</a></li>
            </ul>
            <ul class="footer_social">
                <li><a href="https://facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://linkedin.com/comapny/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://vk.com/"><i class="fa fa-vk"></i></a></li>
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
                <li><a href="#">Сервисы</a></li>
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
<script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>
<!-- Theme js / Custom js -->
<script src="js/theme.js"></script>
</body>
</html>