@extends('layouts.admin')

@section('content')


    <div class="card-body" style="color: black">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Date d'inscription</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Telephone</th>
                <th>Mobile 1</th>
                <th>Mobile 2</th>
                <th>Modifier</th>
{{--                                                <th>1 calle</th>--}}
{{--                                                <th>2 calle</th>--}}
{{--                                                <th>3 calle</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($inscription as $inscr )
                <tr>
                    <td><a href="{{route('admin.inscription.show',$inscr->id_preinscription)}}"> {{$inscr->id_preinscription}}  </a></td>
                    <td>{{$inscr->created_at}}</td>
                    @foreach($inscr->client()->get() as $c)
                        <td>{{$c->nom}}</td>

                        <td>{{$c->prenom}}</td>

                        <td>{{$c->fix}}</td>
                        <td>{{$c->Mob1}}</td>
                        <td>{{$c->Mob2}}</td>
                    @endforeach
                    <td>
                        <a href="{{route('admin.inscription.show',$inscr->id_preinscription)}}">
                            <i class="fas fa-edit" style="margin-left: 40%;"></i>
                        </a>
                    </td>
{{--                @foreach($inscr->appelsortants()->get() as $aapel)--}}
{{--                        <td>{{$c->fix}}</td>--}}

{{--            @endforeach--}}
            @endforeach


            </tbody>
        </table>
    </div>

@endsection
