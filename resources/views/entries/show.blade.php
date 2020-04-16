@extends('layouts.app')

@section('title', $entry->title. '- Blog')

@include('layouts.header')

@section('content')
  <h1>{{$entry->title}}</h1>
    <article>
      {{$entry->content}}
    </article>
@endsection
