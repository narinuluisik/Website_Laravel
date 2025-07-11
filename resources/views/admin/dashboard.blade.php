@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container py-4">

  <h2 class="mb-4 text-primary fw-bold">Merhaba, Yönetici! TeknoSoft Yönetim Paneline Hoşgeldin.</h2>
  <p class="mb-5 text-secondary">Yönetim panelinde gerekli güncelleme ekleme silme işlemlerini kolaylıkla gerçekleştirebilirsiniz</p>

  <div class="row g-4 mb-5">
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-4" style="background: linear-gradient(135deg, #6366F1, #232946); color: white;">
        <div class="card-body text-center">
          <h5 class="card-title mb-2">Toplam Müşteri</h5>
          <p class="display-5 fw-bold">100+</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-4" style="background: linear-gradient(135deg, #4F46E5, #818CF8); color: white;">
        <div class="card-body text-center">
          <h5 class="card-title mb-2">Aktif Projeler</h5>
          <p class="display-5 fw-bold">12</p>
        </div>
      </div>
    </div>
  
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-4" style="background: linear-gradient(135deg, #3730A3, #C7D2FE); color: white;">
        <div class="card-body text-center">
          <h5 class="card-title mb-2">Son Güncelleme</h5>
          <p class="display-5 fw-bold">15.07.2025</p>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex gap-3 mb-5">
    
  </div>

  {{-- İstersen buraya Son Mesajlar / Güncellemeler gibi liste ekleyebiliriz --}}
</div>
@endsection
