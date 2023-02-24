@extends('layouts.main')
@include('partials.sidebarMitra')
@section('container')
<h1>Welcome, {{ auth()->user()->name }}</h1>
@endsection

