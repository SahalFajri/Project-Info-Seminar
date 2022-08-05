<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow">
  <div class="container">
    <a class="navbar-brand" href="/">Info Seminar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item m-1 ms-0">
          <a class="btn btn-outline-light {{ Request::is('/') ? 'active' : '' }}" href="/"><i class="bi bi-house-door"></i> Home</a>
        </li>
        <li class="nav-item m-1 ms-0">
          <a class="btn btn-outline-light {{ Request::is('about') ? 'active' : '' }}" href="/about"><i class="bi bi-book"></i> About</a>
        </li>
        <li class="nav-item m-1 ms-0">
          <a class="btn btn-outline-light {{ Request::is('contact') ? 'active' : '' }}" href="/contact"><i class="bi bi-envelope"></i> Contact</a>
        </li>
      </ul>
      
      <ul class="navbar-nav">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i> {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
            <li class="nav-item">
              <a href="/login" type="button" class="btn btn-outline-light {{ Request::is('login') ? 'active' : '' }} mx-3"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>