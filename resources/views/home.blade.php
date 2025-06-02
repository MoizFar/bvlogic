@extends('layouts.app')

@section('title', __('site.home'))

@section('content')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp


    @include('partials.hero-slider')
    @include('partials.about-us')
    @include('partials.achievements')
    @include('partials.call-to-action')
    @include('partials.development-process')
    @include('partials.industries-we-serve')
    @include('partials.our-resources')
    @include('partials.technologies-expertise')
    @include('partials.contact-form')
@endsection





