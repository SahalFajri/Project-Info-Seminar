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
</style>

@section('container')
<div class="container">
<div class="row mt-5 justify-content-center">
  <div class="col-md-5 box p-4 shadow">

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h1 class="mb-3 text-center">Login</h1>
      <form method="post" action="/login">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required placeholder="name@example.com" value="{{ old('email') }}" autofocus>
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
          <label for="password">Password</label>
        </div>
  
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
  </div>
</div>

</div>
@endsection