@extends('adminlte::page')

@section('title', 'Create Queen')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Queen</h1>
@stop

@section('content')
{!! Form::open(array('route' => 'queens.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::text('name', null, array('class' => 'form-control mb-3', 'placeholder' => 'Queen Name', 'required' => '', 'maxlength' => '255')) }}
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Queen Description', 'required' => '', 'maxlength' => '255')) }}
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
                  {{ Form::select('hive', ['01' => 'Hive 01', '02' => 'Hive 02'], null, ['class' => 'form-control', 'placeholder' => 'Choose a hive&hellip;']) }}
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop
