@extends('index-main')
@section('csscontent')
    <style>
            /* Customize the carousel control buttons */
    .carousel-control-prev, .carousel-control-next {
        width: 5%; /* Adjust width as needed */
    }
    
    /* Adjust the size and color of the icons */
    .carousel-control-prev-icon, .carousel-control-next-icon {
        width: 40px; /* Adjust width as needed */
        height: 60px; /* Adjust height as needed */
        background-color: #FE5D14; /* Adjust color as needed */
        /* border-radius: 50%; For rounded buttons, adjust as needed */
        opacity: 200%;
    }
    
    /* Adjust the size and color of the icons on hover */
    .carousel-control-prev:hover .carousel-control-prev-icon, .carousel-control-next:hover .carousel-control-next-icon {
        background-color: ; /* Adjust color as needed */
    }

        @media only screen and (max-width: 450px) {

            #a,
            #b,
            #c,
            #d {
                width: auto;
                height: 300px;
            }

            .engineer-item {
                height: auto;
                width: 100%;
            }

            #image-1,
            #image-2,
            #image-3,
            #image-4,
            #image-5,
            #image-6 {
                height: 150px;
                width: auto;
            }

            .banner-content-two {
                position: absolute;
                bottom: 0;
                left: 0;
            }
        }

        @media (min-width: 451px) and (max-width: 900px) {

            #a,
            #b,
            #c,
            #d {
                width: auto;
                height: 450px;
            }

            .engineer-item {
                height: auto;
                width: auto;
            }

            #image-1,
            #image-2,
            #image-3,
            #image-4,
            #image-5,
            #image-6 {
                height: 300px;
                width: auto;
            }
        }

        @media (min-width: 901px) and (max-width: 1100px) {

            #image-1,
            #image-2,
            #image-3,
            #image-4,
            #image-5,
            #image-6 {
                height: 330px;
                width: auto;
            }
        }

        .banner-content-two {
            position: absolute;
            bottom: 10%;
            left: 6%;
        }
        @media only screen and (max-width: 1199px) {
  .abc img {
    width: 200%; /* Double the width of the image */
    height: auto; /* Maintain aspect ratio */
  }
}
@media only screen and (max-width: 453px) {

    #btn-header4{
        margin-top: 10px;
    }

}

    </style>
