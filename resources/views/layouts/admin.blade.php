<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>ITM ASP</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{asset('plugins/jsgrid/jsgrid.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jsgrid/jsgrid-theme.min.css')}}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    <!-- Ion Slider -->
    <link rel="stylesheet" href="{{asset('plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-slider/css/bootstrap-slider.min.css')}}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar-interaction/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar-daygrid/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fullcalendar-timegrid/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('')}}plugins/fullcalendar-bootstrap/main.min.css">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}">
{{--    <link href="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}" rel="stylesheet">--}}
{{--    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">--}}
{{--    <link href="{{asset('css/fontawesome-iconpicker.min.css')}}" rel="stylesheet">--}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('css/docs.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/pygments-manni.css')}}"/>
    <link rel="stylesheet" href="{{asset('icon-fonts/elusive-icons-2.0.0/css/elusive-icons.min.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
    <link rel="stylesheet" href="{{asset('icon-fonts/map-icons-2.1.0/css/map-icons.min.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/4.4.0/font/octicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-iconpicker.css')}}"/>

    <style type="text/css">
        .bg-gray {
            color: #777;
            background-color: #eee;
        }
        #btnGithub, #btnDonate {
            width: 200px;
        }
        #btnGithub span, #btnDonate span {
            font-style: italic;
        }
        #btnStars, #btnForks, #btnReleases, #btnContributors {
            font-weight: bold;
        }
        .tab-content {
            padding: 12px;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        code {
            background-color: #f9f2f4;
            border-radius: 4px;
            padding: 2px 4px;
        }
        code.code-default {
            color: #ffffff;
            background-color: #f0ad4e;
        }
        code.code-info {
            color: #ffffff;
            background-color: #5bc0de;
        }
        code.code-options {
            color: #ffffff;
            background-color: #9b59b6;
        }
        code.code-event {
            color: #ffffff;
            background-color: #449d44;
        }
        code.code-method {
            color: #ffffff;
            background-color: #357ebd;
        }
        #console {
            height: 135px;
            overflow-y: scroll;
            color: white;
            background-color: black;
        }
    </style>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#2ecc71;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }
    .float2{
        position:fixed;
        width:60px;
        height:60px;
        bottom:109px;
        right:40px;
        background-color: #e74c3c;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    .my-float{
        margin-top:9px;
    }
    .my-float2{
        margin-top:9px;
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-orange navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.dashboard')}}" class="nav-link"> <strong>Home</strong></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.formation.index')}}" class="nav-link"><strong>Foramtions</strong></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.session.index')}}" class="nav-link"><strong>Sessions</strong></a>
            </li>


            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.department.index')}}" class="nav-link"><strong>Départements</strong></a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('admin.category.index')}}" class="nav-link"><strong>Catégories</strong></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <div style="position: absolute;right: 81px;">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }} <i class="fas fa-sign-out-alt" ></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: white">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('dist/img/itm.png')}}" alt="itm Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light" style="color: orange">ITM ASP</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block" STYLE="color: orange">Med Bachir BOUAGGA</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="color: #1c1c1c">
                            <i class="fas fa-home"></i>
                            <p>
                                Home

                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14 ; color: black">
                            <i class="fas fa-graduation-cap"></i>
                            <p>
                                Formations
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.formation.index')}}" class="nav-link active" style="color: black">
                                    <i class="fas fa-graduation-cap"></i>
                                    <p>Liste des Formations</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.formation.create')}}" class="nav-link" style="color: black">
                                    <i class="fas fa-graduation-cap"></i>
                                    <p>Créer Formation</p>
                                </a>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14 ; color: black">
                            <i class="fas fa-calendar-alt"></i>
                            <p>
                                Sessions
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.session.index')}}" class="nav-link active" style="color: black">
                                    <i class="fas fa-calendar-alt"></i>
                                    <p>Liste des Sessions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.session.create')}}" class="nav-link" style="color: black">
                                    <i class="fas fa-calendar-alt"></i>
                                    <p>Créer Sessions</p>
                                </a>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14  ; color: black">
                            <i class="fas fa-prescription-bottle"></i>
                            <p>
                                Pré-Inscription
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.inscription.index')}}" class="nav-link active" style="color: black">
                                    <i class="fas fa-prescription-bottle"></i>
                                    <p>Liste des Pré-Inscriptions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.inscription.create')}}" class="nav-link" style="color: black">
                                    <i class="fas fa-prescription-bottle"></i>
                                    <p>Créer Pré-Inscription</p>
                                </a>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14 ; color: black">
                            <i class="fas fa-phone-alt"></i>
                            <p>
                                Appels Sortants
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" style="color: black">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>Liste des Appels Sortants</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.appel_sortant.create')}}" class="nav-link" style="color: black">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>Créer Appel Sortant</p>
                                </a>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14 ; color: black">
                            <i class="fas fa-phone"></i>
                            <p>
                                Appels Entrants
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" style="color: black">
                                    <i class="fas fa-phone"></i>
                                    <p>Liste des Appels Entrants</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: black">
                                    <i class="fas fa-phone"></i>
                                    <p>Créer Appel Entrant</p>
                                </a>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link active" style="background-color: #fd7e14 ; color: black">
                            <i class="fas fa-users"></i>
                            <p>
                                Contrats
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.contrat.index')}}" class="nav-link active" style="color: black">
                                    <i class="fas fa-users"></i>
                                    <p>Liste des Contrats</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('admin.contrat.create')}}" class="nav-link" style="color: black">
                                    <i class="fas fa-user"></i>
                                    <p>Créer Contrat</p>
                                </a>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!--            <h1 class="m-0 text-dark">Starter Page</h1>-->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item" style="color: orange"><a href="#">Home</a></li>
                            <!--              <li class="breadcrumb-item active">Starter Page</li>-->
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->


    @yield('content')

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
{{--<script src="{{asset('//code.jquery.com/jquery-2.2.1.min.js')}}"></script>--}}
{{--<script src="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('js/fontawesome-iconpicker.js')}}"></script>--}}
{{--<script type="text/javascript">--}}
{{--    $('.social-icon').iconpicker();--}}
{{--</script>--}}

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- FLOT CHARTS -->
<script src="{{asset('plugins/flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('plugins/flot-old/jquery.flot.resize.min.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('plugins/flot-old/jquery.flot.pie.min.js')}}"></script>
<!-- jQuery Knob -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}" defer></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}" defer></script>
<!-- jsGrid -->
<script src="{{asset('plugins/jsgrid/demos/db.js')}}"></script>
<script src="{{asset('plugins/jsgrid/jsgrid.min.js')}}}"></script>
<!-- SweetAlert2 -->
<script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Ekko Lightbox -->
<script src="{{asset('plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
<!-- Ion Slider -->
<script src="{{asset('plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!-- Bootstrap slider -->
<script src="{{asset('plugins/bootstrap-slider/bootstrap-slider.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/main.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar-daygrid/main.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar-timegrid/main.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar-interaction/main.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar-bootstrap/main.min.js')}}"></script>
<!-- Filterizr-->
<script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- Page specific gallery script -->
<script>
    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
        $('.btn[data-filter]').on('click', function() {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })
