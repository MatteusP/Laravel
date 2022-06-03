<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function index(){
        //mostrar todos os dados
        $businesses = Business::all();
        //dd($businesses);

        //metodo para achar dado via id
        $business = Business::find(1);
        
        //metodo para buscar dados especificos 
        $businessWhere = Business::where('name', 'Franecki-Hartmann')->get();

        //retorna apenas o primeiro dado com as caracteristicas
        $businessWhereFirst = Business::where('name', 'Franecki-Hartmann')->first();

        //mostrar na tela
        dd($businesses, $business, $businessWhere, $businessWhereFirst);
    }
    //
    //./vendor/bin/sail artisan make:model Business --migration --controller --factory
}
