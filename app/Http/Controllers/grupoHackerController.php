<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grupoHacker;
use App\Models\hacker;

class grupoHackerController extends Controller
{
    public function mostrargrupo($id){
        $grupo = grupoHacker::find($id);
        $hacker = hacker::where('grupo_hacker_id', $id)->get();
        return view('detallegrupo', ['grupo'=>$grupo, 'hacker'=>$hacker]);
    }
}
