@extends('adminlte::page')
<!-- page title -->
@section('title', 'Create and Update Areas ' . Config::get('adminlte.title'))

@section('content_header')
    <h1>Area</h1>
@stop

@section('content')
    {{--Show message if any--}}
    @include('layouts.flash-message')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Area</h3>
        </div>

        {{ Form::open(array('url' => route($data->form_action), 'method' => 'POST','autocomplete' => 'off', 'files' => true, 'id' => 'areaId')) }}
        {{ Form::hidden('id', $data->id, array('id' => 'id')) }}

        <div class="card-body">

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <strong class="field-title">Nama</strong>
                </div>
                <div class="col-sm-10 col-content">
                    {{ Form::text('name', $data->name, array('class' => 'form-control', 'required')) }}
                    <small class="form-text text-muted">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> Nama Area.
                    </small>
                </div>
            </div>
 	 	 	      <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <strong class="field-title">Alamat</strong>
                </div>
                <div class="col-sm-10 col-content">
                    {{ Form::text('address', $data->address, array('class' => 'form-control', 'required')) }}
                    <small class="form-text text-muted">
                        <i class="fa fa-question-circle" aria-hidden="true"></i> Alamat Area.
                    </small>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-2 col-form-label">
                    <strong class="field-title">Gambar Area</strong>
                </div>
                <div class="col-sm-10 col-content">
                    <div id="map-canvas"></div>
                    <textarea id="info" class="hide"></textarea>
                    <br>
                    <h5 style="color: red;"><b><i class="fa fa-question-circle" aria-hidden="true"></i> Catatan</b></h5>
                    <hr>
                    <p><b>Silahkan menentukan longtitude dan latitude / Garis bujur dan garis lintang untuk menentukan area presensi karyawan, 
                        jika karyawan berada diluar area maka karyawan tidak dapat melakukan presensi. 
                    </p>
                </div>
            </div>
        </div>

        <div class="card-footer">
            <div id="form-button">
                <div class="col-sm-12 text-center top20">
                    <button style="background-color: #e11586" id="saveLocation" type="button" class="btn btn-dark">{{ $data->button_text }}</button>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>

    <!-- /.card -->
    </div>
    <!-- /.row -->
    <!-- /.content -->
@stop

@section('css')

@stop

@section('js')
    <script>var typePage = "{{ $data->page_type }}";</script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=geometry,drawing&ext=.js&key="></script>
    <script src="{{ asset('js/backend/areas/form.js'). '?v=' . rand(99999,999999) }}"></script>
@stop
