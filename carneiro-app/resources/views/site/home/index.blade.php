@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

@include('site.home.partials._intro')

@if(!empty($news->first()))
    @include('site.home.partials._news')
@endif

@include('site.home.partials._courses')
@include('site.home.partials._gallery')
@include('site.home.partials._team')

@if(!empty($institutionals))
    @include('site.home.partials._institution')
@endif

@include('site.home.partials._links')
@include('site.home.partials._contact')

@endsection