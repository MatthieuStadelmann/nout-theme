{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  <div class="md:px-32 mb-10">
    <h2 class="text-5xl">
      {{$home_page->description}}
    </h2>
  </div>
  @if($home_page->artists)
    <div class="grid md:grid-cols-3 gap-4 mb-10">
      @foreach($home_page->artists as $artist)
        @include('components.artist-card')
      @endforeach
    </div>
  @endif

@endsection
