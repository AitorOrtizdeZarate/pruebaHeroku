<?php

namespace App\Http\Controllers;
use App\Prueba;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
    	$pruebas = Prueba::latest('created_at')->get();

    	return view('tabla', compact('pruebas'));
    }
}
