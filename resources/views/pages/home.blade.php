@extends('layouts.template')
@section('title')
    Atlas | Home Page
@endsection
@section('links')

    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
    @endsection
@section('content')
    @include('partials.homepage.home_slider')
    @include('partials.homepage.search')
    @include('partials.homepage.intro')
    @include('partials.homepage.cta_news')
    {{--@include('partials.homepage.offers')--}}
    @include('partials.homepage.trending')
@endsection
