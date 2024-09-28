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
                        <h2 class="title">All Catagories</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('index_main')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Catagories</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- services-details-area -->
    <section style="">
        <div class="container">
        <div class="row justify-content-center">

    <h2 class="title tg-element-title" style="text-align:center;padding-top: 120px; padding-bottom:60px;color:#FE5D14">Explore all Catagories</h2>
    
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="{{route('panels')}}"><img src="assets/img/products-list/mcc-panel-image.jpg"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="{{route('panels')}}" class="tag">Panels</a>
                        
                    </div>
                </div>
            </div>
           
             @foreach ($data as $categories)
             @php
             // Decode the JSON string to an array if necessary
             $images = json_decode($categories->images, true);
         
             // Get the first image path
             $firstImage = $images[0] ?? ''; // Use empty string as fallback if no images
         @endphp
         
             
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="{{ route('product_detail', ['id' => $categories->id]) }}">
                            <img src="{{ asset('CategoryImages/' . $firstImage) }}" alt="" height="300px" width="911px">
                        </a> 
                    </div>
                    <div class="blog-post-content">
                        <a href="{{route('product_detail', ['id'=> $categories->id ])}}" class="tag">{{$categories->name}}</a>
                       
                       
                    </div>
                </div>
            </div>
            @endforeach

            {{--<div class="col-xl-4 col-md-6" style="padding-bottom:30px;">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/commercial-kitchen-image1.png"
                                alt=""height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Commercial Kitchens</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/fire-flush-door-1.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Fire Flush Doors</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/hopper-image-1.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Hoppers</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" style="padding-bottom:30px;">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/kitchen-image-3_1.png"
                                alt=""height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Kitchen</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/mess-table-image.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Mess Tables</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/metal-tank-images.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Metal Tanks</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" style="padding-bottom:30px;">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/name-plates-1.png"
                                alt=""height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Name Plates</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/pharma-images-1.jpg"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Pharma Equipment</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/podium-images-2.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Quality Materials</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" style="padding-bottom:30px;">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/products-list/storage-racks-1.png"
                                alt=""height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Storage Racks</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/catagories/lockers-img.jpg"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Lockers</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/services-images/kitchen-images-1.png"
                                alt="" height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Kitchen</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" style="padding-bottom:30px;">
                <div class="blog-post-item">
                    <div class="blog-post-thumb">
                        <a href="#"><img src="assets/img/services-images/automobile-image-1.jpg"
                                alt=""height="300px" width="911px"></a>
                    </div>
                    <div class="blog-post-content">
                        <a href="#" class="tag">Automobile Parts</a>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                            </ul>
                        </div>
                        <h2 class="title"><a href="#"></a></h2>
                       .
                    </div>
                </div>
            </div> --}}
        </div>
        </div>
        <br><br>
    </section>

    <!-- services-details-area-end -->
</main>
<!-- mian-area-end -->
@endsection
@section('jscontent')
@endsection