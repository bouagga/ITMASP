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
            @foreach($category as $c)
                <tr>
                    <td>{{$c->id_category}}</td>
                    <td>{{$c->designation}}</td>
                    <td>
                        <a href="{{route('admin.category.show',$c->id_category)}}">
                            <i class="fas fa-edit" style="margin-left: 40%;"></i>
                        </a>
                    </td>
@if( $c->designation =="not")

                        <td>

                                <i class="fas fa-archive" style="margin-left: 40%;"></i>

                        </td>
    @else

                    <td>
                        <form role="form" method="post" action="{{route('admin.category.destroy',$c->id_category)}}">
                            @method('DELETE')
                            @csrf
                            <button class="fas fa-archive" style="margin-left: 40%;"></button>
                        </form>
                    </td>
@endif

                </tr>
            @endforeach


            </tbody>
        </table>
        <br>
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin.category.create')}}" >

                    <input type="submit" value="Créer Category"
                           class="btn btn-success float-right">
                </a>
            </div>
        </div>

    </div>
@endsection
