@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Seminar</h1>
  </div>

  <div class="col-lg-8 mb-3">
    <form method="POST" action="/dashboard/seminars/{{ $seminar->slug }}" enctype="multipart/form-data">
      @method('put')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title', $seminar->title) }}" required autofocus name="title">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug', $seminar->slug) }}" required name="slug">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="seminar_date" class="form-label">Tanggal Seminar, sebelumnya : <strong>{{  $seminar->seminar_date->translatedFormat('l, d-F-Y') }}</strong><span class="text-danger">*</span></label>
        <input type="date" class="form-control @error('seminar_date') is-invalid @enderror" id="seminar_date" value="{{ old('seminar_date') }}" name="seminar_date">
        @error('seminar_date')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="seminar_time" class="form-label">Jam Seminar (WIB), sebelumnya : <strong>{{  $seminar->seminar_time->translatedFormat('H:i') }} WIB</strong><span class="text-danger">*</span></label>
        <input type="time" class="form-control @error('seminar_time') is-invalid @enderror" id="seminar_time" value="{{ old('seminar_time') }}" name="seminar_time">
        @error('seminar_time')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">Link Pendaftaran<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" value="{{ old('link', $seminar->link) }}" required name="link">
        @error('link')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Gambar/Poster Seminar<span class="text-danger">*</span></label>
        <input type="hidden" name="oldImage" value="{{ $seminar->image }}">
        @if ($seminar->image)
          <img src="{{ asset('storage/'.$seminar->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" >
        @else
          <img class="img-preview img-fluid mb-3 col-sm-5" >
        @endif
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
        @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body<span class="text-danger">*</span></label>
        @error('body')
          <p class="text-danger">{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $seminar->body) }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <p class="text-danger">* Wajib diisi</p>
      <button type="submit" class="btn btn-primary">Update Seminar</button>
    </form>
  </div>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
      fetch('/dashboard/seminars/checkSlug?title=' + title.value)
        .then(response =>  response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
@endsection