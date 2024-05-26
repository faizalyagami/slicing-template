@extends('partials.layouts.app');

@section('title', 'Homepage')

@section('content')

<!-- Hero Section -->
@include('partials.pages.homepage.hero')
<!-- Popular Product -->
@include('partials.pages.homepage.populer')
<!-- Services -->
@include('partials.pages.homepage.service')
<!-- About Us -->
@include('partials.pages.homepage.about')
<!-- Products -->
@include('partials.pages.homepage.product')
<!-- Testimonial -->
@include('partials.pages.homepage.testimonial')
<!-- Subsribe -->
@include('partials.pages.homepage.subscribe')

@endsection