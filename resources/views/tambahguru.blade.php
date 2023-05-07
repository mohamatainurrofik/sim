@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="{{ route('saveguru') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Guru" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="jabatan" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                    <option selected disabled>Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>   
                                </div>
                                <div class="col">
                                <select name="pendidikan" id="pendidikan" class="form-control" required>
                                    <option selected disabled>Lulusan</option>
                                    <option value="SMA">SMA</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" id="alamat" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group">
                    <select name="status" id="status" class="form-control" required>
                        <option value="" selected disabled>Status</option>
                        <!-- <option value="Aktif">Aktif</option> -->
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('guru') }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection