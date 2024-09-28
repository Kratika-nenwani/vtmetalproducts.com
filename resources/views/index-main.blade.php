<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VT Metal Products</title>
    <meta name="description" content="VT Metal Products- Metal product company">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo-img.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jarallax.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @yield('csscontent')
    <style>
         ul {
            list-style-type: none;
        }
        .sub-menu .row {
            display: flex;
            flex-wrap: wrap;
        }

        .sub-menu .row .col-3 {
            flex: 1;
            /* Each column takes up equal space */
        }

        .sub-menu .row .col-3 li {
            width: 100%;
            /* Set each dropdown item to occupy full width initially */
            box-sizing: border-box;
            /* Include padding and border in the width */
        }
        @media screen and (max-width: 991px){
            
            .mbc{
                color: #c5c6c8 !important;
            }
        }
        @media screen and (max-width: 450px) {
    .footer-widget {
        text-align: center;
    }
}
#brochure{
    position: relative;
    right: 1%;
    top: 4%;
}
@media screen and (max-width: 1199px) {
    .navbar-wrap ul li a{
        padding: 20px 12px;
    }
}
@media screen and (max-width: 991px) {
    #btn-header4{
        display: none;
    }
}
   @media (min-width: 992px) and (max-width: 200000px) {

           #brochure{
               display:none;
            }
        }
        .mobile-nav-toggler{
            position: absolute;
            top: 30%;
            right: 10%;
        }
        .btn-header4{
            position:absolute;
            right:20%;
        }
 @media screen and (max-width: 380px) {
    #my {
        text-align: center;
        font-size:12px;
    }
}
    .whatsapp-button {
      position: fixed;
      bottom: 75px; /* Adjust as needed */
      right: 20px; /* Adjust as needed */
      z-index: 9999; /* Ensure it's above other content */
    }

    /* Style for WhatsApp image */
    .whatsapp-image {
      width:70px; /* Adjust width as needed */
      height: auto; /* Maintain aspect ratio */
    }

 @media screen and (max-width: 850px) {
        #whatsapp-button {
            position:absolute;
            bottom: 10px; /* Adjust this value as needed */
            right: 10px; /* Adjust this value as needed */
        }
        .whatsapp-image {
            width: 53px; /* Adjust this value as needed */
            height:auto;
            position:relative;
            bottom: -5px; /* Adjust this value as needed */
            right: -8px; /* Adjust this value as needed */
        }
    }
    #whatsappLink a:hover {
        cursor: pointer;
        /* Add any other hover effects here */
    }

    </style>
</head>

