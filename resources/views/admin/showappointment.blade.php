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
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    {{-- @include('admin.pesan') --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Doctor Name</th>
                                                    <th>Date</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    {{-- <th>Cancel</th> --}}
                                                    <th>Send Mail</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $appoint)
                                                    <tr>
                                                        <td>{{ $appoint->id }}</td>
                                                        <td>{{ $appoint->name }}</td>
                                                        <td>{{ $appoint->email }}</td>
                                                        <td>{{ $appoint->phone }}</td>
                                                        <td>{{ $appoint->doctor }}</td>
                                                        <td>{{ $appoint->date }}</td>
                                                        <td>{{ $appoint->message }}</td>
                                                        <td>{{ $appoint->status }}</td>

                                                        <td>
                                                            <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approve</a>
                                                            <a class="btn btn-danger" href="{{ url('canceled',$appoint->id) }}">Reject</a>
                                                        </td>

                                                        {{-- <td>
                                                            

                                                        </td> --}}

                                                        <td>
                                                            <a class="btn btn-info" href="{{ url('emailview',$appoint->id) }}">Send Mail</a>

                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
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
