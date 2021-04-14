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
                <strong>Notes</strong>
                <p>{{ $inspection->notes }}</p>
              </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-6">
                          <strong>Temparment</strong>
                          <p>{{ $inspection->temperament }}</p>
                      </div>
                      <div class="col-6">
                          <strong>Cleanliness</strong>
                          <p>{{ $inspection->cleanliness }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <strong>Brood</strong>
                          <p>{{ $inspection->brood }}</p>
                      </div>
                      <div class="col-6">
                          <strong>Stores</strong>
                          <p>{{ $inspection->stores }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <strong>Room</strong>
                          <p>{{ $inspection->room }}</p>
                      </div>
                      <div class="col-6">
                          <strong>Health</strong>
                          <p>{{ $inspection->health }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <strong>Varroa</strong>
                          <p>{{ $inspection->varroa }}</p>
                      </div>
                      <div class="col-6">
                          <strong>Feed</strong>
                          <p>{{ $inspection->feed }}</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <strong>Supers</strong>
                          <p>{{ $inspection->supers }}</p>
                      </div>
                      <div class="col-6">
                          <strong>Weather</strong>
                          <p>{{ $inspection->weather }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
