@extends('adminlte::page')

@section('title', 'Create Inspection')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Inspection</h1>
@stop

@include('partials._sidebar')

@section('content')
{!! Form::open(array('route' => 'inspections.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::label('notes', 'Notes') }}
                              {{ Form::textarea('notes', null, array('class' => 'form-control mb-3', 'maxlength' => '10000', 'rows' => '4', 'required' => '')) }}
                          </div>
                      </div>

                </div>
            </div>
            <div class="card">
                <div class="card-body">

                      <div class="row">
                          <div class="col-6">
                              {{ Form::label('temperament', 'Temperament') }}
                              {{ Form::select('temperament', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                          <div class="col-6">
                              {{ Form::label('cleanliness', 'Cleanliness') }}
                              {{ Form::select('cleanliness', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                      </div>

                      <div class="row mt-3">
                          <div class="col-6">
                              {{ Form::label('brood', 'Brood') }}
                              {{ Form::select('brood', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                          <div class="col-6">
                              {{ Form::label('stores', 'Stores') }}
                              {{ Form::select('stores', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                      </div>

                      <div class="row mt-3">
                          <div class="col-6">
                              {{ Form::label('room', 'Room') }}
                              {{ Form::select('room', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                          <div class="col-6">
                              {{ Form::label('health', 'Health') }}
                              {{ Form::select('health', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                      </div>

                      <div class="row mt-3">
                          <div class="col-6">
                              {{ Form::label('varroa', 'Varroa') }}
                              {{ Form::select('varroa', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => '', 'required' => ''
                              ]) }}
                          </div>
                          <div class="col-6">
                              {{ Form::label('feed', 'Feed') }}
                              {{ Form::select('feed', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => ''
                              ]) }}
                          </div>
                      </div>

                      <div class="row mt-3">
                          <div class="col-6">
                              {{ Form::label('supers', 'Supers') }}
                              {{ Form::select('supers', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => ''
                              ]) }}
                          </div>
                          <div class="col-6">
                              {{ Form::label('weather', 'Weather') }}
                              {{ Form::select('weather', [
                                '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => ''
                              ]) }}
                          </div>
                      </div>

                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    {{ Form::submit('Save', array('class' => 'btn btn-primary btn-block')) }}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    {{ Form::label('hive', 'Hive') }}
                    {{ Form::select('hive', [
                      'Hive 01' => 'Hive 01', 'Hive 02' => 'Hive 02'
                    ], null, [
                      'class' => 'form-control', 'placeholder' => '', 'required' => ''
                      ]) }}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  {{ Form::label('image', 'Image') }}
                  {{ Form::file('image') }}
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop
