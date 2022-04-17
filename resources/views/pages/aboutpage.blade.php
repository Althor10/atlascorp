@extends('layouts.template')
@section('title')
    Atlas | About
@endsection
@section('links')
    <link rel="stylesheet" type="text/css" href="styles/about_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
    @endsection
@section('content')
    @include('partials.about.about')
@endsection
@section('scripts')

    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/about_custom.js"></script>

@endsection
