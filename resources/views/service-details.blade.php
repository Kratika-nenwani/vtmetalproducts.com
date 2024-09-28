@extends('index-main')
@section('csscontent')
    
@endsection
@section('content')
      <!-- main-area -->
      <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
            <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Service Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{Route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-details-area -->
        <section class="services-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="services-details-wrap">
                            <div class="services-details-thumb">
                            <img src="assets/img/services/services_details01.jpg" alt="">
                        </div>
                        <div class="services-details-content">
                            <h2 class="title">Modified roofing beautiful wooden house with big windows</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in somes form, by injected humour, or randomised words which don't look even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>
                            <div class="services-process-wrap">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-8">
                                        <div class="services-process-img">
                                            <img src="assets/img/services/sp_img01.jpg" alt="">
                                            <img src="assets/img/services/sp_img02.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-process-content">
                                            <h2 class="title">Our Service Process</h2>
                                            <ul class="list-wrap">
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="assets/img/icon/sp_icon01.svg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Creative Analysis</h4>
                                                            <p>Creative analysis is important. It is common for marketers</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="assets/img/icon/sp_icon02.svg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Design & Scratches</h4>
                                                            <p>Creative analysis is important. It is common for marketers</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="services-process-item">
                                                        <div class="icon">
                                                            <img src="assets/img/icon/sp_icon01.svg" alt="">
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="title">Development & Delivery</h4>
                                                            <p>Creative analysis is important. It is common for marketers</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h2 class="title-two">We Hope You Find What You are Looking for</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majorty have suffered alteration in as some form by injected humour, or randomised words which don't look even slightly believable. If you are going a to use as passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>
                            <div class="service-benefits-wrap">
                                <div class="row">
                                    <div class="col-lg-7 order-0 order-lg-2">
                                        <div class="benefits-img">
                                            <img src="assets/img/services/sb_img01.jpg" alt="">
                                            <img src="assets/img/services/sb_img02.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="benefits-content">
                                            <h2 class="title">Our Service Benefits</h2>
                                            <p>There are many variations of passages of Lorem by injected humour, or randomised words whic Lorem Ipsum, you need to.</p>
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check-circle"></i>In id diam nec nisi congue tincidunt</li>
                                                <li><i class="fas fa-check-circle"></i>Vestibulum tincidunt arcu vel nisl</li>
                                                <li><i class="fas fa-check-circle"></i>Provide the best roof services</li>
                                                <li><i class="fas fa-check-circle"></i>Sed tristique lorem non tesque</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <aside class="services-sidebar">
                            <div class="services-widget">
                                <h4 class="widget-title">Our All Service</h4>
                                <div class="our-services-list">
                                    <ul class="list-wrap">
                                        <li><a href="#">Single play roofing<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="#">Modified roofing<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="#">Buil-up roofing<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="#">Roof inspection<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="#">Metal roofing<i class="fas fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="services-widget widget-bg" data-background="assets/img/services/sw_bg.jpg">
                                <h4 class="widget-title">Get a free quote</h4>
                                <form action="#" class="sidebar-form">
                                    <div class="form-grp">
                                        <input id="name" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="form-grp">
                                        <input id="email" type="text" placeholder="Your Email Address">
                                    </div>
                                    <div class="form-grp">
                                        <textarea id="message" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-two">Contact Us</button>
                                </form>
                            </div>
                            <div class="services-widget">
                                <h4 class="widget-title">Our Brochures Download</h4>
                                <div class="download-wrap">
                                    <a href="assets/img/services/services_details01.jpg" download target="_blank"><i class="fas fa-cloud-download-alt"></i>Service Details.pdf 65 KB</a>
                                    <a href="assets/img/services/services_details01.jpg" download target="_blank"><i class="fas fa-file-pdf"></i>Roofing Models.doc 48 KB</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->

        <!-- brand-area -->
        <div class="inner-brand-area inner-brand-two pb-120">
            <div class="container">
                <div class="row brand-active-three">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img01.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img02.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img04.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img05.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img06.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="assets/img/brand/brand_img03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

    </main>
    <!-- mian-area-end -->
@endsection
@section('jscontent')
    
@endsection
