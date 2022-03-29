<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\grupoHacker;

class grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciar datos
        $nombre = ['Kevin Mitnick','Anonymous','CARBANAK','ASTRA','TeaMp0isoN'];
        $descripcion = ['Kevin Mitnick, una figura representativa del pirateo en Estados Unidos, inició sus actividades cuando aún era un adolescente. En 1981, fue acusado de robar manuales de computadora a Pacific Bell. En 1982, pirateó el Comando de Defensa de Estados Unidos (NORAD), que inspiró la película "Juegos de guerra" de 1983. En 1989, pirateó la red de Digital Equipment Corporation (DEC) y realizó copias de su software. Por aquel entonces, como DEC era un fabricante líder de equipos informáticos, esta jugada dio a conocer a Mitnick. Posteriormente, fue arrestado, condenado y enviado a prisión. Durante su período de libertad condicional, pirateó los sistemas de correo de voz de Pacific Bell.',
        'Anonymous inició sus actividades en 2003 en tablones de mensajes de 4chan en un foro sin nombre. El grupo evidencia poca organización y se concentra en cierta manera en el concepto de justicia social. Por ejemplo, en 2008, manifestó su desacuerdo con la Iglesia de la Cientología y comenzó a inhabilitar sus sitios web, lo que afectó negativamente a su posicionamiento en Google y saturó sus máquinas de fax con imágenes en negro. En marzo de 2008, un grupo de Anonymous llevó a cabo una marcha frente a centros de Cientología de todo el mundo usando la ahora famosa máscara de Guy Fawkes. Como señaló The New Yorker, aunque el FBI y otros organismos de cumplimiento de la ley han intentado seguir el rastro de algunos de los miembros más prolíficos del grupo, la ausencia de una jerarquía real convierte en casi imposible el objetivo de eliminar a Anonymous como entidad.',
        'Para infiltrarse en la intranet del banco, los atacantes utilizaron correos electrónicos de phishing selectivo, atrayendo a los usuarios para que los abrieran e infectando las máquinas con malware. Se instaló una puerta trasera en la PC de la víctima basada en el código malicioso Carberp, que a su vez dio el nombre a la campaña: Carbanak.Después de obtener el control de la máquina comprometida, los ciberdelincuentes la utilizaron como punto de entrada; probaron la intranet del banco e infectaron otras PC para averiguar cuál de ellas podría usarse para acceder a sistemas financieros críticos.".',
        'Este hacker se diferencia a los demás de esta lista porque que nunca se lo identificó públicamente. Sin embargo, según The Register, se ha publicado cierta información sobre ASTRA, como que, cuando fue capturado por las autoridades en 2008, se supo que se trataba de un matemático griego de 58 años. Pirateó presuntamente el Grupo Dassault durante casi cinco años. Durante ese período, robó software tecnológico y datos de armas avanzadas que vendió a 250 personas de todo el mundo. Sus acciones costaron al Grupo Dassault $360 millones en daños. Nadie sabe con certeza por qué no se ha revelado su verdadera identidad, pero el término Astra significa "arma" en sánscrito.',
        'Un joven hacker de 16 años, bajo el pseudónimo TriCk, fundó este grupo en 2010. TeaMp0isoN realizó varios ataques a Facebook, la OTAN, y la Liga de Defensa Inglesa, incluído el e-mail de Tony Blair, por aquel entonces Primer Ministro Británico.'];
        $localizacion = ['USA','USA','ARGENTINA','IRAK','RUSIA'];
        $fecha_aparicion = ['1980-01-01','1980-01-01','1989-01-01','2010-01-01','2001-01-01'];
        $numero_integrantes = [10,100,26,405,1890];
        $estatus = ['Activo','Activo','Activo','Activo','Inactivo'];
        $imagen = ['https://static.wixstatic.com/media/6c2216_110e4b21d5ae4dc0aea56b97133965ac~mv2.jpg/v1/fill/w_1000,h_563,al_c,q_90,usm_0.66_1.00_0.01/6c2216_110e4b21d5ae4dc0aea56b97133965ac~mv2.jpg',
        'https://ichef.bbci.co.uk/news/640/cpsprodpb/8B4F/production/_123736653_32739b48-5178-4ca9-9c60-dc2913522c3a.jpg',
        'https://i.ytimg.com/vi/dsK20e2XjpQ/maxresdefault.jpg',
        'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2018/06/10-mejores-hackers-historia.jpg',
        'http://4.bp.blogspot.com/-U2hJBWG7YGs/TgGK2UZDqcI/AAAAAAAACOY/Vkf--A_ZrCI/s640/Vi3Ii.png'];
        foreach($nombre as $key => $value){
            $grupo = new grupoHacker();
            $grupo->nombre = $value;
            $grupo->descripcion = $descripcion[$key];
            $grupo->localizacion = $localizacion[$key];
            $grupo->fecha_aparicion = $fecha_aparicion[$key];
            $grupo->numero_integrantes = $numero_integrantes[$key];
            $grupo->estatus = $estatus[$key];
            $grupo->imagen = $imagen[$key];
            $grupo->save();
        }
    }
}
