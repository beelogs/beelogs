@if (Session::has('success'))
  <div class="alert alert-success mt-3" role="alert">
    <strong>Success:</strong> {{ Session::get('success') }}
  </div>
@endif

@if (Session::has('error'))
  <div class="alert alert-warning mt-3" role="alert">
    <strong>Error:</strong> {{ Session::get('error') }}
  </div>
@endif

@if (Session::has('fail'))
  <div class="alert alert-danger mt-3" role="alert">
    <strong>Fail:</strong> {{ Session::get('fail') }}
  </div>
@endif
