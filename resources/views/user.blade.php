@extends('layouts.base',['title' => 'Data Siswa'])

@section('content')

@if(Auth::user()->name == "Fiqq")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa   
                    <a class="float-right btn btn-success" href="{{ route('create') }}" role="button">Tambah Siswa</a>
                </div>
                <div class="card-body">
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $key => $studen)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $studen->nis }}</td>
                                    <td>{{ $studen->nama }}</td>
                                    <td>{{ $studen->classess->nama_kelas ?? '' }}</td>
                                    <td>{{ $studen->nama_ibu }}</td>
                                    <td>{{ $studen->status}}</td>
                                    <td>
                                        <a class="btn btn-success " href="/siswa/view/{{$studen->nama}}">View</a>
                                        <a class="btn btn-info " href="/siswa/edit/{{$studen->nama}}">Edit</a>
                                        <form class="d-inline" action="/siswa/delete/{{$studen->nama}}" method="post" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini ?')">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $student->links() }}
                </div>
            </div>
        </div>
    </div>
@else
<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Siswa   
                </div>
                <div class="card-body">
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
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student as $key => $studen)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $studen->nis }}</td>
                                    <td>{{ $studen->nama }}</td>
                                    <td>{{ $studen->classess->nama_kelas ?? '' }}</td>
                                    <td>{{ $studen->nama_ibu }}</td>
                                    <td>{{ $studen->status}}</td>
                                    <td>
                                        <a class="btn btn-success " href="/siswa/view/{{$studen->nama}}">View</a>                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $student->links() }}
                </div>
            </div>
        </div>
    </div>
@endif

@endsection