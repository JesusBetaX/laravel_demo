<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
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
        $libros = Libro::orderBy('id','DESC')->paginate(7);
        return view('libro.index', ['libros' => $libros]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $libro = new Libro();
        return view('libro.form', [
            'libro' => $libro, 
            'action' => '/libro/insert'
        ]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        return view('libro.form', [
            'libro' => $libro, 
            'action' => '/libro/update'
        ]);
    }

    private function rules() 
    {
        return [ 
            'nombre'=>'required|max:20', 
            'resumen'=>'required|max:100', 
            'npagina'=>'required|numeric', 
            'edicion'=>'required|numeric', 
            'autor'=>'required|max:50', 
            'npagina'=>'required|numeric', 
            'precio'=>'required|numeric'
        ];
    }

    /**
     * created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $this->validate($request, $this->rules());
        
        Libro::create($request->all());
        return redirect('/libro')->with('success','Registro guardado satisfactoriamente');
    }

    /**
     * update resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, $this->rules());

        $libro = Libro::find($request->id);
        $libro->update($request->all());
        return redirect('/libro')->with('success','Registro guardado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect('/libro')->with('success','Registro eliminado satisfactoriamente');
    }
}
