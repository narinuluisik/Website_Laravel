@extends('admin.layout')

@section('title', 'İletişim Bilgileri')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">İletişim Bilgileri</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Adres</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Çalışma Saatleri</th>
                <th>İşlemler</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->adress }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->time }}</td>
                <td>
                    <a href="{{ route('admin.iletisimbilgileri.edit', $contact->id) }}" class="btn btn-warning btn-sm">Düzenle</a>
                    <form action="{{ route('admin.iletisimbilgileri.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Silmek istediğine emin misin?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
