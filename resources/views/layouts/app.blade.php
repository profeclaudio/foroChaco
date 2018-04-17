
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Foro Chaco Sudamericado</title>

        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
        <!-- Plugins CSS -->
        <link href="{{asset('css/plugins/plugins.css')}}" rel="stylesheet">
        <!-- REVOLUTION STYLE SHEETS -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/css/settings.css')}}">
        <!-- REVOLUTION LAYERS STYLES -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/css/layers.css')}}">
        <!-- REVOLUTION NAVIGATION STYLES -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/revolution/css/navigation.css')}}">
        <!-- load css for cubeportfolio -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio/css/cubeportfolio.min.css')}}">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div id="preloader">
            <div id="preloader-inner"></div>
        </div><!--/preloader-->

        <!-- Pushy Menu -->
        <aside class="pushy pushy-right">
            <div class="cart-content">
                <div class="clearfix">
                    <a href="javascript:void(0)" class="pushy-link text-white-gray">Close</a>
                </div>
                <ul class="list-unstyled">
                    <li class="clearfix">
                        <a href="#" class="float-left">
                            <img src="images/shop/p1.jpg" class="img-fluid" alt="" width="60">
                        </a>
                        <div class="oHidden">
                            <span class="close"><i class="ti-close"></i></span>
                            <h4><a href="#">Men's Special Watch</a></h4>
                            <p class="text-white-gray"><strong>$299.00</strong> x 1</p>
                        </div>
                    </li><!--/cart item-->
                    <li class="clearfix">
                        <a href="#" class="float-left">
                            <img src="images/shop/p2.jpg" class="img-fluid" alt="" width="60">
                        </a>
                        <div class="oHidden">
                            <span class="close"><i class="ti-close"></i></span>
                            <h4><a href="#">Men's tour beg</a></h4>
                            <p class="text-white-gray"><strong>$99.00</strong> x 1</p>
                        </div>
                    </li><!--/cart item-->
                    <li class="clearfix">
                        <a href="#" class="float-left">
                            <img src="images/shop/p3.jpg" class="img-fluid" alt="" width="60">
                        </a>
                        <div class="oHidden">
                            <span class="close"><i class="ti-close"></i></span>
                            <h4><a href="#">Women's T-shirts</a></h4>
                            <p class="text-white-gray"><strong>$199.00</strong> x 1</p>
                        </div>
                    </li><!--/cart item-->
                    <li class="clearfix">

                        <div class="float-right">
                            <a href="#" class="btn btn-primary">Checkout</a>
                        </div>
                        <h4  class="text-white">
                            <small>Subtotal - </small> $49.99
                        </h4>
                    </li><!--/cart item-->
                </ul>
            </div>
        </aside>
        <!-- Site Overlay -->
        <div class="site-overlay"></div>
        <!--top bar-->
        <div class="top-bar clearfix light">
            <div class="container">
                <div class="float-sm-right">
                    <ul class="list-inline mb0">
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-gray si-gray-round si-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-gray si-gray-round si-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-gray si-gray-round si-instagram">
                                <i class="fa fa-instagram"></i>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-gray si-gray-round si-g-plus">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="float-sm-left">
                    <ul class="list-inline mb0 links">
                        <li class="list-inline-item"><a href="{{route('login')}}">Login</a></li>
                        <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Lang</a>
                            <ul class="dropdown-menu lang-dropdown">
                                <li><a href="#" class="dropdown-item">English</a></li>
                                <li><a href="#" class="dropdown-item">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/top bar-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="search-inline">
                <form>
                    <input type="text" class="form-control" placeholder="Type and hit enter...">
                    <button type="submit"><i class="ti-search"></i></button>
                    <a href="javascript:void(0)" class="search-close"><i class="ti-close"></i></a>
                </form>
            </div>
            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="images/logo.png" alt=""></a>
                <div  id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                      <li><a href="/" class="nav-link  dropdown-toggle">Inicio</a></li>
                      <li><a href="{{route('autoridades')}}" class="nav-link  dropdown-toggle">Autoridades</a></li>
                      <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Institucional</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="{{route('quienes')}}" class="dropdown-item">Quienes somos</a></li>
                                <li><a href="{{route('que')}}" class="dropdown-item">Qué hacemos</a></li>
                            </ul>
                        </li>
                        <li><a href="/" class="nav-link  dropdown-toggle">Contacto</a></li>
                      </ul>
                </div>
                <div class=" navbar-right-elements">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="search-open"><i class="ti-search"></i></a></li>
                    </ul>
                </div><!--right nav icons-->

            </div>
        </nav>

        @yield('slider')
        @yield('publications')
        @yield('quienes')
        @yield('que')






        <footer class="footer footer-dark pt50 pb30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Sobre nosotros</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#" class="btn btn-sm btn-white-outline">Leer más</a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Publicaciones recientes</h3>
                        <ul class="list-unstyled footer-list-item">
                            <li>
                                <a href="#">
                                    Lorem ipsum dolor sit amet
                                </a><br>
                                <em>April 5, 2017</em>
                            </li>
                            <li>
                                <a href="#">
                                    consectetur adipiscing elit
                                </a><br>
                                <em>April 5, 2017</em>
                            </li>
                            <li>
                                <a href="#">
                                    Sed do eiusmod tempor incididunt
                                </a><br>
                                <em>April 5, 2017</em>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Fotos</h3>
                        <div class="clearfix">
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img1.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img2.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img3.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img4.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img5.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                            <a href="#" class="thumb-hover-icon">
                                <img src="images/img6.jpg" alt="" class="img-fluid" width="90">
                                <span class="ti-plus"></span>
                            </a><!--/.hover-->
                        </div><!--/.clearfix-->
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Contáctenos</h3>
                        <ul class="list-unstyled contact-list-item">
                            <li>
                                <i class="ti-home"></i>
                                Dirección
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                forochaco@gmail.com
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                +5493874578454
                            </li>
                        </ul>
                    </div>
                </div><hr class="mb40">
                <div class="row">
                    <div class="col-lg-6  ml-auto mr-auto text-center">

                        <p>&copy; Copyright 2018, ForoChaco</p>
                    </div>
                </div>
            </div>
        </footer><!--/footer-->
        <!--back to top-->
        <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="ti-angle-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="{{asset('js/plugins/plugins.js')}}"></script>

        <script src="{{asset('js/assan.custom.js')}}"></script>
        <!-- load cubeportfolio -->
        <script type="text/javascript" src="{{asset('js/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script>
            /**Hero  script**/
            var tpj = jQuery;

            var revapi1078;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_1078_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1078_1");
                } else {
                    revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "revolution/js/",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 8000,
                        navigation: {
                            arrows: {
                                enable: true,
                                style: 'uranus',
                                tmp: '',
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    container: 'slider',
                                    h_align: 'left',
                                    v_align: 'center',
                                    h_offset: 0,
                                    v_offset: 0
                                },
                                right: {
                                    container: 'slider',
                                    h_align: 'right',
                                    v_align: 'center',
                                    h_offset: 0,
                                    v_offset: 0
                                }
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%",
                            presize: false
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1140, 992, 700, 465],
                        gridheight: [600, 600, 500, 480],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 2000,
                            levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]
                        },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false
                        }
                    });
                }
            });	/*ready*/
            //cube portfolio init
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-mosaic-flat').cubeportfolio({
                    filters: '#js-filters-mosaic-flat',
                    layoutMode: 'mosaic',
                    sortToPreventGaps: true,
                    mediaQueries: [{
                            width: 1500,
                            cols: 6
                        }, {
                            width: 1100,
                            cols: 4
                        }, {
                            width: 800,
                            cols: 3
                        }, {
                            width: 480,
                            cols: 2,
                            options: {
                                caption: '',
                                gapHorizontal: 15,
                                gapVertical: 15
                            }
                        }],
                    defaultFilter: '*',
                    animationType: 'fadeOutTop',
                    gapHorizontal: 0,
                    gapVertical: 0,
                    gridAdjustment: 'responsive',
                    caption: 'fadeIn',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 100,
                    // lightbox
                    lightboxDelegate: '.cbp-lightbox',
                    lightboxGallery: true,
                    lightboxTitleSrc: 'data-title',
                    lightboxCounter: '<div class="cbp-popup-lightbox-counter">hola of mundo</div>',
                    plugins: {
                        loadMore: {
                            selector: '#js-loadMore-mosaic-flat',
                            action: 'click',
                            loadItems: 3
                        }
                    }
                });
            })(jQuery, window, document);
        </script>
    </body>
</html>
