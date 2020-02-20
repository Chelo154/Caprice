<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        return view('institucional.index');
    }
    public function foodAndBeer(){
        return view('intitucional.foodandbeer');
    }
    public function nosotros(){
        return view('institucional.quienesSomos');
    }
    public function contactos(){
        return view('institucional.contactos');
    }
}
