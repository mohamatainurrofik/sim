@extends('layouts.base')

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Kelas
            </div>
            <div class="card-body">
                <form action="{{ route('savekelas') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="ID_KELAS" value="999" required>      
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col">
                                <select name="kelas" id="kelas" class="form-control" required>
                                    <option selected disabled>Pilih Kelas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>   
                            </div>
                            <div class="col">
                                <select name="variabel" id="variabel" class="form-control" required>
                                    <option selected disabled>Pilih Variabel Kelas</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                </select>   
                            </div>
                        </div>                       
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" required>
                    </div>
                    <div class="form-group">Wali Kelas</div>
                    <div class="form-group">
                        <input type="file" name="thumbnail" id="thumbnail" accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="classess_id_kelas" id="classess_id_kelas" placeholder="ID_KELAS Yang diajar" value="999" required>      
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Guru" required>
                    </div>
                    <div class="form-group">
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option selected disabled>Jabatan</option>
                            <option value="PNS">PNS</option>
                            <option value="Guru Honorer">Guru Honorer</option>
                        </select>  
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
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
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
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
                    <a class="btn btn-secondary" href="{{ route('kelas') }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection