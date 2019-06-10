<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imagen;

class ImagenController extends Controller
{
    public function getImagen(){

    $imagen = Imagen::orderby('id', 'desc')->get();

    return view('layouts.app', compact('imagen'));
}
}