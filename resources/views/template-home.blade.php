{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  <div class="flex justify-center mb-10">
    <h2 class="text-5xl w-4/5">
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
