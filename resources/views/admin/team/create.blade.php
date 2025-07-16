@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>Ekip Üyesi Ekle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('team-members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      
        <div class="mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Pozisyon</label>
            <input type="text" name="position" class="form-control" value="{{ old('position') }}">
        </div>

               <div class="mb-3">
            <label for="bio" class="form-label">biyografi</label>
            <input type="text" name="bio" class="form-control" value="{{ old('bio') }}">
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
