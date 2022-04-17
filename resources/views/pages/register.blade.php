@extends('layouts.template')
@section('title')
    Atlas | Log in
@endsection
@section('links')
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <!--===============================================================================================-->
@endsection
@section('content')
    @include('partials.registration.registerForm')
@endsection
@section('scripts')
    <script src="js/main.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/contact_custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/validation.js"></script>

@endsection
