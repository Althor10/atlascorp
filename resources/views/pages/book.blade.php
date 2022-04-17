@extends('layouts.template')
@section('title')
    Atlas | Booking
@endsection
@section('links')

    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/offers_responsive.css')}}">
@endsection
@section('content')
    @include('partials.book.reservation')
@endsection
@section('scripts')

    <script src="{{asset('plugins/Isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src='{{asset('js/offers_custom.js')}}'></script>
    <script src='{{asset('js/date.js')}}'></script>
    <script src="{{asset('js/price.js')}}"></script>
@endsection
