@extends('layouts.app')
@section('csscontent')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"
                        style="background-color: #131517; color:white; display: flex; justify-content: space-between; align-items: center;">
                        <h3>Manage Images</h3>
                        <a data-bs-toggle="modal" href="#add_event" class="btn btn-dark btn-rounded float-end">Add
                            Images</a>
                    </div>
                    <div class="card-body" style="background-color: #212529; color:white;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered yajra_datatable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>image1</th>
                                        <th>image2</th>
                                        <th>image3</th>
                                        <th>image4</th>
                                        <th>image5</th>
                                        <th>image6</th>
                                        <th>image7</th>
                                        <th>image8</th>
                                        <th>image9</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width:100%;" class="modal fade twm-sign-up" id="add_event" aria-hidden="true"
            aria-labelledby="sign_up_popupLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Add Images</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <form id="f" action="{{ 'save-images' }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTab2Content">
                                    <!--Login Candidate Content-->
                                    <div class="tab-pane fade show active" id="login-candidate">
                                        <div class="row">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="description"><b>Description<span class="text-danger">
                                                            *</span></b></label>
                                                <textarea type="text" class="form-control" name="description" id="edescription" placeholder="Enter event description"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="image"><b>Image<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="image" type="file" id="image"
                                                    class="form-control my-1" >

                                                <input name="image1" type="file" id="image1"
                                                    class="form-control my-1" >

                                                <input name="image2" type="file" id="image2"
                                                    class="form-control my-1">

                                                <input name="image3" type="file" id="image3"
                                                    class="form-control my-1">
                                                <input name="image4" type="file" id="image4"
                                                    class="form-control my-1">
                                                <input name="image5" type="file" id="image5"
                                                    class="form-control my-1">
                                                <input name="image6" type="file" id="image6"
                                                    class="form-control my-1">
                                                <input name="image7" type="file" id="image7"
                                                    class="form-control my-1">
                                                <input name="image8" type="file" id="image8"
                                                    class="form-control my-1">
                                                <input name="image9" type="file" id="image9"
                                                    class="form-control my-1">
                                            </div>
                                        </div>

                                        <div class="col-md-12" style="text-align: center;">
                                            <button id="submit" type="submit" class="btn btn-outline-dark"><i
                                                    class="fa fa-upload"></i>&nbsp;&nbsp;&nbsp;Save</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @foreach ($data as $images)
        <div style="width:100%;" class="modal fade twm-sign-up" id="editModal{{ $images->id }}" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel{{ $images->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{ $images->id }}">Edit Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing blog -->
                        <form id="editForm{{ $images->id }}"
                            action="{{ route('update-images', ['id' => $images->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="description"><b>Description<span class="text-danger">
                                                            *</span></b></label>
                                                <textarea type="text" class="form-control" name="description" id="edescription" rows="5">{{ $images->description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="image"><b>Images<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="image" type="file" id="image"
                                                    class="form-control my-1" >

                                                <input name="image1" type="file" id="image1"
                                                    class="form-control my-1">

                                                <input name="image2" type="file" id="image2"
                                                    class="form-control my-1">

                                                <input name="image3" type="file" id="image3"
                                                    class="form-control my-1">
                                                <input name="image4" type="file" id="image4"
                                                    class="form-control my-1">
                                                <input name="image5" type="file" id="image5"
                                                    class="form-control my-1">
                                                <input name="image6" type="file" id="image6"
                                                    class="form-control my-1">
                                                <input name="image7" type="file" id="image7"
                                                    class="form-control my-1">
                                                <input name="image8" type="file" id="image8"
                                                    class="form-control my-1">
                                                <input name="image9" type="file" id="image9"
                                                    class="form-control my-1">
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="text-align: center;">
                                            <button id="submit" type="submit" class="btn btn-outline-dark"><i
                                                    class="fa fa-upload"></i>&nbsp;&nbsp;&nbsp;Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('jscontent')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script type="text/css" src="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('.yajra_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('manage-images') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                        {
                            data: 'description',
                             name: 'description'
                         },
                    {
                        data: 'image',
                        name: 'image'
                    },
                     {
                         data: 'image1',
                         name: 'image1'
                     },
                     {
                         data: 'image2',
                         name: 'image2'
                     },
                     {
                         data: 'image3',
                         name: 'image3'
                     },
                     {
                         data: 'image4',
                         name: 'image4'
                     },
                     {
                         data: 'image5',
                         name: 'image5'
                     },
                     {
                         data: 'image6',
                         name: 'image6'
                     },
                     {
                         data: 'image7',
                         name: 'image7'
                     },
                     {
                         data: 'image8',
                         name: 'image8'
                     },
                     {
                         data: 'image9',
                         name: 'image9'
                     },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', '.delete', function() {
            var row_id = $(this).attr('id');
            var table_row = $(this).closest('tr');
            var url = "{{ route('delete-images') }}";
            swal.fire({
                title: "Are you Sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'get',
                        url: url.replace(':id', row_id),
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: row_id,
                        },
                        success: function(data) {
                            swal.fire({
                                title: 'Deleted!',
                                text: 'Your product has been deleted.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                table_row.remove();
                            });
                        }
                    });
                }
            })
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script>
        document.querySelectorAll('#edescription').forEach(textarea => {
            ClassicEditor.create(textarea).catch(error => {
                console.error(error);
            });
        });

        ClassicEditor.create(document.querySelector('#description')).catch(error => {
            console.error(error);
        });
    </script>
@endsection
