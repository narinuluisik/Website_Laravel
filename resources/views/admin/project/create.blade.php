@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>Proje Ekle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Açıklama</label>
            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Görsel</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
        <a href="{{ route('admin.about-page.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection
