@extends('site.layout')

@section('content')

{{-- === Hakkımızda Hero Bölümü === --}}
<section class="about-hero py-6 mt-5" style="background: linear-gradient(120deg, #232946, #6366F1); color: white; position:relative; overflow:hidden;">
  <div class="container d-flex flex-wrap align-items-center justify-content-between gap-4">
    <div style="flex: 1 1 400px; max-width: 600px;">
      <h2 class="section-heading fw-bold text-center mb-3" style="font-size: 2.5rem; color: #E0E7FF;">Biz Kimiz?</h2>
      <h5 class="mb-4 text-center" style="color: #E0E7FF;">Yenilikçi Teknoloji Çözümleri</h5>
      <p class="text-center" style="line-height: 1.7; font-size: 1.1rem;">
        {!! nl2br(e($about->content)) !!}
      </p>
    </div>
    @if(!empty($about->image))
    <div style="flex: 1 1 400px; text-align: center;">
      <img src="{{ $about->image }}" alt="Ofis Resmi" class="img-fluid rounded-4 shadow" style="max-height: 400px; object-fit: cover;">
    </div>
    @endif
  </div>
  <div style="position:absolute; left:0; right:0; bottom:-1px; width:100%; line-height:0; z-index:2;">
    <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block; width:100%; height:80px;">
      <path d="M0,40 C360,120 1080,0 1440,60 L1440,80 L0,80 Z" fill="#f6f8fb"/>
    </svg>
  </div>
</section>

{{-- === Vizyon & Misyon Bölümü === --}}
<section class="py-6" style="background:#f6f8fb;">
  <div class="container">
    <div class="row justify-content-center g-4">
      @if($about->vision)
      <div class="col-md-6 col-lg-5">
        <div class="custom-card p-4 h-100 bg-white rounded-4 shadow-sm">
          <h4 class="fw-bold text-primary mb-3 text-center">Vizyonumuz</h4>
          <p class="text-secondary text-center" style="line-height: 1.6;">{!! nl2br(e($about->vision)) !!}</p>
        </div>
      </div>
      @endif
      @if($about->mission)
      <div class="col-md-6 col-lg-5">
        <div class="custom-card p-4 h-100 bg-white rounded-4 shadow-sm">
          <h4 class="fw-bold text-success mb-3 text-center">Misyonumuz</h4>
          <p class="text-secondary text-center" style="line-height: 1.6;">{!! nl2br(e($about->mission)) !!}</p>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>

{{-- === Projeler Bölümü === --}}
@if(isset($projects) && $projects->count())
<section class="py-6" style="background:#fff;">
  <div class="container text-center">
    <h2 class="section-heading fw-bold">Projelerimiz</h2>
    <div class="accent-line mx-auto mb-4" style="width:64px;height:4px;background:#10B981;border-radius:2px;"></div>
    <div class="row g-4 justify-content-center">
      @foreach($projects as $project)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="custom-card h-100 shadow-sm rounded-4 bg-white">
          @if($project->image)
          <img src="{{ $project->image }}" class="card-img-top rounded-top-4" alt="{{ $project->title }}" style="height: 180px; object-fit: cover;">
          @endif
          <div class="card-body text-start">
            <h5 class="card-title text-primary">{{ $project->title }}</h5>
            <p class="card-text text-secondary" style="font-size: 0.95rem; line-height: 1.4;">{!! nl2br(e(Str::limit($project->description, 150))) !!}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

{{-- === Ekibimiz Bölümü === --}}
@if($team->count())
<section class="py-6" style="background:#f6f8fb;">
  <div class="container text-center">
    <h2 class="section-heading fw-bold">Ekibimiz</h2>
    <div class="accent-line mx-auto mb-4" style="width:64px;height:4px;background:#6366F1;border-radius:2px;"></div>
    <div class="row justify-content-center g-4">
      @foreach($team as $member)
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="custom-card p-4 h-100 shadow-sm rounded-4 bg-white text-center">
          @if($member->image)
          <img src="{{ $member->image }}" alt="{{ $member->name }}" class="rounded-circle mb-3" style="width: 120px; height: 120px; object-fit: cover;">
          @else
          <div class="rounded-circle bg-secondary mx-auto mb-3" style="width: 120px; height: 120px;"></div>
          @endif
          <h5 class="fw-bold text-primary mb-1">{{ $member->name }}</h5>
          <p class="text-muted fst-italic mb-2">{{ $member->position }}</p>
          <p class="text-secondary" style="font-size: 0.95rem; line-height: 1.4;">{!! nl2br(e($member->bio)) !!}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif
@endsection
