@extends('base')
@section('contenido')


    <!--<div class="alert alert-danger">-->
    <!--    <ul>-->
    <!--        @foreach ($errors->all() as $error)-->
    <!--            <li>{{ $error }}</li>-->
    <!--        @endforeach-->
    <!--    </ul>-->
    <!--</div>-->
    @error('general')
       <div class="alert alert-danger">
            {{ $message }}
       </div>
    @enderror
<div class="row">
 

    <form action="{{ url('cliente/' . $cliente->id) }}" method="post">
        <table class="table table-striped table-hover">
        @csrf
        @method('PUT')
        <tr>
            <td>Nombre</td>
            <td>
                <input type="text" name="nombre" placeholder="nombre" minlength="2" maxlength="50" value="{{ old('nombre',$cliente->nombre) }}"/><br>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td>
                <input type="text" name="apellidos" placeholder="apellidos" minlength="2" maxlength="100" value="{{ old('apellidos',$cliente->apellidos) }}"/><br>
                @error('apellidos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Fecha de nacimiento</td>
            <td>        
                <input type="date" name="fechaNac" placeholder="Fecha de nacimiento" value="{{ old('fechaNac',$cliente->fechaNac) }}"/><br>
                @error('fechaNac')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Clave</td>
            <td>
                <input type="password" name="clave" placeholder="Clave"  minlength="2" maxlength="50" value="{{ old('clave',$cliente->clave) }}"/><br>
                @error('clave')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" placeholder="Email"  minlength="2" maxlength="100" value="{{ old('email',$cliente->email) }}"/><br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>
                <input type="number" name="telefono" placeholder="Telefono"  minlength="9" maxlength="9" value="{{ old('telefono',$cliente->telefono) }}"/><br>
                @error('telefono')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
            <td>Direccion</td>
            <td>
        <input type="text" name="direccion" placeholder="Direccion" minlength="2" maxlength="50" value="{{ old('direccion',$cliente->direccion) }}"/><br>
        </td>
        </tr>
        <tr>
            <td>Estado Civil</td>
            <td>
        <input type="text" name="estadoCivil" placeholder="Estado Civil" minlength="2" maxlength="50" value="{{ old('estadoCivil',$cliente->estadoCivil) }}"/><br>
        </td>
        </tr>
        <tr>
            <td>Enviar</td>
            <td>
            <input type="submit" value="Editar"/>
            </td>
        </tr>
    </form>
    </table>
        <form action="{{ url('cliente') }}" method="get">
            <input type="submit" name="Volver" value="Volver" class="btn btn-info"/>
        </form>
    
</div>
<hr>

@stop