@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.category.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #fd7e14;">
                            <h3 class="card-title">Category</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">designation</label>
                                <input type="text"  name="designation" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">description</label>
                                <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
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
                    <input type="submit" value="Create new Category" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    {{----}}
@endsection
