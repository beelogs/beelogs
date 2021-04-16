@extends('adminlte::page')

@section('title', 'Create Hive')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Hive</h1>
@stop

@include('partials._sidebar')

@section('content')
{!! Form::open(array('route' => 'hives.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::text('name', null, array('class' => 'form-control mb-3', 'placeholder' => 'Hive Name', 'required' => '', 'maxlength' => '255')) }}
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Hive Description', 'required' => '', 'maxlength' => '255')) }}
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
                  {{ Form::select('size', ['01' => 'Apiary 01', '02' => 'Apiary 02'], null, ['class' => 'form-control', 'placeholder' => 'Choose an apiary&hellip;']) }}
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop
