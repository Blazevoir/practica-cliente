@extends('base')
@section('contenido')
    @error('general')
       <div class="alert alert-danger">
            {{ $message }}
       </div>
    @enderror
<div class="row">

    <form action="{{ url('cliente') }}" method="post">
        <table class="table table-striped table-hover">
        @csrf
        <tr>
            <td>Nombre</td>
            <td>
                <input type="text" name="nombre" placeholder="nombre" minlength="2" maxlength="50" value="{{ old('nombre') }}"/><br>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
        <td>Apellidos</td>
            <td>
                <input type="text" name="apellidos" placeholder="apellidos" minlength="2" maxlength="100" value="{{ old('apellidos') }}"/><br>
                @error('apellidos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
        <td>Fecha de nacimiento</td>
            <td>        
                <input type="date" name="fechaNac" placeholder="Fecha de nacimiento" value="{{ old('fechaNac') }}"/><br>
                @error('fechaNac')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
        <td>Clave</td>
            <td>
                <input type="password" name="clave" placeholder="Clave"  minlength="2" maxlength="50"/><br>
                @error('clave')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
        <td>Email</td>
            <td>
                <input type="email" name="email" placeholder="Email"  minlength="2" maxlength="100" value="{{ old('email') }}"/><br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
        <td>Telefono</td>
            <td>
                <input type="number" name="telefono" placeholder="Telefono"  minlength="9" maxlength="9" value="{{ old('telefono') }}"/><br>
                @error('telefono')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <td>Direccion</td>
            <td>
        <input type="text" name="direccion" placeholder="Direccion" minlength="2" maxlength="50" value="{{ old('direccion') }}"/><br>
        </td>
        </tr>
        <tr>
            <td>Sueldo</td>
            <td>
            <input type="text" name="sueldo" placeholder="Sueldo" min="0" value="{{ old('sueldo') }}"/><br>
            @error('sueldo')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </td>
        </tr>
        <tr>
            <td>Estado Civil</td>
            <td>
            <input type="text" name="estadoCivil" placeholder="Estado Civil" minlength="2" maxlength="50" value="{{ old('estadoCivil') }}"/><br>
            @error('estadoCivil')
                    <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </td>
        </tr>
        <tr>
            <td>Enviar</td>
            <td>
            <input type="submit" value="Añadir"/>
            </td>
        </tr>
    </form>
    <form action="{{ url('cliente') }}" method="get">
        <input type="submit" name="Volver" value="Volver" class="btn btn-info"/>
    </form>
    </table>
    
</div>
<hr>

@stop