@extends('adminlte::page')

@section('title', 'User Profile')

@section('content_header')
    <h1 class="m-0 text-dark">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}'s Profile</h1>
    @include('partials._messages')
@stop

@section('content')
  <div class="row">
      <div class="col-9">
          <div class="card">
              <div class="card-body">
                  <div class="row mb-3">
                      <div class="col-6">
                          <strong>Firstname:</strong> {{ Auth::user()->firstname }}
                      </div>
                      <div class="col-6">
                          <strong>Lastname:</strong> {{ Auth::user()->lastname }}
                      </div>
                  </div>
                  <strong>Email:</strong> {{ Auth::user()->email }}
              </div>
          </div>
      </div>
      <div class="col-3">
          <div class="card">
              <div class="card-body">
                  <div class="float-center">
                      <img src="{{ asset('media/bllogov3.png') }}" class="img-thumbnail rounded mx-auto d-block" alt="BeeLogs" height="200px" width="200px;">
                  </div>
              </div>
          </div>
      </div>
  </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
