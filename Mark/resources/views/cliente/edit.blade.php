@extends('layouts/contentLayoutMaster')

@section('title', 'Modificar Clientes')
@section('content')
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Actualizar Cliente</h4>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    {{ Form::model($v,['method' => 'PATCH','action' => ["ClienteController@update",$id], 'class' => 'form']) }}
                          <div class="form-body">
                              <div class="row">
                                @csrf
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input placeholder="DPI" id="dpi" type="text" class="form-control @error('dpi') is-invalid @enderror" name="dpi" value="{{$v['dpi']}}">
                                          <label for="first-name-column">DPI</label>
                                          @error('dpi')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>

                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input placeholder="Primer Nombre" id="PrimerNombre" type="text" class="form-control @error('PrimerNombre') is-invalid @enderror" name="PrimerNombre" value="{{$v['primerNombre']}}">
                                          <label for="last-name-column">Primer Nombre</label>

                                          @error('PrimerNombre')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input id="SegundoNombre" placeholder="Segundo Nombre" type="text" class="form-control @error('SegundoNombre') is-invalid @enderror" name="SegundoNombre" value="{{$v['segundoNombre']}}">
                                          <label for="city-column">Segundo Nombre</label>

                                          @error('SegundoNombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input id="TercerNombre" placeholder="Tecer Nombre" type="text" class="form-control @error('TercerNombre') is-invalid @enderror" name="TercerNombre" value="{{$v['tercerNombre']}}">

                                          <label for="country-floating">Tercer Nombre</label>
                                          @error('TercerNombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input id="PrimerApellido" placeholder="Primer Apellido" type="text" class="form-control @error('PrimerApellido') is-invalid @enderror" name="PrimerApellido" value="{{$v['primerApellido'] }}">

                                          <label for="company-column">Primer Apellido</label>
                                          @error('PrimerApellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                        <input id="SegundoApellido" placeholder="Segundo Apellido" type="text" class="form-control @error('SegundoApellido') is-invalid @enderror" name="SegundoApellido" value="{{$v['segundoApellido'] }}">

                                          <label for="email-id-column">Segundo Apellido</label>
                                          @error('SegundoApellido')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                      <input id="ApellidoCasado" placeholder="Apellido de Casado" type="text" class="form-control @error('ApellidoCasado') is-invalid @enderror" name="ApellidoCasado" value="{{$v['apellidoCasado'] }}">

                                        <label for="email-id-column">Apellido de Casado</label>
                                        @error('ApellidoCasado')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-12">
                                    <div class="form-label-group">
                                      <input name="fecha" id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" value="{{$v['fechaNacimiento']}}">
                                      <label for="email-id-column">Fecha Nacimiento</label>
                                      @error('fecha')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                  </div>
                                  <div class="col-12">
                                      <a href="{{ url('cliente') }}" class="btn btn-danger"><i class="far fa-arrow-alt-circle-left"></i>     Regresar</a>
                                      <button type="submit" class="btn btn-primary"><i class="far fa-check-circle"></i>   Actualizar</button>
                                  </div>

                                  <meta name="csrf-token" content="{{ csrf_token() }}">


                              </div>
                          </div>
                          {!! Form::close() !!}
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
