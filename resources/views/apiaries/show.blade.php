@extends('adminlte::page')

@section('title'){{ $apiary->name }}@stop

@section('content_header')
    <h1 class="m-0 text-dark">{{ $apiary->name }}</h1>
    @include('partials._messages')
@stop

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <strong>Description</strong>
                <p>{{ $apiary->description }}</p>
                <div class="row">
                    <div class="col-6">
                        <strong>Latitude:</strong> {{ $apiary->latitude }}
                    </div>
                    <div class="col-6">
                        <strong>Longitude:</strong> {{ $apiary->longitude }}
                    </div>
                </div>
              </div>
          </div>
          <div class="mt-4 mb-4">
            <!-- Google Maps - Lat | Long -->
            <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{ $apiary->latitude }},{{ $apiary->longitude }}&amp;maptype=satellite&amp;key={{ config('maps.key') }}"></iframe>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
