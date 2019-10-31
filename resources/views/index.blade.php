@extends('base')
@section('contenido')


<div class="row">
    <a href="{{url('cliente/create')}}" class="btn btn-info">Agregar cliente</a>
</div>
<hr>
    @isset($message)
       <div class="alert alert-info">
            {{ $message }}
       </div>
    @endisset

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Fecha Nacimiento</td>
        <td>Email</td>
        <td>Telefono</td>
        <td>Direccion</td>
        <td>Estado civil</td>
        <td>Sueldo</td>
        <td>IP</td>
    </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellidos}}</td>
                <td>{{$cliente->fechaNac}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->estadoCivil}}</td>
                <td>{{$cliente->sueldo}}</td>
                <td>{{$cliente->ip}}</td>
                <!--<td><a href="{{ url('cliente/'.$cliente->id) }}" class="btn btn-info">Ver</a></td>-->
                <!--<td><a href="{{ url('cliente/' . $cliente->id . '/edit') }}" class="btn btn-info">Editar</a></td>-->
                
                <td><form action="{{ url('cliente/' . $cliente->id)}}" method="get" >
                    <input type="submit" value="Ver" class="btn btn-info"/>
                </form></td>
                
                <td><form action="{{ url('cliente/' . $cliente->id . '/edit')}}" method="get">
                    <input type="submit" value="Editar" class="btn btn-warning"/>
                </form></td>
                
                <td><form action="{{ url('cliente/' . $cliente->id)}}" class="destroy" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn btn-danger"/>
                </form></td>
            </tr>
        @endforeach
    </tbody>
    
</table>
<script type="text/javascript" src="{{ url('assets/js/main.js')}}"></script>


@stop