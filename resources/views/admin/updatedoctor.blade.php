<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('backend/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('backend/template/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('backend/template/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- kasih pesan --}}
                    @if (session()->has('pesan'))
                        <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                            <button type="button" class="close" data-dismiss="alert"> X </button>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Doctor</h4>

                                    <form class="forms-sample" action="{{ url('editdoctor', $data->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{-- jangan lupa setelah form harus di csrf --}}

                                        @csrf

                                        {{-- nama dokter --}}
                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Doctor
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color: rgb(0, 0, 0)"
                                                    {{-- required="" => kalo tidak diisi akan ada peringatan(tidak eror) --}} name="name" value="{{ $data->name }}"
                                                   >

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputUsername2"
                                                class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" style="color: rgb(0, 0, 0)"
                                                    name="phone" value="{{ $data->phone }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputMobile"
                                                class="col-sm-3 col-form-label">Speciality</label>
                                            <div class="col-sm-9">

                                                <input type="text" class="form-control" style="color: rgb(0, 0, 0)"
                                                    name="speciality" value="{{ $data->speciality }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Room
                                                No</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" style="color: rgb(0, 0, 0)"
                                                    name="room" value="{{ $data->room }}" required="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputMobile" class="col-sm-3 col-form-label"> OLD
                                                Image</label>
                                            <div class="col-sm-9">
                                                {{-- <img style="max-height: 200px;max-width: 250px"
                                                        src="doctorimage/{{ $data->image }}" alt=""> --}}
                                                {{-- <img  src="doctorimage/{{ $data->image }}" alt="gambar doktor" name="image"> --}}

                                                <img style="max-height: 200px;max-width: 250px"
                                                    src="{{ url('doctorimage') . '/' . $data->image }}" alt="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Change
                                                Image
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="file"
                                                    >
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        {{-- <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ url('backend/template/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ url('backend/template/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('backend/template/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ url('backend/template/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ url('backend/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ url('backend/template/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('backend/template/assets/js/off-canvas.js') }}"></script>
    <script src="{{ url('backend/template/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ url('backend/template/assets/js/misc.js') }}"></script>
    <script src="{{ url('backend/template/assets/js/settings.js') }}"></script>
    <script src="{{ url('backend/template/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('backend/template/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
