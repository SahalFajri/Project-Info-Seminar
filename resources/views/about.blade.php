@extends('layouts.main')

@section('container')
  <!-- Jumbotron -->
  <section class="jumbotron text-center">
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">{{ $name }}</h1>

    <p class="lead">Programmer | Student of <a href="https://smktelkom-jkt.sch.id/" class="text-black text-decoration-none">SMK Telkom Jakarta</a></p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L60,176C120,160,240,128,360,144C480,160,600,224,720,213.3C840,203,960,117,1080,112C1200,107,1320,181,1380,218.7L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>About Web</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-4">
          <p>Pada dasarnya website ini dibuat karena adanya tugas Project Work yang dibuat untuk menggantikan kegiatan PKL, Project Work ini dilakukan karena adanya pandemi Covid-19 yang dimana Covid-19 ini adalah virus yang sangat berbahaya, sehingga kegiatan PKL pun digantikan dengan Project Work dan semua kegiatan dilakukan di rumah masing-masing.</p>
        </div>
        <div class="col-md-4">
          <p>Seminar biasa dilakukan secara tatap muka, akan tetapi karena adanya pandemi kegiatan tersebut dilakukan secara daring. Walaupun sudah melakukan secara daring para penontonya hanya sedikit yang ikut, maka dari itu saya membuat website ini untuk mempermudah para pembuat seminar untuk mencari penonton.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L60,181.3C120,171,240,149,360,128C480,107,600,85,720,101.3C840,117,960,171,1080,165.3C1200,160,1320,96,1380,64L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir About -->

  <!-- Footer -->
  <footer class="text-center bg-primary text-white pb-5">
    <p>Created with <i class="bi bi-emoji-neutral"></i> fatigue by <a href="https://www.instagram.com/sahal_fajri/" class="text-white fw-bold">Sahal Fajri</a></p>
  </footer>
  <!-- Akhir Footer -->
@endsection