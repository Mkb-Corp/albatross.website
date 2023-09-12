<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DSAThemes">
    <meta name="description"
        content="Albatross est une startup œuvrant sur les marchés
                                des capitaux en général et les marchés financiers en particulier
                                des différentes bourses des valeurs internationales.">
    <meta name="keywords" content="Forex, Trading, Finance, Formation">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SITE TITLE -->
    <title>Albatross Finance</title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('assets/images/apple-touch-icon.png') }}" type="image/x-icon">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet">
    <link id="effect" href="{{ asset('assets/css/dropdown-effects/fade-down.css') }}" media="all"
        rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lunar.css') }}" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/skyblue-theme.css') }}" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LQYPH1YYHV"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-LQYPH1YYHV');
</script>

<body>
    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page font--jakarta">

        <!-- HEADER
   ============================================= -->
        <header id="header" class="white-menu navbar-dark light-hero-header white-scroll">
            <div class="header-wrapper">


                <!-- MOBILE HEADER -->
                <div class="wsmobileheader clearfix">
                    <span class="smllogo"><img src="{{ asset('assets/images/logo-blue.png') }}"
                            alt="albatross-logo"></span>
                    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
                </div>


                <!-- NAVIGATION MENU -->
                <div class="wsmainfull menu  clearfix">
                    <div class="wsmainwp clearfix">


                        <!-- HEADER BLACK LOGO -->
                        <div class="desktoplogo">
                            <a href="{{ route('home') }}" class="logo-black"><img
                                    src="{{ asset('assets/images/logo-blue@1.5x.png') }}"
                                    alt="logo albatross finance"></a>
                        </div>


                        <!-- HEADER WHITE LOGO -->
                        <div class="desktoplogo">
                            <a href="{{ route('home') }}" class="logo-white"><img
                                    src="{{ asset('assets/images/logo-white@1.5x.png') }}"
                                    alt="logo albatross finance"></a>
                        </div>


                        <!-- MAIN MENU -->
                        <nav class="wsmenu  clearfix">
                            <ul class="wsmenu-list nav-theme">
                                <li aria-haspopup="true"><a href="#" class="h-link">A propos <span
                                            class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="#about-us">A propos de nous</a></li>
                                        <li aria-haspopup="true"><a href="#features-11">Services</a></li>
                                        <li aria-haspopup="true"><a href="#values">Valeurs</a></li>
                                        <li aria-haspopup="true"><a href="#team">Equipe</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="#" class="h-link">Formations <span
                                            class="wsarrow"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="#about-us">En ligne</a></li>
                                        <li aria-haspopup="true"><a href="#features-11">En presentiel</a></li>
                                    </ul>
                                </li>
                                <!-- SIMPLE NAVIGATION LINK -->
                                <li class="nl-simple" aria-haspopup="true"><a href="#values" class="h-link">
                                        Salle de Marchés</a></li>
                                <li class="nl-simple" aria-haspopup="true"><a href="#faq" class="h-link">
                                        FAQ</a></li>

                            </ul>
                        </nav> <!-- END MAIN MENU -->


                    </div>
                </div> <!-- END NAVIGATION MENU -->


            </div> <!-- End header-wrapper -->
        </header> <!-- END HEADER -->

        @yield('content')
        <!-- FOOTER-3
   ============================================= -->
        <footer id="footer-3" class="pt-100 footer">
            <div class="container">


                <!-- FOOTER CONTENT -->
                <div class="row">


                    <!-- FOOTER LOGO -->
                    <div class="col-xl-3">
                        <div class="footer-info">
                            <img class="footer-logo" src="{{ asset('assets/images/logo-blue.png') }}"
                                alt="footer-logo">
                        </div>
                    </div>





                    <!-- FOOTER LINKS -->
                    <div class="col-sm-4 col-md-2 col-xl-2">

                    </div> <!-- END FOOTER LINKS -->


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-4 col-md-2 col-xl-2">

                    </div> <!-- END FOOTER LINKS -->


                    <!-- FOOTER LINKS -->
                    <div class="col-sm-6 col-md-4">
                        <div class="footer-links fl-4">

                            <!-- Title -->
                            <h6 class="s-17 w-700">Entrez en contact avec nous</h6>

                            <!-- Mail Link -->
                            <p class="footer-mail-link ico-25">
                                <a href="mailto:info@albatross-finance.com">contact@albatross.finance</a>
                            </p>

                            <!-- Social Links -->
                            <ul class="footer-socials ico-25 text-center clearfix">
                                <li><a href="https://web.facebook.com/Albatrossfinance1"><span
                                            class="flaticon-facebook"></span></a></li>
                                <li><a href="https://www.linkedin.com/company/albatross-finance-institut/"><span
                                            class="flaticon-linkedin-logo"></span></a></li>
                                <li><a href="https://www.instagram.com/albatross_finance/"><span
                                            class="flaticon-instagram"></span></a></li>
                            </ul>

                        </div>
                    </div> <!-- END FOOTER LINKS -->


                </div> <!-- END FOOTER CONTENT -->


                <hr> <!-- FOOTER DIVIDER LINE -->


                <!-- BOTTOM FOOTER -->
                <div class="bottom-footer">
                    <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


                        <!-- FOOTER COPYRIGHT -->
                        <div class="col">
                            <div class="footer-copyright">
                                <p class="p-sm">&copy; 2023 Albatross Finance. <span>Tous droits réservés</span></p>
                            </div>
                        </div>


                        <!-- FOOTER SECONDARY LINK -->
                        {{-- <div class="col">
                            <div class="bottom-secondary-link ico-15 text-end">
                                <p class="p-sm"><a href="https://themeforest.net/user/dsathemes/portfolio">Made with
                                        <span class="flaticon-heart color--pink-400"></span> by @DSAThemes</a>
                                </p>
                            </div>
                        </div> --}}


                    </div> <!-- End row -->
                </div> <!-- END BOTTOM FOOTER -->


            </div> <!-- End container -->
        </footer> <!-- END FOOTER-3 -->
    </div> <!-- END PAGE CONTENT -->

    <!-- EXTERNAL SCRIPTS
  ============================================= -->
    <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/pricing-toggle.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/quick-form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lunar.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
    <!--
  <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXX-X']);
      _gaq.push(['_trackPageview']);

      (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
              '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(ga, s);
      })();
  </script>
  -->
</body>

</html>
