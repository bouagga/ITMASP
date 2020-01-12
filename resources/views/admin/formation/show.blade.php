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
                            <strong><i class="fas fa-th-list"></i> Domaine  </strong>
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

                            <strong><i class="fas fa-coins"></i>  Prix original </strong>

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
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Sessions</a></li>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <strong><i class="fas fa-bullseye"></i> Objectif  </strong>

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
                                    <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                                    </a>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                <div class="timeline-body">
                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                    quora plaxo ideeli hulu weebly balihoo...
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-user bg-info"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                                <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-comments bg-warning"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                                <div class="timeline-body">
                                                    Take me to your leader!
                                                    Switzerland is small and neutral!
                                                    We are more like Germany, ambitious and misunderstood!
                                                </div>
                                                <div class="timeline-footer">
                                                    <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                        <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-camera bg-purple"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                                <div class="timeline-body">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                    <img src="http://placehold.it/150x100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
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
