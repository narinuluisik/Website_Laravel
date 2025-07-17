@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">

  <div class="mb-4">
    <h4 class="fw-bold text-dark"> Yönetim Paneli</h4>
    <p class="text-muted">Sistem durumunu inceleyebilir, içerikleri yönetebilirsiniz.</p>
  </div>

  <div class="row g-4 mb-4">
    <div class="col-md-4">
      <div class="card shadow-sm border-start border-primary border-4">
        <div class="card-body">
          <h6 class="text-muted">Toplam Müşteri</h6>
          <h3 class="fw-bold mb-0">100+</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm border-start border-success border-4">
        <div class="card-body">
          <h6 class="text-muted">Aktif Proje</h6>
          <h3 class="fw-bold mb-0">12</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm border-start border-info border-4">
        <div class="card-body">
          <h6 class="text-muted">Son Güncelleme</h6>
          <h3 class="fw-semibold mb-0">15.07.2025</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4 mb-4">
    
    <div class="col-md-6">
      <div class="card shadow-sm rounded-3">
        <div class="card-header bg-light fw-semibold">📬 Son Gelen Mesajlar</div>
        <ul class="list-group list-group-flush">
          @forelse($latestMessages as $msg)
            <li class="list-group-item">
              <div class="d-flex justify-content-between">
                <span class="fw-semibold">{{ $msg->name }}</span>
                <small class="text-muted">{{ $msg->created_at->format('d.m.Y H:i') }}</small>
              </div>
              <div class="text-muted small">{{ Str::limit($msg->subject, 50) }}</div>
            </li>
          @empty
            <li class="list-group-item text-muted">Yeni mesaj yok.</li>
          @endforelse
        </ul>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm rounded-3">
        <div class="card-header bg-light fw-semibold">🔗 Hızlı Yönetim</div>
        <div class="list-group list-group-flush">
          <a href="{{ route('admin.about-page.index') }}" class="list-group-item list-group-item-action">
            Hakkımızda Sayfası
          </a>
          
          <a href="{{ route('admin.iletisimbilgileri.index') }}" class="list-group-item list-group-item-action">
            İletişim Bilgileri
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="card shadow-sm rounded-3">
    <div class="card-body small text-muted">
      Laravel {{ app()->version() }} &nbsp; | &nbsp; PHP {{ PHP_VERSION }} &nbsp; | &nbsp; IP: {{ request()->ip() }}
    </div>
  </div>

</div>
@endsection
