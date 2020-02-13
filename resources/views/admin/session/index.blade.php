@extends('layouts.admin')

@section('content')

    <div class="card-body" style="color: black">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>formation</th>
                <th>date_lancement</th>
                <th>Remise</th>
                <th>Prix calculé</th>
                <th>Modifier</th>
                <th>Archiver</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sessions as $f )
                <tr>
                    <td>{{$f->id_session}}</td>
                    @foreach($f->formation()->get() as $ff)
                    <td>{{$ff->Intitule}}</td>
                    @endforeach
                    <td>{{$f->date_lancement}}</td>
                    <td>{{$f->pourcentage_p}} %</td>
                    <td>{{$f->prix_p}} DA</td>


                    <td>

                        <a href="{{route('admin.session.show',$f->id_session)}}">
                            <i class="fas fa-edit" style="margin-left: 40%;"></i>
                        </a>

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
