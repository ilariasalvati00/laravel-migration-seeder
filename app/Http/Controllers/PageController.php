<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

use Carbon\Carbon;

class PageController extends Controller
{

    //Faccio una funzione che prende i dati dal database (tabella trains) e li passa alla vista home.blade.php
    public function index(){
        $data = Carbon::createFromFormat('d/m/Y', '23/01/2024');
        $dati=[
            "treni"=>Train::where("orario_di_partenza", "<", $data)->get()
        ];
        return view("home", $dati);
    }
}
