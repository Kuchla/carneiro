@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

@include('site.home.partials._intro')
@include('site.home.partials._news')
@include('site.home.partials._courses')
@include('site.home.partials._gallery')
@include('site.home.partials._team')
@include('site.home.partials._institution')
@include('site.home.partials._links')
@include('site.home.partials._contact')

@endsection