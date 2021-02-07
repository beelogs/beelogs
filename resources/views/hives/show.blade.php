@extends('adminlte::page')

@section('title'){{ $hive->name }}@stop

@section('content_header')
    <h1 class="m-0 text-dark">{{ $hive->name }}</h1>
    @include('partials._messages')
@stop

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <strong>Description</strong>
                <p>{{ $hive->description }}</p>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
