@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.formation.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dynamic_field">

                                    <tr id="row0">
                                        <td><div class="form-group">
                                <label>jour</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Dimanche</option>
                                    <option>Lundi</option>
                                    <option>Mardi</option>
                                    <option>Mercredi</option>
                                    <option>Jeudi</option>
                                    <option>Vendredi</option>
                                    <option>Samedi</option>
                                </select>
                            </div>
                                            <div class="form-group">
                                                <label for="inputName">debut</label>
                                                <input type="time" id="Intitule" name="Intitule" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">fin</label>
                                                <input type="time" id="Intitule" name="Intitule" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
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
                                <label for="inputDescription">Description</label>
                                <textarea id="inputDescription" name="payment" class="form-control" rows="4"></textarea>
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
        <button class="float" name="add1" id="add1">
            <i class="fa fa-plus my-float"></i>
        </button> <button type="button" name="remove" id="0" class="float2 btn_remove">
            <i class="fa fa-times my-float2"></i>
        </button>
    </section>
@endsection
