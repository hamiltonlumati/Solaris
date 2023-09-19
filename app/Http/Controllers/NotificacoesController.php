<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class NotificacoesController extends Controller
{
    //
    public function notificacoes(){
        $id = Auth::id();
        $notificacoes = DB::table('notificacoes')
            ->where('id', '==', $id)
            ->get();

        return view('notificacoes');
    }
}
