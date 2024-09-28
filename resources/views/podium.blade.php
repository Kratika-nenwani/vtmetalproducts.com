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
                        <h2 class="title">Podium</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Podium</li>
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
                        <img src="assets/img/services-images/podium-images-2.png" alt="" height="500px;">
                    </div>
                    <div class="services-details-content">
                        <h2 class="title">Modified roofing beautiful wooden house with big windows</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in somes form, by injected humour, or randomised words which don't look even slightlcy believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of textss. All the Lorem Ipsum generators on the Internet tend to repeat</p>
                        <div class="service-benefits-wrap">
                            <div class="row">
                                <div class="col-lg-7 order-0 order-lg-2">
                                    <div class="benefits-img">
                                        <img src="assets/img/services-images/podium-images-1.png" alt="" style="height: 250px" width="600px;">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="benefits-content">
                                        <h2 class="title">Our Service Benefits</h2>
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
    <!-- services-details-area-end -->
</main>
<!-- mian-area-end -->
@endsection
@section('jscontent')
@endsection