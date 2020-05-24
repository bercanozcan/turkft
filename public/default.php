<?php
	echo !defined("BRUNO") ? die("404 Forbidden") : null;
?><!DOCTYPE html>
<html lang="tr">

<head>
    <title>TURK FATIH TUTAK</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="" rel="canonical" />
    <link href="images/favicon.ico" rel="shortcut icon" type="image/ico" />
    <link href="images/default-banner.jpg" rel="thumbnail" type="image/jpeg" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="<?php echo THEME_URL;?>/images/default-banner.jpg" />
    <meta property="og:description" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="<?php echo THEME_URL;?>/images/default-banner.jpg" />
    <link href="<?php echo THEME_URL;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo THEME_URL;?>/css/normalize.css" rel="stylesheet">
    <link href="<?php echo THEME_URL;?>/css/style.css?v=1.3.8" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&subset=latin-ext"rel="stylesheet">
    <link href="<?php echo THEME_URL;?>/plugins/animate/animatecss/v3.7.2/animate.css" rel="stylesheet">
    <link href="<?php echo THEME_URL;?>/plugins/animate/hovercss/v2.2.0/css/hover.css" rel="stylesheet">
    <link href="<?php echo THEME_URL;?>/plugins/scroll/fullpage/jquery.fullpage.css" rel="stylesheet" />
    <link href="<?php echo THEME_URL;?>/plugins/slider/slick/v1.8.1/slick.css" rel="stylesheet" />
    <link href="<?php echo THEME_URL;?>/plugins/slider/slick/v1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo THEME_URL;?>/plugins/scrollbar/gh-pages/jquery.scrollbar.css" />
    <script src="<?php echo THEME_URL;?>/js/jquery.1.11.2.min.js"></script>
    <script src="<?php echo THEME_URL;?>/js/bootstrap.js"></script>
    <script src="<?php echo THEME_URL;?>/plugins/scroll/fullpage/vendors/jquery.easings.min.js"></script>
    <script src="<?php echo THEME_URL;?>/plugins/scroll/fullpage/vendors/scrolloverflow.min.js"></script>
    <script src="<?php echo THEME_URL;?>/plugins/scroll/fullpage/jquery.fullPage.js"></script>

    <script>
        $(function () {
            //fullpage
            $('#fullpage').fullpage({

                slidesNavigation: true,
                scrollOverflow: true,
                navigation: true,
                afterRender: function () {
                    //on page load, start the slideshow
                    slideTimeout = setInterval(function () {
                        $.fn.fullpage.moveSlideRight();
                    }, 2500);
                },
                onLeave: function (index, nextIndex, direction) {
                    $('#fullpage .section:eq(' + index + ') .an-hide').removeClass("an-hide"); //open page run animation
                }
            });
            $('#fullpage .active .an-hide').removeClass("an-hide"); //first open animation load

            $('.single-item').slick( {
                arrows: false,
                dots: false,
                autoplay: true,
                autoplaySpeed: 1500,
                touchMove: true
            });


            var myScroll = new IScroll('.menu-slider', {
                scrollbars: true,
                mouseWheel: true,
                interactiveScrollbars: true,
                shrinkScrollbars: 'scale',
                fadeScrollbars: true
            });

         /*  $(document).ready(function(){
                setTimeout(function(){
                    $("#popUp").css("display","block");
                },2000);
            });*/

            $(document).click(function(e) {
                if ($('#popUp').click(e)) {
                    $("#popUp").css("display","none");
                }
            });
        });
    </script>
    <script src="<?php echo THEME_URL;?>/plugins/slider/slick/v1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo THEME_URL;?>/js/functions.v2.js"></script>
    <script src="<?php echo THEME_URL;?>/js/script.js?v=1.0.12"></script>
</head>

