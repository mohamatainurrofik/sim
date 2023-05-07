@extends('layouts.base',['title' => 'Pengumuman'])

@section('content')


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                List Pengumuman
                <a class="float-right btn btn-success" href="{{route('createpengumuman')}}" role="button">Tambah Pengumuman</a>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                        <table class="table-striped table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul Pengumuman</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengumuman as $key => $pengum)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $pengum->judul }}</td>
                                    <td>
                                        <form class="d-inline" action="/pengumuman/delete/{{$pengum->id}}" method="post" onsubmit="return confirm('Yakin Ingin Menghapus Data Ini ?')">
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
            <div class="card-footer">
                
            </div>
        </div>
    </div>
</div>

@endsection