  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">TeknoSoft</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center gap-3">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link px-3 py-2 rounded {{ request()->routeIs('home') ? 'active text-primary fw-semibold' : 'text-dark' }}">
            Anasayfa
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('about') }}" class="nav-link px-3 py-2 rounded {{ request()->routeIs('about') ? 'active text-primary fw-semibold' : 'text-dark' }}">
            Hakkımızda
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('contact') }}" class="nav-link px-3 py-2 rounded {{ request()->routeIs('contact') ? 'active text-primary fw-semibold' : 'text-dark' }}">
            İletişim
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
