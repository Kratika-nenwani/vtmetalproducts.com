@extends('index-main')
@section('csscontent')
    <style>
        /* Custom CSS */
        .technology {
            display: flex;
            align-items: center;
        }

        .image-container {
            width: 600px;
            /* Adjust this value as needed */
            height: 400px;
            /* Adjust this value as needed */
            margin-right: 40px;
            /* Adjust margin as needed */
            overflow: hidden;
            /* Ensure images don't overflow */
        }

        .image-container img {
            width: 100%;
            height: auto;
        }

        .content {
            flex: 1;
            /* Take remaining space */
            padding: 0 20px;
            /* Add padding to create space between image and content */
        }

        /* Adjust image size for smaller screens */
        @media (max-width: 768px) {
            .image-container {
                width: 100%;
                height: auto;
                margin-right: 0;
            }
        }
        @media (max-width: 1236px) {
            .image-container {
                width: 100%; /* Set width to half of the container */
                margin-right: 20; /* Remove right margin */
            }
        }
        .card {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Adjust values as per your preference */

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
                        <h2 class="title">Panels</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main') }}">Home</a></li>
                                 <li class="breadcrumb-item"><a href="{{ Route('catagory') }}">All Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Panels</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <h1 style="text-align: center;color: #FE5D14;font-size:45px;margin-top:50px"><b>Panels</b></h1>
    <section class="contact-area pt-30 pb-120">
        <div class="container">

            <!-- PCC Panels -->
            <!--<div class="technology row py-3" style="text-align: center">-->
            <!--    <div class="col-lg-6"> -->
            <!--        <div class="project-item-two">-->
            <!--            <div class="card">-->
            <!--                <div class="card-body">-->
            <!--                    <div class="project-thumb-two">-->
            <!--                        <a href="{{route('ms_panel')}}">-->
            <!--                            <img src="{{ asset('assets/img/products-list/pcc-panel.png')}}" alt="img" height="auto" width="100%" id="image-1">-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                    <h3 style="text-align: center;padding-top:5px;color:#FE5D14"></h3>-->
            <!--                    <div onclick="redirectToProduct('{{ route('ms_panel')}}')">-->
                                    <!--<h2 class="title"><a href="{{ route('ms_panel') }}">Explore Product</a></h2>-->
                                    <!--<a href="{{ route('ms_panel')}}" class="link-btn"><i class="fas fa-arrow-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-6">-->
            <!--        <div class="content">-->
            <!--            <h3 style="color: #FE5D14">MS Panels</h3>-->
            <!--            <p>The Power Control Center (PCC) panel is a central hub in electrical systems, distributing power-->
            <!--                to equipment and machinery within a facility. It ensures efficient power management and-->
            <!--                integrates protective measures against voltage fluctuations, overloads, and short circuits.-->
            <!--                Additionally, modern PCC panels offer remote monitoring and control features, enhancing-->
            <!--                operational efficiency and maintenance convenience.</p>-->
            <!--        </div>-->
            <!--        <div class="learn-more-btn text-center mt-25">-->
            <!--            <a href="{{ Route('ms_panel')}}" class="btn">Explore Product</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- MCC Panels -->
            <!--<div class="technology row py-3" style="text-align: center">-->
            <!--    <div class="col-lg-6"> -->
            <!--        <div class="project-item-two">-->
            <!--            <div class="card">-->
            <!--                <div class="card-body">-->
            <!--                    <div class="project-thumb-two">-->
            <!--                        <a href="{{route('ss_panel')}}">-->
            <!--                            <img src="{{ asset('assets/img/products-list/mcc-panel-image.jpg')}}" alt="img" height="auto" width="100%" id="image-1">-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                    <h3 style="text-align: center;padding-top:5px;color:#FE5D14"></h3>-->
            <!--                    <div onclick="redirectToProduct('{{ route('ss_panel') }}')">-->
                                    <!--<h2 class="title"><a href="{{ route('ss_panel') }}">Explore Product</a></h2>-->
                                    <!--<a href="{{ route('ss_panel') }}" class="link-btn"><i class="fas fa-arrow-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--                    <div class="col-lg-6">-->
            <!--        <div class="content">-->
            <!--            <h3 style="color: #FE5D14">SS Panels</h3>-->
            <!--            <p>The Motor Control Center (MCC) panel is crucial in industrial settings, managing power-->
            <!--                distribution to motors and equipment. It regulates motor functions, distributes power-->
            <!--                efficiently, and safeguards equipment with monitoring and protective features. These panels-->
            <!--                streamline operations and maintenance, ensuring safety and optimal performance in industrial-->
            <!--                environments.</p>-->
            <!--        </div>-->
            <!--        <div class="learn-more-btn text-center mt-25">-->
            <!--            <a href="{{ Route('ss_panel')}}" class="btn">Explore Product</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

            <!-- VFD Panels -->
            <!--<div class="technology row py-3" style="text-align: center">-->
            <!--    <div class="col-lg-6"> -->
            <!--        <div class="project-item-two">-->
            <!--            <div class="card">-->
            <!--                <div class="card-body">-->
            <!--                    <div class="project-thumb-two">-->
            <!--                        <a href="{{route('modular_panel')}}">-->
            <!--                            <img src="{{ asset('assets/img/products-list/vfd-panel.png')}}" alt="img" height="auto" width="100%" id="image-1">-->
            <!--                        </a>-->
            <!--                    </div>-->
            <!--                    <h3 style="text-align: center;padding-top:5px;color:#FE5D14"></h3>-->
            <!--                    <div onclick="redirectToProduct('{{ route('modular_panel')}}')">-->
                                    <!--<h2 class="title"><a href="{{ route('modular_panel') }}">Explore Product</a></h2>-->
                                    <!--<a href="{{ route('modular_panel') }}" class="link-btn"><i class="fas fa-arrow-right"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-6">-->
            <!--        <div class="content">-->
            <!--            <h3 style="color: #FE5D14">Modular Panels</h3>-->
            <!--            <p>VFD panels regulate motor speed and torque through frequency and voltage adjustments, optimizing-->
            <!--                energy usage for cost-effectiveness. Their precise control capabilities ensure smooth-->
            <!--                acceleration and deceleration, reducing equipment wear and extending lifespan. Additionally, VFD-->
            <!--                panels enable remote monitoring and diagnostics, facilitating proactive maintenance and-->
            <!--                uninterrupted industrial processes. In essence, they are essential components of modern-->
            <!--                industrial automation.</p>-->
            <!--        </div>-->
            <!--        <div class="learn-more-btn text-center mt-25">-->
            <!--            <a href="{{ Route('modular_panel')}}" class="btn">Explore Product</a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->

          <div class="row">
             <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="{{route('ms_panel')}}"><img src="assets/img/ms-panels/panels-11.jpg"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="{{route('ms_panel')}}" class="tag">MS Panels</a>
                    </div>
                </div>
            </div>
             <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="{{route('ss_panel')}}"><img src="assets/img/ss-panels/panels-1.jpg"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="{{route('ss_panel')}}" class="tag">SS Panels</a>
                    </div>
                </div>
            </div>
             <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="{{route('modular_panel')}}"><img src="assets/img/modular-panels/panels-31.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="{{route('modular_panel')}}" class="tag">Modular Panels</a>
                    </div>
                </div>
            </div>
          </div>
            </div>

        </div>
    </section>

    <!-- contact-area-end -->
@endsection
@section('jscontent')
    <script>
        // JavaScript for vertically aligning content
        function alignContentVertically() {
            var contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                var marginTop = (content.parentElement.clientHeight - content.clientHeight) / 2;
                content.style.marginTop = marginTop + 'px';
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            alignContentVertically();
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