</script>
<!-- Page specific calendar script -->
<script>
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex        : 1070,
                    revert        : true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
                console.log(eventEl);
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
                };
            }
        });

        var calendar = new Calendar(calendarEl, {
            plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
            header    : {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            //Random default events
            events    : [
                {
                    title          : 'All Day Event',
                    start          : new Date(y, m, 1),
                    backgroundColor: '#f56954', //red
                    borderColor    : '#f56954' //red
                },
                {
                    title          : 'Long Event',
                    start          : new Date(y, m, d - 5),
                    end            : new Date(y, m, d - 2),
                    backgroundColor: '#f39c12', //yellow
                    borderColor    : '#f39c12' //yellow
                },
                {
                    title          : 'Meeting',
                    start          : new Date(y, m, d, 10, 30),
                    allDay         : false,
                    backgroundColor: '#0073b7', //Blue
                    borderColor    : '#0073b7' //Blue
                },
                {
                    title          : 'Lunch',
                    start          : new Date(y, m, d, 12, 0),
                    end            : new Date(y, m, d, 14, 0),
                    allDay         : false,
                    backgroundColor: '#00c0ef', //Info (aqua)
                    borderColor    : '#00c0ef' //Info (aqua)
                },
                {
                    title          : 'Birthday Party',
                    start          : new Date(y, m, d + 1, 19, 0),
                    end            : new Date(y, m, d + 1, 22, 30),
                    allDay         : false,
                    backgroundColor: '#00a65a', //Success (green)
                    borderColor    : '#00a65a' //Success (green)
                },
                {
                    title          : 'Click for Google',
                    start          : new Date(y, m, 28),
                    end            : new Date(y, m, 29),
                    url            : 'http://google.com/',
                    backgroundColor: '#3c8dbc', //Primary (light-blue)
                    borderColor    : '#3c8dbc' //Primary (light-blue)
                }
            ],
            editable  : true,
            droppable : true, // this allows things to be dropped onto the calendar !!!
            drop      : function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        //Color chooser button
        var colorChooser = $('#color-chooser-btn')
        $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color'    : currColor
            })
        })
        $('#add-new-event').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color'    : currColor,
                'color'           : '#fff'
            }).addClass('external-event')
            event.html(val)
            $('#external-events').prepend(event)

            //Add draggable funtionality
            ini_events(event)

            //Remove event from text input
            $('#new-event').val('')
        })
    })
