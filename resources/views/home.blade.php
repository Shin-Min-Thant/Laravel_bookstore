@extends('layout.master')
@section('title')
    <title>Home</title>

<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')

@include('layout.slider')

@endsection
