@extends('layouts.main')

<style>
  /* body{
    background: url(img/daun.png);
  } */
  .box{
    /* background-color: #a7e8b8; */
    background-color: #a7d6e8;
    border: 1px solid black;
    border-radius: 10px;
  }
  section{
    margin-bottom: 5rem;
  }
</style>

@section('container')
<!-- Contact -->
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 box p-4 shadow">

        <h1 class="text-center">Contact Me</h1>

        <!-- Alert -->
        <div class="alert alert-warning alert-dismissible fade show d-none my-alert" role="alert">
          <strong>Terima Kasih</strong> Pesan anda sudah kami terima.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- Form -->
        <form name="seminar-contact-form">
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="nama" aria-describedby="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
          {{-- Button Loading --}}
          <button class="btn btn-primary btn-loading d-none" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Contact -->

<!-- Footer -->
<footer class="text-white bg-primary py-3">
  <div class="container">
    <ul class="list-inline">
      <li class="list-inline-item"><a href="https://www.instagram.com/sahal_fajri/" class="text-white"><i class="bi bi-instagram"></i></a></li>
      <li class="list-inline-item"><a href="https://wa.me/6282299400249" class="text-white"><i class="bi bi-whatsapp"></i></a></li>
      <li class="list-inline-item"><a href="https://github.com/SahalFajri" class="text-white"><i class="bi bi-github"></i></a></li>
    </ul>
    <p><a href="mailto:sahalfajri879@gmail.com" class="text-light"><i class="bi bi-envelope"></i> {{ $email }}</a></p>
  </div>
  <hr>
  <p class="text-center">Created with <i class="bi bi-emoji-neutral"></i> fatigue by <a href="https://github.com/MrJNothing" class="text-white fw-bold">Sahal Fajri</a></p>
</footer>
<!-- Akhir Footer -->

<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbwJeZ9SdLzdzJi8_0Cu_dKOD6IeWFG7JHzngOHOTgrJIKQQmyzvwU6vQltSbGpO-bvyvA/exec';
  const form = document.forms['seminar-contact-form'];
  const btnKirim = document.querySelector('.btn-kirim');
  const btnLoading = document.querySelector('.btn-loading');
  const myAlert = document.querySelector('.my-alert');

  form.addEventListener('submit', e => {
    e.preventDefault()
    // ketika tombol submit diklik
    // tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle('d-none');
    btnKirim.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => {
        // tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        // tampilkan alert
        myAlert.classList.toggle('d-none');
        // reset formnya
        form.reset();
        console.log('Success!', response)
      })
      .catch(error => console.error('Error!', error.message))
  })
</script>
@endsection