<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/datepicker.min.css') }}">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="{{ asset('image/logo.png') }}" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          <p class=" mt-3 ml-2 float-right"><strong>SD UPN VETERAN JAWA TIMUR</strong></p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <nav id="sidebarMenu" class="col-md-3 pt-0 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ route('home') }}">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('siswa') ? 'active' : '' }}" href="{{ route('siswa') }}">
              <span data-feather="user"></span>
              Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('kelas') ? 'active' : '' }}" href="{{ route('kelas') }}">
              <span data-feather="users"></span>
              Kelas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('exam')}}">
              <span data-feather="file"></span>
              Ujian
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Laporan</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Pengumuman
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Informasi Sekolah
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Pembayaran
            </a>
          </li> -->
        </ul>
      </div>
    </nav>

    

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">{{ $title ?? ''}}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button type="button" class="btn btn-danger btn-sm ">Admin</button>
              </div>
              <div class="btn-group">
              <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="user"></span>
                {{ Auth::user()->name }}
              </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </div>
          </div>
        </div>
        @include('allert')
        @yield('content')
    </main>
  </div>
</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('dist/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('dist/js/i18n/datepicker.en.js') }}"></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        
</body>
</html>