<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title = 'Listado de usuarios';
        $users = [
            'John',
            'Joe',
            'Louis'
        ];
        return view('users', compact('title','users'));
    }

    public function show($id){
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create(){
        return 'Crear un nuevo usuario';
    }
}
