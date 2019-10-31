<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->charset = 'utf8';
          $table->collation = 'utf8_unicode_ci';
          
          $table->bigIncrements('id');
          $table->string('nombre',50);          
          $table->string('apellidos',100);          
          $table->date('fechaNac');
          $table->string('clave',50);           
          $table->string('email',100)->unique();          
          $table->Integer('telefono')->nullable();          
          $table->string('direccion',150)->nullable(); 
          $table->string('ip',50)->nullable(); 
          $table->string('estadoCivil',50)->nullable(); 
          $table->Integer('sueldo')->nullable(); 
          
          
          $table->timestamps();
          $table->softDeletes();  
          
          $table->unique(['nombre','apellidos','fechaNac']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
