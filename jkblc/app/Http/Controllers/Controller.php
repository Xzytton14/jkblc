<?php

namespace App\Http\Controllers;
//use Illuminate/Http/Request; imported class 'Request' is not use

abstract class Controller
{
    public function index(){
        return "Halo ini mahasiswa dari MahasiwaController";
    }
}