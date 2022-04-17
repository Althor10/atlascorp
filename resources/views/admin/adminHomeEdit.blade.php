@extends('layouts.adminTemp')
@section('title')
    Atlas | Admin Panel
@endsection
@section('activeHN')
    class="active"
@endsection
@section('pageHeader')
    News and Slider
@endsection
@section('desc')
    Manage homepage content.
@endsection

@section('content')
    @include('partials.admin.homeManage')
@endsection
