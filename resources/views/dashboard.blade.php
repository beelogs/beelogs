@extends('adminlte::page')

@section('title', 'BeeLogs')

@section('content_header')
  <div class="row">
      <div class="col-10">
          <h1 class="m-0 text-dark">Dashboard</h1>
      </div>
      <div class="col-2">
          <a class="btn btn-primary btn-block" href="{{ route('inspections.create') }}" role="button">New Inspection</a>
      </div>
  </div>
@stop

@include('partials._sidebar')

@section('content')
    <div class="row">
        <div class="col-3">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>{{ $count = \DB::table('apiaries')->count() }}</h3>
                    <p>{{ trans('dashboard.apiaries') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <a href="{{ route('apiaries.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>{{ $count = \DB::table('hives')->count() }}</h3>
                    <p>{{ trans('dashboard.hives') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cubes"></i>
                </div>
                <a href="{{ route('hives.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>{{ $count = \DB::table('queens')->count() }}</h3>
                    <p>{{ trans('dashboard.queens') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-crown"></i>
                </div>
                <a href="{{ route('queens.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-3">
            <div class="small-box bg-gradient-secondary">
                <div class="inner">
                    <h3>{{ $count = \DB::table('colonies')->count() }}</h3>
                    <p>{{ trans('dashboard.colonies') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('colonies.index') }}" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            <div class="card">
                <div class="card-header">
                    <span >Apiaries</span>
                    {{--
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('apiaries.create') }}" role="button">Create</a>
                    </div>
                    --}}
                </div>
                <div class="card-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($apiaries as $apiary)
                      <tr>
                        <th scope="row">{{ $apiary->id }}</th>
                        <td><a href="{{ route('apiaries.show', $apiary->id) }}">{{ $apiary->name }}</a></td>
                        <td>{{ substr($apiary->description, 0, 40) }}{{ strlen($apiary->description) > 40 ? "…" : "" }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Hives
                    {{--
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('hives.create') }}" role="button">Create</a>
                    </div>
                    --}}
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Apiary</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($hives as $hive)
                      <tr>
                        <th scope="row">{{ $hive->id }}</th>
                        <td><a href="{{ route('hives.show', $hive->id) }}">{{ $hive->name }}</a></td>
                        <td>{{ $apiary->name }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Queens
                    {{--
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('queens.create') }}" role="button">Create</a>
                    </div>
                    --}}
                </div>
                <div class="card-body">

                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($queens as $queen)
                      <tr>
                        <th scope="row">{{ $queen->id }}</th>
                        <td><a href="{{ route('queens.show', $queen->id) }}">{{ $queen->name }}</a></td>
                        <td>{{ substr($queen->description, 0, 40) }}{{ strlen($queen->description) > 40 ? "…" : "" }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Colonies
                    {{--
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('colonies.create') }}" role="button">Create</a>
                    </div>
                    --}}
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($colonies as $colony)
                      <tr>
                        <th scope="row">{{ $colony->id }}</th>
                        <td><a href="{{ route('colonies.show', $colony->id) }}">{{ $colony->name }}</a></td>
                        <td>{{ substr($colony->description, 0, 40) }}{{ strlen($colony->description) > 40 ? "…" : "" }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-header">
                  Last 5 Inspections
                  {{--
                  <div class="float-right">
                      <a class="btn btn-primary btn-sm" href="{{ route('inspections.create') }}" role="button">Create</a>
                  </div>
                  --}}
              </div>
              <div class="card-body">

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date</th>
                      <th scope="col">Hive</th>
                      <th scope="col">Notes</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($inspections as $inspection)
                    <tr>
                      <th scope="row">{{ $inspection->id }}</th>
                      <td><a href="{{ route('inspections.show', $inspection->id) }}">{{ date('l j\'S F Y (h:ia)', strtotime($inspection->created_at)) }}</a></td>
                        <th scope="row">{{ $inspection->hive }}</th>
                      <td>{{ substr($inspection->notes, 0, 50) }}{{ strlen($inspection->notes) > 50 ? "…" : "" }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
          </div>
        </div>
    </div>
@stop

@section('footer')
  @include('partials._footer')
@stop
