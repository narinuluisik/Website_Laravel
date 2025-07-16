@extends('site.layout')

@section('title', 'İletişim')

@section('content')

<section class="about-hero d-flex align-items-center text-center"
         style="min-height: 400px; background: linear-gradient(120deg, #232946, #6366F1); color: white; position:relative; overflow:hidden; margin-top: 50px;">
  <div class="container">
    <div class="mx-auto" style="max-width: 700px;">
      <h2 class="fw-bold mb-3" style="font-size: 2.5rem;">Bizimle İletişime Geçin</h2>
      <h5 class="mb-4" style="color: #E0E7FF;">Her zaman yardıma hazırız</h5>
      <p style="line-height: 1.7; font-size: 1.1rem;">
        Aşağıdaki formu doldurarak bize kolayca ulaşabilirsiniz. Geri dönüşlerimiz en kısa sürede yapılmaktadır.
      </p>
    </div>
  </div>

  <div style="position:absolute; left:0; right:0; bottom:-1px; width:100%; line-height:0; z-index:2;">
    <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%; height:80px;">
      <path d="M0,40 C360,120 1080,0 1440,60 L1440,80 L0,80 Z" fill="#ffffff"/>
    </svg>
  </div>
</section>

{{-- === İletişim Bilgi + Form Bölümü === --}}
<section class="contact-section" style="background: linear-gradient(145deg, #EEF2F7, #FFFFFF); padding: 80px 20px;">
  <div class="container d-flex flex-wrap align-items-start justify-content-between gap-5">
@if($contacts)
    <div class="contact-info" style="flex: 1 1 400px; max-width: 600px;">
      <h3 class="fw-bold mb-4" style="color:#232946;">İletişim Bilgileri</h3>
      <ul class="list-unstyled" style="font-size: 1.05rem;">
        <li class="mb-3">📍 <strong>Adres: </strong>{{$contacts->adress}}</li>
        <li class="mb-3">📧 <strong>E-posta: </strong> {{$contacts->email}}</li>
        <li class="mb-3">☎️ <strong>Telefon: </strong>{{$contacts->phone}}</li>
        <li>🕐 <strong>Çalışma Saatleri: </strong>{{ $contacts->time }}</li>
      </ul>
    </div>
@endif
    <div class="contact-form" style="flex: 1 1 400px; max-width: 600px;">
      <h3 class="mb-4 fw-bold text-center" style="color: #4f46e5;">İletişim Formu</h3>

      @if(session('success'))
        <div class="alert alert-success text-center">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('contact.send') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Adınız</label>
          <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-posta</label>
          <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="mb-3">
          <label for="subject" class="form-label">Konu</label>
          <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}">
        </div>

        <div class="mb-4">
          <label for="message" class="form-label">Mesajınız</label>
          <textarea name="message" id="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary px-5 py-2">Gönder</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
