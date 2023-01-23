@extends('layout')

@section('content')
@include('partials._search')

<h1>Single Listing</h1>

<h2>
    {{$listing['title']}}
</h2>
<p>
    {{$listing['title']}}
</p>

@endsection