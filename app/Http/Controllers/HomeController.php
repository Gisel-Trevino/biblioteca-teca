<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $user = auth()->user();
        if($user->user_type === 'admin'){
            $libros = Libro::with('categoria')->paginate(5);
            $librosCount = $libros->total();
            $prestamosCount = Prestamo::where('estado', 'pendiente')->count();
            $usuariosCount = User::where('user_type', 'user')->count();
            return view('home.index', compact('libros', 'librosCount', 'prestamosCount', 'usuariosCount'));
        }else{
            return view('home.index_user');
        }
    }
}
