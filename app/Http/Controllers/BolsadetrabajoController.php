<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleo;
use Session;

class BolsadetrabajoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleos = Empleo::paginate(15);
         return view('bolsadetrabajo.index')->with('empleos', $empleos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bolsadetrabajo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nombreOferta' => 'required|max:500',
            'nombreEmpresa' => 'required',
            'nombreContacto' => 'required',
            'telefonoContacto' => 'required',
            'correoContacto' => 'required',
            'nivelEstudios' => 'required',
            'descripcion' => 'required'
        ]);

        $empleo = new Empleo;
        $empleo->nombreOferta   = $request->nombreOferta;
        $empleo->nombreEmpresa  = $request->nombreEmpresa;
        $empleo->nombreContacto = $request->nombreContacto;
        $empleo->telefonoContacto = $request->telefonoContacto;
        $empleo->correoContacto = $request->correoContacto;
        $empleo->salario        = $request->salario;
        $empleo->idiomas        = $request->idiomas;
        $empleo->tipoContrato   = $request->tipoContrato;
        $empleo->ubicacion      = $request->ubicacion;
        $empleo->nivelEstudios  = $request->nivelEstudios;
        $empleo->numeroPlazas   = $request->numeroPlazas;
        $empleo->diasLaborales  = $request->diasLaborales;
        $empleo->descripcion    = $request->descripcion;
        $empleo->estatus        = '0';

        $empleo->save();

        Session::flash('success','Se agregó la vacante correctamente');

        return redirect()->route('bolsadetrabajo.show', $empleo->id);


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
        $empleo = Empleo::find($id);
        return view('bolsadetrabajo.show')->with('empleo', $empleo);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleo = Empleo::find($id);
        return view('bolsadetrabajo.edit')->with('empleo', $empleo);
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
        //
        $validatedData = $request->validate([
            'nombreOferta' => 'required|max:500',
            'nombreEmpresa' => 'required',
            'nombreContacto' => 'required',
            'telefonoContacto' => 'required',
            'correoContacto' => 'required',
            'nivelEstudios' => 'required',
            'descripcion' => 'required'
        ]);

        $empleo = Empleo::find($id);
        $empleo->nombreOferta   = $request->nombreOferta;
        $empleo->nombreEmpresa  = $request->nombreEmpresa;
        $empleo->nombreContacto = $request->nombreContacto;
        $empleo->telefonoContacto = $request->telefonoContacto;
        $empleo->correoContacto = $request->correoContacto;
        $empleo->salario        = $request->salario;
        $empleo->idiomas        = $request->idiomas;
        $empleo->tipoContrato   = $request->tipoContrato;
        $empleo->ubicacion      = $request->ubicacion;
        $empleo->nivelEstudios  = $request->nivelEstudios;
        $empleo->numeroPlazas   = $request->numeroPlazas;
        $empleo->diasLaborales  = $request->diasLaborales;
        $empleo->descripcion    = $request->descripcion;

        $empleo->save();

        Session::flash('success','Se modificó la vacante correctamente');

        return redirect()->route('bolsadetrabajo.show', $empleo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleo = Empleo::find($id);
        $empleo->delete();
        Session::flash('success','Se eliminó el registro correctamente');
        return redirect()->route('bolsadetrabajo.index');
    }

    public function cambiaEstatus($id){
        $empleo = Empleo::find($id);
        if($empleo->estatus == '1'){
            $empleo->estatus = '0';
        }else{
            $empleo->estatus = '1';
        }
        $empleo->save();
        Session::flash('success','Se mofidicó correctamente');
        return redirect()->route('bolsadetrabajo.index');
    }
}
