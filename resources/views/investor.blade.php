@extends('layouts.app')

@php app()->setLocale(session('locale', app()->getLocale())) @endphp


@section('title', __('site.investor_home'))

@section('content')


<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="text-center">
        <h1 class="display-3 mb-4">{{ __('site.coming_soon') }}</h1>
        <p class="lead mb-3">{{ __('site.working_hard') }}</p>
        <p class="text-muted">{{ __('site.stay_tuned') }}</p>
        <a href="{{ url('/') }}" class="btn btn-primary mt-4">{{ __('site.back_to_home') }}</a>
    </div>
</div>

@endsection