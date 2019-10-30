@extends('site.layouts.app')

@section('title', 'Index')

@section('content')

@include('site.home.partials._intro')

<main id="main">

@if(!empty($news->first()))
    @include('site.home.partials._news')
@endif

@if(!empty($courses->first()))
    @include('site.home.partials._courses')
@endif

@if(!empty($images->first()))
    @include('site.home.partials._gallery')
@endif

@if(!empty($institutional))
    @include('site.home.partials._institution')
@endif

@if(!empty($links))
    @include('site.home.partials._links')
@endif

@include('site.home.partials._contact')

</main>
@endsection
