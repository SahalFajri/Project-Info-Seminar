@extends('layouts.main')

@section('container')
  <style>
    /* body{
      background-color: #C9CBFF; 
      background: url(img/daun.png);
    } */
    /* .page-item.active .page-link {
      z-index: 3;
      color: #fff;
      background-color: #198754;
      border-color: #198754;
    }
    .page-link {
      position: relative;
      display: block;
      color: #198754;
      text-decoration: none;
      background-color: #fff;
      border: 1px solid #dee2e6;
      transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    } */
  </style>
  
  <h1 class="text-center mt-4">Selamat Datang!</h1>

  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide my-4 shadow" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://static-cse.canva.com/image/97090/create-flyers.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://static-cse.canva.com/blob/646848/createbrochures1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://static-cse.canva.com/blob/646777/posters.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <h1 class="text-center mb-4">Silahkan pilih seminar</h1>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="/">
          <div class="input-group mb-3 shadow">
            <input type="text" class="form-control" placeholder="Cari seminar..." name="search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i> Cari</button>
          </div>
        </form>
      </div>
    </div>

    @if ( $seminars->count() )

      <div class="row">
        @foreach ($seminars as $seminar)
          <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
              @if ($seminar->image)
                <img class="card-img-top" src="{{ asset('storage/'.$seminar->image) }}" alt="{{ $seminar->title }}">
              @else     
                <img class="card-img-top" src="https://source.unsplash.com/1400x2100?{{ $seminar->title }}" alt="{{ $seminar->title }}">
              @endif
                <div class="card-body">
                  <h5 class="card-title"><a href="/seminars/{{ $seminar->slug }}" class="text-decoration-none text-dark">{{ $seminar->title }}</a></h5>
                  <p>
                    <small class="text-muted">
                      Tanggal seminar : {{ $seminar->seminar_date->translatedFormat('l, d-F-Y') }}
                      <br>
                      Jam {{ $seminar->seminar_time->translatedFormat('H:i') }} WIB
                    </small>
                  </p>
                  <p class="card-text">{{ $seminar->excerpt }}</p>
                </div>
                <div class="card-footer">
                  <a href="/seminars/{{ $seminar->slug }}" class="text-decoration-none btn btn-primary">Selengkapnya</a>
                </div>
            </div>
          </div>
        @endforeach
      </div>

      {{-- <div class="row mb-2">
        @foreach ($seminars as $seminar)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-light">
              <h5 class="mb-0">{{ $seminar->title }}</h5>
              <div class="mb-1 text-muted">{{ $seminar->seminar_date->translatedFormat('l, d-F-Y') }}</div>
              <div class="mb-1 text-muted">{{ $seminar->seminar_time->translatedFormat('H:i') }} WIB</div>
              <p class="card-text mb-auto">{{ $seminar->excerpt }}</p>
              <a href="/seminars/{{ $seminar->slug }}" class="btn btn-success">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              @if ($seminar->image)
                <img class="bd-placeholder-img" width="250" height="400" src="{{ asset('storage/'.$seminar->image) }}" alt="{{ $seminar->title }}">
              @else     
                <img class="bd-placeholder-img" width="250" height="400" src="https://source.unsplash.com/1400x2100?{{ $seminar->title }}" alt="{{ $seminar->title }}">
              @endif              
            </div>
          </div>
        </div>
        @endforeach
      </div> --}}
    @else
    <div class="alert alert-danger shadow" role="alert">
      <p class="text-center fs-4">Tidak Ada Seminar Yang Ditemukan.</p>
    </div>
    @endif
    
    <div class="d-flex justify-content-center">
      <div class="shadow">
        {{ $seminars->links() }}
      </div>
    </div>
    
  </div>

  <!-- Footer -->
  <footer class="text-center bg-primary text-white py-3">
    <p>Created with <i class="bi bi-emoji-neutral"></i> fatigue by <a href="https://www.instagram.com/sahal_fajri/" class="text-white fw-bold">Sahal Fajri</a></p>
  </footer>
  <!-- Akhir Footer -->
@endsection