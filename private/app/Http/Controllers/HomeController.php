<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class HomeController extends Controller
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
        return view('home');
    }

    public function get_nombre_libros()
    {
        $json = array();

        $libros = DB::table('libros')->select('nombre')->distinct()->get();

        foreach ($libros as $it) {
            $json[] = $it->nombre;
        }

        return response()->json($json);
    }

}
