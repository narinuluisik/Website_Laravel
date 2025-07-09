@extends('site.layout')

@section('title', $about->name ?? 'Hakkımızda')

@section('content')
    <h1>{{ $about->name ?? 'Hakkımızda' }}</h1>
    <h4>{{ $about->subtitle ?? '' }}</h4>
    <div>{!! $about->content ?? '<p>Henüz içerik eklenmemiş.</p>' !!}</div>

    @if(!empty($about->image))
        <img src="{{ asset($about->image) }}" alt="Hakkımızda görseli" class="img-fluid mt-3" style="max-width:400px;" />
    @endif
@endsection
