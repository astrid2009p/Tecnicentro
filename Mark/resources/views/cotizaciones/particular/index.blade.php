@extends('layouts/contentLayoutMaster')

@section('title', 'Cotizaciones')

@section('vendor-style')
        {{-- vendor css files --}}

@endsection

@section('content')
  <!-- Zero configuration table -->
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <!--<h4 class="card-title">Zero configuration</h4>-->
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                {!! Form::open(['route' => 'cotparticular.search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
                                @csrf
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <div class="d-flex align-items-center justify-content-between" style="width: 80%;">
                                    <div class="d-flex justify-content-start">
                                      <p style="margin-right: 5px; margin-top: 5px;" class="form-inline" for="search"><strong>Busqueda</strong></p>
                                      <input type="text" class="form-control" name = "search" style="margin-right: 5px">
                                      <button type="submit" class="btn btn-outline-warning">Buscar</button>
                                    </div>
                                    <div>
                                      <a href="{{ route('cotizacion-particular.index') }}" class="btn btn-outline-primary"><i class="feather icon-align-justify"></i>   Mostrar Todos</a>
                                      <a href="{{ route('cotizacion-particular.create') }}" class="btn btn-outline-success"><i class="feather icon-plus"></i>   Agregar</a>
                                      <a href="{{ route('cotparticular.download') }}"  class="btn btn-outline-info"><i class="feather icon-file-text"></i>    Exportar</a>
                                    </div>
                                  </div>
                                  <!--!! Form::select('category_id', [ 1 => 'Testing', 2 => 'Edilser' ], null, ['class' => 'form-control ml-20']) !!}
                                  !! Form::select('idproducto', 'edilser') !!}-->

                                {!! Form::close() !!}
                              </div>
                            </div>
                            <br>
                            <br>
                          </div>
                          <!--<p class="card-text">DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</p>-->
                          <div class="table-responsive">
                            <table class="table table-hover-animation table-striped">
                                  <thead>
                                      <tr class="">
                                          <th scope="col">Fecha</th>
                                          <th scope="col">Total</th>
                                          <th colspan="2">Acciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($cotizacion as $cotizacion)
                                      @if ($cotizacion->tipo == 1)
                                        <tr>
                                          <td>{{ $cotizacion->fecha}} </td>
                                          <td>{{ $cotizacion->total}} </td>
                                          <td class="">
                                            <a href="{ route('cliente.edit', $cliente->id)}}"><i class="feather icon-edit"></i></a></span>
                                            <a href="{ route('cliente.delete', $cliente->id)}}"><i class="feather icon-trash"></i></a></span>
                                          </td>
                                        </tr>
                                      @endif
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@endsection
