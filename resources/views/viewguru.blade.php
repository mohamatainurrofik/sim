@extends('layouts.base')

@section('content')

<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="{{ asset('image/'.$teacher->fotopath) }}" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>{{ $teacher->nama }}  <span class="badge badge-dark">{{ $teacher->jabatan }}</span>
            <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i> @lang('Print Profile')</button>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NIP</td>
                            <td>{{ $teacher->nip }}</td>
                            <td>Mengajar Kelas</td>
                            <td>{{ $teacher->classess_id_kelas }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $teacher->email }}</td>
                            <td>Jenis Kelamin</td>
                            <td>{{ $teacher->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>{{ $teacher->pendidikan }}</td>
                            <td>Alamat</td>
                            <td>{{ $teacher->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $teacher->no_tlp }}</td>
                            <td>Tahun Masuk</td>
                            <td>{{ $teacher->created_at->year }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-secondary" href="{{ route('guru') }}" role="button">Kembali</a>

    </div>


    

    
    

    
</div>

@endsection