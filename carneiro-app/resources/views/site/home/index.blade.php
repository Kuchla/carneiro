@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

@include('site.home.partials._intro')

@if(!empty($news->first()))
    @include('site.home.partials._news')
@endif

@if(!empty($courses->first()))
    @include('site.home.partials._courses')
@endif

@if(!empty($galleries->first()))
    @include('site.home.partials._gallery')
@endif

@if(!empty($collaborators->first()))
    @include('site.home.partials._team')
@endif    

@if(!empty($institutional))
    @include('site.home.partials._institution')
@endif

@if(!empty($links))
    @include('site.home.partials._links')
@endif

@include('site.home.partials._contact')

@endsection