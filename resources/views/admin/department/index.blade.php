@extends('layouts.admin')

@section('content')
    <div class="card-body" style="color: black">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Archiver</th>
            </tr>
            </thead>
            <tbody>
            @foreach($department as $d)
                <tr>
                    <td>{{$d->id_department}}</td>
                    <td>{{$d->nom}}</td>
                    <td>
                        <a href="{{route('admin.department.show',$d->id_department)}}">
                            <i class="fas fa-edit" style="margin-left: 40%;"></i>
                        </a>
                    </td>

                    <td>
                        <form role="form" method="post" action="{{route('admin.department.destroy',$d->id_department)}}">
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
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin.department.create')}}" >

                    <input type="submit" value="Créer department"
                           class="btn btn-success float-right">
                </a>
            </div>
        </div>

    </div>
@endsection
