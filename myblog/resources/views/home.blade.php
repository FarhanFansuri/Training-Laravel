@extends('layout.layout')

@section('title', $title)
@section('content')

@foreach($posts as $post)
    <h1>{{ $post["judul"] }}</h1>
    <h4>{{ $post["penulis"] }}</h4>
    <br>
    <p>{{ $post["kontent"] }}</p>
    <br><br>
@endforeach

@endsection
