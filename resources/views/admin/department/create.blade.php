@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.department.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #fd7e14;">
                            <h3 class="card-title">Department</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">nom</label>
                                <input type="text"  name="nom" class="form-control">
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
            <div id="test" class="highlight text-center" data-position="left" style="height: 290px; padding-top: 120px;">
             <input value="">   <p href="#" class="btn btn-secondary" ><i class="fas fa-angle-down"></i> Button Text</p>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">ICON</label>
            <div data-iconset="ionicon" id="box1" role="iconpicker" ></div>
                </div>
            </div>
            <div class="bs-example" style="padding-bottom: 24px;">
                <div class="row">
                    <div class="col-md-3">
                        <div id="button" class="highlight text-center" data-position="left" style="height: 290px; padding-top: 120px;">
                            <a href="#" class="btn btn-secondary"><i class="fas fa-angle-down"></i> Button Text</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <form class="form" role="form">
                            <div class="form-group row">
                                <label for="btn-text" class="col-sm-2 control-label">Text: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="btn-text" placeholder="Button Text" value="Button Text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="btn-color" class="col-sm-2 control-label">Color: </label>
                                <div class="col-sm-10">
                                    <div id="btn-colors" class="btn-group">
                                        <button name="color" type="button" class="btn btn-primary" value="btn-primary">Primary</button>
                                        <button name="color" type="button" class="btn btn-secondary" value="btn-secondary">Secondary</button>
                                        <button name="color" type="button" class="btn btn-success" value="btn-success">Success</button>
                                        <button name="color" type="button" class="btn btn-danger" value="btn-danger">Danger</button>
                                        <button name="color" type="button" class="btn btn-warning" value="btn-warning">Warning</button>
                                        <button name="color" type="button" class="btn btn-info" value="btn-info">Info</button>
                                        <button name="color" type="button" class="btn btn-light" value="btn-light">Light</button>
                                        <button name="color" type="button" class="btn btn-dark" value="btn-dark">Dark</button>
                                        <button name="color" type="button" class="btn btn-link" value="btn-link">Link</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="btn-color" class="col-sm-2 control-label">Size: </label>
                                <div class="col-sm-10">
                                    <div id="btn-sizes">
                                        <p>
                                            <button class="btn btn-secondary btn-sm" value="btn-sm" type="button">Small</button>
                                            <button class="btn btn-secondary" value="" type="button">Default</button>
                                            <button class="btn btn-secondary btn-lg" value="btn-lg" type="button">Large</button>
                                        </p>
                                        <p>
                                            <a href="#" class="btn btn-secondary btn-block" data-toggle="button"><span class="fas fa-arrows-alt-h"></span> Full width button</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="btn-color" class="col-sm-2 control-label">Icon: </label>
                                <div class="col-sm-10">
                                    <div id="btn-icon" data-icon="fas f a-chart-area"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="btn-color" class="col-sm-2 control-label">Icon position: </label>
                                <div class="col-sm-10">
                                    <div id="btn-icon-positions" class="btn-group">
                                        <button class="btn btn-secondary" value="left" type="button"><span class="fas fa-arrow-left"></span> Left</button>
                                        <button class="btn btn-secondary" value="right" type="button">Right <span class="fas fa-arrow-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
{{--            <div class="highlight">--}}
{{--                <pre>--}}
{{--                    <code id="result" class="html"></code>--}}
{{--                </pre>--}}
{{--            </div>--}}

            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Department" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    {{----}}


@endsection