</script>

<!-- page sliders script -->
<script>
    $(function () {
        /* BOOTSTRAP SLIDER */
        $('.slider').bootstrapSlider()

        /* ION SLIDER */
        $('#range_1').ionRangeSlider({
            min     : 0,
            max     : 5000,
            from    : 1000,
            to      : 4000,
            type    : 'double',
            step    : 1,
            prefix  : '$',
            prettify: false,
            hasGrid : true
        })
        $('#range_2').ionRangeSlider()

        $('#range_5').ionRangeSlider({
            min     : 0,
            max     : 10,
            type    : 'single',
            step    : 0.1,
            postfix : ' mm',
            prettify: false,
            hasGrid : true
        })
        $('#range_6').ionRangeSlider({
            min     : -50,
            max     : 50,
            from    : 0,
            type    : 'single',
            step    : 1,
            postfix : '°',
            prettify: false,
            hasGrid : true
        })

        $('#range_4').ionRangeSlider({
            type      : 'single',
            step      : 100,
            postfix   : ' light years',
            from      : 55000,
            hideMinMax: true,
            hideFromTo: false
        })
        $('#range_3').ionRangeSlider({
            type    : 'double',
            postfix : ' miles',
            step    : 10000,
            from    : 25000000,
            to      : 35000000,
            onChange: function (obj) {
                var t = ''
                for (var prop in obj) {
                    t += prop + ': ' + obj[prop] + '\r\n'
                }
                $('#result').html(t)
            },
            onLoad  : function (obj) {
                //
            }
        })
    })
