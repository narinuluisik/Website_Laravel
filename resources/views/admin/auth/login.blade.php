<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Yönetici Girişi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #232946, #6366F1);
      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Inter', sans-serif;
    }
    .login-box {
      background: #ffffff;
      color: #232946;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2 class="mb-4 text-center fw-bold">Yönetici Paneli</h2>

    @if($errors->has('login'))
      <div class="alert alert-danger">
        {{ $errors->first('login') }}
      </div>
    @endif

    <form action="{{ route('admin.login.post') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Kullanıcı Adı</label>
        <input type="text" name="username" id="username" class="form-control" required autofocus value="{{ old('username') }}">
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">Şifre</label>
        <input type="password" name="password" id="password" class="form-control" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
      </div>
    </form>
  </div>
</body>
</html>
