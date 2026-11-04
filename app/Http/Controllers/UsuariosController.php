<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UsuariosController extends Controller
{
      public function index(): View {
        return view('usuarios.usuarios');
    }
}


