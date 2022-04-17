@extends('layouts.adminTemp')
@section('title')
    Atlas | Admin Panel
@endsection
@section('activeH')
    class="active"
@endsection
@section('pageHeader')
    Hotels
@endsection
@section('desc')
    Manage hotels.
@endsection

@section('content')
    @include('partials.admin.hotelManage')
@endsection
