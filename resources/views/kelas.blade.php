
@extends('layouts.base',['title' => 'Data Kelas'])

@section('content')

@if(Auth::user()->name == "Fiqq")
<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Kelas  
                    <a class="float-right btn btn-success" href="{{route('createkelas')}}" role="button">Tambah Kelas</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kelas</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Wali Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classesses as $key => $classess)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$classess->id_kelas}}</td>
                                    <td>{{$classess->nama_kelas}}</td>
                                    <td>{{$classess->teacher->nama ?? ''}}</td>
                                    <td>
                                        <a class="btn btn-success " href="{{ route('viewkelas', $classess->id_kelas)}}">View</a>
                                        <a class="btn btn-info " href="{{route('editkelas', $classess->id_kelas)}}">Edit</a>   
                                   
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
                    Data Kelas  
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Kelas</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Wali Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classesses as $key => $classess)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$classess->id_kelas}}</td>
                                    <td>{{$classess->nama_kelas}}</td>
                                    <td>{{$classess->teacher->nama ?? ''}} </td>
                                    <td>
                                        <a class="btn btn-success " href="{{ route('viewkelas', $classess->id_kelas)}}">View</a>
                                        
                                   
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