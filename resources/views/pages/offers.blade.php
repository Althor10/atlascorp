@extends('layouts.template')
@section('title')
    Atlas | Offers
@endsection
@section('links')

    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
@endsection
@section('content')
    @include('partials.offers.offerscontent')
@endsection
@section('scripts')
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/offers_custom.js"></script>
@endsection
