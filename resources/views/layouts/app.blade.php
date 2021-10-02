<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tanin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="{{ asset('css/lib/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ asset('css/lib/sweetalert/sweetalert.css') }}" rel="stylesheet">

    <!-- Range Slider -->
    <link href="{{ asset('css/lib/rangSlider/ion.rangeSlider.css') }}" rel="stylesheet">

    <link href="{{ asset('css/lib/rangSlider/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">

    <!-- Bar Rating -->
    <link href="{{ asset('css/lib/barRating/barRating.css') }}" rel="stylesheet">

    <!-- Nestable -->
    <link href="{{ asset('css/lib/nestable/nestable.css') }}" rel="stylesheet">

    <!-- JsGrid -->
    <link href="{{ asset('css/lib/jsgrid/jsgrid-theme.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/lib/jsgrid/jsgrid.min.css') }}" rel="stylesheet">

    <!-- Datatable -->
    <link href="{{ asset('css/lib/datatable/dataTables.bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Calender 2 -->
    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">

    <!-- Weather Icon -->
    <link href="{{ asset('css/lib/weather-icons.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{ asset('css/lib/select2/select2.min.css') }}" rel="stylesheet">

    <!-- Chartist -->
    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">

    <!-- Calender -->
    <link href="{{ asset('css/lib/calendar/fullcalendar.css') }}" rel="stylesheet">


    <!-- Common -->
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo">
                    <a href="index.html">
                        <img src="https://tanin-shipment.s3.amazonaws.com/tanin_trans.png" height="30px" width="30px" alt="" />
                        <span>Tanin Tracker</span>
                    </a>
                </div>
                <ul>

                    <li class="label">Main</li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="ti-home"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ url('/client/index') }}">
                            <i class="ti-bar-chart-alt"></i> Buyers </a>
                    </li>

                    
                    <li>
                        <a href="{{ url('/driver/index') }}">
                            <i class="ti-user"></i> Drivers </a>
                    </li>
                    <li>
                        <a href="{{ url('/shipment/index') }}">
                            <i class="ti-truck"></i> Shipments</a>
                    </li>
                    <li> 
                        <a href="{{ url('/') }}">
                            <i class="ti-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="ti-layout-grid2-alt"></i> Widget</a>
                    </li>
                    
                    <li class="label">Extra</li>
                    <li>
                        <a class="sidebar-sub-toggle">
                            <i class="ti-files"></i> Invoice
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Basic</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Editable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../documentation/index.html">
                            <i class="ti-file"></i> Documentation</a>
                    </li>
                    <li>
                        <a href="{{ url('auth/login') }}">
                            <i class="ti-close"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <!-- <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. Daniel</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            -->
                           
                            </div>
                        </div>
                        <!-- <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                       
                       
                        </div>
                        -->
                       
                       
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">Daniel
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                   
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                           
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                {{-- <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Tanin
                                    <span>Shipment Tracker</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">UI-Blank</li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- /# row -->
                <section id="main-content">
                @yield('content')
                  
                </section>
                <div class="row">
                        <div class="col-lg-12">
                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="footer">
                                <p>2021 © Tanin Global Ltd.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>




    <!-- Common -->
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}"></script>
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



    <!-- Calender -->
    <script src="{{ asset('js/lib/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar/fullcalendar-init.js') }}"></script>

    <!--  Flot Chart -->
    <script src="{{ asset('js/lib/flot-chart/excanvas.min.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/lib/flot-chart/flot-chart-init.js') }}"></script>

    <!--  Chartist -->
    <script src="{{ asset('js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartist/chartist-init.js') }}"></script>

    <!--  Chartjs -->
    <script src="{{ asset('js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('js/lib/chart-js/chartjs-init.js') }}"></script>

    <!--  Knob -->
    <script src="{{ asset('js/lib/knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('js/lib/knob/knob.init.js') }}"></script>

    <!--  Morris -->
    <script src="{{ asset('js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris.js') }}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris-init.js') }}"></script>


    <!--  Peity -->
    <script src="{{ asset('js/lib/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('js/lib/peitychart/peitychart.init.js') }}"></script>

    <!--  Sparkline -->
    <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>


    <!--  Validation -->
    <script src="{{ asset('js/lib/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/lib/form-validation/jquery.validate-init.js') }}"></script>


    <!--  Circle Progress -->
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>

    <!--  Vector Map -->
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.algeria.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.argentina.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.brazil.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.france.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.germany.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.greece.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iran.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.iraq.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.russia.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.tunisia.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.europe.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.usa.js"></script>

    <!--  Simple Weather -->
    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>

    <!--  Owl Carousel -->
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--  Calender 2 -->
    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>


    <!-- Datatable -->
    <script src="{{ asset('js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/buttons.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/lib/data-table/datatables-init.js') }}"></script>


    <!-- JS Grid -->
    <script src="{{ asset('js/lib/jsgrid/db.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/jsgrid.core.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/jsgrid.load-indicator.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/jsgrid.load-strategies.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/jsgrid.field.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/fields/jsgrid.field.text.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/fields/jsgrid.field.number.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/fields/jsgrid.field.select.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/fields/jsgrid.field.checkbox.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/fields/jsgrid.field.control.js') }}"></script>
    <script src="{{ asset('js/lib/jsgrid/jsgrid-init.js') }}"></script>


    <!--  Datamap -->
    <script src="assets/js/lib/datamap/d3.min.js"></script>
    <script src="assets/js/lib/datamap/topojson.js"></script>
    <script src="assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="assets/js/lib/datamap/datamap-init.js"></script>

    <!--  Nestable -->
    <script src="assets/js/lib/nestable/jquery.nestable.js"></script>
    <script src="assets/js/lib/nestable/nestable.init.js"></script>

    <!--ION Range Slider JS-->
    <script src="assets/js/lib/rangeSlider/ion.rangeSlider.min.js"></script>
    <script src="assets/js/lib/rangeSlider/moment.js"></script>
    <script src="assets/js/lib/rangeSlider/moment-with-locales.js"></script>
    <script src="assets/js/lib/rangeSlider/rangeslider.init.js"></script>

    <!-- Bar Rating-->
    <script src="assets/js/lib/barRating/jquery.barrating.js"></script>
    <script src="assets/js/lib/barRating/barRating.init.js"></script>

    <!-- jRate -->
    <script src="assets/js/lib/rating1/jRate.min.js"></script>
    <script src="assets/js/lib/rating1/jRate.init.js"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('js/lib/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/lib/sweetalert/sweetalert.init.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('js/lib/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/lib/toastr/toastr.init.js') }}"></script>

    <!--  Dashboard 1 -->
    <script src="assets/js/dashboard1.js"></script>
    <script src="assets/js/dashboard2.js"></script>

</body>

</html>