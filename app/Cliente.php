<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use SoftDeletes;
    
    protected $table = 'clientes';
    
    //protected $primaryKey = 'id'; //solo se pone cuando no es ID
    //protected $incrementing= false; //solo si no es autonumerica
    //protected $keyType = 'string'; //solo si no es int
    //protected $timestamps = false; //solo si la tabla no va a tener los campos created_at y updated_at
    //const CREATED_AT = 'fecha_creacion'; //solo si se cambia el nombre del created_at
    //const UPDATED_AT = 'fecha_edicion'; //solo si se cambia el nombre del updated_at
    protected $hidden =['created_at','updated_at','ip']; //solo si hay campos que no se deben mostrar
    protected $fillable = ['nombre', 'apellidos','fechaNac','clave','email','telefono','direccion','estadoCivil','sueldo']; //para definir los campos
    
}