<body>

    <!-- Preloader-start -->
    <div id="preloader" class="loader-image" style="background-color: #0D132D">
        <img src="{{ asset('assets/img/logo/logo-img-2.png') }}" alt="" height="200px" width="200px">
    </div>
    <!-- Preloader-start-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-level-up-alt"></i>
    </button>
    <!-- Scroll-top-end-->
    
      <a href="https://api.whatsapp.com/send?phone=+91 7697842277&text=Hi%20%20" target="_blank" class="whatsapp-button" id="whatsappButton"> 
        <img src="{{ asset('assets/img/products-list/whatsapp-logo.png') }}" alt="WhatsApp" class="whatsapp-image">
      </a>
    <header>
        <div id="header-fixed-height"></div>
        <div class="header-top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12">
                        <div class="header-top-left">
                            <ul class="list-wrap">
                                <li><i class="fas fa-user-alt"></i>WELCOME TO VT METAL PRODUCTS</li>
                                <li><i class="fas fa-envelope"></i><a  href="mailto:vtmetal@rediffmail.com">vtmetal@rediffmail.com</a></li>
                                <li id="my"><i class="fas fa-globe"></i>Crafting Excellence in Every Sheet Metal Endeavor</li>    
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header-top-right">
                            <div class="header-social">
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                     <li id="whatsappLink">
                                            <a onclick="window.open('https://api.whatsapp.com/send?phone=+91 7697842277&text=Hi%20%20', '_blank');" class="de-info twm-bg-green">
                                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="menu-area menu-area-three" style="background-color: #0C122B">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        <div class="menu-wrap">
                            <nav class="menu-nav">
                                <div class="logo">
                                    <a href="{{ Route('index_main') }}"><img
                                            src="{{ asset('assets/img/logo/logo-img-2.png') }}" height="140px"
                                            width="140px" alt="Logo" id="logo-image"></a>
                                </div>
                                <div class="navbar-wrap main-menu d-none d-lg-flex">
                                    <ul class="navigation" style="text-align: center;">
                                        <li class="active"><a href="{{ Route('index_main') }}">Home</a></li>

                                        <li><a href="{{ Route('about') }}">About Us</a></li>

                                        <li class="menu-item-has-children"><a href="{{route('catagory')}}">Products</a>

                                            <ul class="sub-menu">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <li><a class="mbc" href="{{ Route('panels') }}">Panels</a></li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '2']) }}">Kitchen</a>
                                                        </li>
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '3']) }}">Automobile
                                                                parts</a></li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '4']) }}">Pharma</a>
                                                        </li>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '5']) }}">Lockers</a>
                                                        </li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '20']) }}">Signages</a>
                                                        </li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '16']) }}">Podium</a>
                                                        </li>
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '21']) }}">Machine
                                                                Covers</a></li>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '17']) }}">Fire/Flush
                                                                doors</a></li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '18']) }}">Nameplates</a>
                                                        </li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '10']) }}">Almirahs</a>
                                                        </li>
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '11']) }}">Storage
                                                                Racks</a></li>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '9']) }}">Tanks</a>
                                                        </li>
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '12']) }}">Commercial
                                                                Kitchen</a></li>
                                                        <li><a class="mbc" href="{{ route('product_detail', ['id' => '13']) }}">Mess
                                                                Tables</a></li>
                                                        <li><a class="mbc"
                                                                href="{{ route('product_detail', ['id' => '14']) }}">Hoppers</a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </ul>
                                        </li>
                                        <li><a href="{{ Route('technology') }}">Technology</a></li>
                                        
                                        <li><a href="{{ Route('gallery') }}">Gallery</a></li>
                                        
                                        <li><a href="{{ Route('contact') }}">Contact us</a></li>
                                        
                                         <br>
                                            
                                            <a href="{{ Route('brochure') }}"  id="brochure" class="btn wow fadeInUp"
                                            data-wow-delay=".8s">Brochure
                                            </a> 
                                        
                                    </ul>
                                     
                                </div>
                                 <ul style="margin-right: 20px">
                                    <li>
                                        <a href="{{ Route('brochure') }}"   id="btn-header4" class="btn wow fadeInUp"
                                        data-wow-delay=".8s">Brochure
                                        </a> 
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="mobile-menu">
                            <nav class="menu-box">
                                <div class="close-btn"><i class="fas fa-times"></i></div>
                                <div class="nav-logo">
                                    <a href="{{ Route('index') }}"><img
                                            src="{{ asset('assets/img/logo/logo-img-2.png') }}" height="100px"
                                            width="100px" alt="Logo"></a>
                                </div>
                                <div class="menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="clearfix list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-backdrop"></div>
                        <!-- End Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="footer-area footer-bg" data-background="{{ asset('assets/img/bg/footer_bg.jpg') }}">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-7">
                            <div class="footer-widget">
                                <h2 class="fw-title">VT Metal Products</h2>
                                <div class="footer-content">
                                    <p>With a legacy dating to 2004, VT Metal Products is your trusted source for premium sheet metal solutions. Our precise engineering ensures enduring quality, meeting the most demanding specifications with unmatched expertise and reliability. Trust us to bring your concepts to reality with innovation and craftsmanship.
                                    </p>
                                    {{-- <div class="footer-newsletter">
                                        <h4 class="title">Contact Us</h4>
                                        <form action="#">
                                            <input type="text" placeholder="Enter your email">
                                            <button type="submit" class="btn btn-two">Send Message</button>
                                        </form>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="fw-title">Our Products</h2>
                                <div class="footer-link">
                                    <ul class="list-wrap">
                                        <li><a href="{{ route('panels') }}"><i
                                                    class="fas fa-angle-double-right"></i>Panels</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '2']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Modular Kitchen</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '3']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Automobile</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '4']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Pharma</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '10']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Almirahs</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '5']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Lockers</a></li>
                                        <li><a href="{{ route('product_detail', ['id' => '12']) }}"><i
                                                    class="fas fa-angle-double-right"></i>Commercial Kitchen</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-widget">
                                <h2 class="fw-title">Quick Links</h2>
                                <div class="footer-link">
                                    <ul class="list-wrap">
                                        
                                                <li><a href="{{Route('about')}}"><i class="fas fa-angle-double-right"></i>
                                                About Us</a></li>
                                                 <li><a href="{{Route('catagory')}}"><i class="fas fa-angle-double-right"></i>
                                                Products</a></li>
                                                 <li><a href="{{Route('technology')}}"><i class="fas fa-angle-double-right"></i>
                                                Technology</a></li>
                                                 <li><a href="{{Route('gallery')}}"><i class="fas fa-angle-double-right"></i>
                                                Gallery</a></li>
                                                 <li><a href="{{Route('contact')}}"><i class="fas fa-angle-double-right"></i>
                                                Contact Us</a></li>
                                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="footer-widget">
                                <h2 class="fw-title">Instagram Posts</h2>
                                <div class="footer-instagram">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img01.jg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img02.jg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img03.jg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img04.jg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img05.jg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('assets/img/instagram/f_insta_img06.jg') }}"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-logo-area">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3 col-md-12">
                                <div class="logo">
                                    <a href="{{ Route('index_main') }}"><img
                                            src="{{ asset('assets/img/logo/logo-img-2.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="footer-contact">
                                    <div class="icon">
                                        <i class="fas fa-envelope" style="color: #131944"></i>
                                    </div>
                                    <div class="content">
                                        <span><b>E-Mail</b></span>
                                        <a href="mailto:vtmetal@rediffmail.com"
                                            style="font-size: 17px;">vtmetal@rediffmail.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <div class="footer-social">
                                    <h2 class="title">Follow Us:</h2>
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                          <li id="whatsappLink">
                                            <a onclick="window.open('https://api.whatsapp.com/send?phone=+91 7697842277&text=Hi%20%20', '_blank');" class="de-info twm-bg-green">
                                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p style="font-size: 14px">Copyright © 2024 VT Metal Products </p>
                                <p style="font-size: 14px;">Made with ❤️ by <a
                                        href="https://www.intouchsoftware.co.in/" target="_blank">InTouch Software
                                        Solutions</a> All rights reserved.</p>
                                        <p><a href="https://astropush.com" target="_blank" rel="noreferrer noopener"></a></p>
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                                <div class="footer-bootom-menu">
                                    <ul class="list-wrap">
                                        <li><a href="{{route('contact')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('contact')}}">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->


    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.js') }}"></script>
    <script src="{{ asset('assets/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/js/gsap-animation.js') }}"></script>
    <script src="{{ asset('assets/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('jscontent')
</body>
</html>
