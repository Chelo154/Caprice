<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller{
    public function index(){
        return view('index');
    }
    public function foodAndBeer(){
        return view('foodandbeer');
    }
    public function nosotros(){
        return view('quienesSomos');
    }
    public function contactos(){
        return view('contactos');
    }
}
