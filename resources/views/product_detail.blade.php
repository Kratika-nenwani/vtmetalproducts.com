@extends('index-main')
@section('csscontent')
    <style>
        li {
            font-weight: 800;
            font-size: 24px;
            text-decoration: black;
            padding-bottom: 7px;
        }

        p {
            font-weight: 650;
            font-size: 19px;
            padding-bottom: 7px;
        }
.services-details-thumb img{
    height:auto;
    width:80%;
}
           @media only screen and (max-width: 500px) {
    .services-details-thumb img {
        width: 100%;
         height:auto;
    }
}
.slider-container {
    position: relative;
    overflow: hidden;
}

.slider {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    flex: 0 0 auto;
    width: 100%;
}

.prev-btn,
.next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 24px;
    z-index: 1;
}

.prev-btn {
    left: 10px;
}

.next-btn {
    right: 10px;
}

    </style>
@endsection
@section('content')
    <!-- breadcrumb-area -->

    <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
        <div class="breadcrumb-shape" data-background="{{ asset('assets/img/images/breadcrumb_shape.png') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{ $data->name }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ Route('catagory') }}">All Categories</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $data->name }}</li>
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
                            @php
             // Decode the JSON string to an array if necessary
             $images = json_decode($data->images, true);
         
             // Get the first image path
             $firstImage = $images[0] ?? ''; // Use empty string as fallback if no images
         @endphp
                             <img src="{{ asset('CategoryImages/' . $firstImage) }}" alt="" height="300px" width="911px">
                        </div>
                        <div class="services-details-content">
                            <h2 class="title">{!! $data->description !!}</h2>
                            <div class="service-benefits-wrap">
                                <div class="row">
                                    <!--<div class="col-lg-7 order-0 order-lg-2">-->
                                    <!--    <div class="benefits-img">-->
                                    <!--        <img src="{{ asset('CategoryImages1/' . $data->image1) }}" alt=""-->
                                    <!--            style="height: 250px" width="600px;">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    <!--<div class="col-lg-5">-->
                                    <!--    <div class="benefits-content">-->
                                    <!--        <h2 class="title">Our Service Benefits</h2>-->
                                    <!--        <ul class="list-wrap">-->
                                    <!--            <li><i class="fas fa-check-circle"></i>Quality Assurance</li>-->
                                    <!--            <li><i class="fas fa-check-circle"></i>Wide Range of Selection</li>-->
                                    <!--            <li><i class="fas fa-check-circle"></i>Competitive Pricing</li>-->
                                    <!--            <li><i class="fas fa-check-circle"></i>Convenience</li>-->
                                    <!--        </ul>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <aside class="services-sidebar">
                        <div class="services-widget widget-bg" data-background="assets/img/services/sw_bg.jpg">
                            <h4 class="widget-title">Get a free quote</h4>
                            <form action="{{ Route('save-query') }}" class="sidebar-form" id="contact-form" method="POST">
                                @csrf
                                <div class="form-grp">
                                    <input id="fname" name="fname" type="text" placeholder="First Name">
                                </div>
                                <div class="form-grp">
                                    <input id="lname" name="lname" type="text" placeholder="Last Name">
                                </div>
                                <div class="form-grp">
                                    <input id="email" name="email" type="email" placeholder="Email Address">
                                </div>
                                 <div class="form-grp">
                                    <input id="phone" name="phone" type="text" placeholder="Phone">
                                </div>
                                 <div class="form-grp">
                                    <input id="subject" name="subject" type="text" placeholder="subject">
                                </div>
                                <div class="form-grp">
                                    <textarea id="message" name="message" placeholder="Your Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-two">Send Message</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
<br><br><br><br>
<div class="row engineer-active" id="engineer-slider">
    @php
    $images = json_decode($data->images, true); // Convert JSON to array if needed
@endphp

@if(is_array($images))
    @foreach($images as $image)
        @if($image)
            <div class="col-lg-4"> 
                <div class="engineer-item" style="background-color: white"> 
                    <div class="engineer-thumb" style="height: 400px; overflow: hidden;"> 
                        <a><img src="{{ asset('CategoryImages/' . $image) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;"></a> 
                    </div> 
                </div> 
            </div> 
        @endif
    @endforeach
@else
    <p>No images available.</p>
@endif

</div>




        </div>
    </section>
    <section>
        
    </section>
    <!-- services-details-area-end -->
@endsection

@section('jscontent')
<script>
    // Get all engineer items
    const engineerItems = document.querySelectorAll('.engineer-item');

    // Function to set equal height
    function setEqualHeight(elements) {
        let maxHeight = 0;
        elements.forEach(element => {
            const height = element.offsetHeight;
            if (height > maxHeight) {
                maxHeight = height;
            }
        });
        elements.forEach(element => {
            element.style.height = `${maxHeight}px`;
        });
    }

    // Call the function initially
    setEqualHeight(engineerItems);

    // Call the function on window resize
    window.addEventListener('resize', function() {
        setEqualHeight(engineerItems);
    });
</script>
@endsection