</script>
<!-- page modals script -->
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                type: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultInfo').click(function() {
            Toast.fire({
                type: 'info',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultError').click(function() {
            Toast.fire({
                type: 'error',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultWarning').click(function() {
            Toast.fire({
                type: 'warning',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.swalDefaultQuestion').click(function() {
            Toast.fire({
                type: 'question',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });

        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
            toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
            toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultTopLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'topLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomRight').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomRight',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultBottomLeft').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                position: 'bottomLeft',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultAutohide').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                autohide: true,
                delay: 750,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultNotFixed').click(function() {
            $(document).Toasts('create', {
                title: 'Toast Title',
                fixed: false,
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultFull').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                icon: 'fas fa-envelope fa-lg',
            })
        });
        $('.toastsDefaultFullImage').click(function() {
            $(document).Toasts('create', {
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                image: '../../dist/img/user3-128x128.jpg',
                imageAlt: 'User Picture',
            })
        });
        $('.toastsDefaultSuccess').click(function() {
            $(document).Toasts('create', {
                class: 'bg-success',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultInfo').click(function() {
            $(document).Toasts('create', {
                class: 'bg-info',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultWarning').click(function() {
            $(document).Toasts('create', {
                class: 'bg-warning',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultDanger').click(function() {
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
        $('.toastsDefaultMaroon').click(function() {
            $(document).Toasts('create', {
                class: 'bg-maroon',
                title: 'Toast Title',
                subtitle: 'Subtitle',
                body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });
    });

</script>
<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<!-- page chartjs script -->
<script>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label               : 'Digital Goods',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label               : 'Electronics',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines : {
                        display : false,
                    }
                }],
                yAxes: [{
                    gridLines : {
                        display : false,
                    }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart       = new Chart(areaChartCanvas, {
            type: 'line',
            data: areaChartData,
            options: areaChartOptions
        })

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        var lineChartData = jQuery.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [
                {
                    data: [700,500,400,600,300,100],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData        = donutData;
        var pieOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------
        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = jQuery.extend(true, {}, barChartData)

        var stackedBarChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }

        var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>
<!-- Page flot script -->
<script>
    $(function () {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data        = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0) {
                data = data.slice(1)
            }

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y    = prev + Math.random() * 10 - 5

                if (y < 0) {
                    y = 0
                } else if (y > 100) {
                    y = 100
                }

                data.push(y)
            }

            // Zip the generated y values with the x values
            var res = []
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res
        }

        var interactive_plot = $.plot('#interactive', [
                {
                    data: getRandomData(),
                }
            ],
            {
                grid: {
                    borderColor: '#f3f3f3',
                    borderWidth: 1,
                    tickColor: '#f3f3f3'
                },
                series: {
                    color: '#3c8dbc',
                    lines: {
                        lineWidth: 2,
                        show: true,
                        fill: true,
                    },
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    show: true
                },
                xaxis: {
                    show: true
                }
            }
        )

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()])

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw()
            if (realtime === 'on') {
                setTimeout(update, updateInterval)
            }
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
            update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function () {
            if ($(this).data('toggle') === 'on') {
                realtime = 'on'
            }
            else {
                realtime = 'off'
            }
            update()
        })
        /*
         * END INTERACTIVE CHART
         */


        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var sin = [],
            cos = []
        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)])
            cos.push([i, Math.cos(i)])
        }
        var line_data1 = {
            data : sin,
            color: '#3c8dbc'
        }
        var line_data2 = {
            data : cos,
            color: '#00c0ef'
        }
        $.plot('#line-chart', [line_data1, line_data2], {
            grid  : {
                hoverable  : true,
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor  : '#f3f3f3'
            },
            series: {
                shadowSize: 0,
                lines     : {
                    show: true
                },
                points    : {
                    show: true
                }
            },
            lines : {
                fill : false,
                color: ['#3c8dbc', '#f56954']
            },
            yaxis : {
                show: true
            },
            xaxis : {
                show: true
            }
        })
        //Initialize tooltip on hover
        $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
            position: 'absolute',
            display : 'none',
            opacity : 0.8
        }).appendTo('body')
        $('#line-chart').bind('plothover', function (event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2)

                $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
                    .css({
                        top : item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200)
            } else {
                $('#line-chart-tooltip').hide()
            }

        })
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
            [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
            [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
        $.plot('#area-chart', [areaData], {
            grid  : {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color     : '#00c0ef',
                lines : {
                    fill: true //Converts the line chart to area chart
                },
            },
            yaxis : {
                show: false
            },
            xaxis : {
                show: false
            }
        })

        /* END AREA CHART */

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
            data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
            bars: { show: true }
        }
        $.plot('#bar-chart', [bar_data], {
            grid  : {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor  : '#f3f3f3'
            },
            series: {
                bars: {
                    show: true, barWidth: 0.5, align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis : {
                ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
            }
        })
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */

        var donutData = [
            {
                label: 'Series2',
                data : 30,
                color: '#3c8dbc'
            },
            {
                label: 'Series3',
                data : 20,
                color: '#0073b7'
            },
            {
                label: 'Series4',
                data : 50,
                color: '#00c0ef'
            }
        ]
        $.plot('#donut-chart', donutData, {
            series: {
                pie: {
                    show       : true,
                    radius     : 1,
                    innerRadius: 0.5,
                    label      : {
                        show     : true,
                        radius   : 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }

                }
            },
            legend: {
                show: false
            }
        })
        /*
         * END DONUT CHART
         */

    })

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
            + label
            + '<br>'
            + Math.round(series.percent) + '%</div>'
    }
