<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba($param){
        return 'Estoy dentro de PurebaController y recibi este parametro '. $param;
    }
}
