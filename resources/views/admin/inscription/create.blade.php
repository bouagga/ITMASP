@extends('layouts.admin')

@section('content')
    <section class="content">
        <form role="form" method="post" action="{{route('admin.session.store')}} ">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #fd7e14;">
                            <h3 class="card-title">Session</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputStatus">Formation</label>
                                <select class="form-control custom-select" name="formation" id="formation">
                                    <option selected disabled>Select one</option>
                                    @foreach($formations as $key => $value )
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Session</label>
                                <select class="form-control custom-select" name="session" id="session">
                                    <option selected disabled>Select one</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Tarif Globale</label>
                                <div class="input-group">
                                    <input type="number" id="inputEstimatedBudget" name="pourcentage_p" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">.00 DA</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Pourcentage</label>
                                <div class="input-group">
                                    <input type="number" id="inputEstimatedBudget" name="pourcentage_p" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Tarif Final</label>
                                <div class="input-group">
                                    <input type="number" id="inputEstimatedBudget" name="pourcentage_p" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">.00 DA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-secondary">
                        <div class="card-header" style="background-color: #2980b9;">
                            <h3 class="card-title">Participant</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" name="r1" checked>
                                    <label for="radioPrimary1">
                                        dbdf
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" name="r1">
                                    <label for="radioPrimary2">
                                        fdhrdhg
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary3" name="r1" >
                                    <label for="radioPrimary3">
                                        Primary radio
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date fin</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="date_fin_p" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEstimatedBudget">Pourcentage</label>
                                <div class="input-group">
                                    <input type="number" id="inputEstimatedBudget" name="pourcentage_p" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #34495e;">
                            <h3 class="card-title">Creneau</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-bordered" id="dynamic_field">

                                    <tr id="row0">
                                        <td><div class="form-group">
                                                <label>jour</label>
                                                <select class="form-control select2" style="width: 100%;" name="jour[]">
                                                    <option selected="selected" value="sunday">Dimanche</option>
                                                    <option value="monday">Lundi</option>
                                                    <option value="Tuesday">Mardi</option>
                                                    <option value="Wednesday">Mercredi</option>
                                                    <option value="Thursday">Jeudi</option>
                                                    <option value="Friday">Vendredi</option>
                                                    <option value="Saturday">Samedi</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">debut</label>
                                                <input type="time" id="debut[]" name="debut[]" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">fin</label>
                                                <input type="time" id="fin[]" name="fin[]" class="form-control">
                                            </div>

                                        </td>
                                    </tr><input type="hidden" name="row" value="">
                                </table>
                            </div>
                        </div>
                        <p id="ii">  </p>
                        <input type="hidden" name="ii"  value=""  id="ii" >
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

    <button class="btn btn-danger"> test </button>
    <script> src="{{asset('js/jQuery.js')}}"</script>
    <script>
        $(document).ready(function () {
        $('select[name="formation"]').on('change',function () {

        var id_formation = $(this).val();

        if(id_formation){
            $.ajax({
                url: '/getgetsessions/'+id_formation,
                type:'GET',
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $('select[name="session"]').empty();
                    $.each(data,function (key,value) {
                        $('select[name="session"]')
                        .append('<option value="'+key+'">'+value+'</option>');

                    });

                }
            });
        }else {
            $('select[name="session"]').empty();
        }
        });
        });
    </script>

@endsection