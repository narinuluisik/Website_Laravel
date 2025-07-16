@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>Proje Düzenle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Başlık</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Açıklama</label>
            <input type="text" name="description" class="form-control" value="{{ old('description', $project->description) }}">
        </div>
        <div class="mb-3">
    <label for="order" class="form-label">Sıralama</label>
    <input type="number" name="order" class="form-control" 
           value="{{ old('order', $teamMember->order ?? '') }}" required>
</div>

      
        <div class="mb-3">
            <label for="image" class="form-label">Görsel</label>
            @if($project->image)
                <div class="mb-2">
                    <img src="{{ asset($project->image) }}" width="150">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Güncelle</button>
        <a href="{{ route('admin.about-page.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection
