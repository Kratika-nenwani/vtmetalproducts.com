@extends('index-main')
@section('csscontent')
<style>
    .image {
        height: 300px; /* Adjust this value as needed */
        width: 100%;
        object-fit: cover;
        
    }
     .image:hover {
        cursor: pointer;
    }
    /* Styles for the zoomed image container */
    .zoom-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
        display: none; /* Initially hidden */
        justify-content: center;
        align-items: center;
        overflow: hidden;
        z-index: 9999; /* Ensure it appears above other content */
    }
    
    /* Styles for the zoomed image */
    .zoomed-image {
        max-width: 90%;
        max-height: 90%;
        width: 60%; /* Adjusts width dynamically */
        height: auto; /* Adjusts height dynamically */
    }
    
    /* Styles for the close button */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #fff;
        font-size: 24px;
        z-index: 10000; /* Ensure it appears above the zoomed image */
    }


</style>
@endsection
@section('content')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
            <div class="breadcrumb-shape" data-background="{{ asset('assets/img/images/breadcrumb_shape.png') }}"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Gallery</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ Route('gallery') }}">Gallery</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery Images</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-details-area -->
        <section>
            <div class="container">
                <div class="row justify-content-center">
                        <div class="images" style="padding-top:45px">
                            <div class="row" style="padding-bottom: 40px">
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images1/' . $data->image1) }}" alt="">
                                </div>
                                
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images2/' . $data->image2) }}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images3/' . $data->image3) }}" alt="">
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 40px">
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images4/' . $data->image4) }}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images5/' . $data->image5) }}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images6/' . $data->image6) }}" alt="">
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 40px">
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images7/' . $data->image7) }}" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <img class="image" src="{{ asset('Images8/' . $data->image8) }}" alt="">
                                </div>
                               
                            </div>
                            <div class="zoom-container">
                                <span class="close-btn">&times;</span>
                                <img class="zoomed-image" src="" alt="">
                            </div>
                        </div>
                </div>
            </div>
            <br><br>
        </section>

        <!-- services-details-area-end -->
    </main>
    <!-- mian-area-end -->
@endsection
@section('jscontent')
<script>
    window.onload = function() {
        adjustImageSizes();
    };

    function adjustImageSizes() {
        var rows = document.querySelectorAll('.row');

        rows.forEach(function(row) {
            var maxHeight = 0;

            var images = row.querySelectorAll('.image');
            images.forEach(function(image) {
                if (image.offsetHeight > maxHeight) {
                    maxHeight = image.offsetHeight;
                }
            });

            images.forEach(function(image) {
                image.style.height = maxHeight + 'px';
            });
        });
    }
</script>
<script>
// Get all images with the 'image' class
// Get all images with the 'image' class
const images = document.querySelectorAll('.image');

// Get the zoom container, zoomed image, and close button
const zoomContainer = document.querySelector('.zoom-container');
const zoomedImage = document.querySelector('.zoomed-image');

// Function to handle click on an image
function handleImageClick(event) {
    // Get the clicked image source
    const imageSource = event.target.src;
    
    // Set the zoomed image source
    zoomedImage.src = imageSource;
    
    // Show the zoom container
    zoomContainer.style.display = 'flex';
    
    // Prevent default behavior to avoid triggering the click event on window
    event.stopPropagation();
}

// Add click event listener to each image
images.forEach(function(image) {
    image.addEventListener('click', handleImageClick);
});

// Function to handle click outside of the zoomed image container
function handleOutsideClick(event) {
    // Hide the zoom container
    zoomContainer.style.display = 'none';
}

// Add click event listener to the window to detect clicks
window.addEventListener('click', handleOutsideClick);




</script>
@endsection
