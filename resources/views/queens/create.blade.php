@extends('adminlte::page')

@section('title', 'Create Queen')
@section('title_postfix', '| BeeLogs')

@section('content_header')
    <h1 class="m-0 text-dark">Create Queen</h1>
@stop

@section('content')
{!! Form::open(array('route' => 'queens.store', 'data-parsley-validate' => '')) !!}
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                      {{-- CSRF --}}
                      {{ Form::token() }}
                      {{-- Apiary Name --}}

                      <div class="row">
                          <div class="col-12">
                              {{ Form::text('name', null, array('class' => 'form-control mb-3', 'placeholder' => 'Queen Name', 'required' => '', 'maxlength' => '255')) }}
                              {{ Form::textarea('description', null, array('class' => 'form-control mb-3', 'placeholder' => 'Queen Description', 'required' => '', 'maxlength' => '255')) }}
                          </div>
                      </div>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="pills-general-tab" data-bs-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">General</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-species-tab" data-bs-toggle="pill" href="#pills-species" role="tab" aria-controls="pills-species" aria-selected="false">Species</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                        <div class="row mt-4">
                            <div class="col-6">
                                {{ Form::label('hatchdate','Hatch Date') }}
                                {{ Form::date('hatchdate', \Carbon\Carbon::now(), [
                                  'class' => 'form-control'
                                  ]) }}
                            </div>
                            <div class="col-6">
                              {{ Form::label('hive','Hive') }}
                              {{ Form::select('hive', [
                                '01' => 'Hive 01', '02' => 'Hive 02'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => ''
                                ]) }}
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                {{ Form::label('mated','Mating Method') }}
                                {{ Form::select('mated', [
                                  'virgin' => 'Virgin', 'openair' => 'Open Air', 'artificial' => 'Artificial Insemination', 'unknown' => 'Unknown'
                                ], null, [
                                  'class' => 'form-control', 'placeholder' => ''
                                  ]) }}
                            </div>
                            <div class="col-6">
                                {{ Form::label('mateddate','Mated Date') }}
                                {{ Form::date('mateddate', \Carbon\Carbon::now(), [
                                  'class' => 'form-control'
                                  ]) }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-species" role="tabpanel" aria-labelledby="pills-species-tab">
                        <div class="row mt-4">
                            <div class="col-6">
                                {{ Form::label('species','Species') }}
                                {{ Form::select('species', [
                                  'buckfast' => 'Buckfast', 'italian' => 'Italian'
                                ], null, [
                                  'class' => 'form-control', 'placeholder' => ''
                                  ]) }}
                            </div>
                            <div class="col-6">
                              {{ Form::label('hive','Hive') }}
                              {{ Form::select('hive', [
                                '01' => 'Hive 01', '02' => 'Hive 02'
                              ], null, [
                                'class' => 'form-control', 'placeholder' => ''
                                ]) }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    {{ Form::submit('Save', array('class' => 'btn btn-primary btn-block')) }}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    {{ Form::label('image','Image') }}
                    {{ Form::file('image') }}
                </div>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@stop

@section('footer')
  @include('partials._footer')
@stop

@section('js')
  <script type="text/javascript">
  var triggerTabList = [].slice.call(document.querySelectorAll('#pills-tab a'))
  triggerTabList.forEach(function (triggerEl) {
    var tabTrigger = new bootstrap.Tab(triggerEl)

    triggerEl.addEventListener('click', function (event) {
      event.preventDefault()
      tabTrigger.show()
    })
  })
  </script>
@stop
