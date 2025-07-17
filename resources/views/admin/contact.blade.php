@extends('admin.layout')

@section('title', '📥 Gelen Mesajlar')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">📬 Gelen Mesajlar</h4>

    @if(session('success'))
        <div class="alert alert-success py-1 px-2 small">{{ session('success') }}</div>
    @endif

    <div class="list-group shadow-sm">
        @forelse($messages as $index => $message)
            <a class="list-group-item list-group-item-action py-2 px-3"
               data-bs-toggle="collapse" href="#message-{{ $index }}" role="button" aria-expanded="false" aria-controls="message-{{ $index }}">

                <div class="d-flex justify-content-between small">
                    <strong>{{ $message->subject }}</strong>
                    <span>{{ $message->created_at->format('d.m.Y H:i') }}</span>
                </div>
                <div class="text-muted small">
                    <strong>{{ $message->name }}</strong> • {{ Str::limit($message->message, 50) }}
                </div>
            </a>

            <div class="collapse" id="message-{{ $index }}">
                <div class="card card-body border-0 border-start border-4 border-primary bg-light small">
                    <p><strong>Gönderen:</strong> {{ $message->name }} ({{ $message->email }})</p>
                    <p><strong>Konu:</strong> {{ $message->subject }}</p>
                    <p><strong>Mesaj:</strong><br> {!! nl2br(e($message->message)) !!}</p>
                    <p class="text-end text-muted"><em>{{ $message->created_at->format('d.m.Y H:i') }}</em></p>
                </div>
            </div>
        @empty
            <div class="text-center p-3 text-muted small">Gelen kutusunda mesaj yok.</div>
        @endforelse
    </div>
</div>
@endsection
