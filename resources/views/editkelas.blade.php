@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Data Kelas
            </div>
            <div class="card-body">
                <form action="{{route('updatekelas', $classess->id_kelas)}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$classess->id_kelas }}" name="id_kelas" id="id_kelas" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('nama_kelas') ?? $classess->nama_kelas }}" name="nama_kelas" id="nama_kelas" required>
                    </div>
                    <div class="form-group">
                        <select name="nip" id="nip" class="form-control" required>
                            <option selected disabled>Guru</option>
                            @foreach($guru as $key => $gur)
                            <option value="{{$gur->nip}}">{{$gur->nama}}</option>
                            @endforeach
                        </select>   
                    </div>
                    <div class="form-group">
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                    <div class="col">
                            <div class="table-responsive">
                                <table class="table-striped table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student as $key => $s)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration}}</th>
                                            <td>{{ $s->nis }}</td>
                                            <td>{{ $s->nama }}</td>
                                            <td>
                                            <form class="d-inline" action="/kelas/edit/{{$classess->id_kelas}}/{{$s->nama}}" method="POST">
                                                @csrf
                                                @method('patch')
                                                <div class="form-group">
                                                    <div class="form-row">
                                                        <div class="col">
                                                        <select name="id_kelas" id="id_kelas" class="form-control" required>
                                                            <option selected disabled>{{ $s->classess_id_kelas }}</option>
                                                            @foreach($c as $key => $teach)
                                                            <option value="{{$teach->id_kelas}}">{{$teach->id_kelas}}</option>
                                                            @endforeach
                                                        </select>     
                                                        </div>
                                                        <div class="col">
                                                            <button class="d-inline btn btn-danger" type="submit">Ubah</button>
                                                        </div>
                                                    </div>  
                                                </div>  
                                            </form>        
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        
                        </div>
                       
                    </div>

                    <div class="col">
                    <a class="float-right btn btn-success" href="{{ route('createmapel', $classess->id_kelas) }}" role="button">Tambah Mapel</a>
                            <div class="table-responsive">
                                <table class="table-striped table table-bordered">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Mapel</th>
                                            <th scope="col">KKM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mapel as $key => $map)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration}}</th>
                                            <td>{{ $map->nama_mapel }}</td>
                                            <td>{{ $map->kkm }}</td>
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
</div>

@endsection