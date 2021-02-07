@extends('adminlte::page')

@section('title', 'Create Colony')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Colony</h1>
@stop

@section('content')
{!! Form::open(array('route' => 'colonies.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::text('name', null, array('class' => 'form-control mb-3', 'placeholder' => 'Colony Name', 'required' => '', 'maxlength' => '255')) }}
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Colony Description', 'required' => '', 'maxlength' => '255')) }}
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
                  {{ Form::select('queen', ['01' => 'Queen 01', '02' => 'Queen 02'], null, ['class' => 'form-control', 'placeholder' => 'Choose a queen&hellip;']) }}
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop
