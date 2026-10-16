@extends('layouts.app')

@section('title', 'Mounthailand Coffee | Premium Artisan Robusta Temanggung')

@section('content')
    @include('partials.preloader')
    @include('partials.navbar')
    @include('partials.hero')
    @include('partials.products')
    @include('partials.profile')
    @include('partials.gallery')
    @include('partials.testimonials')
    @include('partials.cta')
    @include('partials.footer')
@endsection
