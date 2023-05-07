@extends('layouts.base',['title' => 'Pilih Kelas'])

@section('content')

@if(Auth::user()->name == "Fiqq")
<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Pilih Kelas
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kelas</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($class as $key => $cl)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$cl->id_kelas}}</td>
                                    <td>{{$cl->nama_kelas}}</td>
                                    <td>
                                        <a class="btn btn-success " href="/ujian/view/{{$cl->id_kelas}}">Tambah Ujian</a>  
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
@else
<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Pilih Kelas
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kelas</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($class as $key => $cl)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$cl->id_kelas}}</td>
                                    <td>{{$cl->nama_kelas}}</td>
                                    <td>
                                        <a class="btn btn-success " href="/ujian/view/{{$cl->id_kelas}}">View Ujian</a>  
                                   
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
@endif

@endsection