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
                            <h2 class="title">Services</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{Route('index')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="inner-services-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-50">
                            <span class="sub-title">What We Do</span>
                            <h2 class="title">Our Services Areas</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".2s" data-background="assets/img/services/services_item01.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon01.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Siding Corner</a></h2>
                                <h2 class="number">01</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Siding Corner</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".4s" data-background="assets/img/services/services_item02.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon02.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roofing Layers</a></h2>
                                <h2 class="number">02</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roofing Layers</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".6s" data-background="assets/img/services/services_item03.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon03.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roof Repairings</a></h2>
                                <h2 class="number">03</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roof Repairings</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".3s" data-background="assets/img/services/services_item04.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon04.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roof Renovation</a></h2>
                                <h2 class="number">04</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roof Renovation</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".6s" data-background="assets/img/services/services_item05.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon05.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Damage Roofing</a></h2>
                                <h2 class="number">05</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Damage Roofing</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item wow fadeInUp" data-wow-delay=".9s" data-background="assets/img/services/services_item06.jpg">
                            <div class="services-icon">
                                <img src="assets/img/icon/services_icon06.svg" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roofing Animation</a></h2>
                                <h2 class="number">06</h2>
                            </div>
                            <div class="services-overlay-content">
                                <h2 class="title"><a href="{{route('service-details')}}">Roofing Animation</a></h2>
                                <p>There are many variations of passages of Lorem a Ipsum available, but the majority have suffered ali teration in some form</p>
                                <a href="{{route('service-details')}}" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <!-- area-bg -->
        <div class="area-bg">
            <div class="area-background-img jarallax" data-background="assets/img/bg/area_bg01.jpg"></div>

            <!-- counter-area -->
            <div class="counter-area-two">
                <div class="container">
                    <div class="counter-inner wow fadeInUp" data-wow-delay=".2s">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="counter-item-two">
                                    <div class="counter-icon">
                                        <img src="assets/img/icon/counter_icon01.svg" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <span class="count odometer" data-count="1500"></span>
                                        <p>Project Complete</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="counter-item-two">
                                    <div class="counter-icon">
                                        <img src="assets/img/icon/counter_icon02.svg" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <span class="count odometer" data-count="8562"></span>
                                        <p>Satisfied Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="counter-item-two">
                                    <div class="counter-icon">
                                        <img src="assets/img/icon/counter_icon03.svg" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <span class="count odometer" data-count="450"></span>
                                        <p>Experienced Staff</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="counter-item-two">
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
            </div>
            <!-- counter-area-end -->

            <!-- appointment-area -->
            <section class="appointment-area pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title white-title mb-60">
                                <span class="sub-title">Your roof require professional attention</span>
                                <h2 class="title">Book Your Appointment</h2>
                            </div>
                        </div>
                    </div>
                    <div class="appointment-inner" data-background="assets/img/bg/appointment_bg.jpg">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="appointment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="name" type="text" placeholder="Fast Name">
                                                    <label for="name"><i class="fas fa-user"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="lastName" type="text" placeholder="Last Name">
                                                    <label for="lastName"><i class="fas fa-user"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="phone" type="text" placeholder="Phone Number">
                                                    <label for="phone"><i class="fas fa-phone-alt"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input id="email" type="text" placeholder="Email Address">
                                                    <label for="email"><i class="fas fa-envelope"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input id="location" type="text" placeholder="Address">
                                                    <label for="location"><i class="fas fa-map-marker-alt"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp select-grp">
                                                    <select name="city" class="orderby">
                                                        <option value="City / Town">City / Town</option>
                                                        <option value="Dhaka, Bangladesh">Dhaka, Bangladesh</option>
                                                        <option value="Baltimore, MD">Baltimore, MD</option>
                                                        <option value="New York, NY">New York, NY</option>
                                                        <option value="New Orleans, LA">New Orleans, LA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp select-grp">
                                                    <select name="state" class="orderby">
                                                        <option value="State">State</option>
                                                        <option value="Dhaka, Bangladesh">Dhaka, Bangladesh</option>
                                                        <option value="Baltimore, MD">Baltimore, MD</option>
                                                        <option value="New York, NY">New York, NY</option>
                                                        <option value="New Orleans, LA">New Orleans, LA</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-grp">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn">Request Submit Now</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="appointment-img">
                                    <img src="assets/img/images/appointment_img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- appointment-area-end -->

        </div>
        <!-- area-bg-end -->

        <!-- support-area -->
        <section class="support-area pt-115 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="support-item">
                            <div class="support-icon">
                                <img src="assets/img/icon/support_icon01.svg" alt="">
                            </div>
                            <div class="support-content">
                                <h4 class="title">Quick Response</h4>
                                <p>There are many variations of passages Ipsum available but the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="support-item">
                            <div class="support-icon">
                                <img src="assets/img/icon/support_icon02.svg" alt="">
                            </div>
                            <div class="support-content">
                                <h4 class="title">Quick Response</h4>
                                <p>There are many variations of passages Ipsum available but the</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="support-item">
                            <div class="support-icon">
                                <img src="assets/img/icon/support_icon03.svg" alt="">
                            </div>
                            <div class="support-content">
                                <h4 class="title">Quick Response</h4>
                                <p>There are many variations of passages Ipsum available but the</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- support-area-end -->

    </main>
    <!-- mian-area-end -->
@endsection
@section('jscontent')
    
@endsection
