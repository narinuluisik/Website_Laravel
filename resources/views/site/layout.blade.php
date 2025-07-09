<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'TeknoSoft')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
            font-size: 1.05rem;
            background: #f7f8fa;
            min-height: 100vh;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Inter', Arial, Helvetica, sans-serif;
            font-weight: 900;
            letter-spacing: -0.5px;
        }
        .navbar {
            background: #fff;
            box-shadow: 0 2px 16px rgba(99,102,241,0.07);
            border-bottom: 1.5px solid #e6eaf3;
        }
        .navbar .navbar-brand {
            color: #6366F1 !important;
            font-size: 1.5rem;
            letter-spacing: -1px;
        }
        .navbar .nav-link {
            color: #232946 !important;
            font-weight: 600;
            margin-left: 8px;
            margin-right: 8px;
            transition: color 0.2s;
        }
        .navbar .nav-link.active, .navbar .nav-link:hover {
            color: #10B981 !important;
        }
        
        footer {
            background: #f6f8fb;
            padding: 32px 0 16px 0;
            margin-top: 60px;
            border-top: 1.5px solid #e6eaf3;
            color: #6366F1;
            font-weight: 600;
            font-size: 1.05rem;
            box-shadow: 0 -2px 16px rgba(99,102,241,0.04);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">TeknoSoft</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Anasayfa</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Hakkımızda</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">İletişim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="text-center text-muted">
        <div class="container">
            &copy; {{ date('Y') }} TeknoSoft. Tüm hakları saklıdır.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
