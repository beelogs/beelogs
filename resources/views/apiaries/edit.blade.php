@extends('adminlte::page')

@section('title'){{ $apiary->name }}@stop

@section('content_header')
    <h1 class="m-0 text-dark">Edit: {{ $apiary->name }}</h1>
    @include('partials._messages')
@stop

@include('partials._sidebar')

@section('content')
    {!! Form::model($apiary, ['route' => ['apiaries.update', $apiary->id], 'method' => 'PUT']) !!}
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
                            {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Apiary Description', 'required' => '', 'maxlength' => '65535')) }}
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
                    <div class="row">
                        <div class="col-6">
                            {!! Html::linkRoute('apiaries.show', 'Cancel', array($apiary->id), array('class' => 'btn btn-secondary btn-block')) !!}
                        </div>
                        <div class="col-6">
                            {{ Form::submit('Save Edit', ['class' => 'btn btn-primary btn-block']) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('footer')
    @include('partials._footer')
@stop
