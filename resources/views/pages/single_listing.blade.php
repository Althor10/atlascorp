@extends('layouts.template')
@section('title')
    Atlas | Single
@endsection
@section('links')

    <link href="{{asset('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_listing_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/single_listing_responsive.css')}}">
@endsection
@section('content')
    @include('partials.single_listing.single_listing_content')
@endsection
@section('scripts')

    <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
    <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{asset('js/single_listing_custom.js')}}"></script>

@endsection
