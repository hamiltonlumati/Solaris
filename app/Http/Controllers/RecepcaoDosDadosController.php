<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RecepcaoDosDadosController extends Controller
{
    //
    public function post($tempAmbiente, $tempPainel, $tensao0, $tensao1, $corrente, $radiacao){
        $id = Auth::id();
        $resistSerie = 10; //Resistência da Medição de Tensão
        $R1 = 1000000;
        $R2 = 500000;
        $factorDeConversao = ($R1+$R2)/$R2;
        
        $tensao0 = ($tensao0*5/1024)*$factorDeConversao;
        $tensao1 = ($tensao1*5/1024)*$factorDeConversao;

        $corrente = ($tensao1-$tensao0)/$resistSerie;


        //Cálculos
        $tempAmbiente = (((($tempAmbiente*5)/1024)*1000)-500)/10;
        $tempPainel = (((($tempPainel*5)/1024)*1000)-500)/10;


        DB::table('dados')->insert([
            'id' => $id,
            'nome' => 'A1',
            'data' => date("Y-m-d H:i:s"),
            'temperaturaAmbiente' => $tempAmbiente,
            'temperaturaPainel' => $tempPainel,
            'tensaoDeSaida' => $tensao1,
            'correnteDeSaida' => $corrente,
            'potenciaDeSaida' => $corrente*$tensao1,
            'radiacao' => $radiacao
        ]);
    }
}
