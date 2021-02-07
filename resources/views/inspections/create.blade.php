@extends('adminlte::page')

@section('title', 'Create Inspection')
@section('title_postfix', '| BeeLogs')

@section('adminlte_css_pre')
<style>
.btn-file {
  position: relative;
  overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
@stop

@section('content_header')
    <h1 class="m-0 text-dark">Create Inspection</h1>
@stop

@section('content')
{!! Form::open(array('route' => 'inspections.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Inspection Description', 'required' => '', 'maxlength' => '255')) }}
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
                  {{ Form::select('hive', ['01' => 'Hive 01', '02' => 'Hive 02'], null, array('class' => 'form-control', 'placeholder' => 'Choose a hive&hellip;')) }}
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
