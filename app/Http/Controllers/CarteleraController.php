<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use Session;
use Image;
use Storage;

class CarteleraController extends Controller
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
        $peliculas = Pelicula::paginate(15);
          return view('cartelera.index')->with('peliculas', $peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cartelera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nombre' => 'required|max:500',
            'clasificacion' => 'required',
            'duracion' => 'required',
            'trailerURL' => 'required',
            'imagenURL' => 'required',
            'idioma' => 'required',
            'horario' => 'required',
            'sinopsis' => 'required'
        ]);

        $pelicula = new Pelicula;
        $pelicula->nombre = $request->nombre;
        $pelicula->clasificacion = $request->clasificacion;
        $pelicula->duracion = $request->duracion;
        $pelicula->trailerURL = $request->trailerURL;
        $pelicula->idioma = $request->idioma;
        $pelicula->horario = $request->horario;
        $pelicula->sinopsis = $request->sinopsis;
        $pelicula->estatus = '0';

        if ($request->hasFile('imagenURL')) {
           $image = $request->file('imagenURL');
           $filename = time().'.'.$image->getClientOriginalExtension();
           $location = public_path('images/'.$filename);
           Image::make($image)->resize(100,100)->save($location);

           $pelicula->imagenURL = $filename;
        }


        $pelicula->save();

        Session::flash('success','Se agregó la película correctamente');

        return redirect()->route('cartelera.show', $pelicula->id);


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
        $pelicula = Pelicula::find($id);
        return view('cartelera.show')->with('pelicula', $pelicula);

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
        $pelicula = Pelicula::find($id);
        return view('cartelera.edit')->with('pelicula', $pelicula);
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
            'nombre' => 'required|max:500',
            'clasificacion' => 'required',
            'duracion' => 'required',
            'trailerURL' => 'required',
            'imagenURL' => 'required',
            'idioma' => 'required',
            'horario' => 'required',
            'sinopsis' => 'required'
        ]);

        $pelicula = Pelicula::find($id);
        $pelicula->nombre = $request->get('nombre');
        $pelicula->clasificacion = $request->get('clasificacion');
        $pelicula->duracion = $request->get('duracion');
        $pelicula->trailerURL = $request->get('trailerURL');
        $pelicula->imagenURL = $request->get('imagenURL');
        $pelicula->idioma = $request->get('idioma');
        $pelicula->horario = $request->get('horario');
        $pelicula->sinopsis = $request->get('sinopsis');
        $pelicula->estatus = '0';

        if ($request->hasFile('imagenURL')) {
           $image = $request->file('imagenURL');
           $filename = time().'.'.$image->getClientOriginalExtension();
           $location = public_path('images/'.$filename);
           Image::make($image)->resize(100,100)->save($location);
           $oldFilename = $pelicula->imagenURL;
           $pelicula->imagenURL = $filename;
           Storage::delete($oldFilename);

           $pelicula->imagenURL = $filename;
        }

        $pelicula->save();

        Session::flash('success','Se modificó la película correctamente');

        return redirect()->route('cartelera.show', $pelicula->id);
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
        $pelicula = Pelicula::find($id);
        Storage::delete($pelicula->imagenURL);
        $pelicula->delete();
        Session::flash('success','Se eliminó el registro correctamente');
        return redirect()->route('cartelera.index');
    }

    public function cambiaEstatus($id){
        $pelicula = Pelicula::find($id);
        if($pelicula->estatus == '1'){
            $pelicula->estatus = '0';
        }else{
            $pelicula->estatus = '1';
        }
        $pelicula->save();
        Session::flash('success','Se mofidicó correctamente');
        return redirect()->route('cartelera.index');
    }
}