<body>

    <div class="popUpMain" id="popUp" style="display: none;">
        <div class="popup">
            <a href="https://turkfatihtutak.dinesuperb.com/" class="right" target="_blank"
                                rel="noreferrer nofollow">
                <img src="<?php echo THEME_URL;?>/images/popup/Lunch-pop-up-TR.jpg" class="img-web" />
                <img src="<?php echo THEME_URL;?>/images/popup/Lunch-pop-up-Tr-mobile.jpg" class="img-mobile"/>
            </a>
        </div>
    </div>

    <div class="hover-menu">
        <div class="toogle animated bounce">
            <span class="cross"></span>
            <span class="cross"></span>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="logo animated fadeInRightBig"><a href="index.html"><img src="<?php echo THEME_URL;?>/images/logo-2.png"
                                class="img-responsive"></a></div>
                    <div class="navigation col-lg-8 col-md-10 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1">
                        <div class="link-line animated fadeInRightBig delay-01s">
                            <a href="" class="about left">HAKKIMIZDA</a>
                            <a href="" class="team right">EKİP</a>
                        </div>
                        <div class="link-line animated fadeInRightBig delay-02s">
                            <a href="" class="left modal-button" data-name="menu">MENÜ</a>
                            <a href="https://turkfatihtutak.dinesuperb.com/" class="right" target="_blank"
                                rel="noreferrer nofollow">REZERVASYON</a>
                        </div>

                        <div class="link-line animated fadeInRightBig delay-06s">
                            <a href="" class="left modal-button" data-name="events" target="_blank">ETKİNLİK</a>
                            <a href="" class="gallery right "  >GALERİ</a>
                        </div>

                        <div class="link-line animated fadeInRightBig delay-03s">
                            <a href="https://giftcard.dinesuperb.com/turkfatihtutak" class="right" target="_blank"
                                rel="noreferrer nofollow">HEDİYE ÇEKİ</a>
                            <a href="" class="career left">KARİYER</a>
                        </div>
                        <div class="link-line animated fadeInRightBig delay-04s">
                            <a href="https://www.instagram.com/turkfatihtutak/" class="right" target="_blank"
                                rel="noreferrer nofollow">@TURKFATIHTUTAK</a>
                            <a href="https://www.google.com/maps/place/Now+Bomonti/@41.0582436,28.9776974,15z/data=!4m5!3m4!1s0x0:0xba16f062c058bc09!8m2!3d41.0582436!4d28.9776974"
                               target="_blank" rel="nofollow noreferrer" class="left">NOW BOMONTI 1/1 İSTANBUL</a>
                        </div>
                        <div class="link-line animated fadeInRightBig delay-05s">
                            <a href="mailto:info@turkft.com" class="right">INFO@TURKFT.COM</a>
                            <a href="callto:+90 (212) 709 56 79" class="left">+90 (212) 709 56 79</a>
                        </div>

                        <div class="header-footer animated fadeInRightBig delay-06s">
                            <p class="relative">Medya ve proje istekleri için lütfen <a href="http://www.lotusinternational.net/" target="_blank">Lotus</a> ile iletişime geçin: <a href="mailto:office@lotusinternational.net">office@lotusinternational.net </a>  <img src="<?php echo THEME_URL;?>/images/nude_logo.svg" class="nude-logo"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fullpage">

        <div class="section active" id="section4">
            <div class="toogle animated bounce">
                <span class="cross"></span>
                <span class="cross"></span>
            </div>
            <ul class="language animated bounceIn">
                <li><a href="index-en.html#1">EN</a></li>
                <li><a href="index.html#1">TR</a></li>
            </ul>
            <div class="top-menu animated bounce">
                <a href="" class="modal-button hidden-mobile" data-name="events" > ETKİNLİK</a>
                <a href="https://turkfatihtutak.dinesuperb.com/" class="top-menu-button" target="_blank"
                   rel="noreferrer nofollow">REZERVASYON</a>
            </div>

            <div class="logo-container">
              <div class="logo animated fadeInRightBig">
			  	<a href="/">
			  <img src="<?php echo THEME_URL;?>/images/logo.png" class="img-responsive"></a></div>
            </div>

            <div class="slide"> <div class="slide-home item-1"></div></div>
            <div class="slide"> <div class="slide-home item-2"></div></div>
            <div class="slide"> <div class="slide-home item-3"></div></div>
            <div class="slide"> <div class="slide-home item-4"></div></div>

        </div>

        <div class="section about" id="section0">
            <div class="toogle animated bounce">
                <span class="cross"></span>
                <span class="cross"></span>
            </div>
            <ul class="language animated bounceIn">
                <li><a href="index-en.html#2">EN</a></li>
                <li><a href="index.html#2">TR</a></li>
            </ul>
            <div class="top-menu animated bounce">
                <a href="" class="modal-button hidden-mobile" data-name="events" > ETKİNLİK</a>
                <a href="https://turkfatihtutak.dinesuperb.com/" class="top-menu-button" target="_blank" rel="noreferrer nofollow">REZERVASYON</a>
            </div>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="logo animated fadeInRightBig"><a href="/"><img src="<?php echo THEME_URL;?>/images/logo.png" class="img-responsive"></a></div>
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="turkish-gastronomy">
                                <p class="animated fadeInLeftBig delay-01s">TURK olarak,</p>
                                <p class="animated fadeInLeftBig delay-02s">köklerimize ve mutfağımızın</p>
                                <p class="animated fadeInLeftBig delay-03s">geleneklerine</p>
                                <p class="animated fadeInLeftBig delay-04s">saygı göstermekle,</p>
                                <p class="animated fadeInLeftBig delay-05s">korumakla yükümlüyüz.</p>
                            </div>
                        </div>
                        <div class="text col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <div class="info animated fadeInRightBig delay-01s">
                                <div class="scrollbar-inner">
                                    <p>Değerlerimizden uzaklaşmadan, bulunduğumuz coğrafyanın ürünlerini kullanarak,
                                        Türk mutfağı için yeni bir alfabe yaratıyor; kendi köklerimize geri dönüp,
                                        aslında aşina olduğumuz tatları, modern, zarif ve sade bir şekilde, kendi
                                        tarzımızla yorumluyoruz. <br>Araştırmak, meraklı olmak ve sürekli olarak yeni
                                        teknikler geliştirmek, felsefemizi özetliyor.</p>
                                    <p>Mirasımıza geri dönüp, hiçbir detayı es geçmeden, saflık ve basitliği en kusursuz
                                        şekilde sunmayı hedefliyoruz. Her yemeğin, tarihimizden, hatıralarımızdan ve
                                        geleneklerimizden ilham alan bir karakteri ve hikayesi olmasına özen
                                        gösteriyoruz. </p>
                                    <p>Yerel, artizan ve işini tutku ile yapan üreticilerle yakın bir şekilde çalışarak
                                        ve aralarında sürdürülebilir bir döngü kurarak, sadece doğanın, zamanı
                                        geldiğinde bize sunduğu ürünleri özenle işlemek; bundan ilham alarak hikayemizi
                                        sizlerle paylaşmak; bununla birlikte her tabakta, topraklarımızdan gelen
                                        ürünleri bir sanat eserine dönüştürebilmek en büyük isteğimiz.</p>
                                    <p>Geleneksel ev tariflerinden çocukluk hatıralarımıza, hatta Balkanlar, Akdeniz ve
                                        Anadolu&rsquo; dan, Türk medeniyetinin ve mutfağının doğduğu asıl topraklara,
                                        tam kalbine, Orta Asya&rsquo;ya inerek, bazen sizi düşündürüp bazen de
                                        duygulandıracağız.</p>
                                    <p>Önce zihninizi ve ruhunuzu besleyeceğiz.</p>
                                </div>
                            </div>
                            <div class="fatih-tutak animated fadeInRightBig delay-02s">FATIH TUTAK</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section our-team" id="section1">
            <div class="toogle animated bounce">
                <span class="cross"></span>
                <span class="cross"></span>
            </div>
            <ul class="language animated bounceIn">
                <li><a href="index-en.html#3">EN</a></li>
                <li><a href="index.html#3">TR</a></li>
            </ul>
            <div class="top-menu animated bounce">
                <a href="" class="modal-button hidden-mobile" data-name="events" > ETKİNLİK</a>
                <a href="https://turkfatihtutak.dinesuperb.com/" class="top-menu-button" target="_blank"
                    rel="noreferrer nofollow">REZERVASYON</a>
            </div>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="info col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <h2>EKİP</h2>
                            <!--<p>Sadece Turk ekibi ile tanışın.</p>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="team-list-wrapper hidden-sm hidden-xs">
                                <div class="team-list">
                                    <div class="team-list-record">
                                        <a href="" data-name="cv-fatih-tutak">
                                            <div class="hover">
                                                <img src="<?php echo THEME_URL;?>/images/team/img1.jpg" class="img-responsive">
                                                <span>devamını oku</span>
                                            </div>
                                            <h4>FATİH TUTAK</h4>
                                            <i>Chef - Owner</i>
                                        </a>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img2.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>BERK KAYMAK</h4>
                                        <i>Restaurant Manager</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img3.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>MEVLÜT ÖZKAYA</h4>
                                        <i>Head Chef</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img4.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>MELİS KARGIOĞLU</h4>
                                        <i>Pastry Chef</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img5.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>EMİR ALPAT</h4>
                                        <i>Product Research & Supply</i>
                                    </div>
                                </div>
                            </div>
                            <!-- team slider -->
                            <div class="team-list-wrapper visible-sm visible-xs">
                                <div class="team-list team-list-slider">
                                    <div class="team-list-record">
                                        <a href="" data-name="cv-fatih-tutak">
                                            <div class="hover">
                                                <img src="<?php echo THEME_URL;?>/images/team/img1.jpg" class="img-responsive">
                                                <span>read more</span>
                                            </div>
                                            <h4>FATİH TUTAK</h4>
                                            <i>Chef - Owner</i>
                                        </a>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img2.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>BERK KAYMAK</h4>
                                        <i>Restaurant Manager</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img3.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>MEVLÜT ÖZKAYA</h4>
                                        <i>Head Chef</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img4.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>MELİS KARGIOĞLU</h4>
                                        <i>Patisserie Chef</i>
                                    </div>
                                    <div class="team-list-record">
                                        <div class="hover">
                                            <img src="<?php echo THEME_URL;?>/images/team/img5.jpg" class="img-responsive">
                                            <span>read more</span>
                                        </div>
                                        <h4>EMİR ALPAT</h4>
                                        <i>Product Research & Supply</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section gallery" id="section5">
            <div class="toogle animated bounce">
                <span class="cross"></span>
                <span class="cross"></span>
            </div>
            <ul class="language animated bounceIn">
                <li><a href="index-en.html#4">EN</a></li>
                <li><a href="index.html#4">TR</a></li>
            </ul>
            <div class="top-menu animated bounce">
                <a href="" class="modal-button hidden-mobile" data-name="events" > ETKİNLİK</a>
                <a href="https://turkfatihtutak.dinesuperb.com/" class="top-menu-button" target="_blank"
                   rel="noreferrer nofollow">REZERVASYON</a>
            </div>

            <div class="logo-container">
                <div class="logo animated fadeInRightBig"><a href="/"><img src="<?php echo THEME_URL;?>/images/logo.png"  class="img-responsive"></a></div>
            </div>

            <div class="slide"> <div class="slide-gallery item-1"></div></div>
            <div class="slide"> <div class="slide-gallery item-2"></div></div>
            <div class="slide"> <div class="slide-gallery item-3"></div></div>
            <div class="slide"> <div class="slide-gallery item-4"></div></div>
            <div class="slide"> <div class="slide-gallery item-5"></div></div>

        </div>


        <div class="section ik" id="section2">
            <div class="toogle animated bounce">
                <span class="cross"></span>
                <span class="cross"></span>
            </div>
            <ul class="language animated bounceIn">
                <li><a href="index-en.html#5">EN</a></li>
                <li><a href="index.html#5">TR</a></li>
            </ul>
            <div class="top-menu animated bounce hidden-xs">
                <a href="" class="modal-button hidden-mobile" data-name="events" > ETKİNLİK</a>
                <a href="https://turkfatihtutak.dinesuperb.com/" target="_blank"
                    rel="noreferrer nofollow">REZERVASYON</a>
            </div>
            <div class="wrapper">
                <div class="container">
                    <div class="row">
                        <div class="logo animated an-hide fadeInRightBig delay-01s"><a href="index.html"><img
                                    src="<?php echo THEME_URL;?>/images/logo.png" class="img-responsive"></a></div>
                        <div class="text col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="qualifications">
                                <h2 class="animated an-hide fadeInLeftBig delay-01s">BU<br>NİTELİKLERE<br>SAHİP MİSİNİZ?
                                </h2>
                                <p class="animated an-hide fadeInLeftBig delay-02s">
                                    SAMİMİ, <strong>DİNAMİK,</strong> İDEALİST, <strong>YARATICI,</strong>
                                    MÜKEMMELİYETÇİ, <strong>BİRDEN FAZLA DİLİ</strong> İYİ DERECEDE KONUŞABİLEN
                                </p>
                            </div>
                        </div>
                        <div class="text col-lg-5 col-md-6 col-sm-6 col-xs-12">
                            <div class="info">
                                <h3 class="animated an-hide fadeInRightBig delay-01s">HAYALİNİZDEKİ İŞİ<br>KEŞFEDİN!</h3>
                                <p class="animated an-hide fadeInRightBig delay-02s">Bizimle aynı tutkuyu hissetmeye hazır ve aradığımız niteliklere sahip olduğunuza eminseniz;</p>
                                <div class="ik-link animated an-hide fadeInRightBig delay-06s">
                                    <!--<p class="animated an-hide fadeInRightBig delay-07s">İş Tanımlarını incelemeniz <a href="https://www.kariyer.net/firma-profil/turk-fatih-tutak-yiyecek-ve-icecek-a-s-202994-233126" target="_blank" rel="noreferrer nofollow">tıklayınız.</a></p>-->
                                    <p class="animated an-hide fadeInRightBig delay-08s">CV’inizi bizimle paylaşın: <a
                                            href="mailto:jobs@turkft.com">jobs@turkft.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-page cv-fatih-tutak">
        <div class="toogle animated bounce">
            <span class="cross"></span>
            <span class="cross"></span>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-4 col-xs-12 col-lg-offset-2 col-md-offset-1 hidden-xs">
                        <img src="<?php echo THEME_URL;?>/images/team/fatih-tutak.jpg" class="img-responsive">
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                        <div class="content">
                            <h4>FATİH TUTAK</h4>
                            <i class="sub-title">Chef - Owner</i>
                            <p>
                                İstanbul’da doğup büyüyen Şef Fatih Tutak, çıraklığını yaptığı Paul Pairet ile yenilikçi
                                mutfak kültürünü keşfettikten ve şehrin en iyi mutfaklarında çalıştıktan sonra, Pekin,
                                Tokyo, Singapur, Kopenhag, Hong Kong ve Bangkok’taki global mutfakların derinliklerine
                                indi.
                            </p>
                            <p>
                                Kopenhag'da, birçok kez San Pellegrino-Acqua Panna The World 50 Best Restaurants
                                tarafından dünyanın en iyi restoranı seçilen Noma'da Rene Redzepi ile; Tokyo'da, modern
                                Japon mutfağının en ünlü temsilcisi 3 Michelin yıldızlı Nihonryori Ryugin'de Şef Seiji
                                Yamamoto ile birlikte ve Singapur'daki ikonik Marina Bay Sands'in mutfağında çalıştı.
                            </p>
                            <p>
                                En son mutfak direktörü olduğu The Dining Room at The House of Sathorn hem San
                                Pellegrino-Acqua Panna The Asia's 50 Best Restaurants 2017-2018 listesine hem de
                                Michelin Guide 2018-2019 listesine girdi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--events-->
    <div class="landing-page events">
        <div class="toogle animated bounce">
            <span class="cross"></span>
            <span class="cross"></span>
        </div>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4 col-sm-4 col-xs-12 col-lg-offset-1 col-md-offset-0 hidden-xs">
                        <img src="<?php echo THEME_URL;?>/images/events/nerueXturk.jpg" class="img-responsive">
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12">
                        <div class="content">
                            <h4>TURK X NERUA</h4>
                            <i class="sub-title">Etkinlik</i>
                            <!--
                            <p>
                                <strong>Menü</strong><br>
                                orkinos, alabaş, tarama<br>
                                yumurta, patates, sucuk <br>
                                uskumru, kişniş, turşu<br>
                                pancar, yoğurt, kekik<br>
                                mantar, mantar tarhanası, maya yağı<br>
                                annemin mantısı vol. 2<br>
                                barbun, deniz kestanesi, yanık pilav, şevketibostan<br>
                                50 gün dinlendirilmiş sığır kavurması, patates, biber<br>
                                cennet hurması, melisa, kar<br>
                                kadayıf, yanık süt, antep fıstığı<br>

                            </p>

                        </div>
                        -->
                            <p>
                                <strong>
                                    Dünyanın en iyi restoranlarından, Michelin yıldızlı Nerua Guggenheim Bilbao’nun şefi Josean Alija, gastronomide yaratıcılığı kutlamak için Fatih Tutak ile mutfağa giriyor.
                                </strong>
                            </p>
                            <p>
                                <strong>
                                Doğanın zengin çeşitliliğini inovatif ve eğlenceli bir şekilde yansıtmak için bir araya gelen Nerua ve Turk, sizi güçlü kökenlerin yenilikçi bir bakış açısıyla harmanlandığı özel bir deneyime davet ediyor.
                                </strong>
                            </p>
                            <br>
                            <p>
                                <i>
                                    12 aşamalı akşam yemeği, şarap eşleşmesi ile
                                </i>
                            </p>
                            <br>

                            <p>
                                <strong>Tarih: </strong><br>
                                <i>12 - 13 Mart</i>
                            </p>
                            <p>
                                <strong>Mekan: </strong><br>
                                <i>
                                    TURK Fatih Tutak,<br>
                                    Now Bomonti 1/1 İstanbul
                                </i>
                            </p>

                            <p class="reservation">
                                <i>
                                    Rezervasyon için: <br>
                                    <a href="mailto:info@turkft.com" target="_blank"
                                       rel="noreferrer nofollow">info@turkft.com</a><br>
                                    <a href="tel:+90 (212)709 56 79 " target="_blank" rel="noreferrer nofollow">+90
                                        (212)709
                                        56 79</a>
                                </i>
                            </p>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--menu-->
    <div class="landing-page menu">
        <div class="toogle animated bounce">
            <span class="cross"></span>
            <span class="cross"></span>
        </div>
        <div class="wrapper">
            <div class="container">
                    <div class="scrollbar-inner menu-slider">
                        <div id="scroller">
                            <div class="row d-stretch">
                                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                                    <div class="slider single-item">
                                        <div class="item">
                                            <img src="images/menu/menu-1.jpg" class="img-responsive"  alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/menu/menu-2.jpg" class="img-responsive"  alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/menu/menu-3.jpg" class="img-responsive"  alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/menu/menu-4.jpg" class="img-responsive"  alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/menu/menu-5.jpg" class="img-responsive"  alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                                    <div class="content fs-13">
                                        <h4>MENÜ</h4>
                                        <i class="sub-title">Örnektir, değişkenlik gösterir.</i>
                                        <p>
                                        <span class="leaf">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                        </span>
                                            barbun, kan portakalı, roka<br>
                                            midye, soğan, pirinç, bira<br>
                                            pancar, yoğurt, kekik<br>
                                            dana eti, turp, isot

                                        </p>
                                        <p>
                                        <span class="leaf">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                        </span>
                                            mantar tarhana, istiridye mantarı, maya yağı<br>
                                            kereviz, ceviz, kefir kreması<br>
                                            dana yüreği, bulgur, sumak-pancar<br>
                                            kırmızı karides, patates, sarımsak
                                        </p>
                                        <p>
                                        <span class="leaf">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                        </span>
                                            annemin mantısı<br>
                                            kalkan balığı, yanık pilav, beyaz şalgam<br>

                                            kuru dinlendirilmiş ördek, elma, akıtma, pekmez<br>
                                            trakya kıvırcık kuzu, biber, yeşil fıstık<br>

                                        </p>
                                        <p>
                                        <span class="leaf">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                            <img src="<?php echo THEME_URL;?>/images/leaf-new.png">
                                        </span>
                                            künefe peyniri, antep fıstığı, yanık süt<br>
                                            rakı, nar, trakya beyaz peynir<br>
                                            cennet hurması, melissa, kar<br>
                                            kadayıf, fındık, sakızlı muhallebi
                                        </p>
                                        <p class="small">
                                            <br>
                                            *Alerjiniz olan bir ürün varsa lütfen bizi önceden bilgilendirin.<br>
                                            <a href="/winelist.pdf" style="font-size: 13px; margin-top: 10px; display: block;" target="_blank">Şarap Menüsü</a><br>
                                            <br><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
