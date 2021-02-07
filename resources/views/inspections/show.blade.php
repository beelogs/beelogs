@extends('adminlte::page')

@section('title'){{ date('l j\'S F Y', strtotime($inspection->created_at)) }}@stop
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">{{ date('l j\'S F Y', strtotime($inspection->created_at)) }}</h1>
    @include('partials._messages')
@stop

@section('content')
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                <strong>Description</strong>
                <p>{{ $inspection->description }}</p>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
