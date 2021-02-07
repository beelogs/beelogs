@extends('adminlte::page')

@section('title', 'Create Apiary')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Apiary</h1>
@stop

@section('content')
{!! Form::open(array('route' => 'apiaries.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::text('name', null, array('class' => 'form-control mb-3', 'placeholder' => 'Apiary Name', 'required' => '', 'maxlength' => '255')) }}
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Apiary Description', 'required' => '', 'maxlength' => '255')) }}
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-6">
                              {{ Form::text('latitude', null, array('class' => 'form-control mb-3', 'placeholder' => 'Latitude', 'required' => '', 'maxlength' => '255')) }}
                          </div>
                          <div class="col-6">
                              {{ Form::text('longitude', null, array('class' => 'form-control mb-3', 'placeholder' => 'Longitude', 'required' => '', 'maxlength' => '255')) }}
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
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop
