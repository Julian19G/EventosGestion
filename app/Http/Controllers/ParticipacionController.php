<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Organizador;
use App\Models\Participacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participaciones = Participacion::all();
        
        return view('Participacion.index', ['participaciones' => $participaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participaciones = Participacion::all();
        $eventos = Evento::all();
        $organizadores = Organizador::all();
    
        return view('Participacion.new', compact('eventos', 'participaciones'),compact('organizadores', 'participaciones'),['participaciones' => $participaciones]);
    
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
            'evento_id' => 'required|integer|exists:eventos,id', // Validate evento_id existence
            'organizador_id' => 'required|integer|exists:organizadores,id', // Validate organizador_id existence
            'rol' => 'required',
          ]);
        
          $participacion = new Participacion;
          $participacion->evento_id = $request->evento_id;
          $participacion->organizador_id = $request->organizador_id;
          $participacion->rol = $request->rol;
          $participacion->save();
        
          $participaciones = Participacion::all();
          return view('Participacion.index', ['participaciones' => $participaciones]);
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
       
        $participacion = Participacion::find($id);
        $eventos = Evento::all();
        $organizadores = Organizador::all();
    
        return view('Participacion.edit', compact('participacion', 'eventos', 'organizadores'));
    
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
        $participacion = Participacion::find($id);

        $request->validate([
          'evento_id' => 'required|integer|exists:eventos,id', // Validate evento_id existence
          'organizador_id' => 'required|integer|exists:organizadores,id', // Validate organizador_id existence
          'rol' => 'required',
        ]);
      
        $participacion->evento_id = $request->evento_id;
        $participacion->organizador_id = $request->organizador_id;
        $participacion->rol = $request->rol;
        $participacion->save();
      
        return redirect()->route('participacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $participacion = Participacion::find($id);
    if ($participacion) {

        $participacion->delete();
        return redirect()->route('participacion.index')->with('success', 'La participación ha sido eliminada correctamente.');
    } else {
        return redirect()->route('participacion.index')->with('error', 'La participación no pudo ser encontrada.');
    }
    }

    
}
