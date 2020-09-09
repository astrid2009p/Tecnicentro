@extends('layouts/contentLayoutMaster')

@section('title', 'País')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->
    
@endsection

@section('content')

    <div class="card-content">
        <div class="card-body">
            <div class="col-md-8 col-12">
                {!! Form::open(['route' => 'pais.store', 'method' => 'post', 'novalidate', 'class' => 'form-horizontal'])
                !!}

                <div class="card" style="height: 419px;">
                    <div class="card-header">
                        <h4 class="card-title">Nuevo País</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>País</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="pais" class="form-control" name="pais"
                                                    placeholder="País">
                                            </div>
                                            @error('pais')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                          @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{ URL::previous() }}"
                                            class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Regresar</a>
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Guardar</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

@section('vendor-script')
    <!-- vendor files -->


@endsection
@section('page-script')
    <!-- Page js files -->

@endsection
