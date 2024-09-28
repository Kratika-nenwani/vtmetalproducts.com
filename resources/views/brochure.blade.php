@extends('index-main')
@section('csscontent')
    <style>
        .headings {
            display: flex;
            justify-content: space-around;
            /* Adjusted */
            align-items: center;
            text-align: center;
        }

        .headings h3 {
            margin: 0;
            /* Reset default margin */
        }

        .custom-img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            /* Adjust spacing between images */
           
            /* Add shadow effect */
        }

        /* Add your styles here */
        .btn-heading {
            background-color: transparent;
            color: #131944;
           
            border: none;
            cursor: pointer;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .btn-heading.active {
            border-bottom: 3px solid #FE5D14;
            color: white;
        }

        .btn-heading:hover {
          border-bottom: 3px solid #FE5D14;
            color: white;
            transition: border-bottom 0.3s ease;
        }


        .custom-img {
            max-width: 100%;
            height: auto;
        }

        .custom-img {
            max-width: 100%;
            height: auto;
            padding: 10px;
            /* Add padding to the image */
        }

        .card {
            height: 100%;
            /* Ensure all cards have equal height */
            box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.3); /* Add box shadow */
        }
        .card:hover {
    box-shadow: 8px 8px 16px rgba(0, 0, 0, 0.4); /* Increase box shadow on hover */
}
#btn-images{
    font-size: 40px;
    color: #131944;
    font-weight: 700;
}
#btn-videos{
    font-size: 40px;
    color: #131944;
    font-weight: 700;
}
@media screen and (max-width: 400px) {
    #btn-images{
    font-size: 25px;
    font-weight: 700;
}
#btn-videos{
    font-size: 25px;
    font-weight: 700;
}
}
    </style>
    <link rel="stylesheet" href="styles.css">
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" style="background-color:#011230">
        <div class="breadcrumb-shape" data-background="assets/img/images/breadcrumb_shape.png"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Brochure</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Brochure</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
   
    <h1 style="text-align: center;color: #FE5D14;margin-top:50px;font-size:50px;font-weight:800;"><b>All Brochures</b></h1>
    <br> <br>

    <section class="contact-area pt-30 pb-120">
        <div class="container">
<div class="row" style="margin-bottom: 30px;">
    <div class="col-lg-4" style="margin-bottom: 20px;">
        <div class="card">
            <a href="#">
                <img src="assets/img/products-list/mcc-panel-image.jpg" alt="Panels" class="card-img-top custom-img">
                <div class="card-body" style="padding:1rem 1rem;">
                    <h5 class="card-title">Panel Brochure</h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4" style="margin-bottom: 20px;">
        <div class="card">
            <a href="#">
                <img src="assets/img/products-list/kitchen-image8.png" alt="Almirah" class="card-img-top custom-img">
                <div class="card-body" style="padding:1rem 1rem;">
                    <h5 class="card-title">Modular Kitchen Brochure</h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4" style="margin-bottom: 20px;">
        <div class="card">
            <a href="#">
                <img src="assets/img/products-list/fire-flush-door-1.png" alt="Almirah" class="card-img-top custom-img">
                <div class="card-body" style="padding:1rem 1rem;">
                    <h5 class="card-title">Fire/Flush Door Brochure</h5>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4" style="margin-bottom: 20px;">
        <div class="card">
            <a href="#">
                <img src="assets/img/products-list/automobile-image3.png" alt="Almirah" class="card-img-top custom-img">
                <div class="card-body" style="padding:1rem 1rem;">
                    <h5 class="card-title">Brochure</h5>
                </div>
            </a>
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
        // Function to vertically align content within each technology div
        function alignContentVertically() {
            // Get all elements with class "content"
            var contents = document.querySelectorAll('.content');

            // Loop through each content element
            contents.forEach(function(content) {
                // Calculate the top margin to vertically center the content
                var marginTop = (content.parentElement.clientHeight - content.clientHeight) / 2;

                // Apply the top margin
                content.style.marginTop = marginTop + 'px';
            });
        }

        // Call the function when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', function() {
            alignContentVertically();
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Get the maximum height among all images
            var maxHeight = 0;
            $('.custom-img').each(function() {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            // Set the maximum height to all images
            $('.custom-img').height(maxHeight);
        });
    </script>
    <script src="script.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnImages = document.getElementById("btn-images");
            const btnVideos = document.getElementById("btn-videos");
            const contentImages = document.getElementById("content-images");
            const contentVideos = document.getElementById("content-videos");

            btnImages.addEventListener("click", function() {
                contentImages.style.display = "block";
                contentVideos.style.display = "none";
            });

            btnVideos.addEventListener("click", function() {
                contentImages.style.display = "none";
                contentVideos.style.display = "block";
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnImages = document.getElementById("btn-images");
            const btnVideos = document.getElementById("btn-videos");
            const contentImages = document.getElementById("content-images");
            const contentVideos = document.getElementById("content-videos");

            btnImages.addEventListener("click", function() {
                contentImages.style.display = "block";
                contentVideos.style.display = "none";
                btnImages.classList.add("active");
                btnVideos.classList.remove("active");
            });

            btnVideos.addEventListener("click", function() {
                contentImages.style.display = "none";
                contentVideos.style.display = "block";
                btnVideos.classList.add("active");
                btnImages.classList.remove("active");
            });
        });
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    // Get all card elements
    const cards = document.querySelectorAll('.card');

    // Function to set equal height to all cards
    function setEqualCardHeight() {
        let maxHeight = 0;
        cards.forEach(card => {
            const cardHeight = card.offsetHeight;
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });
        cards.forEach(card => {
            card.style.height = maxHeight + 'px';
        });
    }

    // Call the function initially and on window resize
    setEqualCardHeight();
    window.addEventListener('resize', setEqualCardHeight);
});

</script>

@endsection
