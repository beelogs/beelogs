@extends('adminlte::page')

@section('title', 'Inspections')
@section('title_postfix', '| BeeLogs')

@section('content_header')
  <div class="row">
      <div class="col-10">
          <h1 class="m-0 text-dark">Inspections</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary btn-block" href="{{ route('inspections.create') }}" role="button">Create Inspection</a>
      </div>
  </div>
@stop

@include('partials._sidebar')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Notes</th>
                      </tr>
                    </thead>
                    @foreach ($inspections as $inspection)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $inspection->id }}</th>
                        <td>{{ date('l j\'S F Y (h:ia)', strtotime($inspection->created_at)) }}</td>
                        <td>{{ substr($inspection->notes, 0, 50) }}{{ strlen($inspection->notes) > 50 ? "…" : "" }}</td>
                        <td>
                            <div class="btn-group btn-group-sm float-right" role="group" aria-label="Basic example">
                              <a class="btn btn-primary" href="{{ route('inspections.show', $inspection->id) }}" role="button">View</a>
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