</script>
<!-- page inline script -->
<script>
    $(function () {
        /* jQueryKnob */

        $('.knob').knob({
            /*change : function (value) {
             //console.log("change : " + value);
             },
             release : function (value) {
             console.log("release : " + value);
             },
             cancel : function () {
             console.log("cancel : " + this.value);
             },*/
            draw: function () {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a   = this.angle(this.cv)  // Angle
                        ,
                        sa  = this.startAngle          // Previous start angle
                        ,
                        sat = this.startAngle         // Start angle
                        ,
                        ea                            // Previous end angle
                        ,
                        eat = sat + a                 // End angle
                        ,
                        r   = true

                    this.g.lineWidth = this.lineWidth

                    this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3)

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.value)
                        this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3)
                        this.g.beginPath()
                        this.g.strokeStyle = this.previousColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                        this.g.stroke()
                    }

                    this.g.beginPath()
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                    this.g.stroke()

                    this.g.lineWidth = 2
                    this.g.beginPath()
                    this.g.strokeStyle = this.o.fgColor
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
                    this.g.stroke()

                    return false
                }
            }
        })
        /* END JQUERY KNOB */

        //INITIALIZE SPARKLINE CHARTS
        $('.sparkline').each(function () {
            var $this = $(this)
            $this.sparkline('html', $this.data())
        })

        /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
        drawDocSparklines()
        drawMouseSpeedDemo()

    })

    function drawDocSparklines() {

        // Bar + line composite charts
        $('#compositebar').sparkline('html', {
            type    : 'bar',
            barColor: '#aaf'
        })
        $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
            {
                composite: true,
                fillColor: false,
                lineColor: 'red'
            })


        // Line charts taking their values from the tag
        $('.sparkline-1').sparkline()

        // Larger line charts for the docs
        $('.largeline').sparkline('html',
            {
                type  : 'line',
                height: '2.5em',
                width : '4em'
            })

        // Customized line chart
        $('#linecustom').sparkline('html',
            {
                height      : '1.5em',
                width       : '8em',
                lineColor   : '#f00',
                fillColor   : '#ffa',
                minSpotColor: false,
                maxSpotColor: false,
                spotColor   : '#77f',
                spotRadius  : 3
            })

        // Bar charts using inline values
        $('.sparkbar').sparkline('html', { type: 'bar' })

        {{--$('.barformat').sparkline([1, 3, 5, 3, 8], {--}}
        {{--    type               : 'bar',--}}
        {{--    tooltipFormat      : '{{value:levels}} - {{value}}',--}}
        {{--    tooltipValueLookups: {--}}
        {{--        levels: $.range_map({--}}
        {{--            ':2' : 'Low',--}}
        {{--            '3:6': 'Medium',--}}
        {{--            '7:' : 'High'--}}
        {{--        })--}}
        {{--    }--}}
        {{--})--}}

        // Tri-state charts using inline values
        $('.sparktristate').sparkline('html', { type: 'tristate' })
        $('.sparktristatecols').sparkline('html',
            {
                type    : 'tristate',
                colorMap: {
                    '-2': '#fa7',
                    '2' : '#44f'
                }
            })

        // Composite line charts, the second using values supplied via javascript
        $('#compositeline').sparkline('html', {
            fillColor     : false,
            changeRangeMin: 0,
            chartRangeMax : 10
        })
        $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
            {
                composite     : true,
                fillColor     : false,
                lineColor     : 'red',
                changeRangeMin: 0,
                chartRangeMax : 10
            })

        // Line charts with normal range marker
        $('#normalline').sparkline('html',
            {
                fillColor     : false,
                normalRangeMin: -1,
                normalRangeMax: 8
            })
        $('#normalExample').sparkline('html',
            {
                fillColor       : false,
                normalRangeMin  : 80,
                normalRangeMax  : 95,
                normalRangeColor: '#4f4'
            })

        // Discrete charts
        $('.discrete1').sparkline('html',
            {
                type     : 'discrete',
                lineColor: 'blue',
                xwidth   : 18
            })
        $('#discrete2').sparkline('html',
            {
                type          : 'discrete',
                lineColor     : 'blue',
                thresholdColor: 'red',
                thresholdValue: 4
            })

        // Bullet charts
        $('.sparkbullet').sparkline('html', { type: 'bullet' })

        // Pie charts
        $('.sparkpie').sparkline('html', {
            type  : 'pie',
            height: '1.0em'
        })

        // Box plots
        $('.sparkboxplot').sparkline('html', { type: 'box' })
        $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
            {
                type        : 'box',
                raw         : true,
                showOutliers: true,
                target      : 6
            })

        // Box plot with specific field order
        $('.boxfieldorder').sparkline('html', {
            type                     : 'box',
            tooltipFormatFieldlist   : ['med', 'lq', 'uq'],
            tooltipFormatFieldlistKey: 'field'
        })

        // click event demo sparkline
        $('.clickdemo').sparkline()
        $('.clickdemo').bind('sparklineClick', function (ev) {
            var sparkline = ev.sparklines[0],
                region    = sparkline.getCurrentRegionFields()
            value         = region.y
            alert('Clicked on x=' + region.x + ' y=' + region.y)
        })

        // mouseover event demo sparkline
        $('.mouseoverdemo').sparkline()
        $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
            var sparkline = ev.sparklines[0],
                region    = sparkline.getCurrentRegionFields()
            value         = region.y
            $('.mouseoverregion').text('x=' + region.x + ' y=' + region.y)
        }).bind('mouseleave', function () {
            $('.mouseoverregion').text('')
        })
    }

    /**
     ** Draw the little mouse speed animated graph
     ** This just attaches a handler to the mousemove event to see
     ** (roughly) how far the mouse has moved
     ** and then updates the display a couple of times a second via
     ** setTimeout()
     **/
    function drawMouseSpeedDemo() {
        var mrefreshinterval = 500 // update display every 500ms
        var lastmousex       = -1
        var lastmousey       = -1
        var lastmousetime
        var mousetravel      = 0
        var mpoints          = []
        var mpoints_max      = 30
        $('html').mousemove(function (e) {
            var mousex = e.pageX
            var mousey = e.pageY
            if (lastmousex > -1) {
                mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey))
            }
            lastmousex = mousex
            lastmousey = mousey
        })
        var mdraw = function () {
            var md      = new Date()
            var timenow = md.getTime()
            if (lastmousetime && lastmousetime != timenow) {
                var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000)
                mpoints.push(pps)
                if (mpoints.length > mpoints_max) {
                    mpoints.splice(0, 1)
                }
                mousetravel = 0
                $('#mousespeed').sparkline(mpoints, {
                    width        : mpoints.length * 2,
                    tooltipSuffix: ' pixels per second'
                })
            }
            lastmousetime = timenow
            setTimeout(mdraw, mrefreshinterval)
        }
        // We could use setInterval instead, but I prefer to do it this way
        setTimeout(mdraw, mrefreshinterval);
    }
