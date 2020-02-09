@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.formation.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Code de formation</label>
                            <input type="text" id="code" name="code" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Intitulé de formation</label>
                            <input type="text" id="Intitule" name="Intitule" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Objectifs</label>
                            <textarea id="inputDescription" name="objectif" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Prérequis</label>
                            <textarea id="inputDescription" name="prerequis" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Programme global</label>
                            <textarea id="inputDescription" name="program" class="form-control" rows="4"></textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Durée</label>
                            <input type="text" id="duree" name="duree" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Modalité de paiement</label>
                            <textarea id="inputDescription" name="payment" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Prix de formation</label>
                            <div class="input-group">
                            <input type="number" id="inputEstimatedBudget" name="prix" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="input-group-prepend">
                                <span class="input-group-text">DA</span>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Department</label>
                            <select class="form-control custom-select" name="department">
                                <option selected disabled>Select one</option>
                                @foreach($deps as $d)
                                    <option value="{{$d->id_department}}">{{$d->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Category</label>
                            <select class="form-control custom-select" name="category">
                                <option selected disabled>Select one</option>
                                @foreach($cats as $c)
                                    <option value="{{$c->id_category}}">{{$c->designation}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new formation" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>
@endsection