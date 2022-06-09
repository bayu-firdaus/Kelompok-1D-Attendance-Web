{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard  | ' . Config::get('adminlte.title'))

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <H2>Halo, Selamat Datang!</H2>
            <p>
               Attendance Ultimate adalah aplikasi untuk melakukan presensi karyawan pada area yang ditentukan.
            </p>
        </div>
    </div>

    <div class="row">
        @if(Auth::user()->hasRole('admin'))
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>{{ $userCount }}</h3>

                    <p>Total Pengguna</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus"></i>
                </div>
                <a href="{{ route('users') }}" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif

        @if(Auth::user()->hasRole('admin'))
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>{{ $attendanceLateToday }}</h3>

                    <p>Jumlah Kedatangan Terlambat</p>
                </div>
                <div class="icon">
                    <i class="fa fa-clock"></i>
                </div>
                <a href="{{ route('attendances') }}" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif

        @if(Auth::user()->hasRole('admin'))
        <div class="col-lg-3 col-6icon">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>{{ $attendaceToday }}</h3>

                    <p>Jumlah Kehadiran Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fa fa-address-book"></i>
                </div>
                <a href="{{ route('attendances') }}" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-pink">
                <div class="inner">
                    <h3>{{ $areaCount }}</h3>

                    <p>Jumlah Area</p>
                </div>
                <div class="icon">
                    <i class="fa fa-map-marked-alt"></i>
                </div>
                <a href="{{ route('areas') }}" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @endif

    </div>
@stop

@section('css')
@stop

@section('js')
@stop
