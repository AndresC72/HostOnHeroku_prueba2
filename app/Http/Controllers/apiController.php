<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function pokemon(){
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://pokeapi.co/api/v2/pokemon?offset=300&limit=12');
        $datos = json_decode($response->getBody()->getContents(), true);

        $pokemon = [];

        foreach ($datos['results'] as $poke) {
            
            $url = $poke['url'];
            $api2 = new \GuzzleHttp\Client();
            $response = $api2->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);
            $pokemon[] = [
                'nombre'=>$poke['name'],
                'url' =>$poke['url'],
                'imagen1'=> $data['sprites']['other']['home']['front_default'],
                'imagen2'=> $data['sprites']['front_default'],
                'imagen3'=> $data['sprites']['front_shiny'],
                'tipo'=> $data['types']['0']['type']['name'],
            ];
        }
        
        return view('pokemones', ['pokemon'=>$pokemon]);
    }
    public function detallepokemon($nombre){
        //Personaje separado
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://pokeapi.co/api/v2/pokemon/'.$nombre.'/');
        $datos = json_decode($response->getBody()->getContents(), true);

        $movimiento = $datos['moves']['0']['move']['url'];

        //Movimiento separado
        $api2 = new \GuzzleHttp\Client();
        $response2 = $api2->request('GET', $movimiento);
        $data = json_decode($response2->getBody()->getContents(), true);

        $habilidad1 = $datos['abilities']['0']['ability']['url'];

        //Habilidad separada
        $api3 = new \GuzzleHttp\Client();
        $response3 = $api3->request('GET', $habilidad1);
        $data2 = json_decode($response3->getBody()->getContents(), true);

        if(isset($data2['abilities']['0']['ability']['url'])){
            $habilidad2 = $datos['abilities']['1']['ability']['url'];
        
       

        //Habilidad separada
        $api4 = new \GuzzleHttp\Client();
        $response4 = $api4->request('GET', $habilidad2);
        $data3 = json_decode($response4->getBody()->getContents(), true);
        }else{
            $data3 = null;
        }

        //pokemon random
        $numero = rand(1,898);
        $api5 = new \GuzzleHttp\Client();
        $response5 = $api5->request('GET', 'https://pokeapi.co/api/v2/pokemon/'.$numero.'/');
        $data4 = json_decode($response5->getBody()->getContents(), true);

        $numero2 = rand(1,898);
        $api6 = new \GuzzleHttp\Client();
        $response6 = $api6->request('GET', 'https://pokeapi.co/api/v2/pokemon/'.$numero2.'/');
        $data5 = json_decode($response6->getBody()->getContents(), true);

        $numero3 = rand(1,898);
        $api7 = new \GuzzleHttp\Client();
        $response7 = $api7->request('GET', 'https://pokeapi.co/api/v2/pokemon/'.$numero3.'/');
        $data6 = json_decode($response7->getBody()->getContents(), true);

        
        return view('detallepokemon', ['datos'=>$datos,'movimiento'=>$data,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'data6'=>$data6]);
    }
    
}
