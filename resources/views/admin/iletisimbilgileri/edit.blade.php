@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2>Ekip üyeleri Düzenle</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.iletisimbilgileri.update', $contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Adres</label>
            <input type="text" name="adress" class="form-control" value="{{ old('adress', $contact->adress) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>
    
             <div class="mb-3">
            <label for="phone" class="form-label">Telefon</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div> 
      
             <div class="mb-3">
            <label for="time" class="form-label">Çalışma Saatleri</label>
            <input type="text" name="time" class="form-control" value="{{ old('time', $contact->time) }}">
        </div>

        <button type="submit" class="btn btn-success">Güncelle</button>
        <a href="{{ route('admin.iletisimbilgileri.index') }}" class="btn btn-secondary">Geri Dön</a>
    </form>
</div>
@endsection
