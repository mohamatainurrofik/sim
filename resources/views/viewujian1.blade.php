@extends('layouts.base',['title' => 'Tambah Ujian Mapel'])

@section('content')
@if(Auth::user()->name == "Fiqq")
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
              Tambah Ujian {{ $mapel->nama_mapel}}
            </div>
            <div class="card-body">
              <form action="{{ route('saveujian', $mapel->id_mapel) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                  <input type="text" class="form-control" name="id_ujian" id="id_ujian" placeholder="Id Ujian" required>    
                  </div>
                  <div class="form-group">
                  <input type="text" class="form-control" name="nama_ujian" id="nama_ujian" placeholder="Nama Ujian" required>    
                  </div>
                  <div class="form-group">
                  <input type="text" class="form-control" name="link" id="link" placeholder="Link Ujian" required>
                  </div>
                  <div class="form-group">
                  <input type="datetime-local" class="form-control" name="start" id="start" placeholder="Waktu Buka" required>
                  </div>
                  <div class="form-group">
                  <input type="datetime-local" class="form-control" name="end" id="end" placeholder="Waktu Tutup" required>
                  </div>
                  <div class="form-group">
                  <input readonly type="text" class="form-control" name="mapel_id_mapel" id="mapel_id_mapel" placeholder="Mapel" value="{{$mapel->id_mapel}}" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
@else
@foreach($ujian as $key => $uji)
<div class="col">
<table class="table-striped table table-bordered">
    <tr>
        <td>Nama ujian</td>
        <td>{{ $uji->nama_ujian }}</td>
        <td>Waktu Mulai Ujian</td>
        <td>{{ $uji->start }}</td>
    </tr>
    <tr>
        <td>Waktu Berakhir</td>
        <td>{{ $uji->end }}</td>
        <td>Mapel</td>
        <td>{{ $uji->mapel_id_mapel ?? '' }}</td>
    </tr>
</table>
<div class="form-group">
  <a type="button" target="_blank" class="btn btn-primary" href="{{$uji->link}}">Ikuti Ujian</a>
</div>
</div>
@endforeach
@endif
@endsection