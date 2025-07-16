@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>İçeriği Düzenle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('about-content.update', $aboutContent->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $aboutContent->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label">Alt Başlık</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $aboutContent->subtitle) }}">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">İçerik</label>
            <textarea name="content" class="form-control" rows="5">{{ old('content', $aboutContent->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="vision" class="form-label">Vizyon</label>
            <textarea name="vision" class="form-control" rows="2">{{ old('vision', $aboutContent->vision) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="mission" class="form-label">Misyon</label>
            <textarea name="mission" class="form-control" rows="2">{{ old('mission', $aboutContent->mission) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Görsel</label>
            @if($aboutContent->image)
                <div class="mb-2">
                    <img src="{{ asset($aboutContent->image) }}" width="150">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Güncelle</button>
        <a href="{{ route('about-content.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection
