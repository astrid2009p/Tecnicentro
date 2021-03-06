@extends('layouts/contentLayoutMaster')

@section('title', 'Modificar Clientes')

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
                        <h4 class="card-title">Actualizar Cliente</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            {{ Form::model($v, ['method' => 'PATCH', 'action' => ['ClienteController@update', $id], 'class' => 'form']) }}
                            <div class="form-body">
                                <div class="row">
                                    @csrf
                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <input placeholder="DPI" id="dpi" type="text"
                                                class="form-control @error('dpi') is-invalid @enderror" name="dpi"
                                                value="{{ $v['dpi'] }}">
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
                                            <input placeholder="Primer Nombre" id="PrimerNombre" type="text"
                                                class="form-control @error('PrimerNombre') is-invalid @enderror"
                                                name="PrimerNombre" value="{{ $v['primerNombre'] }}">
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
                                                name="SegundoNombre" value="{{ $v['segundoNombre'] }}">
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
                                                name="TercerNombre" value="{{ $v['tercerNombre'] }}">

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
                                                name="PrimerApellido" value="{{ $v['primerApellido'] }}">

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
                                                name="SegundoApellido" value="{{ $v['segundoApellido'] }}">

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
                                                name="ApellidoCasado" value="{{ $v['apellidoCasado'] }}">

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
                                                value="{{ $v['fechaNacimiento'] }}">
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
                                                        <a onclick="Insert()" class="btn btn-outline-success"><i
                                                                class="feather icon-plus"></i> Agregar</a>
                                                        </td>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-label-group">
                                            <div class="table-responsive">
                                                <table name="tel" id="tel"
                                                    class="table table-hover-animation table-striped">
                                                    <thead>
                                                        <tr class="">
                                                            <th scope="col">Telefonos</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($v->telefono as $t)
                                                            <tr id="{{ $t->telefono }}">
                                                                <td>{{ $t->telefono }}</td>
                                                                <td><a onclick=Remove({{ $t->telefono }})><i
                                                                            class="feather icon-trash"></i></a></span></td>
                                                                <td>
                                                                  <input name="tels[]" value="{{$t->telefono}}" type="text" hidden>
                                                                </td>
                                                            </tr>



                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 offset-md-4">
                                        <a href="{{ URL::previous() }}"
                                            class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Regresar</a>
                                        <button type="submit"
                                            class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Guardar</button>
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

@section('vendor-script')
    <!-- vendor files -->
@endsection
@section('page-script')
    <!-- Page js files -->
    <script>
                   
            function Insert() {
                var id = $("#telefono").val();
                var tableRef = document.getElementById('tel').getElementsByTagName('tbody')[0];
                var newRow = tableRef.insertRow();
                newRow.id = id;
                
                var newCell = newRow.insertCell(0);
                var newCellb = newRow.insertCell(1);
                var newCellc = newRow.insertCell(2);

                var newText = document.createTextNode(id);
                newCell.appendChild(newText);
                newCellb.innerHTML = "<a onclick=Remove("+ id +")><i class=\"feather icon-trash\"></i></a></span>";

                var input = document.createElement('input');
                input.name = "tels[]";
                input.setAttribute('value', id);
                input.type = "text";
                input.hidden =true;
                
                newCellc.appendChild(input);

                $("#telefono").val('');
            }

            function Remove(id) {
                var row = document.getElementById(id);
                row.parentNode.removeChild(row);
            }

      

    </script>

@endsection
