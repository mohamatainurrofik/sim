@extends('layouts.base',['title' => 'Dashboard'])

    @section('content')
    <div class="row">
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Siswa </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalstudent}}</div>
                        </div>
                        <div class="col-auto">
                            <i style="width: 40px; height: 40px"  data-feather="users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-3 mb-4 ">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Kelas </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalkelas}}</div>
                        </div>
                        <div class="col-auto">
                            <i style="width: 40px; height: 40px"  data-feather="bookmark">></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-3 mb-4 ">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Guru </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalguru}}</div>
                        </div>
                        <div class="col-auto">
                            <i style="width: 40px; height: 40px"  data-feather="user-check">></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-3 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pengumuman</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$hitungpengumuman}}</div>
                            </div>
                            <div class="col-auto">
                                <i style="width: 40px; height: 40px"  data-feather="git-pull-request"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col p-1 mb-2 bg-danger  text-white">
        <small><strong>Penting !! </strong>Hubungi CP tertera jika terdapat error atau bug <strong>081111111111</strong> </small>
        </div>

        @foreach($pengumuman as $key => $pengum)
        <div class="col mb-2">
            <div class="card">
                <div class="card-header">
                    {{$pengum->judul}}
                </div>
                <div class="card-body">
                    {{$pengum->isi}}  
                </div>
                <div class="card-footer">
                
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="row">
       
    </div>
      @endsection