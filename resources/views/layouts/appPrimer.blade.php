<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Foro Chaco</title>
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

        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent bg-faded nav-sticky">
            <div class="search-inline">
                <form>
                    <input type="text" class="form-control" placeholder="Type and hit enter...">
                    <button type="submit"><i class="ti-search"></i></button>
                    <a href="javascript:void(0)" class="search-close"><i class="ti-close"></i></a>
                </form>
            </div><!--/search form-->
            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img class='logo logo-dark' src="images/logo.png" alt="">
                    <img class='logo logo-light hidden-md-down' src="images/logo-light.png" alt="">
                </a>
                <div  id="navbarNavDropdown" class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown active">
                          <a class="nav-link  dropdown-toggle"  href="{{route('login')}}">Login</a>
                      </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Home</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="index.html" class="dropdown-item">Home 1 - Slider</a></li>
                                <li><a href="index-02.html" class="dropdown-item">Home 2 - Particle</a></li>
                                <li><a href="index-03.html" class="dropdown-item">Home 3 - Carousel</a></li>
                                <li><a href="index-04.html" class="dropdown-item">Home 4 - Text animation</a></li>
                                <li><a href="index-05.html" class="dropdown-item">Home 5 - Youtube hero</a></li>
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Classic One page <span class="badge badge-danger">HOT</span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="classic-onepage-resume-cv.html" class="dropdown-item">Resume CV</a></li>
                                        <li><a href="classic-onepage-personal.html" class="dropdown-item">Personal Portfolio</a></li>
                                        <li><a href="classic-onepage-events.html" class="dropdown-item">Event Landing</a></li>
                                        <li><a href="classic-onepage-restaurant.html" class="dropdown-item">Restaurant</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Demo Shop</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop-home.html" class="dropdown-item">Shop home</a></li>
                                        <li><a href="shop-full.html" class="dropdown-item">Shop Full width</a></li>
                                        <li><a href="shop-sidebar.html" class="dropdown-item">Shop Sidebar</a></li>
                                        <li><a href="shop-item.html" class="dropdown-item">Shop item</a></li>
                                        <li><a href="shop-cart.html" class="dropdown-item">Shop cart</a></li>
                                        <li><a href="shop-checkout.html" class="dropdown-item">Shop checkout</a></li>
                                    </ul>
                                </li>

                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Multi Level 1</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="dropdown-item">Multi Level 2</a></li>
                                        <li><a href="#" class="dropdown-item">Multi Level 2</a></li>
                                        <li><a href="#" class="dropdown-item">Multi Level 2</a></li>
                                        <li class="dropdown-submenu"><a tabindex="-1" href="#" class="dropdown-item">Multi Level 2</a>
                                            <ul class="dropdown-menu">
                                                <li> <a href="#" class="dropdown-item">Multi Level 3</a></li>
                                                <li><a href="#" class="dropdown-item">Multi Level 3</a></li>
                                                <li><a href="#" class="dropdown-item">Multi Level 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-full-width">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <ul class="dropdown-menu dropdown-mega-fw">
                                <li class="container">
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="page-about.html"> About Modern</a></li>
                                                    <li><a href="page-about-alt.html"> About Simple</a></li>
                                                    <li><a href="page-team.html"> Our Team</a></li>
                                                    <li><a href="page-services.html"> Services</a></li>
                                                    <li><a href="page-service-alt.html"> Services 2</a></li>
                                                    <li><a href="page-contact-basic.html"> Contact basic </a></li>
                                                    <li><a href="page-contact-advanced.html"> Contact Advanced</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">

                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="page-faq.html"> Faqs</a></li>
                                                    <li><a href="page-pricing.html"> Pricing Plans</a></li>
                                                    <li><a href="page-sec-navbar.html"> Secondary navbar</a></li>
                                                    <li><a href="page-clients.html"> Our Clients</a></li>
                                                    <li><a href="page-career.html"> Career</a></li>
                                                    <li><a href="page-office.html"> Our Office</a></li>
                                                    <li><a href="page-custom-header.html"> Custom Header</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">

                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="page-full-width.html"> Full width</a></li>
                                                    <li><a href="page-left-sidebar.html"> Left Sidebar</a></li>
                                                    <li><a href="page-right-sidebar.html"> Right sidebar</a></li>
                                                    <li><a href="page-both-sidebar.html"> Both Sidebar</a></li>
                                                    <li><a href="page-coming-soon.html"> Coming soon</a></li>
                                                    <li><a href="page-coming-soon2.html"> Coming Soon alt</a></li>
                                                    <li><a href="page-blank.html"> Blank page</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-3">

                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="page-login.html"> Login</a></li>
                                                    <li><a href="page-register.html"> Register</a></li>
                                                    <li><a href="page-fpassword.html">Forget password</a></li>
                                                    <li><a href="page-success.html"> Success page</a></li>
                                                    <li><a href="page-maintenence.html"> Maintenence mode</a></li>
                                                    <li><a href="page-404-video.html"> 404 video</a></li>
                                                    <li><a href="page-404-particle.html"> 404 Particle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-full-width">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                                Portfolio
                            </a>
                            <ul class="dropdown-menu dropdown-mega-fw">
                                <li class="container">
                                    <div class="mega-menu-content">
                                        <p class="text-muted">Powered by cube portfolio</p>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Grid overlay</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="folio-grid-2.html"> 2 Columns</a></li>
                                                    <li><a href="folio-grid-3.html"> 3 Columns</a></li>
                                                    <li><a href="folio-grid-4.html"> 4 Columns</a></li>
                                                    <li><a href="folio-grid-5.html"> 5 Columns</a></li>
                                                    <li><a href="folio-grid-6.html"> 6 Columns</a></li>
                                                    <li><hr></li>
                                                    <li><a href="folio-ajax-load.html">Ajax - Load More</a></li>

                                                    <li><a href="folio-ajax-modal.html"> Ajax - Modal</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Grid Titles</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="folio-grid-title-2.html"> 2 Columns</a></li>
                                                    <li><a href="folio-grid-title-3.html"> 3 Columns</a></li>
                                                    <li><a href="folio-grid-title-4.html"> 4 Columns</a></li>
                                                    <li><a href="folio-grid-title-5.html"> 5 Columns</a></li>
                                                    <li><a href="folio-grid-title-6.html"> 6 Columns</a></li>
                                                    <li><a href="folio-grid-title-nm-2.html"> No Margin 2 columns</a></li>
                                                    <li><a href="folio-grid-title-nm-3.html"> No Margin 3 columns</a></li>
                                                    <li><a href="folio-grid-title-nm-4.html"> No Margin 4 columns</a></li>
                                                    <li><a href="folio-grid-title-nm-5.html"> No Margin 5 columns</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Grid Full width</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="folio-grid-fw-2.html"> 2 Columns</a></li>
                                                    <li><a href="folio-grid-fw-3.html"> 3 Columns</a></li>
                                                    <li><a href="folio-grid-fw-4.html"> 4 Columns</a></li>
                                                    <li><a href="folio-grid-fw-5.html"> 5 Columns</a></li>
                                                    <li><a href="folio-grid-fw-6.html"> 6 Columns</a></li>
                                                    <li><a href="folio-grid-fw-nm-2.html"> No Margin 2 columns</a></li>
                                                    <li><a href="folio-grid-fw-nm-3.html"> No Margin 3 columns</a></li>
                                                    <li><a href="folio-grid-fw-nm-4.html"> No Margin 4 columns</a></li>
                                                    <li><a href="folio-grid-fw-nm-5.html"> No Margin 5 columns</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Grid Masonry</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="folio-masonry-2.html"> 2 Columns</a></li>
                                                    <li><a href="folio-masonry-3.html"> 3 Columns</a></li>
                                                    <li><a href="folio-masonry-4.html"> 4 Columns</a></li>
                                                    <li><a href="folio-mosaic-contained.html"> mosaic contained</a></li>
                                                    <li><a href="folio-mosaic-full.html"> Mosaic Full width</a></li>
                                                    <li><hr></li>
                                                    <li><a href="folio-single-gallery.html">Single - Gallery</a></li>
                                                    <li><a href="folio-single-video.html"> Single - Video</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Blog</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="blog-contained.html" class="dropdown-item">Contained</a></li>
                                <li><a href="blog-sidebar-left.html" class="dropdown-item">Left Sidebar</a></li>
                                <li><a href="blog-sidebar-right.html" class="dropdown-item">Right Sidebar</a></li>
                                <li><a href="blog-masonry.html" class="dropdown-item">Masonry</a></li>
                                <li><a href="blog-masonry-sidebar.html" class="dropdown-item">Masonry sidebar</a></li>
                                <li><a href="blog-lg-post-grid.html" class="dropdown-item">Large post grid</a></li>
                                <li><a href="blog-timeline.html" class="dropdown-item">Timeline</a></li>
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Single Post</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="post-image.html" class="dropdown-item">Image</a></li>
                                        <li><a href="post-gallery.html" class="dropdown-item">Gallery</a></li>
                                        <li><a href="post-video.html" class="dropdown-item">Video</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Features</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Headers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="header-light-top-bar.html" class="dropdown-item">Light top bar</a></li>
                                        <li><a href="header-dark-top-bar.html" class="dropdown-item">Dark top bar</a></li>
                                        <li><a href="header-transparent-dark.html" class="dropdown-item">Transparent Dark</a></li>
                                        <li><a href="header-transparent-light.html" class="dropdown-item">Transparent Light</a></li>
                                        <li><a href="header-center-logo.html" class="dropdown-item">Center logo</a></li>
                                        <li><a href="header-center-navbar.html" class="dropdown-item">Center Navbar</a></li>
                                        <li><a href="header-sticky-dark.html" class="dropdown-item">Sticky dark</a></li>
                                        <li><a href="header-sticky-light.html" class="dropdown-item">Sticky light</a></li>
                                        <li><a href="header-after-hero.html" class="dropdown-item">After hero</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Footers</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="footer-1.html" class="dropdown-item">Footer 1</a></li>
                                        <li><a href="footer-2.html" class="dropdown-item">Footer 2</a></li>
                                        <li><a href="footer-3.html" class="dropdown-item">Footer 3</a></li>
                                        <li><a href="footer-4.html" class="dropdown-item">Footer 4</a></li>
                                        <li><a href="footer-5.html" class="dropdown-item">Footer 5</a></li>
                                        <li><a href="footer-6.html" class="dropdown-item">Footer 6</a></li>
                                        <li><a href="footer-7.html" class="dropdown-item">Footer 7</a></li>
                                    </ul>
                                </li>
                                <li class=" dropdown-submenu dropdown">
                                    <a tabindex="-1" href="#" class="dropdown-item">Slider & Heros</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="hero-particle.html" class="dropdown-item">Hero Particle</a></li>
                                        <li><a href="hero-parallax.html" class="dropdown-item">Hero Parallax</a></li>
                                        <li><a href="hero-youtube.html" class="dropdown-item">Hero youtube</a></li>
                                        <li><a href="hero-vimeo.html" class="dropdown-item">Hero Vimeo</a></li>
                                        <li><a href="hero-agency.html" class="dropdown-item">Hero Agency</a></li>
                                        <li><a href="slider-particle.html" class="dropdown-item">Slider Particle</a></li>
                                        <li><a href="slider-small.html" class="dropdown-item">Slider Small</a></li>
                                        <li><a href="slider-text.html" class="dropdown-item">Slider Text</a></li>
                                        <li><a href="slider-carousel.html" class="dropdown-item">Slider Carousel</a></li>
                                        <li><a href="slider-kenburns.html" class="dropdown-item">Slider Ken burns</a></li>
                                        <li><a href="slider-image.html" class="dropdown-item">Slider Image</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-full-width">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Elements
                            </a>
                            <ul class="dropdown-menu dropdown-mega-fw">
                                <li class="container">
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Shortcode 1</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="shortcode-buttons.html"><i class="ti-settings"></i> Buttons</a></li>
                                                    <li><a href="shortcode-animations.html"><i class="ti-wand"></i> Animations</a></li>
                                                    <li><a href="shortcode-social-buttons.html"><i class="ti-facebook"></i> Social Buttons</a></li>
                                                    <li><a href="shortcode-carousel.html"><i class="ti-slice"></i> Carousel</a></li>
                                                    <li><a href="shortcode-clients.html"><i class="ti-apple"></i> Clients</a></li>
                                                    <li><a href="shortcode-columns.html"><i class="ti-align-center"></i> Columns</a></li>
                                                    <li><a href="shortcode-alerts.html"><i class="ti-close"></i> Alerts</a></li>
                                                    <li><a href="shortcode-page-titles.html"><i class="ti-heart"></i> Page Titles</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Shortcode 2</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="shortcode-icon-box.html"><i class="ti-light-bulb"></i> Icon Boxes</a></li>
                                                    <li><a href="shortcode-parallax.html"><i class="ti-image"></i> Parallax</a></li>
                                                    <li><a href="shortcode-flex-box.html"><i class="ti-star"></i> flex boxes</a></li>
                                                    <li><a href="shortcode-promo-box.html"><i class="ti-tag"></i> Promo Boxes</a></li>
                                                    <li><a href="shortcode-lightbox.html"><i class="ti-plus"></i> Lightbox</a></li>
                                                    <li><a href="shortcode-testimonials.html"><i class="ti-comments"></i> Testimonials</a></li>
                                                    <li><a href="shortcode-counter.html"><i class="ti-calendar"></i> Counter & Countdowns</a></li>
                                                    <li><a href="shortcode-icons.html"><i class="ti-flag"></i> icons</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Shortcode 3</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="shortcode-tabs.html"><i class="fa fa-cog"></i> Tabs</a></li>
                                                    <li><a href="shortcode-accordions.html"><i class="fa fa-magic"></i> Accordions</a></li>
                                                    <li><a href="shortcode-progressbars.html"><i class="ti-align-left"></i> Progress bars</a></li>
                                                    <li><a href="shortcode-typography.html"><i class="ti-text"></i> Typography</a></li>
                                                    <li><a href="shortcode-card.html"><i class="ti-layout-tab-window"></i> Cards</a></li>
                                                    <li><a href="shortcode-tables.html"><i class="ti-clipboard"></i> Tables</a></li>
                                                    <li><a href="shortcode-sticky-elements.html"><i class="fa fa-arrow-circle-up"></i> Sticky Elements</a></li>
                                                    <li><a href="shortcode-pricing-tables.html"><i class="ti-credit-card"></i> Pricing Tables</a></li>

                                                </ul>

                                            </div>
                                            <div class="col-lg-3">
                                                <h4 class="mega-title">Shortcode 4</h4>
                                                <ul class="mega-inner-nav list-unstyled">
                                                    <li><a href="shortcode-charts.html"><i class="ti-bar-chart"></i> Charts</a></li>
                                                    <li><a href="shortcode-responsive-videos.html"><i class="ti-control-play"></i> Responsive Videos</a></li>
                                                    <li><a href="shortcode-gmap.html"><i class="ti-map"></i> Google Map</a></li>

                                                    <li><a href="shortcode-modals.html"><i class="ti-close"></i> Modals</a></li>
                                                    <li><a href="shortcode-blockquotes.html"><i class="ti-quote-right"></i> Blockquotes</a></li>
                                                    <li><a href="shortcode-paginations.html"><i class="ti-arrow-circle-right"></i> Paginations</a></li>
                                                    <li><a href="shortcode-form-elments.html"><i class="ti-share"></i> Form Elements</a></li>
                                                    <li><a href="shortcode-notify.html"><i class="ti-alert"></i>Notification-bar</a></li>
                                                    <li><a href="shortcode-image-text-cards.html"><i class="ti-image"></i>Image+Text cards</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=" navbar-right-elements">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="search-open"><i class="ti-search"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class=" menu-btn"><i class="ti-shopping-cart"></i> <span class="badge badge-default">3</span></a></li>
                    </ul>
                </div><!--right nav icons-->
            </div>
        </nav>

        @yield('slider')
        @yield('publications')


        <footer class="footer footer-standard pt50 pb20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb40">
                        <h3>About Us</h3>
                        <p>
                            In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.
                        </p>
                        <a href="#" class="btn btn-white-outline btn-sm">Learn More</a>
                    </div>
                    <div class="col-lg-2 col-md-6 mb40">
                        <h3>Quick links</h3>
                        <ul class="list-unstyled footer-list-item">
                            <li>
                                <a href="#">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    News
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    FAQS
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Term & conditions
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Privacy & policy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Latest News</h3>
                        <ul class="list-unstyled latest-news">
                            <li class="media">
                                <a href="#"> <img class="d-flex mr-3 img-fluid" width="64" src="images/img1.jpg" alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="#">Beautiful Sofa lamp at low price</a></h5>
                                    April 05, 2017
                                </div>
                            </li>
                            <li class="media my-3">
                                <a href="#"> <img class="d-flex mr-3 img-fluid" width="64" src="images/img2.jpg" alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="#">Lorem ipsum dolor sit amet</a></h5>
                                    Jan 05, 2017
                                </div>
                            </li>
                            <li class="media">
                                <a href="#"> <img class="d-flex mr-3 img-fluid" width="64" src="images/img5.jpg" alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1"><a href="#">New awesome features of bootstrap 4</a></h5>
                                    March 15, 2017
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb40">
                        <h3>Headquarters</h3>
                        <img src="images/map-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </footer><!--/footer-->
        <div class="footer-bottomAlt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="clearfix">
                            <a href="#" class="social-icon-sm si-dark si-facebook si-dark-round">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-twitter si-dark-round">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-g-plus si-dark-round">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-skype si-dark-round">
                                <i class="fa fa-skype"></i>
                                <i class="fa fa-skype"></i>
                            </a>
                            <a href="#" class="social-icon-sm si-dark si-linkedin si-dark-round">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <span>&copy; Copyright 2017. All Right Reserved</span>
                    </div>
                </div>
            </div>
        </div><!--/footer bottom-->
        <!--back to top-->
        <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="ti-angle-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script type="text/javascript" src="{{asset('js/plugins/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/assan.custom.js')}}"></script>
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
