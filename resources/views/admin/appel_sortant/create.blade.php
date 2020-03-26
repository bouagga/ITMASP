@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.appel_sortant.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #fd7e14;">
                            <h3 class="card-title">Apple</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputStatus">Client</label>
                                <select class="form-control custom-select" name="client">

                                    @if($ins!= null)
                                    @foreach($ins->client()->get() as $in)
                                        <option selected disabled value="{{$in->id_client}}">{{$in->nom}}  {{$in->prenom}}</option>
                                    @endforeach
                                    @else
                                        <option selected disabled >Select one</option>
                                    @endif
                                    @foreach($clinet as $c)
                                        <option value="{{$c->id_client}}">{{$c->nom}}  {{$c->prenom}} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputName">subject</label>
                                <input type="text"  name="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">corp</label>
                                <textarea id="inputDescription" name="corp" class="form-control" rows="4"></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                {{$id_ins}}
                    <!-- /.card -->
                </div>
<input type="hidden" name="id_preinscription" value="{{$id_ins}}">
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new formation" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    {{----}}
@endsection
