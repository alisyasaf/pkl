@extends('layouts.main')
@include('partials.sidebarAdmin')
@section('container')
<h1>Welcome, {{ auth()->user()->name }}</h1>
@endsection