@endsection
@section('content')
    <!-- mian-area -->
    <main>

        <!-- banner-area -->
        <section class="banner-area-two parallax">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                      <div class="carousel-item active">
                        <section class="banner-area-two parallax"
                            style="background-image: url('assets/img/banner/2.png'); background-size:cover;height:600px;width:100%;opacity:0.9;">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-10 order-0 order-lg-2">

                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content-two" style="background-color:#00000040;opacity:1;">
                                        <div class="container">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s"style="color: white"><b>VT Metal
                                                Products</b></span>
                                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Crafting Excellence in<br>
                                                SS Modular Kitchen</h2>
                                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                                <p><b>Experience the fusion of style and functionality as we meticulously<br> design and elevate your space with our SS Modular Kitchen.</b></p>
                                                <a href="{{ Route('catagory') }}"  id="btn-header4" class="btn wow fadeInUp"
                                                data-wow-delay=".8s">Brochure
                                                </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section class="banner-area-two parallax"
                            style="background-image: url('assets/img/banner/5.png'); background-size:cover;height:600px;width:100%; opacity:0.9">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-10 order-0 order-lg-2">

                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content-two animation-style3" style="background-color:#00000062;opacity:1;">
                                        <div class="container">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s" style="color: white"><b>VT Metal
                                                Products</b></span>
                                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Sculpting Perfection in <br>
                                               Control Panel</h2>
                                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                                <p><b> Elevate your operations with our precised-crafted panels,<br> designed for seamless performance and reliability.</b></p>
                                                <a href="{{ Route('catagory') }}"  id="btn-header4" class="btn wow fadeInUp"
                                                data-wow-delay=".8s">Brochure
                                                </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section class="banner-area-two parallax"
                            style="background-image: url('assets/img/banner/3.png'); background-size:cover;height:600px;width:100%;opacity:0.9">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-10 order-0 order-lg-2">

                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content-two" style="background-color:#00000040;opacity:1;">
                                        <div class="container">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s"style="color: white"><b>VT Metal
                                                Products</b></span>
                                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Expanding new horizons with reliable<br>
                                                Fire/Flush doors.</h2>
                                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                                <p><b>Step into the future as our reliable Fire/Flush doors<br> that offers you with unparalleled safety and style.</b></p>
                                                <a href="{{ Route('catagory') }}"  id="btn-header4" class="btn wow fadeInUp"
                                                data-wow-delay=".8s">Brochure
                                                </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section class="banner-area-two parallax"
                            style="background-image: url('assets/img/banner/metal-image-2.png'); background-size:cover;height:600px;width:100%;opacity:0.9">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-10 order-0 order-lg-2">

                                </div>
                                <div class="col-lg-6">
                                    <div class="banner-content-two" style="background-color:#00000040;opacity:1;">
                                        <div class="container">
                                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s"style="color: white"><b>VT Metal
                                                Products</b></span>
                                            <h2 class="title wow fadeInUp" data-wow-delay=".4s">Creating Brilliance with our <br>
                                                Metal Solutions</h2>
                                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                            <p><b>Transforming metal into excellence, our company offers precised <br>engineering solutions for your every need.With a commitment to <br>enduring quality we're your trusted partner in metal fabrication.</b></p>
                                                <a href="{{ Route('catagory') }}"  id="btn-header4" class="btn wow fadeInUp"
                                                data-wow-delay=".8s">Brochure
                                                </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <!-- banner-area-end -->
        <section class="project-area-three">
            <div class="project-bg-two"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center white-title mb-60 tg-heading-subheading">
                            <span class="sub-title tg-element-title" style="color: #616583 !important;"><h5>Our Products</h5></span>
                            <h2 class="title tg-element-title" style="color: #FE5D14">CATAGORIES</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="{{route('panels')}}">
                                    <img src="{{ asset('assets/img/products-list/mcc-panel-image.jpg')}}" alt="img" height="375px" width="auto" id="image-1">
                                </a>
                            </div>
                            <h3 style="text-align: center;padding-top:5px;color:#FE5D14">Panels</h3>
                            <div class="project-content-two" onclick="redirectToProduct('{{ route('panels') }}')">
                                <h2 class="title"><a href="{{ route('panels') }}">Explore Product</a></h2>
                                <a href="{{ route('panels') }}" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    @foreach ($data as $categories)
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="project-item-two">
                                <div class="project-thumb-two">
                                    <a href="{{route('product_detail', ['id'=> $categories->id ])}}">
                                        <img src="{{ asset('CategoryImages/' . $categories->image) }}" alt="img" height="375px" width="auto" id="image-1">
                                    </a>
                                </div>
                                <h3 style="text-align: center;padding-top:5px;color:#FE5D14">{{ $categories->name }}</h3>
                                <div class="project-content-two" onclick="redirectToProduct('{{ route('product_detail', ['id'=> $categories->id ]) }}')">
                                    <h2 class="title"><a href="{{ route('product_detail', ['id'=> $categories->id ]) }}">Explore Product</a></h2>
                                    <a href="{{ route('product_detail', ['id'=> $categories->id ]) }}" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="learn-more-btn text-center mt-25">
                    <a href="{{ Route('catagory') }}" class="btn">View All</a>
                </div>
            </div>
        </section>
        <!-- about-area -->
        <section class="about-area pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                        <div class="about-img-wrap">
                            <div class="abc">
                                <img src="assets/img/services-images/kitchen-images-2.jpg"alt="" class="wow fadeInRight"
                                data-wow-delay=".2s">
                            </div>
                            <div class="about-experiences-wrap">
                                <!--<div class="experiences-item">-->
                                <!--    <div class="icon">-->
                                <!--        <img src="assets/img/icon/about_icon01.svg" alt="">-->
                                <!--    </div>-->
                                <!--    <div class="content">-->
                                <!--        <h6 class="title">We have more than [ ] years of experiences</h6>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="experiences-item">-->
                                <!--    <div class="icon">-->
                                <!--        <img src="assets/img/icon/about_icon02.svg" alt="">-->
                                <!--    </div>-->
                                <!--    <div class="content">-->
                                <!--        <h6 class="title">We use professional and experienced staff</h6>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-25 tg-heading-subheading">
                                <span class="sub-title tg-element-title">About Our Company</span>
                                <h2 class="title tg-element-title">Transforming Metal into Masterpieces
                                </h2>
                            </div>
                            <p style="font-size: 18px"><b>VT Metal Products: Crafting Excellence Since 2004, your trusted source for premium sheet metal solutions. With a legacy of quality and innovation, we specialize in customizing your idea into products better than your imagination. </b>
                            </p>
                            <div class="about-list">
                                <ul class="list-wrap">
                                   <li><i class="fas fa-check"></i>Highly equipped with leading facilities to achieve excellence.</li>
                            <li><i class="fas fa-check"></i>Precise engineering and enduring quality since 2004.</li>
                            <li><i class="fas fa-check"></i>Trusted provider of premium metal solutions.</li>
                                </ul>
                            </div>
                            <a href="{{ route('about') }}" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <section class="engineer-area pt-30 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title" style="color: #616583 !important;"> <h5>Products</h5></span>
                            <h2 class="title tg-element-title" style="color: #FE5D14;">Explore Our Vast Range Of Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row engineer-active">
                    <div class="col-lg-5">
    <div class="engineer-item" style="background-color: white; display: flex; flex-direction: column; align-items: center;">
        <div class="engineer-thumb">
            <a href="panels"><img src="assets/img/products-list/mcc-panel-image.jpg" alt=""></a>
        </div>
        <div class="engineer-info-wrap">
            <div class="content">
                <p style="font-weight:900; font-size:25px;">Panels</p>
            </div>
        </div>
    </div>
