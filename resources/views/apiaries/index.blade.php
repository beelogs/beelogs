@extends('adminlte::page')

@section('title', 'Apiaries')

@section('content_header')
  <div class="row">
      <div class="col-10">
          <h1 class="m-0 text-dark">{{ trans('apiaries.index.apiaries') }}</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary btn-block" href="{{ route('apiaries.create') }}" role="button">{{ trans('apiaries.index.createApiary') }}</a>
      </div>
  </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ trans('apiaries.index.name') }}</th>
                        <th scope="col">{{ trans('apiaries.index.description') }}</th>
                      </tr>
                    </thead>
                    @foreach ($apiaries as $apiary)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $apiary->id }}</th>
                          <td><a href="{{ route('apiaries.show', $apiary->id) }}">{{ $apiary->name }}</a></td>
                        <td>{{ substr($apiary->description, 0, 110) }}{{ strlen($apiary->description) > 110 ? "..." : "" }}</td>
                        <td>
                            <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="{{ route('apiaries.show', $apiary->id) }}" role="button">{{ trans('apiaries.index.view') }}</a>
                                <a class="btn btn-secondary" href="{{ route('apiaries.edit', $apiary->id) }}" role="button">{{ trans('apiaries.index.edit') }}</a>
                                <a class="btn btn-danger" href="" role="button" data-toggle="modal" data-target="#deleteApiaryModel">{{ trans('apiaries.index.delete') }}</a>
                            </div>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Confirm Delete Apiary Model --}}
    <div class="modal fade" id="deleteApiaryModel" tabindex="-1" role="dialog" aria-labelledby="deleteApiaryModelCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Apiary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{ Form::open(['route' => ['apiaries.destroy', $apiary->id], 'method' => 'DELETE']) }}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
