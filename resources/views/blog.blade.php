@extends('index-main')
@section('csscontent')
    
@endsection
@section('content')
     <!-- mian-area -->
     <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
            <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Blog</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{Route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="inner-blog-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-post-item">
                                    <div class="blog-post-thumb">
                                        <a href="#"><img src="assets/img/services-images/automobile-image-1.jpg"  height="300px" width="911px" alt=""></a>
                                    </div>
                                    <div class="blog-post-content">
                                        <a href="#" class="tag">Automobile</a>
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-user"></i> By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-post-item">
                                    <div class="blog-post-thumb">
                                        <a href="#"><img src="assets/img/services-images/kitchen-images-1.png"  height="300px" width="911px" alt=""></a>
                                    </div>
                                    <div class="blog-post-content">
                                        <a href="#" class="tag">Kitchen</a>
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-user"></i> By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-post-item">
                                    <div class="blog-post-thumb">
                                        <a href="#"><img src="assets/img/services-images/pharma-images-1.jpg"  height="300px" width="911px" alt=""></a>
                                    </div>
                                    <div class="blog-post-content">
                                        <a href="#" class="tag">Pharma</a>
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-user"></i> By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-post-item">
                                    <div class="blog-post-thumb">
                                        <a href="#"><img src="assets/img/services-images/podium-images-2.png"  height="300px" width="911px" alt=""></a>
                                    </div>
                                    <div class="blog-post-content">
                                        <a href="#" class="tag">Podium</a>
                                        <div class="blog-meta">
                                            <ul class="list-wrap">
                                                <li><i class="far fa-user"></i> By <a href="#">Admin</a></li>
                                            </ul>
                                        </div>
                                        <a href="#" class="link-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrap mt-30">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination list-wrap">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-10">
                        <aside class="blog-sidebar">
                            {{-- <div class="blog-widget">
                                <div class="sidebar-search">
                                    <h4 class="widget-title">Search</h4>
                                    <form action="#">
                                        <input id="search" type="text" placeholder="Search">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="services-widget">
                                <h4 class="widget-title">Our All Service</h4>
                                <div class="our-services-list">
                                    <ul class="list-wrap">
                                        <li><a href="{{ Route('automobile')}}">Automobile<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="{{ Route('panels')}}">Panels<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="{{ Route('pharma')}}">Pharma<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="{{ Route('lockers')}}">Lockers<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="{{ Route('podium')}}">Podiums<i class="fas fa-arrow-right"></i></a></li>
                                        <li><a href="{{ Route('kitchen')}}">Kitchen<i class="fas fa-arrow-right"></i></a></li>
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
                                    <button type="submit" class="btn btn-two">Send Message</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
    <!-- mian-area-end -->
@endsection
@section('jscontent')
    
@endsection