</script>
<!-- Page advanced script -->
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
        //Money Euro
        $('[data-mask]').inputmask();

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'hh:mm A'
            }
        })
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePicker24Hour: true,
            timePickerIncrement: 1,
            timePickerSeconds: true,
            locale: {
                format: 'HH:mm:ss'
            }
        }).on('show.daterangepicker', function (ev, picker) {
            picker.container.find(".calendar-table").hide();
        });
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'Today'       : [moment(), moment()],
                    'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                    'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })
    $('#timepicker2').datetimepicker({
            format: 'LT'
        });

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>
<!-- page data script -->
<script src="{{asset('js/jQuery.js')}}"></script>

<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
<!-- page jsgrid script -->
<script>
    $(function () {
        $("#jsGrid1").jsGrid({
            height: "100%",
            width: "100%",

            sorting: true,
            paging: true,

            data: db.clients,

            fields: [
                { name: "Name", type: "text", width: 150 },
                { name: "Age", type: "number", width: 50 },
                { name: "Address", type: "text", width: 200 },
                { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                { name: "Married", type: "checkbox", title: "Is Married" }
            ]
        });
    });
</script>

<!-- page ribbons script -->
<script>
    $(function () {
        /* BOOTSTRAP SLIDER */
        $('.slider').bootstrapSlider()

        /* ION SLIDER */
        $('#range_1').ionRangeSlider({
            min     : 0,
            max     : 5000,
            from    : 1000,
            to      : 4000,
            type    : 'double',
            step    : 1,
            prefix  : '$',
            prettify: false,
            hasGrid : true
        })
        $('#range_2').ionRangeSlider()

        $('#range_5').ionRangeSlider({
            min     : 0,
            max     : 10,
            type    : 'single',
            step    : 0.1,
            postfix : ' mm',
            prettify: false,
            hasGrid : true
        })
        $('#range_6').ionRangeSlider({
            min     : -50,
            max     : 50,
            from    : 0,
            type    : 'single',
            step    : 1,
            postfix : '°',
            prettify: false,
            hasGrid : true
        })

        $('#range_4').ionRangeSlider({
            type      : 'single',
            step      : 100,
            postfix   : ' light years',
            from      : 55000,
            hideMinMax: true,
            hideFromTo: false
        })
        $('#range_3').ionRangeSlider({
            type    : 'double',
            postfix : ' miles',
            step    : 10000,
            from    : 25000000,
            to      : 35000000,
            onChange: function (obj) {
                var t = ''
                for (var prop in obj) {
                    t += prop + ': ' + obj[prop] + '\r\n'
                }
                $('#result').html(t)
            },
            onLoad  : function (obj) {
                //
            }
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function () {
        var postURL = "<?php echo url('addmore'); ?>";
        var i = 0;
        var b = 0;
        var co=1;
        $('#add1').click(function () {
            i++;
            co++;
            $('#dynamic_field').append('<tr id="row' + i + '" class="dynamic-added"><td><div class="form-group">\n' +
                '                                <label>jour</label>\n' +
                '                                <select class="form-control select2" style="width: 100%;" name="jour[]">\n' +
                '                                    <option selected="selected" value="Sunday">Dimanche</option>\n' +
                '                                    <option value="Monday">Lundi</option>\n' +
                '                                    <option value="Tuesday">Mardi</option>\n' +
                '                                    <option value="Wednesday">Mercredi</option>\n' +
                '                                    <option value="Thursday">Jeudi</option>\n' +
                '                                    <option value="Friday">Vendredi</option>\n' +
                '                                    <option value="Saturday">Samedi</option>\n' +
                '                                </select>\n' +
                '                            </div>\n' +
                '                                            <div class="form-group">\n' +
                '                                                <label for="inputName">debut</label>\n' +
                '                                                <input type="time" id="debut' + i + '" name="debut[]" class="form-control">\n' +
                '                                            </div>\n' +
                '                                            <div class="form-group">\n' +
                '                                                <label for="inputName">fin</label>\n' +
                '                                                <input type="time" id="fin' + i + '" name="fin[]" class="form-control">\n' +
                '                                            </div></td></tr><input type="hidden" name="row' + i + '" value ="">');
            $('#dynamic_field2').append('<option id="op'+co+'" value="' +co+ '">' + co + '</option>');



        });
        $('#add2').click(function () {
            i++;
            co++;
            $('#dynamic_field1').append('<tr id="row' + i + '" class="dynamic-added"><td><input type="text" name="choice[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            $('#dynamic_field22').append('<option id="op'+co+'" value="' +co+ '">' + co + '</option>');
        });
        $('#add').click(function () {
            b++;
            $('#dynamic_field3').append('<tr id="row' + b + '" class="dynamic-added"><td style="float: left"><div  ><div class="input-group"><span class="input-group-addon"><input type="checkbox" name="is_correct[]" value="1"><input type="hidden" name="is_correct[]" value="0"></span><input type="text" name="choice[]" class="form-control" style="width: 500px"></div><!-- /input-group --></div></td><td style="float: left"><button type="button" name="remove" id="' + b + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            var op_id=$(this).attr("op")
            $('#row' + i + '').remove();
            i--;
            $('#op'+co+'' ) .remove();
            co--;
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#submit').click(function () {
            $.ajax({
                url: postURL,
                method: "POST",
                data: $('#add_name').serialize(),
                type: 'json',
                success: function (data) {
                    if (data.error) {
                        printErrorMsg(data.error);
                    } else {
                        i = 1;
                        !
                            $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display', 'block');
                        $(".print-error-msg").css('display', 'none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });
        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $(".print-success-msg").css('display', 'none');
            $.each(msg, function (key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    });
</script>







<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{asset('dist/js/bootstrap-iconpicker.bundle.min.js')}}"></script>

<script type="text/javascript">

    $(function(){

        $('#convert_example_1').iconpicker({
            arrowClass: 'btn-danger',
            arrowPrevIconClass: 'fas fa-angle-left',
            arrowNextIconClass: 'fas fa-angle-right',
            cols: 10,
            footer: true,
            header: true,
            icon: 'fas fa-bomb',
            iconset: 'fontawesome5',
            labelHeader: '{0} of {1} pages',
            labelFooter: '{0} - {1} of {2} icons',
            placement: 'bottom',
            rows: 5,
            search: true,
            searchText: 'Search',
            selectedClass: 'btn-success',
            unselectedClass: ''
        });

        $('#convert_example_2').iconpicker().on('change', function(e) {
            $("#console").prepend(e.icon+'</br>');
        });

        $('#convert_example_3')
            .iconpicker()
            .iconpicker('setAlign', 'center')
            .iconpicker('setArrowClass', 'btn-success')
            .iconpicker('setArrowPrevIconClass', 'fas fa-angle-left')
            .iconpicker('setArrowNextIconClass', 'fas fa-angle-right')
            .iconpicker('setCols', 9)
            .iconpicker('setFooter', true)
            .iconpicker('setHeader', true)
            .iconpicker('setIconset', {
                iconClass: 'fas',
                iconClassFix: 'fa-',
                icons: [
                    'fast-backward',
                    'step-backward',
                    'backward',
                    'play',
                    'pause',
                    'stop',
                    'forward',
                    'step-forward',
                    'fast-forward',
                ],
            })
            .iconpicker('setIcon', 'fa-pause')
            .iconpicker('setLabelHeader', '{0} of {1} pages')
            .iconpicker('setLabelFooter', '{0} - {1} of {2} icons')
            .iconpicker('setPlacement', 'bottom')
            .iconpicker('setRows', 0)
            .iconpicker('setSearch', true)
            .iconpicker('setSearchText', 'Type text')
            .iconpicker('setSelectedClass', 'btn-danger')
            .iconpicker('setUnselectedClass', 'btn-primary');

    });

</script>

<!-- Button Builder Example -->
<script type="text/javascript">

    $(function(){
        var show_result = function(){
            $('#result').text($('#button').html().trim());
        };

        show_result();

        $('#btn-text').on('focusout', function(e) {
            $('#btn-icon-positions button[value="' + $('#button').data('position') + '"]').trigger('click')
            show_result();
        });

        $('#btn-colors button').on('click', function(e) {
            $('#button a').removeClass('btn-primary btn-secondary btn-success btn-danger btn-warning btn-info btn-light btn-dark btn-link').addClass($(this).val());
            show_result();
        });

        $('#btn-sizes button').on('click', function(e) {
            $('#button a').removeClass('btn-sm btn-lg').addClass($(this).val());
            show_result();
        });

        $('#btn-sizes a').on('click', function(e) {
            $('#button a').toggleClass('btn-block');
            show_result();
        });

        $('#btn-icon').iconpicker({
            rows: 5,
            cols: 10,
            align: 'left'
        });

        $('#btn-icon').on('change', function(e) {
            $('#button a > i').attr('class', '').addClass(e.icon);
            $('#test p > i').attr('class', '').addClass(e.icon);
            show_result();
        });

        $('#btn-icon-positions button').on('click', function(e) {
            var icon = $('#button a > i');
            var text = $('#btn-text').val();
            $('#button a').empty();
            if($(this).val() == 'left'){
                $('#button a').append(icon).append(' ' + text);
            }
            else{
                $('#button a').append(text + ' ').append(icon);
                $('#test p').append(text + ' ').append(icon);
            }
            $('#button').data('position', $(this).val());
            show_result();
        });
    });

</script>

<script type="text/javascript">

    $(function(){
        $('#btnDonate').bind('click', function(e){
            e.preventDefault();
            $('#formDonate').submit();
        });

        $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker", function( data ) {
            $('#btnStars').html(data.stargazers_count);
            $('#btnForks').html(data.forks_count);
        });

        $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker/tags", function( data ) {
            $('#btnReleases').html(data.length);

            var url = "https://github.com/victor-valencia/bootstrap-iconpicker/archive/" + data[0].name;

            $('#btnGithub').html($('#btnGithub').html().replace('{0}', data[0].name));

            $('#btnDownloadZip').attr('href', url + '.zip');
            $('#btnDownloadZip').html($('#btnDownloadZip').html().replace('{0}', data[0].name));

            $('#btnDownloadTar').attr('href', url + '.tar.gz');
            $('#btnDownloadTar').html($('#btnDownloadTar').html().replace('{0}', data[0].name));
        });

        $.getJSON( "https://api.github.com/repos/victor-valencia/bootstrap-iconpicker/contributors", function( data ) {
            $('#btnContributors').html(data.length);
        });

        $('[role="menu"] a').on('click', function(){
            $("#tabConfig").html($(this).html() + ' <span class="caret"></span>');
        });
    });
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-38890641-4', 'auto');
    ga('send', 'pageview');
</script>

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
