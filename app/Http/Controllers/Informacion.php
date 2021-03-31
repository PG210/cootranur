<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function informa(){//retorna la vista o interactua con el modelo de datos
        return view('datos.info');//
    }
}
