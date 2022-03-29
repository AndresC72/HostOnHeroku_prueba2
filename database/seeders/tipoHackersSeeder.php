<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipohacker;
class tipoHackersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Datos
        $tipo = ['White Hat','Black Hat', 'Grey hat', 'Blue hat', 'Hacktivistas', 'Red team', 'Blue team'];
        $descripcion = ['Los hackers White Hat son un tipo de hackers con experiencia en ciberseguridad. Están autorizados a hackear los sistemas de seguridad informática de gobiernos u organizaciones con el fin de comprobar fallos de ciberseguridad. Al hacerlo identifican los puntos débiles y los corrigen para evitar futuros ataques de fuentes externas.','Los Black Hat también son expertos en informática, sin embargo, su intención es completamente distinta. Estos tipos de hackers atacan otros sistemas para obtener acceso a sistemas donde no tienen una entrada autorizada. Con su acceso pueden robar datos o destruir el sistema.','Los hackers Grey Hat se encuentran entre los Black Hat y los White Hat. Este tipo de hackers informáticos trabajan con buenas y con malas intenciones. La intención que hay detrás de la piratería decide el tipo de pirata informático.','Los Blue Hat o script-kiddie son un tipo de hackers informáticos que no tienen intención de aprender. Sino que utilizan el hacking como arma para ganar popularidad entre sus semejantes y para ajustar cuentas con sus adversarios. Los Blue hat son peligrosos debido a sus intenciones maliciosas, puesto que las anteponen a adquirir conocimiento.','Este tipo de hackers informáticos tienen la intención de hackear sitios web gubernamentales. Un hacktivista puede ser un individuo o un grupo de hackers sin nombre cuya intención es obtener acceso a sitios web y redes gubernamentales. Los datos obtenidos se suelen utilizar para obtener beneficios políticos o sociales.','El Red Team realiza un proceso de simulación de escenarios de amenazas a los que se puede enfrentar una organización, analizando la seguridad desde el punto de vista de los atacantes, los pentesters realizan un proceso de intrusión con técnicas de pivoting, ingeniería social y otras pruebas de hacking y que finaliza con un informe en el que se identifican vulnerabilidades.','En cambio el Blue Team se encarga de evaluar las distintas amenazas que puedan afectar a las organizaciones, monitorizar (red, sistemas, etc.) y recomendar planes de actuación para mitigar los riesgos. En casos de incidentes, realizan las tareas de respuesta, incluyendo análisis forense de las máquinas afectadas, trazabilidad de los vectores de ataque, propuesta de soluciones, etcétera.'];
        $fecha_aparicion = ['2020-01-01','2020-01-01','2020-01-01','2020-01-01','2020-01-01','2020-01-01','2020-01-01'];
        $estatus = ['Activo','Activo','Activo','Activo','Activo','Activo','Activo'];
        $imagen=['https://www.iberdrola.com/documents/20125/40153/Hacking_etico_746x419.jpg/862adaea-89a8-7656-a214-66e04b4f429f?t=1626938805330','https://api.binary-coffee.dev/uploads/f6a2c201264f4cda9070d9c70ce9009b.jpg','https://www.noidentitytheft.com/wp-content/uploads/2016/10/Grey-Hat-Hacker-1024x442.png','https://media.geeksforgeeks.org/wp-content/uploads/hacker.png','https://elordenmundial.com/wp-content/uploads/2020/09/anonymus-hacker-activismo-hacktivismo-ciber-ciberguerra-portada-1310x786.jpg','https://www.cyberseguridad.com.mx/wp-content/uploads/2021/09/red-team.jpeg','https://www.unir.net/wp-content/uploads/2020/01/ciberseguridad-unir-1.jpg'];
        //llenar datos
       foreach($tipo as $key => $value){
        //instanciar modelo
        $tipohacker = new Tipohacker();
        //llenar datos
            $tipohacker->tipo = $value;
            $tipohacker->descripcion = $descripcion[$key];
            $tipohacker->fecha_aparicion = $fecha_aparicion[$key];
            $tipohacker->estatus = $estatus[$key];
            $tipohacker->imagen = $imagen[$key];
            $tipohacker->save();
        }
    }
    
}
