@section('footer')
  <div class="row">
      <div class="col-6">
          &copy; 2020 - {{ date('Y') }} <a href="https://www.beelogs.org/">{{ config('app.name') }}</a> &amp; Nicholas Taylor
      </div>
      <div class="col-6">
          <div class="float-right">
              Version: 0.1.0
          </div>
      </div>
  </div>
@stop
