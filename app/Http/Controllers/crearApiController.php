<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crearApi;
use App\Models\hacker;
use App\Models\Tipohacker;
use App\Models\grupoHacker;

class crearApiController extends Controller
{
    //api de tipo de hacker
    public function apitipohacker()
    {
        $tipohacker = Tipohacker::all();
        return response()->json(['tipo_hacker'=>$tipohacker]);
    }
    public function apitipohackerbusqueda($id)
    {
        $busqueda = Tipohacker::find($id);
        return response()->json(['tipo_hacker'=>$busqueda]);
    }
    public function apitipohackerrandom()
    {
        $numero = rand(1,7);
        $hacker = Tipohacker::find($numero);
        return response()->json(['Hacker_random'=>$hacker]);
    }
    
    //api origen
    public function apiorigen(){
        $origen = crearApi::all();
        return response()->json(['origen'=>$origen]);
    }

    //api de hacker
    public function apihacker(){
        $hacker = hacker::all();
        return response()->json(['hacker'=>$hacker]);
    }
    public function apihackerbusqueda($id){
        $busqueda = hacker::find($id);
        return response()->json(['hacker'=>$busqueda]);
    }
    public function apihackerrandom(){
        $numero = rand(1,10);
        $hacker = hacker::find($numero);
        return response()->json(['Hacker_random'=>$hacker]);
    }
    //api de grupo hacker
    public function apigrupohacker(){
        $grupo = grupoHacker::all();
        return response()->json(['grupo'=>$grupo]);
    }
    public function apibusquedagrupohacker($id){
        $busqueda = grupoHacker::find($id);
        return response()->json(['grupo'=>$busqueda]);
    }
    public function apigrupohackerrandom(){
        $numero = rand(1,10);
        $grupo = grupoHacker::find($numero);
        return response()->json(['grupo'=>$grupo]);
    }


}
