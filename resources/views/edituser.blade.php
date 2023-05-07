@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Edit Siswa
            </div>
            <div class="card-body">
                <form action="/siswa/edit/{{$student->nama}}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$student->nisn }}" name="nisn" id="nisn" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('nis') ?? $student->nis }}" name="nis" id="nis" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('nama') ?? $student->nama }}" name="nama" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('tempat_lahir') ?? $student->tempat_lahir }}" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control datepicker-here" value="{{ old('tanggal_lahir') ?? $student->tanggal_lahir }}" data-language='en' name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" autocomplete="off" required>
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
                                <select name="agama" id="agama" class="form-control" required>
                                    <option value="">Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3" required>{{ old('alamat') ?? $student->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('nama_ibu') ?? $student->nama_ibu }}" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu Kandung" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('no_tlp') ?? $student->no_tlp }}" name="no_tlp" id="no_tlp" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                    <select name="status" id="status" class="form-control" required>
                        <option value="" selected disabled>Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('siswa') }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection