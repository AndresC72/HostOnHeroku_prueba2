<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\hacker;

class hackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instaciar datos de hacker
        $nombre = ['Kevin','Adrian','Elliott','Albert','Evgeniy','Matthew','Jeanson','Michael','Alexsey','Nicolae'];
        $apellido = ['Mitnick','Lamo','Gunton','González','Mikhailovich','Bevan','James','Calce','Belan','Popescu'];
        $fecha_nacimiento = ['1983-12-12','2001-12-10','2001-09-12','2001-09-12','1998-10-21','2003-03-20','1999-05-23','2001-09-12','2001-09-12','2001-09-12'];
        $sexo = ['Masculino','Masculino','Masculino','Masculino','Masculino','Masculino','Masculino','Masculino','Masculino','Masculino'];
        $estado_civil = ['Divorciado','Soltero','Casado','Viudo','Soltero','Soltero','casado','Soltero','Soltero','Soltero'];
        $descripcion = ['Kevin Mitnick es una de las figuras más representativas del hacking en Estados Unidos. Inició sus actividades en los años 80, y muy pronto consiguió su primer hito como pirata informático: logró entrar en el Comando de Defensa de los Estados Unidos (NORAD). Su caso se hizo tan famoso, que incluso existe una película inspirada en él (‘Juegos de guerra’, 1983).'
        ,'Adrian Lamo es un hacker de la ciudad de Los Ángeles, California, que se dedica a la investigación de ciberseguridad. Su trabajo se centra en el desarrollo de software, y su principal objetivo es el de ayudar a las organizaciones a proteger sus datos.'
        ,'Algunos de los hackers más famosos comenzaron su carrera criminal a edades muy tempranas. Es el caso de Elliott Gunton, un ciberdelincuente que pirateó la empresa de telecomunicaciones Talk Talk cuando apenas tenía 16 años. La mayor parte de sus fechorías las ha cometido en el Reino Unido, donde se le acusa de robo de información, falsificación, lavado de dinero, pirateo de cuentas de famosos, e incluso de posesión de fotos pornográficas con menores. Sin embargo, sus actividades han trascendido las fronteras de su país natal, y en Estados Unidos también se le acusa de delitos como el secuestro de EtherDelta, un sitio web de intercambio de divisas, con el que logrí estafar millones de dólares a los usuarios en apenas dos semanas.'
        ,'Albert Gonzáles es uno de esos hackers famosos que terminaron abandonando el lado oscuro del hacking. Comenzó su carrera en el portal de comercio ilegal Shadowerew y con 22 años fue detenido por un fraude con tarjetas de crédito que ocasionó el robo de millones de cuentas. González se libró de ir a prisión a cambio de colaborar con el Servicio Secreto estadounidense, y de hecho, gracias a él se logró imputar a decenas de hackers del sitio Shadowerew.'
        ,'Se trata de uno de los hackers rusos más famosos, principalmente por ser el creador de la botnet GameOver ZeuS, uno de los malware más destructivos de los últimos años.
        Gracias a esta malware no solo se hizo multimillonario, sino que ocasionó pérdidas por valor de más de 100 millones de euros. Se dice que cuenta con el beneplácito del gobierno ruso, y se rumorea que el servicio de inteligencia del Kremlin se aprovechó de su información para espionaje internacional.',
    'Esto dúo británico de hackers se especializó en los ataques a los sistemas de defensa y redes militares. Entre otras, lograron penetrar en la Base de la Fuerza Aérea Griffiss o la de la Agencia de Sistemas de Información de Defensa. Sin embargo, su mayor actuación fue la de piratear la red del Instituto Coreano de Investigación Atómica (KARI), con la que volcaron información norcoreana en los sistemas militares de Estados Unidos, y fueron acusados de estar a punto de provocar la 3ª Guerra Mundial (con los norcoreanos no se juega).',
'Jeanson James Ancheta ha sido un hacker cuyas principales actuaciones se basaron en la creación de redes de ordenadores zombie o botnets. En 2004 llegó a controlar una red de más de 400.000 ordenadores, que alquiló a empresas de publicidad a cambio de dinero. A causa de esto, fue condenado a pasar 57 meses en prisión, siendo el primer hacker condenado a la cárcel por el uso de botnets.',
'Michael Calce es un hacker de la ciudad de Los Ángeles, California, que se dedica a la investigación de ciberseguridad. Su trabajo se centra en el desarrollo de software, y su principal objetivo es el de ayudar a las organizaciones a proteger sus datos.',
'Alexsey Belan es un hacker originario de Letonia que está en la actualidad en busca y captura. Es uno de los hackers más conocidos de los últimos años, ya que tenía un blog bastante famoso en la red sobre hacking. Logró hackear servidores de videojuegos, servicios en línea y sitios web dedicados a las telecomunicaciones. También asesoraba a otros hackers a cambio de dinero, y vendía al mejor postor los datos de usuarios que robaba. Se calcula que entre 2013 y 2016 pudo robar más de 600 millones de cuentas.',
'En la actualidad, Nicolae Popescu es uno de los más hackers más buscados del mundo. El FBI ofrece una recompensa de un millón de dólares por él. Popescu era el principal líder de una banda de ciberdelincuentes que se dedicaban a estafar a usuarios en una web de subastas. La banda fue desarticulada en 2012, pero no se logró detener a Popescu y ahora mismo se encuentra en paradero desconocido.'];
        $estatus = ['Vivo','Vivo','Vivo','Vivo','Muerto','Muerto','Muerto','Vivo','Muerto','Vivo'];
        $imagen = ['https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Kevin_Mitnick_ex_hacker_y_ahora_famoso_consultor_en_redes_en_Campus_Party_M%C3%A9xico_2010.jpg/1200px-Kevin_Mitnick_ex_hacker_y_ahora_famoso_consultor_en_redes_en_Campus_Party_M%C3%A9xico_2010.jpg'
        ,'https://s03.s3c.es/imag/_v0/770x420/9/b/e/adrian-lamo-reuters.jpg'
        ,'http://static.tiempo.com.mx/uploads/imagen/imagen/265425/principal_captura-de-pantalla-de-2019-08-16-15-33-08.jpg'
        ,'https://upload.wikimedia.org/wikipedia/commons/3/30/3458188_640px.jpg'
        ,'https://img.europapress.es/fotoweb/fotonoticia_20170313171845_1200.jpg',
    'https://upload.wikimedia.org/wikipedia/en/thumb/7/7c/Kuji-blue.jpg/1200px-Kuji-blue.jpg',
'https://alchetron.com/cdn/jeanson-james-ancheta-534a8d15-4411-42a3-820d-31c10a3456d-resize-750.jpg',
'https://www.insight.com/content/dam/insight-web/en_US/article-images/pcm-assets/mafiaboy-michael-calce-thumbnail.jpg',
'https://www.fbi.gov/wanted/cyber/alexsey-belan/belan3.jpg',
'https://media.ambito.com/p/c44d2b2679248d721101fc582034161b/adjuntos/239/imagenes/031/133/0031133251/1200x900/smart/nicolae-popescu.jpg'];
        $tipohacker_id = [2,1,3,4,5,1,3,5,2,4];
        $grupo_hacker_id = [1,2,3,4,5,2,1,3,4,5];
        foreach($nombre as $key => $value){
            $hacker = new hacker();
            $hacker->nombre = $value;
            $hacker->apellido = $apellido[$key];
            $hacker->fecha_nacimiento = $fecha_nacimiento[$key];
            $hacker->sexo = $sexo[$key];
            $hacker->estado_civil = $estado_civil[$key];
            $hacker->descripcion = $descripcion[$key];
            $hacker->estatus = $estatus[$key];
            $hacker->imagen = $imagen[$key];
            $hacker->tipohacker_id = $tipohacker_id[$key];
            $hacker->grupo_hacker_id = $grupo_hacker_id[$key];
            $hacker->save();
        }
        
    }
}
