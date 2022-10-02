{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  <div class="px-32 mb-10">
    <h2 class="text-5xl">
      {{$home_page->description}}
    </h2>
  </div>
@endsection
