@extends('index-main')
@section('csscontent')
<style>
    .image {
        height: 300px; /* Adjust this value as needed */
        width: 100%;
        object-fit: cover;
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
                                    <li class="breadcrumb-item active" aria-current="page">Gallery Videos</li>
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

                    <h1 class="title tg-element-title"
                        style="text-align:center;padding-top: 120px; padding-bottom:60px;color:#FE5D14;">Videos</h1>
                        <div class="images">
                            <div class="row" style="padding-bottom: 40px;">
                                <div class="col-lg-4">
                                    {!! $data->iframe1 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe2 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe3 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe4 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe5 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe6 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe7 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe8 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe9 !!}
                                </div>
                                <div class="col-lg-4">
                                    {!! $data->iframe10 !!}
                                </div>
                               
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
@endsection
