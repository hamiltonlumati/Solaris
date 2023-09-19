<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ApresentacaoDosDadosController extends Controller
{
    //
    public function apresentacao(){
        return view('apresentacao');
    }
}
