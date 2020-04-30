@extends('layouts.admin')

@section('content')
    {{--    @foreach($time as $day )--}}
    {{--        <p>{{$day}}</p>--}}
    {{--        @endforeach--}}
    <script>
        // unixTimeZero = Date.parse('12-02-2022');
        // var someDate = new Date();
        document.write(" <div class=\"row\">");
            @foreach($time as $day)
        var d = new Date("{{$day}}");
        var numberOfDaysToAdd = 7;
        // d.setDate(d.getDate() + numberOfDaysToAdd);
        var n = d.toDateString();
        var b = d.getDay();

        var weekday = new Array(7);
        weekday[0] = "Dimanche";
        weekday[1] = "Lundi";
        weekday[2] = "Mardi";
        weekday[3] = "Mercredi";
        weekday[4] = "Jeudi";
        weekday[5] = "Vendredi";
        weekday[6] = "Samedi";
        // document.write(n);
        document.write("<div class=\"col-md-{{$col}}\">\n" +
            "          <div class=\"card card-primary\">\n" +
            "            <div class=\"card-header\">\n" +
            "              <h3 class=\"card-title\">" + weekday[b] + "</h3>\n" +
            "\n" +
            "              <div class=\"card-tools\">\n" +
            "                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">\n" +
            "                  <i class=\"fas fa-minus\"></i></button>\n" +
            "              </div>\n" +
            "            </div>\n" +
            "            <div class=\"card-body\">");


        for (i = 0; i <{{$az}} ; i++) {

            document.write("                <div class=\"d-flex justify-content-between align-items-center border-bottom mb-3\">\n" +
                "                  <p class=\"text-success text-xl\">\n" +
                "                    <i class=\"far fa-calendar-alt \"></i>\n" +
                "                  </p>\n" +
                "                  <p class=\"d-flex flex-column text-right\">\n" +
                "                    <span class=\"text-muted\"><strong>" + n + "</strong></span>\n" +
                "                  </p>\n" +
                "                </div>\n");
            d.setDate(d.getDate() + numberOfDaysToAdd);
            n = d.toDateString();
        }
        document.write("            </div>\n" +
            "            <!-- /.card-body -->\n" +
            "          </div>\n" +
            "          <!-- /.card -->\n" +
            "        </div>");


        @endforeach
        document.write(" </div>");
    </script>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header" style="background-color: #34495e;">
                    <h3 class="card-title">Disponibilité</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form role="form" method="post" action="{{route('admin.session.update',$session->id_session)}}">
                        {{method_field('PATCH')}}
                        {{csrf_field()}}
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
                                <th>Contrat</th>
                                {{--                                <th>1 calle</th>--}}
{{--                                <th>2 calle</th>--}}
{{--                                <th>3 calle</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($session->preinscriptios()->get() as $inscr )
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
                                    <td>
                                        <a href="{{route('admin.contrat.create',['id'=>$inscr->id_preinscription])}}">
                                            <i class="fas fa-file-signature" style="margin-left: 40%;"></i>

                                        </a>
                                    </td>


{{--                                    <td><input type="text" id="Intitule" name="calle1[]" class="form-control"--}}
{{--                                               value="{{$inscr->calle1}}"  ></td>--}}
{{--                                    <td><input type="text" id="Intitule" name="calle2[]" class="form-control"--}}
{{--                                               value="{{$inscr->calle2}}"></td>--}}
{{--                                    <td><input type="text" id="Intitule" name="calle3[]" class="form-control"--}}
{{--                                               value="{{$inscr->calle3}}"></td>--}}
{{--                                    <input type="hidden" name="id_client[]" value="{{$c->id_client}}"--}}
{{--                                           class="form-control">--}}
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <a href="#" class="btn btn-secondary">Cancel</a>--}}
{{--                                <input type="submit" value="Create new formation" class="btn btn-success float-right">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>


@endsection