</div>

                    @foreach ($show as $categories)
                  
                          <div class="col-lg-5">
    <div class="engineer-item" style="background-color: white; display: flex; flex-direction: column; align-items: center;">
        <div class="engineer-thumb">
            <a href="{{route('product_detail', ['id'=> $categories->id ])}}">
                <img src="{{asset ('CategoryImages/' . $categories->image)}}" alt="" height="300px" width="911px">
            </a>
        </div>
        <div class="engineer-info-wrap">
            <div class="content">
                <p style="font-weight: 900;font-size:25px;">{{$categories->name}}</p>
            </div>
        </div>
    </div>
</div>


                    @endforeach

                    {{-- <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/automobile-image-1.jpg"
                                        alt=""></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/commercial-kitchen-image1.png"
                                        alt=""></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/kitchen-image-3_1.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/metal-tank-images.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/name-plates-1.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/pharma-images-1.jpg"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/podium-images-2.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/storage-racks-1.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/catagories/lockers-img.jpg"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/pcc-panel.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/hopper-image-1.png"
                                        alt=""></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/mess-table-image.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/distribution-panel.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/products-list/mcc-panel.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="content">
                                    <p>Product Info</p>
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </section>

        <!-- contact-map -->
        <div class="section-title text-center mb-60 tg-heading-subheading">
            <h2 class="title tg-element-title" style="color: #FE5D14;font-size:45px"><b>Find Us</b></h2>
        </div>
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3678.4411731319506!2d75.84025837508436!3d22.78611107934021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDQ3JzEwLjAiTiA3NcKwNTAnMzQuMiJF!5e0!3m2!1sen!2sin!4v1712648409462!5m2!1sen!2sin"
                width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" id="iframe_id"></iframe>
        </div>
        <br><br><br>

        <!-- contact-map-end -->
        <!-- services-area -->
        {{-- <section class="services-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-50 tg-heading-subheading">
                            <span class="sub-title tg-element-title">What We Do</span>
                            <h2 class="title tg-element-title">Our Services Areas</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".2s"
                            data-background="assets/img/services/services_item01.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon01.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}"></a></h2>
                                <h2 class="number">01</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Siding Corner</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".4s"
                            data-background="assets/img/services/services_item02.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon02.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roofing Layers</a></h2>
                                <h2 class="number">02</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roofing Layers</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".6s"
                            data-background="assets/img/services/services_item03.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon03.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roof Repairings</a></h2>
                                <h2 class="number">03</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roof Repairings</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".3s"
                            data-background="assets/img/services/services_item04.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon04.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roof Renovation</a></h2>
                                <h2 class="number">04</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roof Renovation</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".6s"
                            data-background="assets/img/services/services_item05.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon05.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Damage Roofing</a></h2>
                                <h2 class="number">05</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Damage Roofing</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".9s"
                            data-background="assets/img/services/services_item06.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon06.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roofing Animation</a></h2>
                                <h2 class="number">06</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{ route('service-details') }}">Roofing Animation</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have
                                    suffered ali teration in some form</p>
                                <a href="{{ route('service-details') }}" class="read-more">Read More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- services-area-end -->


        <!-- project-area -->
        {{-- <section class="project-area project-bg" data-background="assets/img/bg/project_bg.jpg">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="section-title white-title mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Latest Projects</span>
                            <h2 class="title tg-element-title">Explore Our Latest Projects</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="view-all-btn text-end mb-50">
                            <a href="project.html" class="btn">View All Projects</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="project-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="project-thumb">
                                <img src="assets/img/project/project_img01.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <span>Projects V1</span>
                                    <h2 class="title"><a href="#">Low Rise Building and Repair
                                            Roof</a></h2>
                                    <p>There are many variations of passages of Lorem Ipsum ava have suffered alteration in
                                        some form, by injected humour which don't look even slightly believable.</p>
                                </div>
                                <div class="project-link">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="project-thumb">
                                <img src="assets/img/project/project_img02.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <span>Projects V2</span>
                                    <h2 class="title"><a href="#">The World Class Roofing</a></h2>
                                    <p>There are many variations of passages of Lorem Ipsum ava have suffered alteration in
                                        some form, by injected humour which don't look even slightly believable.</p>
                                </div>
                                <div class="project-link">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item wow fadeInUp" data-wow-delay=".4s">
                            <div class="project-thumb">
                                <img src="assets/img/project/project_img03.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <span>Projects V3</span>
                                    <h2 class="title"><a href="#">Quality Control System Roofing</a>
                                    </h2>
                                    <p>There are many variations of passages of Lorem Ipsum ava have suffered alteration in
                                        some form, by injected humour which don't look even slightly believable.</p>
                                </div>
                                <div class="project-link">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="project-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="project-thumb">
                                <img src="assets/img/project/project_img04.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <span>Projects V3</span>
                                    <h2 class="title"><a href="#">Low Rise Building and Repair
                                            Roof</a></h2>
                                    <p>There are many variations of passages of Lorem Ipsum ava have suffered alteration in
                                        some form, by injected humour which don't look even slightly believable.</p>
                                </div>
                                <div class="project-link">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- project-area-end -->

        <!-- team-area -->
        {{-- <section class="team-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Professional Team</span>
                            <h2 class="title tg-element-title">Professional Team Member</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="team-details.html"><img src="assets/img/team/team_img01.jpg" alt=""></a>
                                <div class="team-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="title"><a href="team-details.html">Robert C. Simmons</a></h2>
                                <span>Roof Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="team-details.html"><img src="assets/img/team/team_img02.jpg" alt=""></a>
                                <div class="team-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="title"><a href="team-details.html">Christopher Jhon</a></h2>
                                <span>Roof Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="team-details.html"><img src="assets/img/team/team_img03.jpg" alt=""></a>
                                <div class="team-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="title"><a href="team-details.html">Karikoka Ahli</a></h2>
                                <span>Roof Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="team-item">
                            <div class="team-thumb">
                                <a href="team-details.html"><img src="assets/img/team/team_img04.jpg" alt=""></a>
                                <div class="team-social">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h2 class="title"><a href="team-details.html">Dickerson MH</a></h2>
                                <span>Roof Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- team-area-end -->

        <!-- counter-area -->
        {{-- <div class="counter-area pb-120">
            <div class="container">
                <div class="counter-inner wow fadeInUp" data-wow-delay=".2s">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/img/icon/counter_icon01.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="count odometer" data-count="1500"></span>
                                    <p>Project Complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/img/icon/counter_icon02.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="count odometer" data-count="8562"></span>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/img/icon/counter_icon03.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="count odometer" data-count="450"></span>
                                    <p>Experienced Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item">
                                <div class="counter-icon">
                                    <img src="assets/img/icon/counter_icon04.svg" alt="">
                                </div>
                                <div class="counter-content">
                                    <span class="count odometer" data-count="38"></span>
                                    <p>Awards Win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- counter-area-end -->

        <!-- testimonial-area -->
        {{-- <section class="testimonial-area pt-115 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".2s">
                        <div class="testimonial-img">
                            <img src="assets/img/images/testimonial_img.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <div class="section-title mb-45 tg-heading-subheading animation-style3">
                                <span class="sub-title tg-element-title">Our Testimonial</span>
                                <h2 class="title tg-element-title">Some of Our Respected Happy Clients Says</h2>
                            </div>
                            <div class="testimonial-active">
                                <div class="testimonial-item">
                                    <div class="testimonial-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>There are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="avatar-thumb">
                                            <img src="assets/img/images/testi_avatar01.png" alt="">
                                        </div>
                                        <div class="avatar-content">
                                            <h6 class="title">Darrell Steward</h6>
                                            <p>Roofing Expert</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>There are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="avatar-thumb">
                                            <img src="assets/img/images/testi_avatar01.png" alt="">
                                        </div>
                                        <div class="avatar-content">
                                            <h6 class="title">Darrell Steward</h6>
                                            <p>Roofing Expert</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-item">
                                    <div class="testimonial-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>There are many varation of paissages of Lorem as the Ipum available but our
                                            majority have sufferied alterations in some form, by our by injected hsumour
                                            randomised worids which don't looks even slightly there as believable. If you
                                            going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="avatar-thumb">
                                            <img src="assets/img/images/testi_avatar01.png" alt="">
                                        </div>
                                        <div class="avatar-content">
                                            <h6 class="title">Darrell Steward</h6>
                                            <p>Roofing Expert</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- testimonial-area-end -->

        <!-- blog-area -->
        {{-- <section class="blog-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Our News</span>
                            <h2 class="title tg-element-title">Read Our Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">Quality Materials</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Building worker help each other
                                        with at construction site</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">House Roof Work</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Full shot roofers working
                                        together with helmets</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">Construction Engineer</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Hard hatswork at the heavy
                                        manufacturing factory industrial</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog-area-end -->



        <!-- banner-area -->

        <!-- banner-area-end -->

        <!-- about-area -->
        {{-- <section class="about-area pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                        <div class="about-img-wrap">
                            <img src="assets/img/images/about_img01.jpg" alt="" class="wow fadeInRight"
                                data-wow-delay=".4s">
                            <img src="assets/img/images/about_img02.jpg" alt="" class="wow fadeInRight"
                                data-wow-delay=".2s">
                            <div class="about-experiences-wrap">
                                <div class="experiences-item">
                                    <div class="icon">
                                        <img src="assets/img/icon/about_icon01.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">We have more than 10 years of experiences</h6>
                                    </div>
                                </div>
                                <div class="experiences-item">
                                    <div class="icon">
                                        <img src="assets/img/icon/about_icon02.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">We use professional and experienced person</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-25 tg-heading-subheading animation-style3">
                                <span class="sub-title tg-element-title">About Our Company</span>
                                <h2 class="title tg-element-title">Transforming Metal into Masterpieces</h2>
                            </div>
                            <p>VT Metal Products: Crafting Excellence Since 2004, your trusted source for premium sheet metal solutions. With a legacy of quality and innovation, we specialize in customizing your idea into products better than your imagination. </p>
                            <div class="about-list">
                                <ul class="list-wrap">
                                    <li><i class="fas fa-check"></i>32k Partners have worked us.</li>
                                    <li><i class="fas fa-check"></i>Professional and experienced human resources.</li>
                                    <li><i class="fas fa-check"></i>Provide the best roof services</li>
                                </ul>
                            </div>
                            <a href="{{ route('about') }}" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- about-area-end -->

        <!-- work-area -->
        {{-- <section class="work-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Working Plan</span>
                            <h2 class="title tg-element-title">Roof Plan Working Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="work-item">
                            <div class="work-thumb">
                                <img src="assets/img/images/work_img01.png" alt="">
                                <h4 class="number">01</h4>
                            </div>
                            <div class="work-content">
                                <h2 class="title">Plan for Roofing</h2>
                                <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-item">
                            <div class="work-thumb">
                                <img src="assets/img/images/work_img02.png" alt="">
                                <h4 class="number">02</h4>
                            </div>
                            <div class="work-content">
                                <h2 class="title">Schedule Estimate</h2>
                                <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-item">
                            <div class="work-thumb">
                                <img src="assets/img/images/work_img03.png" alt="">
                                <h4 class="number">03</h4>
                            </div>
                            <div class="work-content">
                                <h2 class="title">Install New Roof</h2>
                                <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="work-item">
                            <div class="work-thumb">
                                <img src="assets/img/images/work_img04.png" alt="">
                                <h4 class="number">04</h4>
                            </div>
                            <div class="work-content">
                                <h2 class="title">Enjoy Roofing</h2>
                                <p>Suffered alteration in some a form, by injected humour, or randomised word</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- work-area-end -->

        <!-- area-bg -->
        {{-- <div class="area-bg-three" data-background="assets/img/bg/area_bg03.jpg"> --}}

        <!-- services-area -->
        {{-- <section class="services-area-two pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div
                                class="section-title white-title text-center mb-60 tg-heading-subheading animation-style3">
                                <span class="sub-title tg-element-title">Discover Our Company</span>
                                <h2 class="title tg-element-title">See Our Roofing Services Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <a href="{{ route('service-details') }}"><img
                                            src="assets/img/services/h3_services_img01.jpg" alt=""></a>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <img src="assets/img/icon/services_icon01.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="{{ route('service-details') }}">Quality
                                                Materials</a>
                                        </h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <a href="{{ route('service-details') }}"><img
                                            src="assets/img/services/h3_services_img02.jpg" alt=""></a>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <img src="assets/img/icon/services_icon02.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h2 class="title"><a href="{{ route('service-details') }}">Install Metal
                                                Roofing</a></h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                            have suffered.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        <!-- services-area-end -->

        <!-- counter-area -->
        {{-- <div class="counter-area-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="1500"></span>
                                    <p>Project Complete</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="8562"></span>
                                    <p>Satisfied Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="450"></span>
                                    <p>Experienced Staff</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-item-three">
                                <div class="counter-content">
                                    <span class="count odometer" data-count="38"></span>
                                    <p>Awards Win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <!-- counter-area-end -->

        {{-- </div> --}}
        <!-- area-bg-end -->

        <!-- engineer-area -->
        {{-- <section class="engineer-area pt-115 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Meet Our Engineers</span>
                            <h2 class="title tg-element-title">How Our Engineers Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row engineer-active">
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: #FE5D14">
                            <div class="engineer-thumb">
                                <a href="team-details.html"><img src="assets/img/images/engineer_img01.jpg"
                                        alt=""></a>
                                <a href="https://www.youtube.com/watch?v=PFkXoK5x5KE" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="thumb">
                                    <a href="team-details.html"><img src="assets/img/images/engineer_info01.png"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="team-details.html">Mr.Karikoka Ahli</a></h2>
                                    <span>Roof Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: #FE5D14">
                            <div class="engineer-thumb">
                                <a href="team-details.html"><img src="assets/img/images/engineer_img02.jpg"
                                        alt=""></a>
                                <a href="https://www.youtube.com/watch?v=PFkXoK5x5KE" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="thumb">
                                    <a href="team-details.html"><img src="assets/img/images/engineer_info02.png"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="team-details.html">Mr.Karikoka Ahli</a></h2>
                                    <span>Roof Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: #FE5D14">
                            <div class="engineer-thumb">
                                <a href="team-details.html"><img src="assets/img/images/engineer_img03.jpg"
                                        alt=""></a>
                                <a href="https://www.youtube.com/watch?v=PFkXoK5x5KE" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="thumb">
                                    <a href="team-details.html"><img src="assets/img/images/engineer_info03.png"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="team-details.html">Mr.Darikoka Ahli</a></h2>
                                    <span>Roof Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: #FE5D14">
                            <div class="engineer-thumb">
                                <a href="team-details.html"><img src="assets/img/images/engineer_img02.jpg"
                                        alt=""></a>
                                <a href="https://www.youtube.com/watch?v=PFkXoK5x5KE" class="play-btn popup-video"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="engineer-info-wrap">
                                <div class="thumb">
                                    <a href="team-details.html"><img src="assets/img/images/engineer_info02.png"
                                            alt=""></a>
                                </div>
                                <div class="content">
                                    <h2 class="title"><a href="team-details.html">Mr.Karikoka Ahli</a></h2>
                                    <span>Roof Engineer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- engineer-area-end -->

        <!-- work-area -->
        {{-- <section class="work-area-two work-bg" data-background="assets/img/bg/work_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Meet Our Engineers</span>
                            <h2 class="title tg-element-title">How Our Engineers Work</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="work-inner" data-background="assets/img/images/h3_work_img.jpg">
                            <div class="work-tooltip-wrap">
                                <div class="tooltip-item top">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item top">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                                <div class="tooltip-item">
                                    <div class="tooltip-btn pulse">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="tooltip-content">
                                        <h2 class="title">Combustion Roof Vent</h2>
                                        <p>Suffered alteration in some a goody form, by injected humor, or into the
                                            randomized word.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- work-area-end -->

        <!-- project-area -->
        {{-- <section class="project-area-three">
            <div class="project-bg-two" data-background="assets/img/bg/area_bg03.jpg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center white-title mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Our Projects</span>
                            <h2 class="title tg-element-title">Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img04.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img05.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="project-item-two">
                            <div class="project-thumb-two">
                                <a href="#"><img src="assets/img/project/h3_project_img06.jpg"
                                        alt=""></a>
                            </div>
                            <div class="project-content-two">
                                <span>Product Design</span>
                                <h2 class="title"><a href="#">Web Application</a></h2>
                                <a href="#" class="link-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="learn-more-btn text-center mt-25">
                    <a href="project.html" class="btn">Learn More</a>
                </div>
            </div>
        </section> --}}
        <!-- project-area-end -->

        <!-- faq-area -->
        {{-- <section class="faq-area faq-bg" data-background="assets/img/bg/faq_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Our Faqs</span>
                            <h2 class="title tg-element-title">Have Any Questions & Answer?</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-10 order-0 order-xl-2">
                        <div class="faq-img-wrap">
                            <img src="assets/img/images/faq_img01.jpg" alt="" class="wow fadeInRight"
                                data-wow-delay=".4s">
                            <img src="assets/img/images/faq_img02.jpg" alt="" class="wow fadeInRight"
                                data-wow-delay=".2s">
                            <div class="overlay-text wow fadeInUp" data-wow-delay=".6s">
                                <h2 class="title">FAQ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="faq-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How to install Exclusive Addons Plugin?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As far as our Plugin is concerned, it works smoothly with all of the
                                                WordPress themes. But if you are looking for a clean, lightweight, minimal,
                                                and fully customizable WordPress theme for your site we recommend Credence.
                                                multipurpose theme</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Do you recommend any WordPress theme?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As far as our Plugin is concerned, it works smoothly with all of the
                                                WordPress themes. But if you are looking for a clean, lightweight, minimal,
                                                and fully customizable WordPress theme for your site we recommend Credence.
                                                multipurpose theme</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How to install Exclusive Addons Plugin?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As far as our Plugin is concerned, it works smoothly with all of the
                                                WordPress themes. But if you are looking for a clean, lightweight, minimal,
                                                and fully customizable WordPress theme for your site we recommend Credence.
                                                multipurpose theme</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            How to install Exclusive Addons Plugin?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As far as our Plugin is concerned, it works smoothly with all of the
                                                WordPress themes. But if you are looking for a clean, lightweight, minimal,
                                                and fully customizable WordPress theme for your site we recommend Credence.
                                                multipurpose theme</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            How to install Exclusive Addons Plugin?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>As far as our Plugin is concerned, it works smoothly with all of the
                                                WordPress themes. But if you are looking for a clean, lightweight, minimal,
                                                and fully customizable WordPress theme for your site we recommend Credence.
                                                multipurpose theme</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- faq-area-end -->

        <!-- blog-area -->
        {{-- <section class="blog-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title tg-element-title">Our News</span>
                            <h2 class="title tg-element-title">Read Our Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img01.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">Quality Materials</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Building worker help each
                                        other with at construction site</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img02.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">House Roof Work</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Full shot roofers working
                                        together with helmets</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="{{ route('blog-details') }}"><img src="assets/img/blog/blog_img03.jpg"
                                        alt=""></a>
                            </div>
                            <div class="blog-post-content">
                                <a href="{{ route('blog') }}" class="tag">Construction Engineer</a>
                                <div class="blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i> By <a
                                                href="{{ route('blog-details') }}">Admin</a></li>
                                        .
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog-details') }}">Hard hatswork at the heavy
                                        manufacturing factory industrial</a></h2>
                                <a href="{{ route('blog-details') }}" class="link-btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog-area-end -->
        <!-- newsletter-area -->
        {{-- <section class="newsletter-area jarallax newsletter-bg" data-background="assets/img/bg/newsletter_bg.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5">
                        <div class="newsletter-content">
                            <div class="section-title white-title-two tg-heading-subheading animation-style3">
                                <span class="sub-title tg-element-title">Quality Roofing Contact From</span>
                                <h2 class="title tg-element-title">Need Roofing Any Services?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="newsletter-form">
                            <form action="#">
                                <div class="form-grp">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="form-grp">
                                    <input type="text" placeholder="Phone*">
                                </div>
                                <button type="submit" class="btn btn-two">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- newsletter-area-end -->

    </main>
    <!-- mian-area-end -->
@endsection
@section('jscontent')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Function to find the maximum height among all blog containers
        function getMaxHeight() {
            let max = 0;
            const blogContainers = document.querySelectorAll('.blog-post-item');

            // Iterate through each blog container and find the maximum height
            blogContainers.forEach(container => {
                const height = container.clientHeight;
                max = Math.max(max, height);
            });

            return max;
        }

        // Function to set the height of all blog containers to the maximum height
        function setEqualHeight() {
            const maxHeight = getMaxHeight();
            const blogContainers = document.querySelectorAll('.blog-post-item');

            // Set the height of each blog container to the maximum height
            blogContainers.forEach(container => {
                container.style.height = `${maxHeight}px`;
            });
        }

        // Call the function to set equal heights when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', setEqualHeight);
    </script>
    <script>
        $(document).ready(function() {
            // Accessing the iframe content
            var iframe = $('#iframe_id')[0]; // Replace 'iframe_id' with the actual ID of your iframe
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            console.log(iframe);
            // Changing the address text inside the iframe
            $(iframeDocument).find('.address').html(
                'M/S VT METAL PRODUCTS <br>Address - 33-A/1, R.R. industrial Area, Sanwer Road Indore.');
        });
    </script>
   <script>
    // Function to redirect to product detail page
    function redirectToProduct(url) {
        window.location.href = url;
    }

    // Add event listener to all elements with the class 'project-content-two'
    document.addEventListener('DOMContentLoaded', function () {
        const projectContentTwoElements = document.querySelectorAll('.project-content-two');
        
        projectContentTwoElements.forEach(function (element) {
            element.addEventListener('click', function () {
                // Find the nearest link within the clicked 'project-content-two' element
                const link = this.querySelector('a');
                
                // Get the href attribute value of the link
                const href = link.getAttribute('href');
                
                // Redirect to the product detail page
                redirectToProduct(href);
            });
        });
    });
</script>

@endsection
