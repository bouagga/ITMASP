@extends('layouts.admin')

@section('content')

    <section class="content">
        <form role="form" method="post" action="{{route('admin.formation.update',$formation->id_formation)}} ">
            {{method_field('PATCH')}}
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Code de formation</label>
                                <input type="text" id="code" name="code" class="form-control @error('code') is-invalid @enderror" value="{{$formation->code}}">
                                @error('code')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputName">Intitulé de formation</label>
                                <input type="text" id="Intitule" name="Intitule" class="form-control @error('Intitule') is-invalid @enderror" value="{{$formation->Intitule}}">
                                @error('Intitule')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Objectifs</label>
                                <textarea id="inputDescription" name="objectif" class="form-control @error('objectif') is-invalid @enderror"  rows="4" > {{$formation->objectif}}</textarea>
                                @error('objectif')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Prérequis</label>
                                <textarea id="inputDescription" name="prerequis" class="form-control @error('prerequis') is-invalid @enderror"  rows="4">{{$formation->prerequis}}</textarea>
                                @error('prerequis')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                               @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Programme global</label>
                                <textarea id="inputDescription" name="program" class="form-control @error('program') is-invalid @enderror"  rows="4">{{$formation->program}}</textarea>
                                @error('program')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
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
                                <input type="text" id="duree" name="duree" class="form-control @error('duree') is-invalid @enderror" value="{{$formation->duree}}" >
                                @error('duree')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Modalité de paiement</label>
                                <textarea id="inputDescription" name="payment" class="form-control @error('payment') is-invalid @enderror" rows="4"> {{$formation->payment}}</textarea>
                                @error('payment')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Prix de formation</label>
                                <div class="input-group">
                                    <input type="number" id="inputEstimatedBudget" name="prix" value="{{$formation->prix}}" class="form-control @error('prix') is-invalid @enderror">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">DA</span>
                                    </div>
                                </div>
                                @error('prix')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Department</label>
                                <select class="form-control custom-select @error('department') is-invalid @enderror" name="department" >
                                    @foreach($formation->department()->get() as $d )
                                        <option selected disabled value="{{$d->id_department}}">{{$d->nom}}</option>
                                    @endforeach
                                    @foreach($deps as $d)
                                        <option value="{{$d->id_department}}">{{$d->nom}}</option>
                                    @endforeach
                                </select>
                                @error('department')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Category</label>
                                <select class="form-control custom-select @error('category') is-invalid @enderror" name="category">
                                    @foreach($formation->category()->get() as $c)
                                    <option selected disabled value="{{$c->id_category}}">{{$c->designation}}</option>
                                    @endforeach
                                    @foreach($cats as $c)
                                        <option value="{{$c->id_category}}">{{$c->designation}}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                 <span class="invalid-feedback">
                                       {{ $message }}
                                    </span>
                                @enderror
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
                    <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
@endsection
