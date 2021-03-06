@extends('layouts.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">


                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Department</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-code"></i> Nom </strong>

                            <p class="text-muted">
                                {{$department->nom}}
                            </p>

                            <hr>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Information</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <strong><i class="fas fa-bullseye"></i> description </strong>

                                    <p class="text-muted">
                                        {{$department->description}}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-bullseye"></i> Formations </strong>
                                    <br>
                                    <br>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Intitulé</th>
                                            <th>Catégorie</th>
                                            <th>Prix</th>
                                            <th>Modifier</th>
                                            <th>Archiver</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($formation as $f )
                                            <tr>
                                                <td>{{$f->code}}</td>
                                                <td>{{$f->Intitule}}</td>
                                                @foreach($f->category()->get() as $c)
                                                    <td>{{$c->designation}}</td>
                                                @endforeach
                                                <td>{{$f->prix}}.00 DA</td>
                                                <td>
                                                    <a href="{{route('admin.formation.show',$f->id_formation)}}">
                                                        <i class="fas fa-edit" style="margin-left: 40%;"></i>
                                                    </a>
                                                </td>

                                                <td>
                                                    <form role="form" method="post" action="{{route('admin.formation.destroy',$f->id_formation)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="fas fa-archive" style="margin-left: 40%;"></button>
                                                    </form>
                                                </td>


                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                    <br>


                                    <a href="{{route('admin.department.edit',$department->id_department)}}">
                                        <input type="submit" value="edit department"
                                               class="btn btn-success float-right">
                                    </a>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- /.tab-pane -->


                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


@endsection
