@extends('layouts.admin')

@section('content')

    <div class="card-body" style="color: black">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>clinet</th>
                <th>formation</th>
                <th>session</th>
                <th>Prix calculé</th>
                <th>Modifier</th>
                <th>Archiver</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contrats as $c )
                <tr>
                    <td>{{$c->id_contrat}}</td>
                    @foreach($c->client()->get() as $cl)
                        <td>{{$cl->nom}} {{$cl->prenom}}</td>
                    @endforeach

                    @foreach($c->session()->get() as $s)
                        @foreach($s->formation()->get() as $ff)
                        <td>{{$ff->Intitule}}</td>
                        @endforeach
                    @endforeach
                    @foreach($c->session()->get() as $s)
                        <td>{{$s->date_lancement}}</td>
                    @endforeach
                    <td>{{$c->TarifF}} </td>
                    <td>

                        <a href="{{route('admin.contrat.show',$c->id_contrat)}}">
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
