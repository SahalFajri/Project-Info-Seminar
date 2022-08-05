@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Seminar</h1>
  </div>

  <div class="col-lg-8 mb-3">
    <form method="POST" action="/dashboard/seminars" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" required autofocus name="title">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" value="{{ old('slug') }}" required name="slug">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="seminar_date" class="form-label">Tanggal Seminar<span class="text-danger">*</span></label>
        <input type="date" class="form-control @error('seminar_date') is-invalid @enderror" id="seminar_date" value="{{ old('seminar_date') }}" required name="seminar_date">
        @error('seminar_date')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="seminar_time" class="form-label">Jam Seminar (WIB)<span class="text-danger">*</span></label>
        <input type="time" class="form-control @error('seminar_time') is-invalid @enderror" id="seminar_time" value="{{ old('seminar_time') }}" required name="seminar_time">
        @error('seminar_time')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="link" class="form-label">Link Pendaftaran<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" value="{{ old('link') }}" required name="link">
        @error('link')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Gambar/Poster Seminar<span class="text-danger">*</span></label>
        <img class="img-preview img-fluid mb-3 col-sm-5" >
        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
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
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
      </div>
      <p class="text-danger">* Wajib diisi</p>
      <button type="submit" class="btn btn-primary">Tambah Seminar</button>
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