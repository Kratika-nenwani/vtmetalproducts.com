@extends('index-main')
@section('csscontent')
<style>
    li{
        font-weight: 800;
        font-size: 24px;
        text-decoration: black;
        padding-bottom: 7px;
    }
    p{
        font-weight: 650;
        font-size: 17px;
        padding-bottom: 7px;
    }
</style>
@endsection
@section('content') 

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
        <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Automobile Parts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Automobile Parts</li>
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
                        <img src="assets/img/services-images/automobile-image-1.jpg" alt="" style="height:500px" >
                    </div>
                    <div class="services-details-content">
                        <h2 class="title">Comprehensive Overview of Automobile Parts:</h2>
                       <ul>
                        <li> <b>
                            Engine Components
                        </b> </li>
                           <p>
                            The heart of any vehicle lies within its engine, comprising intricate parts like pistons, crankshafts, and camshafts. Pistons move up and down within cylinders, while the crankshaft converts this linear motion into rotational force. Camshafts regulate the opening and closing of valves, crucial for the combustion process. Together, these components form a symphony of motion, powering the vehicle forward with efficiency and reliability.
                           </p>
                        <li> <b>
                            Transmission Systems
                        </b> </li>
                        <p>
                            Transmission systems play a vital role in transferring power from the engine to the wheels. Components like gears, clutches, and torque converters facilitate this process seamlessly. Gears enable the driver to adjust speed ratios, while clutches engage and disengage power transmission. Torque converters ensure smooth power delivery, particularly in automatic transmissions. With proper functioning, these parts ensure optimal performance and driving experience.
                        </p>
                        <li> <b>
                            Suspension and Steering
                        </b> </li>
                        <p>
                            A vehicle's suspension and steering system are paramount for stability and control. Key parts include shock absorbers, struts, and control arms. Shock absorbers dampen vibrations and bumps, enhancing ride comfort. Struts provide structural support and aid in vehicle maneuverability. Control arms link the suspension to the chassis, allowing for smooth handling and cornering. Together, these components ensure a balanced ride and precise steering response.
                        </p>
                       </ul>
                        <div class="service-benefits-wrap">
                            <div class="row">
                                <div class="col-lg-7 order-0 order-lg-2">
                                    <div class="benefits-img">
                                        <img src="assets/img/services-images/automobile-image-2.jpg" alt="" style="height: 250px" width="600px;">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="benefits-content">
                                        <h2 class="title">Our Service Benefits</h2>
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-check-circle"></i>Quality Assurance</li>
                                            <li><i class="fas fa-check-circle"></i>Wide Range of Selection</li>
                                            <li><i class="fas fa-check-circle"></i>Competitive Pricing</li>
                                            <li><i class="fas fa-check-circle"></i>Convenience</li>
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

   


<!-- mian-area-end -->
@endsection
@section('jscontent')
@endsection