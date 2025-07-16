<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Yönetim Paneli')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body style="margin: 0; background-color: #f8fafc;">

    <!-- Sidebar -->

<div class="sidebar bg-dark text-white px-3 py-4" style="width: 220px; position: fixed; top: 0; bottom: 0; left: 0; z-index: 100;">
    <h4 class="text-center mb-4">Admin Panel</h4>

    <a href="{{ route('admin.dashboard') }}" class="sidebar-link mb-2">Dashboard</a>
   
    <a href="{{ route('admin.about-page.index') }}" class="sidebar-link mb-2">Hakkımızda </a>
        <a href="{{ route('admin.contact') }}" class="sidebar-link mb-2">İletişim </a>
     {{-- 
    <a href="{{ route('admin.logout') }}" class="sidebar-link">Çıkış Yap</a> 
    --}}
</div>


 <nav class="navbar navbar-light bg-light shadow-sm" style="height: 60px; border-bottom: 1px solid #e2e8f0; padding: 0 30px;">
    <div class="container-fluid justify-content-between">
        <span class="navbar-brand fw-bold" style="color: #232946;">TeknoSoft Yönetim Paneli</span>

        <div class="d-flex align-items-center gap-3">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-sm btn-outline-primary">Siteyi Görüntüle</a>
            <a href="{{ route('admin.logout') }}" class="btn btn-sm btn-danger">Çıkış Yap</a>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <main class="main-content" style="margin-left: 220px; padding: 30px 20px;">
        @yield('content')
    </main>

 <footer>
  <div class="container d-flex justify-content-between align-items-center">
    <span>&copy; {{ date('Y') }} TeknoSoft Yönetim Paneli. Tüm hakları saklıdır.</span>
   
    <small class="text-muted">v1.0.0</small>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
