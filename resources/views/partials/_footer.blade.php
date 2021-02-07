@section('footer')
  <div class="row">
      <div class="col-8">
          &copy; 2020 - {{ date('Y') }} BeeLogs
      </div>
      <div class="col-4">
          <div class="float-right">
              Version: 0.1.0
          </div>
      </div>
  </div>
@stop

@section('adminlte_css_pre')
  <style>
      .main-footer {
        background-color: #343a40 !important;
        color: #ffffff !important;
      }
  </style>
@stop
