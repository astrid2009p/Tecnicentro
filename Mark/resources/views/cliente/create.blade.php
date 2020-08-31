@extends('layouts/contentLayoutMaster')

@section('title', 'Clientes')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/pages/data-list-view.css')) }}">
@endsection
@section('page-style')
    <!-- Page css files -->

@endsection

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registro de Cliente</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST" action="{{ route('cliente.store') }}" class="form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        @csrf
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input placeholder="DPI" id="dpi" type="text"
                                                    class="form-control @error('dpi') is-invalid @enderror" name="dpi"
                                                    value="{{ old('dpi') }}">
                                                <label for="last-name-column">DPI</label>

                                                @error('dpi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <input placeholder="Primer Nombre" id="PrimerNombre" type="text"
                                                    class="form-control @error('PrimerNombre') is-invalid @enderror"
                                                    name="PrimerNombre" value="{{ old('PrimerNombre') }}">
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
                                                <input id="SegundoNombre" placeholder="Segundo Nombre" type="text"
                                                    class="form-control @error('SegundoNombre') is-invalid @enderror"
                                                    name="SegundoNombre" value="{{ old('SegundoNombre') }}">
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
                                                <input id="TercerNombre" placeholder="Tecer Nombre" type="text"
                                                    class="form-control @error('TercerNombre') is-invalid @enderror"
                                                    name="TercerNombre" value="{{ old('TercerNombre') }}">

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
                                                <input id="PrimerApellido" placeholder="Primer Apellido" type="text"
                                                    class="form-control @error('PrimerApellido') is-invalid @enderror"
                                                    name="PrimerApellido" value="{{ old('PrimerApellido') }}">

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
                                                <input id="SegundoApellido" placeholder="Segundo Apellido" type="text"
                                                    class="form-control @error('SegundoApellido') is-invalid @enderror"
                                                    name="SegundoApellido" value="{{ old('SegundoApellido') }}">

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
                                                <input id="ApellidoCasado" placeholder="Apellido de Casado" type="text"
                                                    class="form-control @error('ApellidoCasado') is-invalid @enderror"
                                                    name="ApellidoCasado" value="{{ old('ApellidoCasado') }}">

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
                                                <input name="fecha" id="fecha" type="date"
                                                    class="form-control @error('fecha') is-invalid @enderror"
                                                    value="{{ old('fecha') }}">
                                                <label for="email-id-column">Fecha Nacimiento</label>
                                                @error('fecha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 col-12">

                                                            <input id="telefono" placeholder="Telefono" type="text"
                                                                class="form-control @error('telefono') is-invalid @enderror"
                                                                name="telefono" value="{{ old('telefono') }}">

                                                        </div>

                                                        <div class="col-md-6 col-12">
                                                            <td class="">
                                                                <a href="{{ route('cliente.create') }}" class="btn btn-outline-success"><i class="feather icon-plus"></i>   Agregar</a>
                                                            </td>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-label-group">
                                                <div class="table-responsive">
                                                    <table name="tel" class="table table-hover-animation table-striped">
                                                        <thead>
                                                            <tr class="">
                                                                <th scope="col">Telefonos</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>57639436</td>
                                                            </tr>
                                                            <tr>
                                                                <td>57639436</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button type="reset" class="btn btn-danger mr-1 mb-1"><i
                                                    class="far fa-arrow-alt-circle-left"></i> Limpiar</button>
                                            <button type="submit" class="btn btn-primary mr-1 mb-1"><i
                                                    class="far fa-check-circle"></i> Registrar</button>
                                        </div>


                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('vendor-script')
    <!-- vendor files -->
@endsection
@section('page-script')
    <!-- Page js files -->

@endsection
