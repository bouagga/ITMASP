@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner" style="background-color: #e55039">
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
                <th>Code</th>
                <th>Catégorie</th>
                <th>Départment</th>
                <th>Intitulé</th>
                <th>Prix</th>
                <th>Modifier</th>
                <th>Archiver</th>
            </tr>
            </thead>
            <tbody>
            @foreach($formations as $f )
            <tr>
                <td>{{$f->code}}</td>
                @foreach($f->category()->get() as $c)
                <td>{{$c->designation}}</td>
                @endforeach
                @foreach($f->departments()->get() as $d)
                <td>{{$d->nom}}</td>
                @endforeach
                <td>{{$f->Intitule}}</td>
                <td>{{$f->prix}} DA</td>
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
    </div>
@endsection
