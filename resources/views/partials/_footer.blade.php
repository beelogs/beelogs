@section('footer')
  <div class="row">
      <div class="col-8">
          &copy; 2020 - {{ date('Y') }} BeeLogs
      </div>
      <div class="col-4">
          <div class="float-right">
              Version: @include('partials._version')
          </div>
      </div>
  </div>
@stop

@section('adminlte_css')
  <style>
      .main-footer {
        background-color: #343a40 !important;
        color: #ffffff !important;
      }
  </style>
@stop
