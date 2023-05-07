@extends('layouts.base')

@section('content')

<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="{{ asset('image/logo.png') }}" alt="" width="100%" height="100%">
    </div>
    <div class="col">
        <div class="col">
            <h3>{{ $classess->nama_kelas }} <span class="badge badge-warning">Kelas</span> <span class="badge badge-dark">{{ $classess->id_kelas }}</span>
            <button class="btn btn-xs btn-success float-right" role="button" id="btnPrint"><i data-feather="printer" ></i> @lang('Print Kelas')</button>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Nama Wali</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classess->students as $key => $classes)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $classes->nis }}</td>
                                    <td>{{ $classes->nama }}</td>
                                    <td>{{ $classes->classess_id_kelas }}</td>
                                    <td>{{ $classes->nama_ibu }}</td>
                                    <td>Aktif</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                </div>
                <div class="col">
                <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Mapel</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mapel as $key => $map)
                                <tr>
                                    <th scope="row">{{ $loop->iteration}}</th>
                                    <td>{{ $map->nama_mapel }}</td>
                                    <td>Aktif</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                
                </div>
            </div>
            <a class="btn btn-secondary" href="{{ route('kelas') }}" role="button">Kembali</a>
        </div>
        

    </div>


    

    
    

    
</div>

@endsection