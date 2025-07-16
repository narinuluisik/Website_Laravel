@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>Ekip üyeleri Düzenle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('team-members.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">isim</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $teamMember->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Pozisyon</label>
            <input type="text" name="position" class="form-control" value="{{ old('position', $teamMember->position) }}">
        </div>
    
             <div class="mb-3">
            <label for="bio" class="form-label">Biyografi</label>
            <input type="text" name="bio" class="form-control" value="{{ old('bio', $teamMember->bio) }}">
        </div> 
      
        <div class="mb-3">
            <label for="image" class="form-label">Görsel</label>
            @if($teamMember->image)
                <div class="mb-2">
                    <img src="{{ asset($teamMember->image) }}" width="150">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Güncelle</button>
        <a href="{{ route('admin.about-page.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection
