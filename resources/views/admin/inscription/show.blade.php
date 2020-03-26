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
                            <h3 class="card-title">inscription</h3>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <strong><i class="fas fa-code"></i> Client </strong>
                            @foreach($inscription->client()->get() as $c)
                                <p class="text-muted">
                                    {{$c->statut}} {{$c->nom}}  {{$c->prenom}}
                                </p>
                            @endforeach
                            <hr>

                            <strong><i class="fas fa-layer-group"></i> tarif </strong>

                                <p class="text-muted">  {{$inscription->TarifF}} </p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <script>
i = 0 ;
                    document.write("                <div class=\"col-md-9\">\n" +
                        "                    <div class=\"card\">\n" +
                        "                        <div class=\"card-header p-2\">\n" +
                        "                            <ul class=\"nav nav-pills\">");

                    {{--for (i =  0 ; i<{{count($appels)}}; i++){--}}
                    @foreach($appels as $a )
                        document.write("<li class=\"nav-item\"><a class=\"nav-link\" href=\"#activity"+i+"\" data-toggle=\"tab\">"+i+"</a>");

                    // }
i++;
@endforeach
                    document.write("  </ul>\n" +
                        "                        </div><!-- /.card-header -->\n" +
                        "                        <div class=\"card-body\">\n" +
                        "                            <div class=\"tab-content\">");
                    {{--for (i =  0 ; i<{{count($appels)}}; i++){--}}
                        d=0;
                    @foreach($appels as $e )

                        document.write("\n" +
                            "                                <div class=\" tab-pane\" id=\"activity"+d+"\">\n" +
                            "                                    <!-- Post -->\n" +
                            "                                    <strong><i class=\"fas fa-bullseye\"></i> subject"+d+" </strong>\n" +
                            "\n" +
                            "                                    <p class=\"text-muted\">\n" +
                            "                                                                           {{$e->subject}}\n" +
                            "                                    </p>\n" +
                            "                                    <hr>\n" +
                            "\n" +
                            "                                    <!-- Post -->\n" +
                            "                                    <strong><i class=\"fas fa-toolbox\"></i> corp"+d+" </strong>\n" +
                            "\n" +
                            "                                    <p class=\"text-muted\">\n" +
                            "                                                                             {{$e->corp}}\n" +
                            "                                    </p>\n" +
                            "                                    <hr>\n" +


                            "                                </div>");
                    // }
d++;
                    @endforeach
                    document.write("           </div>\n" +
                        "                            <!-- /.tab-content -->\n" +
                        "                        </div><!-- /.card-body -->\n" +
                        "                    </div>\n" +
                        "                    <!-- /.nav-tabs-custom -->\n" +
                        "" +
                        "" +
                        "                                    <a href=\"{{route('admin.appel_sortant.create',['id'=>$id])}}\" >\n" +
                        "\n" +
                        "                                        <input type=\"submit\" value=\"do appel \"\n" +
                        "                                               class=\"btn btn-success float-right\">\n" +
                        "                                    </a>" +
                        "                </div>\n" +
                        "                <!-- /.col -->")


                </script>




            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>


@endsection
