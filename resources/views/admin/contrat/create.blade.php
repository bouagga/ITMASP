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
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #2ecc71;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .float2 {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 109px;
            right: 40px;
            background-color: #e74c3c;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float {
            margin-top: 9px;
        }

        .my-float2 {
            margin-top: 9px;
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
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Sessions</strong></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Créneaux</strong></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><strong>Départements</strong></a>
            </li>

            <li class="nav-item d-none d-sm-inline-block">
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
                {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i></a>
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
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
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
                                <a href="{{route('admin.formation.index')}}" class="nav-link active"
                                   style="color: black">
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
                                Contrats
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" style="color: black">
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
        <section class="content">
            <form role="form" method="post" action="{{route('admin.contrat.store')}} ">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="row">
                    <div @if($inscription!=null) class="col-md-9" @else class="col-md-6" @endif>
                        <div class="card card-secondary">
                            <div class="card-header" style="background-color: #fd7e14;">
                                <h3 class="card-title">Session</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputStatus">Formation</label>
                                    @if($inscription!=null)

                                        <select class="form-control custom-select" name="formation" id="formation" disabled="disabled">
                                        @foreach($inscription->session()->get() as $sesion)
{{--                                            {{dd($sesion)}}--}}

                                            @foreach($sesion->formation()->get() as $f)
                                        <option selected disabled value="{{$f->id_formation}}">{{$f->Intitule}}</option>
                                            @endforeach
                                        @endforeach
                                        @else

                                                <select class="form-control custom-select" name="formation" id="formation">
                                                <option selected disabled>Select one</option>

                                    @endif

                                        @foreach($formations as $key => $value )
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Session</label>
                                    @if($inscription!=null)

                                    <select class="form-control custom-select" name="id_session" id="formation" disabled="disabled">
                                        @foreach($inscription->session()->get() as $sesion)


                                            <option selected 0 value="{{$sesion->id_session}}">{{$sesion->date_lancement}}</option>

                                        @endforeach
                                        @else
                                                <select class="form-control custom-select" name="id_session" id="formation" >

                                                <option selected disabled>Select one</option>
                                     @endif

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Tarif Globale</label>
                                    <div class="input-group">
                                        @if($inscription!=null)

                                        <input id="box1" type="text" disabled name="TarifG" value="{{$inscription->TarifG}}" oninput="calculate()"/>

                                        @else
                                            <input id="box1" type="text" name="TarifG"  oninput="calculate()"/>
                                        @endif
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">.00 DA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Reduction</label>
                                    <div class="input-group">
                                        @if($inscription!=null)
                                        <input id="box2" type="text" name="Reduction" value="{{$inscription->Reduction}}" oninput="calculate()"/>
                                        @else
                                            <input id="box2" type="text" name="Reduction" oninput="calculate()"/>

                                        @endif
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">Tarif Final</label>
                                    <div class="input-group">
                                        @if($inscription!=null)
                                        <input id="result" name="TarifF" value="{{$inscription->TarifF}}"/>
                                        @else
                                            <input id="result" name="TarifF"/>
                                        @endif
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">.00 DA</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Type de paiement</label>
                                    <select class="form-control custom-select" name="type">
                                        <option selected disabled>Select one</option>
                                            <option value="espace">espace </option>
                                            <option value="chaque">chaque</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputEstimatedBudget">montant</label>
                                    <div class="input-group">
                                        <input type="number" id="inputEstimatedBudget" name="montant" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">DA</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    <div @if($inscription!=null)  class="col-md-3" @else class="col-md-6" @endif >



                        @if($inscription!=null)
                            @foreach($inscription->session()->get() as $sesion)
                                <input type="hidden" id="id_session" name="id_session" value="{{$sesion->id_session}}" class="form-control">
                            @endforeach

                            <div class="col-md-12">
                     @foreach($inscription->client()->get() as $c)
                                <!-- Profile Image -->
                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                 src="{{asset('dist/img/avatar04.png')}}"
                                                 alt="User profile picture">
                                        </div>
                                        <input type="hidden" id="id_client" name="id_client" value="{{$c->id_client}}" class="form-control">
                                        <h3 class="profile-username text-center">{{$c->statut}} {{$c->nom}} {{$c->prenom}}</h3>

{{--                                        <p class="text-muted text-center">Software Engineer</p>--}}

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>date naissance</b> <a class="float-right">{{$c->date_naissance}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>lieu naissance</b> <a class="float-right">{{$c->lieu_naissance}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Adresse</b> <a class="float-right">{{$c->Adresse}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Adresse Email</b> <a class="float-right">{{$c->email}}</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Mobile</b> <a class="float-right">{{$c->Mob1}}</a>
                                            </li>
                                        </ul>

{{--                                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- About Me Box -->
                                <!-- /.card -->
                         @endforeach
                            </div>

                            <!-- /.card-body -->


                        @else
                            <div class="card card-secondary">
                                <div class="card-header" style="background-color: #2980b9;">
                                    <h3 class="card-title">Participant</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group clearfix">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary1" name="statut" value="Mme" checked>
                                            <label for="radioPrimary1">
                                                Mme
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary2" name="statut" value="Melle">
                                            <label for="radioPrimary2">
                                                Melle
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="radioPrimary3" name="statut" value="Mr">
                                            <label for="radioPrimary3">
                                                Mr
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">

                                            <label style="margin: 7px">Nom</label>
                                            <input type="text" class="form-control" name="nom" placeholder="Enter ...">
                                            <label style="margin: 7px">Prenom</label>
                                            <input type="text" class="form-control" name="prenom" placeholder="Enter ...">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Deja Inscrit</label>

                                        <div class="icheck-danger d-inline">
                                            <input type="radio" name="Inscrit" value="1" checked id="radioDanger1">
                                            <label for="radioDanger1">
                                                Oui
                                            </label>
                                        </div>
                                        <div class="icheck-danger d-inline">
                                            <input type="radio" name="Inscrit" value="0" id="radioDanger2">
                                            <label for="radioDanger2">
                                                Non
                                            </label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label>Date & lieu de naissance</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" name="date_naissance"
                                                   data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy"
                                                   data-mask>
                                            <label style="margin: 7px"> a </label>
                                            <input type="text" id="inputEstimatedBudget" name="lieu_naissance"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Adresse</label>
                                        <input type="text" id="Adresse" name="Adresse" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">Adresse Email</label>
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telephone Fix</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="tel" id="phone" name="fix" placeholder="1234567890"
                                                   pattern="[0-9]{3}[0-9]{2}[0-9]{3}" >
                                        </div>
                                        <!-- /.input group -->

                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="tel" id="phone" name="Mob1"
                                                   placeholder="1234567890"
                                                   pattern="[0-9]{3}[0-9]{2}[0-9]{3}" >
                                            <label style="margin: 7px"> Mob1 </label>

                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i
                                                                        class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="tel" id="phone" name="Mob2"
                                                   placeholder="1234567890"
                                                   pattern="[0-9]{3}[0-9]{2}[0-9]{3}"   >
                                            <label style="margin: 7px"> Mob2 </label>
                                            <!-- /.input group -->

                                        </div>

                                    </div>


                                </div>
                                <!-- /.card-body -->
                            </div>
@endif
                            <!-- /.card -->
                    </div>
                </div>
                <div class="row">



                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Creé Contrat" class="btn btn-success float-right">
                    </div>
                </div>
            </form>

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
        var myResult = myBox1 - (myBox1 * myBox2 / 100);
        result.value = myResult;


    }
</script>

<script src="{{asset('js/jQuery.js')}}"></script>

<script>

    $(document).ready(function () {

        $('select[name="formation"]').on('change', function () {
            var id_formation = $(this).val();

            if (id_formation) {
                // console.log('admin/inscription/getsessions/'+id_formation)
                $.ajax({
                    url: 'getsessions/' + id_formation,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        $('select[name="id_session"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="id_session"]')
                                .append('<option selected disabled>Select one</option>' +
                                    '<option value ="' + key + '">' + value + '</option>');
                        });
                    }
                });

            } else {
                $('select[name="id_session"]').empty();
            }
        });
    });

</script>
<script>

    $(document).ready(function () {

        $('select[name="formation"]').on('change', function () {
            var id_formation = $(this).val();


            if (id_formation) {
                // console.log('admin/inscription/getprice/'+id_formation)
                $.ajax({
                    url: 'getprice/' + id_formation,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        document.getElementById("box1").value = data;
                    }
                });

                // }else {
                //     $('select[name="session"]').empty();
            }
        });
    });

</script>
<script>

    $(document).ready(function () {

        $('select[name="id_session"]').on('change', function () {
            var id_session = $(this).val();


            if (id_session) {
                // console.log('admin/inscription/getprice/'+id_formation)
                $.ajax({
                    url: 'getPourcentage/' + id_session,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        document.getElementById("box2").value = data;
                        var myBox1 = document.getElementById('box1').value;
                        var myBox2 = document.getElementById('box2').value;
                        var result = document.getElementById('result');
                        var myResult = myBox1 - (myBox1 * myBox2 / 100);
                        result.value = myResult;

                    }
                });

                // }else {
                //     $('select[name="session"]').empty();
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


