@extends('adminlte::page')

@section('title'){{ $colony->name }}@stop
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">{{ $colony->name }}</h1>
    @include('partials._messages')
@stop

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <strong>Description</strong>
                <p>{{ $colony->description }}</p>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
