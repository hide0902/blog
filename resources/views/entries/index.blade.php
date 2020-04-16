@extends('layouts.app')

@section('title', 'Blog')

@include('layouts.header')

@section('content')
  <ul>
  @foreach ($entries as $entry)
    <li><a href="{{ action("EntriesController@show", $entry->id) }}">{{$entry->title}}</a></li>
  @endforeach
  </ul>
@endsection
