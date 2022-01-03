<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Client::all();
        return view('client.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $cliente = Client::create($request->all());
       // return $request;
        return redirect()->route('cliente.show',$cliente)->with('info','Cliente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $cliente)
    {
        return view('client.show',compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $cliente)
    {
        return view('client.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $cliente)
    {
        $request->validate([
            'fullname'=>'required|max:45',
            'identification'=>"required|unique:clients,identification,$cliente->id",
            'direction'=>'required',
            'town'=>'required|max:45',
            'department'=>'required|max:45',
            'phone'=>'required|max:20',
            'email'=>'required|max:45'
        ]);
        $messages = [
            'fullname.required'=>'El campo nombre esta vacio',
            'identification.required'=>'El campo indentificacion esta vacio',
            'direction.required'=>'El campo direccion esta vacio',
            'town.required'=>'El campo ciudad esta vacio',
            'department.required'=>'El campo departamento esta vacio',
            'phone.required'=>'El campo telefono esta vacio',
            'email.required'=>'El campo email esta vacio',
            'identification.unique'=>'Existe un cliente registrado con esta Identificacion'
        ];

        $cliente->update($request->all());

        return redirect()->route('cliente.show', $cliente)->with('info','Datos del cliente editados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('info','Datos del cliente Eliminados');

    }
}
