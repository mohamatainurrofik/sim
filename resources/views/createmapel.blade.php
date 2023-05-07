@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Mapel Pada Kelas {{ $classess->nama_kelas}}
            </div>
            <div class="card-body">
                <form action="{{ route('savemapel', $classess->id_kelas) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="id_mapel" id="id_mapel" placeholder="id_mapel" required>
                    </div>
                    <div class="form-group">
                        <select name="nama_mapel" id="nama_mapel" class="form-control" required>
                            <option selected disabled>Mata Pelajaran</option>
                            <option value="B indonesia">B indonesia</option>
                            <option value="Matematika">Matematika</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Agama">Agama</option>
                            <option value="Seni">Seni</option>
                            <option value="B Indonesia 3">B indonesia 2</option>
                            <option value="Matematika 2">Matematika 2</option>
                        </select>       
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="kkm" id="kkm" placeholder="KKM" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="classess_id_kelas" id="classess_id_kelas" value="{{$classess->id_kelas}}" placeholder="Nama Kelas" required>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('editkelas', $classess->id_kelas) }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection