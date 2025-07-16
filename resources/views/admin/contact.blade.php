@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')


<div class="container mt-4">
    <h3>Gelen Mesajlar</h3>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ad</th>
                <th>Email</th>
                <th>Konu</th>
                <th>Mesaj</th>
                <th>Gönderim Tarihi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ Str::limit($message->message, 100) }}</td>
                <td>{{ $message->created_at->format('d.m.Y H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Hiç mesaj yok.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
