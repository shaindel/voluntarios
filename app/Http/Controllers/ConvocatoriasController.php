<?php

namespace App\Http\Controllers;

use App\Convocatoria;

// use Illuminate\Http\Request;

class ConvocatoriasController extends Controller
{
    // public static function condicion()
    // {
    // 	return static::where('status', 1)->get(); 
    // } 

    public static function show()
    {
     return view('welcome'); 
    } 

    public function index()
    {
    	$convocatorias= Convocatoria::all();
	    return view('convocatorias.index', compact('convocatorias'));
    }
    public function vista(Convocatoria $convocatoria)
	{
		// $convocatoria= Convocatoria::find($id);
		return view('convocatorias.vista', compact('convocatoria'));
    }

}
