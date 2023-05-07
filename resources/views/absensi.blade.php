@extends('layouts.base')

@section('content')

<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="{{ asset('image/logo.png') }}" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>{{ $classess->students->nama }} <span class="badge badge-warning">Siswa</span> <span class="badge badge-dark">{{ $classess->students->jenis_kelamin }}</span>
            <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i> @lang('Print Profile')</button>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">

                <form action="{{ route('save') }}" method="POST">
                    <div class="form-group">
                            <input type="text" class="form-control datepicker-here" data-language='en' name="absen" id="absen" placeholder="Cari Hari absensi" autocomplete="off" required>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('siswa') }}" role="button">Kembali</a>

    </div>


    

    
    

    
</div>

@endsection