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
                            <h3 class="card-title">Formation</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-code"></i> Code </strong>

                            <p class="text-muted">
                                {{$formation->code}}
                            </p>

                            <hr>

                            <strong><i class="fas fa-layer-group"></i> Catégorie </strong>
                            @foreach($formation->category()->get() as $c)
                                <p class="text-muted">  {{$c->designation}} </p>
                            @endforeach
                            <hr>
                            <strong><i class="fas fa-th-list"></i> Domaine </strong>
                            @foreach($formation->department()->get() as $d)
                                <p class="text-muted">  {{$d->nom}} </p>
                            @endforeach
                            <hr>

                            <strong><i class="fas fa-book"></i> Intitulé </strong>

                            <p class="text-muted">
                                {{$formation->Intitule}}
                            </p>

                            <hr>

                            <strong><i class="fas fa-stopwatch"></i> Durée </strong>

                            <p class="text-muted">{{$formation->duree}}</p>
                            <hr>

                            <strong><i class="fas fa-coins"></i> Prix original </strong>

                            <p class="text-muted">{{$formation->prix}}.00 DA</p>
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
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Sessions</a>
                                </li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <strong><i class="fas fa-bullseye"></i> Objectif </strong>

                                    <p class="text-muted">
                                        {{$formation->objectif}}
                                    </p>
                                    <hr>

                                    <!-- Post -->
                                    <strong><i class="fas fa-toolbox"></i> Prérequis </strong>

                                    <p class="text-muted">
                                        {{$formation->prerequis}}
                                    </p>
                                    <hr>

                                    <!-- Post -->
                                    <strong><i class="fas fa-toolbox"></i> Programme globale </strong>

                                    <p class="text-muted">
                                        {{$formation->program}}
                                    </p>
                                    <hr>

                                    <strong><i class="fas fa-money-check-alt"></i> Modalité de paiement </strong>

                                    <p class="text-muted">
                                        {{$formation->payment}}
                                    </p>
                                    <hr>
                                    <a href="{{route('admin.formation.edit',$formation->id_formation)}}">
                                        <input type="submit" value="edit formation"
                                               class="btn btn-success float-right">
                                    </a>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    @foreach($formation->sessions()->get() as $se)
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <a href="{{route('admin.session.show',$se->id_session)}}">     <span class="bg-danger">
                                            {{$se->date_lancement}}
                                            </span>   </a>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="far fa-calendar-alt bg-success"></i>
                                            <div class="timeline-item">

                                                <h3 class="timeline-header border-0"><a href="#">Date debut promotion :</a>
                                                    {{$se->date_debut_p}}

                                                </h3>
                                            </div>
                                        </div>
                                        <div>
                                            <i class="far fa-calendar-alt bg-danger"></i>
                                            <div class="timeline-item">

                                                <h3 class="timeline-header border-0"><a href="#">Date fin promotion :</a>
                                                    {{$se->date_fin_p}}
                                                </h3>
                                            </div>
                                        </div>

                                        <div>

                                            <i class="fas fa-percent bg-primary"></i>

                                            <div class="timeline-item">
                                                <h3 class="timeline-header"><a href="#">Reduction</a>
                                                    {{$se->pourcentage_p}} %
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-warning"></i>

                                            <div class="timeline-item">

                                                @foreach($se->creneau()->get() as $cr)

                                                <h3 class="timeline-header"><a href="#">{{$cr->jour}}</a>
                                                 {{$cr->debut}}-{{$cr->fin}}
                                                </h3>
                                                @endforeach
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->

                                    </div>
                                        @endforeach
                                    <a href="{{route('admin.session.create')}}" >

                                        <input type="submit" value="Créer Sessions"
                                               class="btn btn-success float-right">
                                    </a>
                                </div>
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
