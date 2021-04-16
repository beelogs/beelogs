@extends('adminlte::page')

@section('title'){{ $queen->name }}@stop
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">{{ $queen->name }}</h1>
    @include('partials._messages')
@stop

@include('partials._sidebar')

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <strong>Description</strong>
                <p>{{ $queen->description }}</p>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
