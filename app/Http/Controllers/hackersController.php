<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hacker;

class hackersController extends Controller
{
    public function mostrarhackers(){
        $hackers = hacker::all();
        return view('hackerbd', ['hackers'=>$hackers]);
    }
    public function detallehacker($id){
        $hacker = hacker::find($id);

        //Hacker random 1
        $numero1 = rand(1,10);
        while($numero1 == $id){
            $numero1 = rand(1,10);
        }
        $hackerandom1 = hacker::find($numero1);
        

        //Hacker random 2
        $numero2 = rand(1,10);
        while($numero2 == $numero1){
            $numero2 = rand(1,10);
        }
        $hackerandom2 = hacker::find($numero2);
        
        //Hacker random 
        $numero3= rand(1,10);
        while($numero3 == $numero1 || $numero3 == $numero2){
            $numero3 = rand(1,10);
        }
        $hackerandom3 = hacker::find($numero3);
        

        return view('detallehacker', ['hacker'=>$hacker, 'hackerandom1'=>$hackerandom1, 'hackerandom2'=>$hackerandom2, 'hackerandom3'=>$hackerandom3]);
    }
}
