<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <h6 class="nav-link"><i class="bi bi-person-circle"></i> {{ auth()->user()->name }}</h6>
        <hr>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/seminars*') ? 'active' : '' }}" href="/dashboard/seminars">
          <span data-feather="file"></span>
          Seminars
        </a>
      </li>
    </ul> 
  </div>
</nav>