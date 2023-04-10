<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    
    public function index()
    {
        $contactos= Contacto::all();
        return view('contactos.index',compact('contactos'));
    }

   
   
    public function create()
    {
        return view('contactos.create');
    }

   
    public function store(Request $request)
    {
        
        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->telefono = $request->telefono;
        $contacto->mensaje = $request->mensaje;
        
        $contacto = Contacto::create($request->all());
        $contacto->save();
        return redirect()->route('contactos.index');

    }

    
    public function show(Contacto $contacto)
    {
        return $contacto;
    }

  
    public function edit(Contacto $contacto)
    {
        return $contacto;
    }

    
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    
    public function destroy(Contacto $contacto)
    {
        //
    }
    // public function getContacto(){
    //     return response()->json(Contacto::all(), 200);

    // }
    
    // public function getContactoid($id){
    //     $contacto = Contacto::find($id);
    //     if(is_null($contacto)){
    //         return response()->json(["message"=>"Registro no encontrado"],404);

    //     }
    //     return response()->json($contacto,200);

    // }
    
}
