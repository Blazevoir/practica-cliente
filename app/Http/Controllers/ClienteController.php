<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::all();              //array de productos
        $op = $request->session()->get('op');
            $resultado = [
                'destroy'=>  'El borrado ha sido un exito',
                'update'    =>'El editado ha sido un exito',
                'store'     =>'El insertar ha sido un: el exito',
                ];
                $message=null;
                if($op!=null){
                $message = $resultado[$op];
                }
                if($message!=null){
        return view('index')->with(['clientes' => $clientes,'message' =>$message]);
                }else
                return view('index')->with(['clientes' => $clientes]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        $input = $request->validated(); //esto son los datos validados del formulario. Si falla alguno, nos redirige a la pag anterior y si están bien los mete en un array asociativo
        $cliente = new Cliente($input); //esto nos crea un objeto de tipo Cliente si los nombres de los campos de $input coinciden con el constructor de Producto.php
        $cliente->ip=$request->ip();
        try{
            $result = $cliente->save();
        }catch (\Exception $e){
            $error= ['general' => 'Hay valores repetidos'];
            return redirect('cliente/create')->withErrors($error)->withInput();
        }
        return redirect(route('cliente.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
         return view('mostrar')->with(['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('editar')->with(['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, Cliente $cliente){
        $input = $request->validated();
        try{
            $cliente->update($input);
        }catch(\Exception $e){       //la \ de Exception se pone porque estmaos usadno namespaces y el interprete de comandos entenderia que la clase esta en namespace App\Http\Controllers;
            $error= ['general' => 'Hay valores repetidos'];
            return redirect('cliente/'.$cliente->id.'/edit')->withErrors($error)->withInput();
        }
        return redirect(route('cliente.index'))->with(['op' => 'update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect(route('cliente.index'))->with(['op' => 'destroy']);
    }
}
