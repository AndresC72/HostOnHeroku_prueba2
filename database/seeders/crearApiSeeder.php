<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\crearApi;

class crearApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url=['https://hackerspi.herokuapp.com/api/tipohacker','https://hackerspi.herokuapp.com/api/grupohacker','https://hackerspi.herokuapp.com/api/hacker'];
        $descripcion=['Lista de tipos de hackers','Lista de grupos de hackers','Lista de hackers'];
        foreach($url as $key => $value)
        {
            $nuevapi = new crearApi();
            $nuevapi->url = $value;
            $nuevapi->descripcion = $descripcion[$key];
            $nuevapi->save();
        }
    }
}
