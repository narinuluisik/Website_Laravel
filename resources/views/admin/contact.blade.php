@extends('admin.layout')

@section('title', '📥 Gelen Mesajlar')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">📬 Gelen Kutusu</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="list-group shadow-sm">
        @forelse($messages as $index => $message)
            <a class="list-group-item list-group-item-action flex-column align-items-start"
               data-bs-toggle="collapse" href="#message-{{ $index }}" role="button" aria-expanded="false" aria-controls="message-{{ $index }}">

                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $message->subject }}</h5>
                    <small>{{ $message->created_at->format('d.m.Y H:i') }}</small>
                </div>
                <p class="mb-1 text-muted">
                    <strong>{{ $message->name }}</strong> • {{ Str::limit($message->message, 60) }}
                </p>
            </a>

            <div class="collapse" id="message-{{ $index }}">
                <div class="card card-body border-0 border-start border-4 border-primary">
                    <p><strong>Gönderen:</strong> {{ $message->name }} ({{ $message->email }})</p>
                    <p><strong>Konu:</strong> {{ $message->subject }}</p>
                    <p><strong>Mesaj:</strong><br> {!! nl2br(e($message->message)) !!}</p>
                    <p class="text-end text-muted"><em>Gönderim Tarihi: {{ $message->created_at->format('d.m.Y H:i') }}</em></p>
                </div>
            </div>
        @empty
            <div class="text-center p-4 text-muted">Gelen kutusunda mesaj yok.</div>
        @endforelse
    </div>
</div>
@endsection
