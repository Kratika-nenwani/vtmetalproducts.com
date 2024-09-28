@extends('index-main')
@section('csscontent')
 <style>
    @media screen and (max-width: 600px) {
     #kkk{
        width:100%;
    }
    
     @media screen and (max-width: 600px) {
    .header-image img{
        margin-left:1px;
    }
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
                        <h2 class="title">Modular Panels</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="{{ Route('index_main') }}">Home</a></li>
                                 <li class="breadcrumb-item"><a href="{{ Route('catagory') }}">All Categories</a></li>
                                  <li class="breadcrumb-item"><a href="{{ Route('panels') }}">Panels</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Modular Panels</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb-area-end -->

    <!-- services-details-area -->

    <section style="margin-top:60px;margin-bottom:60px">

        <div class="container">

            <h1 style="text-align: center;color: #FE5D14;margin-top:50px"><b>Modular Panels</b></h1>

            <br><br>

            <div class="header-image" style="margin-left:30px">
                <img src="assets/img/modular-panels/panels-31.png" alt="" width="60%" height="400px"
                    style="border-radius: 12px;" id="kkk">
            </div>
            <br><br>
            <div class="content" style="width: 90%;">
                <ul>
                    <li>
                        <p>
                           Our Modular panels are designed to address various challenges and requirements in the industry, offering several advantages over traditional building methods.Flexibility is a key characteristic of modular panels.These panels are designed to fit together seamlessly, allowing efficient process for you. As your trusted provider of premium metal solutions, we offer a range of categories tailored to meet your specific needs.Our modular panels are specifically chosen for their unparalleled versatility, flexibility and  finally helps transforming your vision into reality with ease.

                        </p>
                    </li>
                </ul>    
         </div>
                        <div class="row engineer-active">
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/modular-panels/panels-32.png"
                                        alt=""></a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/modular-panels/panels-33.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/modular-panels/panels-33.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/modular-panels/panels-34.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="engineer-item" style="background-color: white">
                            <div class="engineer-thumb">
                                <a href="#"><img src="assets/img/modular-panels/panels-35.png"
                                        alt=""height="300px" width="911px"></a>
                            </div>
                           
                        </div>
                    </div>
                  </div>
        <!-- <div class="service-benefits-wrap">-->
        <!--    <div class="row">-->
        <!--        <div>-->
        <!--            <div class="benefits-content"style="margin-left:30px">-->
        <!--                <h2 class="title">Our Service Benefits</h2>-->
        <!--                <ul class="list-wrap">-->
        <!--                    <li><i class="fas fa-check-circle"></i>Quality Assurance</li>-->
        <!--                    <li><i class="fas fa-check-circle"></i>Wide Range of Selection</li>-->
        <!--                    <li><i class="fas fa-check-circle"></i>Competitive Pricing</li>-->
        <!--                    <li><i class="fas fa-check-circle"></i>Convenience</li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
       
    </section>
    
    <!-- services-details-area-end -->
@endsection
@section('jscontent')
<script>
// Wait for the document to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Select all rows with the class "row engineer-active"
    var rows = document.querySelectorAll('.row.engineer-active');
    
    // Loop through each row
    rows.forEach(function(row) {
        // Select all images within the row
        var images = row.querySelectorAll('.engineer-thumb img');
        
        // Initialize variable to keep track of minimum height
        var minHeight = Number.MAX_SAFE_INTEGER;
        
        // Loop through each image to find the minimum height
        images.forEach(function(img) {
            // Get the height of the current image
            var imgHeight = img.clientHeight;
            
            // Update minHeight if current image height is smaller
            if (imgHeight < minHeight) {
                minHeight = imgHeight;
            }
        });
        
        // Set the height of all cards in the row to the minHeight
        var cards = row.querySelectorAll('.engineer-item');
        cards.forEach(function(card) {
            card.style.height = minHeight + 'px';
        });
    });
});

</script>
@endsection
