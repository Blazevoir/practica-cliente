@extends('base')
@section('contenido')

<div class="row">
    <form action="{{ url('cliente')}}" method="get">
        <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>
               {{ ($cliente->id) }}
            </td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>
               {{ ($cliente->nombre) }}
            </td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td>
               {{ ($cliente->apellidos) }}
            </td>
        </tr>
        <tr>
            <td>Fecha nacimiento</td>
            <td>
               {{ ($cliente->fechaNac) }}
            </td>
        </tr>
         <tr>
            <td>Email</td>
            <td>
               {{ ($cliente->email) }}
            </td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>
               {{ ($cliente->telefono) }}
            </td>
        </tr>
        <tr>
            <td>Direccion</td>
            <td>
               {{ ($cliente->direccion) }}
            </td>
        </tr>
        <tr>
            <td>Estado Civil</td>
            <td>
               {{ ($cliente->estadoCivil) }}
            </td>
        </tr>
        <tr>
            <td>Sueldo</td>
            <td>
               {{ ($cliente->sueldo) }}
            </td>
        </tr>
        <tr>
            <td>IP</td>
            <td>
               {{ ($cliente->ip) }}
            </td>
        </tr>    
        <tr>
            <td>
        <input type="submit" name="Volver" value="Volver" class="btn btn-info"/>
            </td>
        </tr>
    </form>
    </table>
    
</div>
<hr>

@stop