@extends('index-main')
@section('csscontent')
<style>
.image {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.founder {
    text-align: center;
}

.founder img {
    /* Optional: Adjust the width of the images */
    max-width: 100%;
}

.name {
    font-size: 30px; /* Adjust font size as needed */
    margin-top: 25px; /* Adjust margin as needed */
    font-weight:800;
}
</style>
@endsection
@section('content')
<!-- mian-area -->


<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
    <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ Route('index_main')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about-area pb-120 pt-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6 order-0 order-lg-2">
                <div class="about-img-wrap">
                    <div class="abc">
                        <img src="assets/img/founders/facility-image.png"alt="" class="wow fadeInRight"
                        data-wow-delay=".2s">
                    </div>
                    <div class="about-experiences-wrap">
                        <!--<div class="experiences-item">-->
                        <!--    <div class="icon">-->
                        <!--        <img src="assets/img/icon/about_icon01.svg" alt="">-->
                        <!--    </div>-->
                        <!--    <div class="content">-->
                        <!--        <h6 class="title">We have more than 20 years of experiences</h6>-->
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
                        <h2 class="title tg-element-title">Transforming Sheet Metal into Masterpieces
                                                                                
                        </h2>
                    </div>
                    <p style="font-size: 18px"><b>VT Metal Products: Crafting Excellence Since 2004, your trusted source for premium sheet metal solutions. With a legacy of quality and innovation, we specialize in customizing your idea into products better than your imagination.</b>
                    </p>
                    <div class="about-list">
                        <ul class="list-wrap">
                            <li><i class="fas fa-check"></i>Highly equipped with leading facilities to achieve excellence.</li>
                            <li><i class="fas fa-check"></i>Precision engineering and enduring quality since 2004.</li>
                            <li><i class="fas fa-check"></i>Trusted provider of premium metal solutions.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <br><br>
</section>
<section style="margin-bottom:40px;">
    <h2 class="title tg-element-title" style="color: #FE5D14;text-align:center;font-size:50px">Founders</h2>
             
<div class="image">
    <div class="founder">
        <img src="assets/img/founders/founder-image1.png" alt="">
        <p class="name">Mr.Sunil Mehta</p>
    </div>
    <div class="founder">
        <img src="assets/img/founders/founder-image2.png" alt="">
        <p class="name">Mr.Aditya Mehta</p>
    </div>
</div>
  <br><br>
</section>
<!-- about-area-end -->


<!-- work-area -->
{{-- <section class="work-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-50">
                    <span class="sub-title">Working Plan</span>
                    <h2 class="title">Roof Plan Working Process</h2>
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

<!-- history-area -->
{{-- <section class="history-area pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="history-img-wrap">
                    <ul class="list-wrap">
                        <li>
                            <img src="assets/img/images/history_img01.jpg" alt="">
                        </li>
                        <li>
                            <img src="assets/img/images/history_img02.jpg" alt="">
                            <a href="https://www.youtube.com/watch?v=PFkXoK5x5KE" class="play-btn popup-video pulse"><i class="fas fa-play"></i></a>
                        </li>
                        <li>
                            <img src="assets/img/images/history_img03.jpg" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="history-content">
                    <div class="section-title mb-20">
                        <span class="sub-title">Our Roofing History</span>
                        <h2 class="title">Roofing when an unknown printer took to make type book</h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majori our as have suffered alteration in some form, by injected humour, or randomised word which don't look even slightly believable.</p>
                    <div class="history-list">
                        <ul class="list-wrap">
                            <li><i class="fas fa-check-circle"></i>Technology management</li>
                            <li><i class="fas fa-check-circle"></i>Roofing Solutions</li>
                            <li><i class="fas fa-check-circle"></i>Modern Worker Working here</li>
                            <li><i class="fas fa-check-circle"></i>Quick Response</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- history-area-end -->

<!-- area-bg -->
{{-- <div class="area-bg-five" data-background="assets/img/bg/area_bg05.jpg"> --}}

    <!-- team-area -->
    {{-- <section class="inner-team-area pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-60">
                        <span class="sub-title">Professional Team</span>
                        <h2 class="title">Professional Team Member</h2>
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

    <!-- testimonial-area -->
    {{-- <section class="inner-testimonial-area parallax pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">Our Testimonial</span>
                        <h2 class="title">What Our Client Feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testimonial-inner">
                        <div class="testimonial-active-two">
                            <div class="testimonial-item-two">
                                <div class="testimonial-avatar-two">
                                    <img src="assets/img/images/h2_testi_avatar01.png" alt="">
                                </div>
                                <div class="testimonial-content-two">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>There are many varation of paissages of Lorem as the Ipum available but our majority have sufferied alterations in some form, by our by injected hsumour randomised worids which don't looks even slightly there as believable. If you going to use a passage of Lorem Ipsum.</p>
                                    <div class="content-bottom">
                                        <h4 class="title">Darrell Steward</h4>
                                        <span>Roofing Expert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item-two">
                                <div class="testimonial-avatar-two">
                                    <img src="assets/img/images/h2_testi_avatar02.png" alt="">
                                </div>
                                <div class="testimonial-content-two">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum are many varation of paissages of Lorem as the Ipum available but our majority have sufferied alterations in some form, by our by injected hsumour randomised worids which don't looks even slightly there as believable. If you going to use a passage of Lorem Ipsum.</p>
                                    <div class="content-bottom">
                                        <h4 class="title">Robert C. Simmons</h4>
                                        <span>Roofing Expert</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item-two">
                                <div class="testimonial-avatar-two">
                                    <img src="assets/img/images/h2_testi_avatar03.png" alt="">
                                </div>
                                <div class="testimonial-content-two">
                                    <div class="content-top">
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>Lorem Ipsum are many varation of paissages of Lorem as the Ipum available but our majority have sufferied alterations in some form, by our by injected hsumour randomised worids which don't looks even slightly there as believable. If you going to use a passage of Lorem Ipsum.</p>
                                    <div class="content-bottom">
                                        <h4 class="title">Karikoka Ahli</h4>
                                        <span>Executive Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-avatar-wrap">
                <ul class="list-wrap">
                    <li>
                        <img src="assets/img/images/h4_testi_avatar01.png" class="layer" data-depth="0.1" alt="">
                    </li>
                    <li>
                        <img src="assets/img/images/h4_testi_avatar02.png" class="layer" data-depth="0.2" alt="">
                    </li>
                    <li>
                        <img src="assets/img/images/h4_testi_avatar03.png" class="layer" data-depth="0.05" alt="">
                    </li>
                    <li>
                        <img src="assets/img/images/h4_testi_avatar03.png" class="layer" data-depth="0.2" alt="">
                    </li>
                    <li>
                        <img src="assets/img/images/h4_testi_avatar02.png" class="layer" data-depth="0.05" alt="">
                    </li>
                    <li>
                        <img src="assets/img/images/h4_testi_avatar01.png" class="layer" data-depth="0.1" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section> --}}
    <!-- testimonial-area-end -->

{{-- </div> --}}
<!-- area-bg-end -->

<!-- brand-area -->
{{-- <div class="inner-brand-area pt-120 pb-120">
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
</div> --}}
<!-- brand-area-end -->


<!-- mian-area-end -->
@endsection
@section('jscontent')

@endsection
