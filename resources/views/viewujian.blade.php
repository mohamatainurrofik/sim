@extends('layouts.base',['title' => 'Ujian di kelas'])

@section('content')

<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Pilih Ujian
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mapel as $key => $map)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$map->nama_mapel}}</td>
                                    <td>
                                        <a class="btn btn-success " href="{{route('tambahujian', $map->id_mapel)}}">Tambah Ujian</a>  
                                   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>


@endsection