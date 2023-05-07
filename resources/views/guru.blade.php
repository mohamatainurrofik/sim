@extends('layouts.base',['title' => 'Data Guru'])

@section('content')

@if(Auth::user()->name == "Fiqq")
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Guru 
                    
                    <!-- <a class="float-right btn btn-success" href="{{ route('createguru') }}" role="button">Tambah Guru</a> -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mengajar Kelas</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teacher as $key => $teach)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $teach->nip }}</td>
                                    <td>{{ $teach->nama }}</td>
                                    <td>{{ $teach->jabatan }}</td>
                                    <td>{{ $teach->email }}</td>
                                    <td>{{ $teach->classess->nama_kelas ?? ''}}</td>
                                    <td>{{ $teach->status }}</td>
                                    <td>
                                        <a class="btn btn-success " href="/guru/view/{{$teach->nama}}">View</a>
                                        <a class="btn btn-info " href="/guru/edit/{{$teach->nama}}">Edit</a>
                                        <form class="d-inline" action="/guru/delete/{{$teach->nama}}" method="post" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini ?')">
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
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Guru 
                    
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mengajar Kelas</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teacher as $key => $teach)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $teach->nip }}</td>
                                    <td>{{ $teach->nama }}</td>
                                    <td>{{ $teach->jabatan }}</td>
                                    <td>{{ $teach->email }}</td>
                                    <td>{{ $teach->classess->nama_kelas ?? ''}}</td>
                                    <td>{{$teach->status}}</td>
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