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

    <title>AdminLTE 3 | Starter</title>

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
                <a href="index3.html" class="nav-link"> <strong>Home</strong></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Foramtions</strong></a>
            </li><li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Sessions</strong></a>
            </li><li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Créneaux</strong></a>
            </li> </li><li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Départements</strong></a>
            </li> </li><li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Catégories</strong></a>
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
                                <a href="#" class="nav-link active" style="color: black">
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
                                <a href="#" class="nav-link" style="color: black">
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
                                Comptes
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" style="color: black">
                                    <i class="fas fa-users"></i>
                                    <p>Liste des Comptes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" style="color: black">
                                    <i class="fas fa-user"></i>
                                    <p>Créer Compte</p>
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
        <section class="content">
            <form role="form" method="post" action="{{route('admin.session.store')}} ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-secondary">
                            <div class="card-header" style="background-color: #fd7e14;">
                                <h3 class="card-title">Session</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">Formation</label>
                                    <select class="form-control custom-select" name="formation" id="formation">
                                        <option selected disabled>Select one</option>
                                        @foreach($formations as $key => $value )
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Session</label>
                                    <select class="form-control custom-select" name="session" id="formation">
                                        <option selected disabled>Select one</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Tarif Globale</label>
                                    <div class="input-group">
                                        <input id="box1" type="text" oninput="calculate()" />
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">.00 DA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Pourcentage</label>
                                    <div class="input-group">
                                        <input id="box2" type="text" oninput="calculate()" />
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Tarif Final</label>
                                    <div class="input-group">
                                        <input id="result" />
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">.00 DA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card card-secondary">
                            <div class="card-header" style="background-color: #2980b9;">
                                <h3 class="card-title">Participant</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group clearfix">
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary1" name="r1" checked>
                                        <label for="radioPrimary1">
                                            dbdf
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary2" name="r1">
                                        <label for="radioPrimary2">
                                            fdhrdhg
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline">
                                        <input type="radio" id="radioPrimary3" name="r1" >
                                        <label for="radioPrimary3">
                                            Primary radio
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Date fin</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="date_fin_p" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Pourcentage</label>
                                    <div class="input-group">
                                        <input type="number" id="inputEstimatedBudget" name="pourcentage_p" class="form-control">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header" style="background-color: #34495e;">
                                <h3 class="card-title">Creneau</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-bordered" id="dynamic_field">

                                        <tr id="row0">
                                            <td><div class="form-group">
                                                    <label>jour</label>
                                                    <select class="form-control select2" style="width: 100%;" name="jour[]">
                                                        <option selected="selected" value="sunday">Dimanche</option>
                                                        <option value="monday">Lundi</option>
                                                        <option value="Tuesday">Mardi</option>
                                                        <option value="Wednesday">Mercredi</option>
                                                        <option value="Thursday">Jeudi</option>
                                                        <option value="Friday">Vendredi</option>
                                                        <option value="Saturday">Samedi</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">debut</label>
                                                    <input type="time" id="debut[]" name="debut[]" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">fin</label>
                                                    <input type="time" id="fin[]" name="fin[]" class="form-control">
                                                </div>

                                            </td>
                                        </tr><input type="hidden" name="row" value="">
                                    </table>
                                </div>
                            </div>
                            <p id="ii">  </p>
                            <input type="hidden" name="ii"  value=""  id="ii" >
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Create new formation" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
            <button class="float" name="add1" id="add1">
                <i class="fa fa-plus my-float"></i>
            </button> <button type="button" name="remove" id="0" class="float2 btn_remove">
                <i class="fa fa-times my-float2"></i>
            </button>
        </section>


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

{{--<table width="80%" border="0">--}}
{{--    <tr>--}}
{{--        <th>Box 1</th>--}}
{{--        <th>Box 2</th>--}}
{{--        <th>Result</th>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td><input id="box1" type="text" oninput="calculate()" /></td>--}}
{{--        <td><input id="box2" type="text" oninput="calculate()" /></td>--}}
{{--        <td><input id="result" /></td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>&nbsp;</td>--}}
{{--        <td>&nbsp;</td>--}}
{{--        <td>&nbsp;</td>--}}
{{--    </tr>--}}
{{--</table>--}}
<script>


    function calculate() {
        var myBox1 = document.getElementById('box1').value;
        var myBox2 = document.getElementById('box2').value;
        var result = document.getElementById('result');
        var myResult = myBox1-(myBox1 * myBox2/100);
        result.value = myResult;


    }
</script>
<button class="btn btn-danger"> test </button>
<script src ="{{asset('js/jQuery.js')}}"> </script>

<script>

    $(document).ready(function () {

        $('select[name="formation"]').on('change',function () {
            var  id_formation =$(this).val();

            if (id_formation){
                // console.log('admin/inscription/getsessions/'+id_formation)
                $.ajax({
                    url: 'getsessions/'+1,
                    type: 'GET',
                    dataType:'json',
                    success: function (data) {
                        console.log(data);
                        $('select[name="session"]').empty();
                        $.each(data,function (key, value) {
                            $('select[name="session"]')
                                .append('<option value ="'+key+'">'+value+'</option>');
                        });
                    }
                });

            }else {
                $('select[name="session"]').empty();
            }
        });
    });

</script>
{{--<script>--}}
{{--    $(document).ready(function (){--}}
{{--       var x =   document.getElementById("TarifG");--}}
{{--        document.getElementById("Tariff").value = x;--}}
{{--       console.log(x);--}}
{{--    });--}}

{{--</script>--}}
</body>
</html>


