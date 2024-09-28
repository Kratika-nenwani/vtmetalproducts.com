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
                            Videos</a>
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
                                        <th>name</th>
                                        <th>image</th>
                                        <th>frame1</th>
                                        <th>frame2</th>
                                        <th>frame3</th>
                                        <th>frame4</th>
                                        <th>frame5</th>
                                        <th>frame6</th>
                                        <th>frame7</th>
                                        <th>frame8</th>
                                        <th>frame9</th>
                                        <th>frame10</th>
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
                        <h2 class="modal-title" id="sign_up_popupLabel2">Add Videos</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="twm-tabs-style-2">
                            <form id="f" action="{{ 'save-videos' }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="myTab2Content">
                                    <!--Login Candidate Content-->
                                    <div class="tab-pane fade show active" id="login-candidate">
                                        <div class="row">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="name"><b>Name<span class="text-danger">
                                                            *</span></b></label>
                                                            <input type="text" name="name" class="form-control my-1" id="name" placeholder="Enter Category Name" required>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="image"><b>Image<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="image" type="file" id="image"
                                                    class="form-control my-1" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label><b>Iframes<span class="text-danger">
                                                            *</span></b></label>
                                                <textarea name="iframe1" type="text" id="iframe1"
                                                    class="form-control my-1" rows="2" required></textarea>
                                                <textarea name="iframe2" type="text" id="iframe2" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe3" type="text" id="iframe3" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe4" type="text" id="iframe4" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe5" type="text" id="iframe5" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe6" type="text" id="iframe6" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe7" type="text" id="iframe7" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe8" type="text" id="iframe8" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe9" type="text" id="iframe9" rows="2"
                                                    class="form-control my-1"></textarea>
                                                <textarea name="iframe10" type="text" id="iframe10" rows="2"
                                                    class="form-control my-1"></textarea>
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
    @foreach ($data as $videos)
        <div style="width:100%;" class="modal fade twm-sign-up" id="editModal{{ $videos->id }}" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLabel{{ $videos->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel{{ $videos->id }}">Edit Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing blog -->
                        <form id="editForm{{ $videos->id }}"
                            action="{{ route('update-videos', ['id' => $videos->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="tab-content" id="myTab2Content">
                                <!--Login Candidate Content-->
                                <div class="tab-pane fade show active" id="login-candidate">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="name"><b>Name<span class="text-danger">
                                                            *</span></b></label>
                                                            <input type="text" class="form-control" name="name" value="{{ $videos->name }}">
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label for="image"><b>Image<span class="text-danger">
                                                            *</span></b></label>
                                                <input name="image" type="file" id="image"
                                                    class="form-control my-1">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-3">
                                                <label><b>Iframes<span class="text-danger">
                                                            *</span></b></label>
                                                <textarea name="iframe1" type="text" id="iframe1"
                                                    class="form-control my-1" rows="2" required>{{ $videos->iframe1 }}</textarea>
                                                <textarea name="iframe2" type="text" id="iframe2" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe2 }}</textarea>
                                                <textarea name="iframe3" type="text" id="iframe3" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe3 }}</textarea>
                                                <textarea name="iframe4" type="text" id="iframe4" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe4 }}</textarea>
                                                <textarea name="iframe5" type="text" id="iframe5" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe5 }}</textarea>
                                                <textarea name="iframe6" type="text" id="iframe6" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe6 }}</textarea>
                                                <textarea name="iframe7" type="text" id="iframe7" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe7 }}</textarea>
                                                <textarea name="iframe8" type="text" id="iframe8" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe8 }}</textarea>
                                                <textarea name="iframe9" type="text" id="iframe9" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe9 }}</textarea>
                                                <textarea name="iframe10" type="text" id="iframe10" rows="2"
                                                    class="form-control my-1">{{ $videos->iframe10 }}</textarea>
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
                ajax: "{{ route('manage-videos') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                        {
                            data: 'image',
                             name: 'image'
                         },
                    {
                        data: 'iframe1',
                        name: 'iframe1'
                    },
                     {
                         data: 'iframe2',
                         name: 'iframe2'
                     },
                     {
                         data: 'iframe3',
                         name: 'iframe3'
                     },
                     {
                         data: 'iframe4',
                         name: 'iframe4'
                     },
                     {
                         data: 'iframe5',
                         name: 'iframe5'
                     },
                     {
                         data: 'iframe6',
                         name: 'iframe6'
                     },
                     {
                         data: 'iframe7',
                         name: 'iframe7'
                     },
                     {
                         data: 'iframe8',
                         name: 'iframe8'
                     },
                     {
                         data: 'iframe9',
                         name: 'iframe9'
                     },
                     {
                         data: 'iframe10',
                         name: 'iframe10'
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
            var url = "{{ route('delete-videos') }}";
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
