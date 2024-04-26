<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizadores = Organizador::all();
        return view('Organizador.index',['organizadores' => $organizadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizadores = Organizador::all();
        return view('Organizador.new',['organizadores' => $organizadores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required|email',
        'telefono' => 'required',
      ]);
    
      // Crea una nueva instancia del modelo Organizador
      $organizador = new Organizador;
    
      $organizador->nombre = $request->nombre;
      $organizador->apellido = $request->apellido;
      $organizador->email = $request->email;
      $organizador->telefono = $request->telefono;
    
      $organizador->save(); // Guarda el organizador en la base de datos
    
      return view('Organizador.index', ['organizadores' => Organizador::all()]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organizador = Organizador::find($id);

        //if (!$organizador) {
          //  abort(404); // Handle a missing organizer
        //}
    
        return view('Organizador.edit', compact('organizador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $organizador = Organizador::find($id);
    
        $organizador->nombre = $request->nombre;
        $organizador->apellido = $request->apellido;
        $organizador->email = $request->email;
        $organizador->telefono = $request->telefono;
    
        $organizador->save();
    
        return redirect()->route('organizador.index'); // Redirecciona al índice de organizadores
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  $organizador = Organizador::find($id);

        if ($organizador) {
            $organizador->delete();
        }
    
        $organizadores = Organizador::all();
    
        return view('Organizador.index', ['organizadores' => $organizadores]);
    }
}
