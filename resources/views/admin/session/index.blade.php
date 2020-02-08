@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner" style="background-color: #5ce56d">
                    <h3>15</h3>

                    <p>informatique</p>
                </div>
                <div class="icon">
                    <i class="fas fa-laptop"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner" style="background-color: #4a69bd">
                    <h3>5</h3>

                    <p>Management</p>
                </div>
                <div class="icon">
                    <i class="fas fa-fax"></i>
                </div>

            </div>
        </div>
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner" style="background-color: #60a3bc">
                    <h3>2</h3>

                    <p>Langue</p>
                </div>
                <div class="icon">
                    <i class="fas fa-language"></i>
                </div>

            </div>
        </div>
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner" style="background-color: #78e08f">
                    <h3>53</h3>

                    <p>Tourisme</p>
                </div>
                <div class="icon">
                    <i class="fas fa-plane"></i>

                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner" style="background-color: #e58e26">
                    <h3>4</h3>

                    <p>Technique</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tools"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner" style="background-color: #079992">
                    <h3>3</h3>

                    <p>Métier</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-md"></i>
                </div>

            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="card-body" style="color: black">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>date_lancement</th>
                <th>id_formation</th>
                <th>Modifier</th>
                <th>Archiver</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $f )
                <tr>
                    <td>{{$f->id_session}}</td>

                    <td>{{$f->date_lancement}}</td>
                    <td>{{$f->id_formation}}</td>
                    <td>

                            <i class="fas fa-edit" style="margin-left: 40%;"></i>

                    </td>

                    <td>

                            <button class="fas fa-archive" style="margin-left: 40%;"></button>

                    </td>


                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
