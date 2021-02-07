@extends('adminlte::page')

@section('title', 'Hives')

@section('content_header')
  <div class="row">
      <div class="col-10">
          <h1 class="m-0 text-dark">Hives</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary btn-block" href="{{ route('hives.create') }}" role="button">Create Hive</a>
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
                    @foreach ($hives as $hive)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $hive->id }}</th>
                        <td>{{ $hive->name }}</td>
                        <td>{{ $hive->description }}</td>
                        <td>
                            <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                              <a class="btn btn-primary" href="{{ route('hives.show', $hive->id) }}" role="button">View</a>
                              <button type="button" class="btn btn-secondary">Edit</button>
                              <button type="button" class="btn btn-danger">Delete</button>
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
