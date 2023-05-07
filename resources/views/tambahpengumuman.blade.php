@extends('layouts.base',['title' => 'Tambah Pengumuman'])

@section('content')

<div class="row justify-content-center">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Tambah Pengumuman
            </div>
            <div class="card-body">
                <form action="{{ route('savepengumuman') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul Pengumuman" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="isi" name="isi" id="isi" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                    <a class="btn btn-secondary" href="{{ route('pengumuman') }}" role="button">Kembali</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection