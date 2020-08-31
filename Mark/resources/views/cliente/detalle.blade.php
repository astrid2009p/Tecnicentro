<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilospdf.css')}}">
</head>
<body>
    <header>
        <p><strong>TECNICENTRO GALEANO</strong></p>
    </header>
    <div class="container">
        <h5 class="text-center">REPORTE DE CLIENTES</h5>
        <table class="table table-striped">
            <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">DPI</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">F. NAC.</th>
            </tr>
            </thead>
            <tbody>
                @foreach($cliente as $indice => $cliente)
                <tr>
                    <td>{{++$indice}}</td>
                    <td>{{ $cliente->dpi}} </td>
                    <td>{{$cliente->primerNombre.' '.$cliente->segundoNombre.' '.$cliente->tercerNombre}}
                    @if($cliente->apellidoCasado)
                        {{$cliente->primerApellido.' '.$cliente->segundoApellido.' de '.$cliente->apellidoCasado}}
                    @else
                        {{$cliente->primerApellido.' '.$cliente->segundoApellido}}</td>
                    @endif
                    <td>{{ \Carbon\Carbon::parse($cliente->fechaNacimiento)->format('d-m-Y')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
