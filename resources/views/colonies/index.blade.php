@extends('adminlte::page')

@section('title', 'Colonies')
@section('title_postfix', '| BeeLogs')

@section('content_header')
  <div class="row">
      <div class="col-10">
          <h1 class="m-0 text-dark">Colonies</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary btn-block" href="{{ route('colonies.create') }}" role="button">Create Colony</a>
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
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    @foreach ($colonies as $colony)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $colony->id }}</th>
                        <td>{{ $colony->name }}</td>
                        <td>{{ $colony->description }}</td>
                        <td>
                            <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                              <a class="btn btn-primary" href="{{ route('colonies.show', $colony->id) }}" role="button">View</a>
                              <a class="btn btn-secondary" href="#" role="button">Edit</a>
                              <a class="btn btn-danger" href="#" role="button">Delete</a>
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
@stop

@section('footer')
  @include('partials._footer')
@stop
