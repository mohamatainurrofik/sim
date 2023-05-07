@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Guru
            </div>
            <div class="card-body">
                <form action="/guru/edit/{{$teacher->nama}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" name="nip" id="nip" value="{{$teacher->nip }}" placeholder="NIP" readonly>
                    </div>
                    <div class="form-group">
                        <select name="classess_id_kelas" id="classess_id_kelas" class="form-control" required>
                            <option value="">Pilih Kelas Ajar</option>
                            @foreach($classess as $key => $teach)
                            <option value="{{$teach->id_kelas}}">{{$teach->id_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('nama') ?? $teacher->nama }}" name="nama" id="nama" placeholder="Nama Lengkap Guru" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('jabatan') ?? $teacher->jabatan }}" name="jabatan" id="jabatan" placeholder="jabatan" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('email') ?? $teacher->email }}" name="email" id="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>   
                                </div>
                                <div class="col">
                                <select name="pendidikan" id="pendidikan" class="form-control" required>
                                    <option value="">Lulusan</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3" required>{{ old('alamat') ?? $teacher->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('no_tlp') ?? $teacher->no_tlp }}" name="no_tlp" id="no_tlp" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                    <select name="status" id="status" class="form-control" required>
                        <option value="" selected disabled>Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('guru') }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection