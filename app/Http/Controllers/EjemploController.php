<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function mostrar()
    {
        $mensaje = 'Hola desde un Controlador';
        return view('practica.holaMundo', compact('mensaje'));
    }
}
