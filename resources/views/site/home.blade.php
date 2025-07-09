@extends('site.layout')

@section('title', 'Anasayfa')

@section('content')
    @include('site.home.slider')
       @include('site.home.about-summary')
        @include('site.home.services')
     

    @include('site.home.testimonials')
@endsection
