@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Manage Images for Category: {{ $category->name }}</h2>

    <!-- Form to Add New Images -->
    <form action="{{ route('add-images', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="new_images">Add New Images</label>
            <input type="file" class="form-control" name="new_images[]" id="new_images" multiple required>
        </div>
        <button type="submit" class="btn btn-success btn-sm">➕ Add Images</button>
    </form>

    <hr>

    <div class="row">
        @if($images)
            @foreach($images as $image)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-img-wrapper">
                        <img src="{{ asset('CategoryImages/' . $image) }}" class="card-img-top" alt="Category Image">
                    </div>
                    <div class="card-body text-center">
                        <form action="{{ route('delete-image', ['id' => $category->id, 'image' => $image]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑️ Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p>No images available for this category.</p>
        @endif
    </div>
</div>
@endsection

<style>
    .card-img-wrapper {
        width: 100%;
        height: 200px; /* Fixed height for all images */
        overflow: hidden; /* Ensures the image doesn't overflow the container */
    }
    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Ensures the image is resized proportionally to fit the container */
    }
</style>
