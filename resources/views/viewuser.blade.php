@extends('layouts.base')

@section('content')

<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="{{ asset('image/'.$student->fotopath) }}" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>{{ $student->nama }} <span class="badge badge-warning">Siswa</span> <span class="badge badge-dark">{{ $student->jenis_kelamin }}</span>
            <!-- <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i> @lang('Print Profile')</button> -->
            <a href="{{route('viewprint', $student->nama)}}" target="_blank" role="button" class="btn btn-xs btn-success float-right"><i data-feather="printer" ></i> @lang('Print Profile')</a>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NISN</td>
                            <td>{{ $student->nisn }}</td>
                            <td>Tempat Lahir</td>
                            <td>{{ $student->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>{{ $student->nis }}</td>
                            <td>Jenis Kelamin</td>
                            <td>{{ $student->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ $student->agama }}</td>
                            <td>Alamat</td>
                            <td>{{ $student->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $student->no_tlp }}</td>
                            <td>Kelas</td>
                            <td>{{ $student->classess->nama_kelas ?? ''}}</td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td>{{ $student->created_at->year }}</td>
                            <td>Tanggal Lahir</td>
                            <td>{{ $student->tanggal_lahir }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('siswa') }}" role="button">Kembali</a>

    </div>


    

    
    

    
</div>

@endsection