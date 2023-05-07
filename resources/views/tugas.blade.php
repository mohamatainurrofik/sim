@extends('layouts.base',['title' => 'Tugas'])

@section('content')
@if(Auth::user()->name == "Fiqq")
<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
              Tugas
            </div>
            <div class="card-body">
              <form action="{{ route('savetugas') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                  <input type="text" class="form-control" name="id_tugas" id="id_tugas" placeholder="Id Tugas" required>    
                  </div>
                  <div class="form-group">
                  <input type="text" class="form-control" name="nama_tugas" id="nama_tugas" placeholder="Nama Tugas" required>    
                  </div>
                  <div class="form-group">
                  <select name="mapel_id_mapel" id="mapel_id_mapel" class="form-control" required>
                      <option selected disabled>Mapel</option>
                      @foreach($mapel as $key => $map)
                      <option value="{{$map->id_mapel}}">{{$map->nama_mapel}}</option>
                      @endforeach
                  </select> 
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
@foreach($tugas as $key => $tug)
<form action="" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
<label class="mr-3" for="inputGroupFile02">{{$tug->nama_tugas}}</label>
<div class="form-group">
    <input type="file" name="{{$tug->id_tugas}}" id="thumbnail" accept=".png, .jpg, .jpeg">
</div>
</div>
<div class="form-group">
  <a type="button" class="btn btn-primary" href="{{route('home')}}">submit</a>
</div>
</form>

@endforeach
@endif

@endsection