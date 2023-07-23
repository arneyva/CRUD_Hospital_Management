<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Novena- Health & Care Medical template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/favicon.ico') }}" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ url('frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{ url('frontend/plugins/icofont/icofont.min.css') }}">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="{{ url('frontend/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/plugins/slick-carousel/slick/slick-theme.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i
                                        class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New
                                York, USA </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span>Call Now : </span>
                                <span class="h4">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--  --}}
        @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
                <button type="button" class="close" data-dismiss="alert"> X </button>
            </div>
        @endif
        {{--  --}}
        <nav class="navbar navbar-expand-lg navigation" id="navbar">

            <div class="container">

                <a class="navbar-brand" href="{{ url('frontend/index.html') }}">
                    <img src="{{ url('frontend/images/logo.png') }}" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('frontend/index.html') }}">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('frontend/about.html') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('frontend/service.html') }}">Services</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('frontend/department.html') }}"
                                id="dropdown02" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item"
                                        href="{{ url('frontend/department.html') }}">Departments</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('frontend/department-single.html') }}">Department Single</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('frontend/doctor.html') }}"
                                id="dropdown03" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="{{ url('frontend/doctor.html') }}">Doctors</a></li>
                                <li><a class="dropdown-item" href="{{ url('frontend/doctor-single.html') }}">Doctor
                                        Single</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ url('frontend/appoinment.html') }}">Appoinment</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ url('frontend/blog-sidebar.html') }}"
                                id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Blog
                                <i class="icofont-thin-down"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                <li><a class="dropdown-item" href="{{ url('frontend/blog-sidebar.html') }}">Blog with
                                        Sidebar</a></li>

                                <li><a class="dropdown-item" href="{{ url('frontend/blog-single.html') }}">Blog
                                        Single</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('frontend/contact.html') }}">Contact</a>
                        </li>
                        {{-- jika sudah login maaka tombol login dan register tidak akan dimunculkan --}}
                        @if (Route::has('login'))
                            @auth
                                <li class=""><a class="nav-link" style="background-color: rgb(227, 48, 48)"
                                        href="{{ url('myappointment') }}">My Appointment</a></li>
                                <li class="nav-item active">
                                    <x-app-layout>
                                    </x-app-layout>
                                </li>
                            @else
                                {{-- bikin tombol login --}}
                                <li class="nav-item active">
                                    {{-- ml-lg-3 => biar ada spasine --}}
                                    <a class="btn btn-main-2 btn-icon  ml-lg-3" href="{{ url('login') }}">Login</a>
                                </li>
                                {{-- bikin tombol login --}}
                                <li class="nav-item active">
                                    <a class="btn btn-main-2 btn-icon  ml-lg-3" href="{{ url('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif


                    </ul>
                </div>
            </div>
        </nav>
    </header>



    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Cancel Appointment</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appoint as $appoints)
                                <tr>
                                    <td>{{ $appoints->doctor }}</td>
                                    <td>{{ $appoints->date }}</td>
                                    <td>{{ $appoints->message }}</td>
                                    <td>{{ $appoints->status }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('cancel_appoint',$appoints->id) }}" onclick="return confirm('Are you serious tu delete this?')">Cancel</a>
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
        <!-- Slider Start -->
        {{-- <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xl-7">
                    <div class="block">
                        <div class="divider mb-3"></div>
                        <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>

                        <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam
                            aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                        <div class="btn-container ">
                            <a href="{{ url('frontend/appoinment.html') }}" target="_blank"
                                class="btn btn-main-2 btn-icon btn-round-full">Make appoinment <i
                                    class="icofont-simple-right ml-2  "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-block d-lg-flex">
                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-surgeon-alt"></i>
                            </div>
                            <span>24 Hours Service</span>
                            <h4 class="mb-3">Online Appoinment</h4>
                            <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of
                                family medicine.</p>
                            <a href="{{ url('frontend/appoinment.html') }}" class="btn btn-main btn-round-full">Make
                                a appoinment</a>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <span>Timing schedule</span>
                            <h4 class="mb-3">Working Hours</h4>
                            <ul class="w-hours list-unstyled">
                                <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                            </ul>
                        </div>

                        <div class="feature-item mb-5 mb-lg-0">
                            <div class="feature-icon mb-4">
                                <i class="icofont-support"></i>
                            </div>
                            <span>Emegency Cases</span>
                            <h4 class="mb-3">1-800-700-6200</h4>
                            <p>Get ALl time support for emergency.We have introduced the principle of family
                                medicine.Get Conneted with us for any urgency .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img">
                        <img src="{{ url('frontend/images/about/img-1.jpg') }}" alt="" class="img-fluid">
                        <img src="{{ url('frontend/images/about/img-2.jpg') }}" alt=""
                            class="img-fluid mt-4">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="about-img mt-4 mt-lg-0">
                        <img src="{{ url('frontend/images/about/img-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-content pl-4 mt-4 mt-lg-0">
                        <h2 class="title-color">Personal care <br>& healthy living</h2>
                        <p class="mt-4 mb-5">We provide best leading medicle service Nulla perferendis veniam deleniti
                            ipsum officia dolores repellat laudantium obcaecati neque.</p>

                        <a href="{{ url('frontend/service.html') }}"
                            class="btn btn-main-2 btn-round-full btn-icon">Services<i
                                class="icofont-simple-right ml-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-section ">
        <div class="container">
            <div class="cta position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-doctor"></i>
                            <span class="h3">58</span>k
                            <p>Happy People</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-flag"></i>
                            <span class="h3">700</span>+
                            <p>Surgery Comepleted</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-badge"></i>
                            <span class="h3">40</span>+
                            <p>Expert Doctors</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter-stat">
                            <i class="icofont-globe"></i>
                            <span class="h3">20</span>
                            <p>Worldwide Branch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        {{-- <section class="section service gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2>Award winning patient care</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt
                            molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-laboratory text-lg"></i>
                            <h4 class="mt-3 mb-3">Laboratory services</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-heart-beat-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Heart Disease</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-tooth text-lg"></i>
                            <h4 class="mt-3 mb-3">Dental Care</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-crutch text-lg"></i>
                            <h4 class="mt-3 mb-3">Body Surgery</h4>
                        </div>

                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-brain-alt text-lg"></i>
                            <h4 class="mt-3 mb-3">Neurology Sargery</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-item mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-dna-alt-1 text-lg"></i>
                            <h4 class="mt-3 mb-3">Gynecology</h4>
                        </div>
                        <div class="content">
                            <p class="mb-4">Saepe nulla praesentium eaque omnis perferendis a doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        {{-- dikasih include appointement --}}
        {{-- @include('user.doctor')
    @include('user.appoinment')
    @include('user.testimonial')
    @include('user.partners') --}}
        <!-- footer Start -->
        <footer class="footer section gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mr-auto col-sm-6">
                        <div class="widget mb-5 mb-lg-0">
                            <div class="logo mb-4">
                                <img src="{{ url('frontend/images/logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                                veritatis eveniet distinctio possimus.</p>

                            <ul class="list-inline footer-socials mt-4">
                                <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                            class="icofont-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                            class="icofont-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                            class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget mb-5 mb-lg-0">
                            <h4 class="text-capitalize mb-3">Department</h4>
                            <div class="divider mb-4"></div>

                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="#">Surgery </a></li>
                                <li><a href="#">Wome's Health</a></li>
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Cardioc</a></li>
                                <li><a href="#">Medicine</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget mb-5 mb-lg-0">
                            <h4 class="text-capitalize mb-3">Support</h4>
                            <div class="divider mb-4"></div>

                            <ul class="list-unstyled footer-menu lh-35">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Company Support </a></li>
                                <li><a href="#">FAQuestions</a></li>
                                <li><a href="#">Company Licence</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="widget widget-contact mb-5 mb-lg-0">
                            <h4 class="text-capitalize mb-3">Get in Touch</h4>
                            <div class="divider mb-4"></div>

                            <div class="footer-contact-block mb-4">
                                <div class="icon d-flex align-items-center">
                                    <i class="icofont-email mr-3"></i>
                                    <span class="h6 mb-0">Support Available for 24/7</span>
                                </div>
                                <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                            </div>

                            <div class="footer-contact-block">
                                <div class="icon d-flex align-items-center">
                                    <i class="icofont-support mr-3"></i>
                                    <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                                </div>
                                <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-btm py-4 mt-5">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="copyright">
                                &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a
                                    href="https://themefisher.com/" target="_blank">Themefisher</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                                <form action="#" class="subscribe">
                                    <input type="text" class="form-control" placeholder="Your Email address">
                                    <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <a class="backtop js-scroll-trigger" href="#top">
                                <i class="icofont-long-arrow-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!--
    Essential Scripts
    =====================================-->


        <!-- Main jQuery -->
        <script src="{{ url('frontend/plugins/jquery/jquery.js') }}"></script>
        <!-- Bootstrap 4.3.2 -->
        <script src="{{ url('frontend/plugins/bootstrap/js/popper.js') }}"></script>
        <script src="{{ url('frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('frontend/plugins/counterup/jquery.easing.js') }}"></script>
        <!-- Slick Slider -->
        <script src="{{ url('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ url('frontend/plugins/counterup/jquery.waypoints.min.js') }}"></script>

        <script src="{{ url('frontend/plugins/shuffle/shuffle.min.js') }}"></script>
        <script src="{{ url('frontend/plugins/counterup/jquery.counterup.min.js') }}"></script>
        <!-- Google Map -->
        <script src="{{ url('frontend/plugins/google-map/map.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
        </script>

        <script src="{{ url('frontend/js/script.js') }}"></script>
        <script src="{{ url('frontend/js/contact.js') }}"></script>

</body>

</html>
