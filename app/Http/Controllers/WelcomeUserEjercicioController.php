<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserEjercicioController extends Controller
{
    public function saludarConNombre($name){
        $name = ucfirst($name);
        
        return "Bienvenido {$name}";
    }

    public function saludarConNickname($name, $nickname){
        $name = ucfirst($name);
        
        return "Bienvenido {$name}, tu apodo es {$nickname}"; 
        
    }
}
