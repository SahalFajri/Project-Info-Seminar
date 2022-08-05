@extends('layouts.main')

@section('container')
  <style>
    /* body{
      background-color: #C9CBFF;
      background: url(../img/daun.png);
    } */
  </style>

  <div class="container my-4">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="mb-3 bg-light border border-dark rounded p-2">
          <h4>{{ $seminar->title }}</h4>
        </div>
        <div class="mb-3 bg-light border border-dark rounded p-2">
          <h4>Tanggal & jam seminar :</h4>
          <p>{{ $seminar->seminar_date->translatedFormat('l, d-F-Y') }} {{ $seminar->seminar_time->translatedFormat('H:i') }} WIB</p>
        </div>
        <div class="mb-3 bg-light border border-dark rounded p-2">
          <h4>Tentang Seminar :</h4>
          {!! $seminar->body !!}
        </div>
        <a href="{{ $seminar->link }}" class="btn btn-primary">Link Pendaftaran</a>
        <a class="btn btn-danger" href="/"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
      </div>
    
      <div class="col-md-5">
        @if ($seminar->image)
          <img class="img-fluid img-thumbnail" src="{{ asset('storage/'.$seminar->image) }}" alt="{{ $seminar->title }}">
        @else     
          <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/1400x2100?{{ $seminar->title }}" alt="{{ $seminar->title }}">
        @endif
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="bi bi-eye"></i> Preview Gambar
        </button>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @if ($seminar->image)
            <img class="img-fluid img-thumbnail" src="{{ asset('storage/'.$seminar->image) }}" alt="{{ $seminar->title }}">
          @else     
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/1400x2100?{{ $seminar->title }}" alt="{{ $seminar->title }}">
          @endif
        </div>
      </div>
    </div>
  </div>
  
@endsection