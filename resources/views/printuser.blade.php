<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> 
<div class="row justifiy-content-center">
    <div class="col-md-2">
        <img class="img-thumbnail" src="{{ asset('image/logo.png') }}" alt="" width="10%">
    </div>
    <div class="col">
        <div class="col">
            <h3>{{ $student->nama }} <span class="badge badge-warning">Siswa</span>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="col">
                    <table class="table-striped table table-bordered">
                        <tr>
                            <td>NISN</td>
                            <td>{{ $student->nisn }}</td>
                            <td>Tempat Lahir</td>
                            <td>{{ $student->tempat_lahir }}</td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>{{ $student->nis }}</td>
                            <td>Jenis Kelamin</td>
                            <td>{{ $student->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>{{ $student->agama }}</td>
                            <td>Alamat</td>
                            <td>{{ $student->alamat }}</td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>{{ $student->no_tlp }}</td>
                            <td>Kelas</td>
                            <td>{{ $student->classess->nama_kelas}}</td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td>{{ $student->created_at->year }}</td>
                            <td>Tanggal Lahir</td>
                            <td>{{ $student->tanggal_lahir }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>


    

    
    

    
</div>
</main>
