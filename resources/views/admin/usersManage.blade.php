@extends('layouts.adminTemp')
@section('title')
    Atlas | Admin Panel User Manager
@endsection
@section('activeU')
    class="active"
@endsection
@section('pageHeader')
    Users
@endsection
@section('desc')
    Manage users.
@endsection

@section('content')
    @include('partials.admin.userTable')
@endsection
