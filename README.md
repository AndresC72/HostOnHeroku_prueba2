# Base de datos con API
## Copiar repositorio :space_invader:

Recuerda copiar el codigo del proyecto con:
```
git clone
```
### Contribucion al proyecto :globe_with_meridians:
A traves de la contribuicon puedes aplicar codigos con  	:hammer_and_wrench: `gitbash` como lo son:

```
git status
git add .
git commit -m "mesaje"
git push
```
## Contenido del proyecto :package:

### Tecnologias

- [x] Php  	:open_file_folder:
- [x] HTML :bar_chart:
- [x] Composer 	:pushpin:
    - [x] Laravel :straight_ruler: 	:file_cabinet:
- [x] CSS :triangular_ruler:
- [x] Javascript :file_folder:
- [x] Jquery :paperclips:
- [x] Consumo de API POKEMON
- [x] Consumo de BD remota 
 
## Consumo de la API :pushpin:
![POKEMON](https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1280px-International_Pok%C3%A9mon_logo.svg.png "POKEMON")

La API que se consume en este proyecto es la de "POKEAPI" la cual nos sirve para poder usarla dentro de nuestro proyecto en nuestros `Controllers` esto con el fin de poderle pasar los arreglos que se ocupan dentro de nuestra aplicacion.

SI REQUIERE DE INFORMACIÓN DE LA API CONSULTE LA DOCUMENTACIÓN AQUI:

:link: `link` <https://pokeapi.co/>

## Controller de API :open_file_folder:
Dentro del proyecto se encontrara la carpeta de `APP` donde se puede encontrar varios de los archivos del proyecto, pero solo nos fijaremos en la carpeta de `HTTP` y dentro de ella encontraremos nuestros archivos controladores de nuestra aplicacion. En este archivo se podra ver como es el consumo de la API las lineas importantes estan comentadas en el codigo por si requieres de una guia.

SI REQUIERE DE ALGUNA AYUDA NO OLVIDE LEER LA DOCUMENTACIÓN DE LARAVEL:

:link: `link` <https://laravel.com/docs/8.x/readme>

## Framework (Laravel) :pushpin:
![Laravel](https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/2560px-Logo.min.svg.png "Laravel")

Es necesario el uso de este framework para su correcto uso.
RECUERDA ANTES INSTALAR EL PROYECTO EN TU ENTORNO DE TRABAJO CON EL `CODIGO` 
```
composer install
```
Una vez copiado el archivo es necesario ocupar el comando:
```
php artisan serve
```
Esto para levantar el servicio de manera LOCAL

## Php :open_file_folder:
![php](https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png)

Este proyecto tiene un desarrollo de php dentro de la carpeta de models donde podras encontrar las clases necesarias para el funcionamiento de este proyecto.

Este para que la aplicación se pueda ver en un servidor local.

## Dominio :round_pushpin:

![Heroku](https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Heroku_logo.svg/2560px-Heroku_logo.svg.png)

Este repositorio se encuentra subido en un dominio, en este caso heroku
Esto con el fin para que pueda visualizarse esta pagina. 

Este proyecto se encuentra en este link:

[Entra aqui para ver la pagina](https://hackerspi.herokuapp.com/ "dominio")
 
 :link: `link` <https://hackerspi.herokuapp.com/>

## Configuracion del proyecto :wrench:

Para poder agregar una migracion a nuestro poryecto es necesario ocupar la `terminal` que nos ofrece visual studio code.
 :hash: Ejecutamos este comando:
```
php artisan make:migration "miprimeramigracion"
```
Despues de configurar `UP` y `DOWN` es necesario implementar la migracion en nuestra BD con el siguiente comando:
```
php artisan migrate
```
De ser necesaria una recarga de una migracion es necesario llevarla con el siguiente comando:
```
php artisan migrate:refresh
```
Asi como tambien es neceario la creacion de `Seeder` el cual tendra el dominio total de la base de datos, puedes crearlo con este comando:
```
php artisan make:seeder miprimerSeeder
```
Tambien es neceario implementar el `Seeder` en la base de datos para la importancion necesaria de datos.Con este comando podras lograr dicha tarea:
```
php artisan db:seed
```
Para poder ocupar un nuevo controlador dentro de nuestro proyecto es hacer lo mismo, ocupamos nuestra `terminal` y ocupamos el siguiente codigo:
```
php artisan make:controller "miprimerController"
```
Creacion de un modelo:
```
php artisan make:model "miprimerModel"
```
Recuerda que si necesitas algo en especifico busca en la documentacion que ofrece laravel.


## :pushpin: Importante :pushpin:

Recuerda es necesario que veas el  	:open_file_folder: `route` para ver las especificaciones del proyecto y no comentas un error de ruteo dentro del proyecto. Este se encuentra en la carpeta de routes y vas al archivo :card_index: `web.php`, en estas tambien es necesario mencionar que se llevaron a cabo mediante el uso de controladores de la aplicación, se recomienda no cambiarle el nombre, pero de caso de hacerlo tiene que repetir el proceso en todo el codigo para que este funcione y no suelte errores dentro del programa.

Mencionamos que no hay todavia una documentacion de este proyecto (:card_index_dividers: `.pdf`) por lo que si requiere de una pido que se comunique con el contacto dado aqui.


## Contacto

Si hay alguna dificultad o necesitas alguna ayuda con el proyecto por favor contactame aqui:
- :telephone_receiver:  5540124899

- :envelope:  fernando.brayan.m.g@gmail.com

## Recuerda dar las gracias :blue_heart:

Este proyecto puedes ocuparlo siempre y cuando:
- Da la gracias de manera publica :heartpulse:
- No lo ocupes con fines maliciosos :lock_with_ink_pen:
- Me invites un cafe :coffee:

Este ultimo no es obligatorio.

## Recuerda seguirme en YOUTUBE

![Codeunit06](https://github.com/Codeunit6/Codeunit6/blob/main/anbu.jpg "Codeunit06")

spek14programacion :link: `<link>` : <https://www.youtube.com/channel/UCwPxnD_fdRJggn5ZILh1PRg>

📌 Tengo un canal en youtube donde pudes ver mis tutoriales. 📌

- Puedes ver tutoriales orientados al backend
- Tengo tutoriales de conceptos
- Sigueme si gustas 
-


## Video tutorial

![Imagen](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/YouTube_Logo_%282013-2017%29.svg/2560px-YouTube_Logo_%282013-2017%29.svg.png "Imagen")




AQUI PUEDES ENCOTRAR EL VIDEO TUTORIAL DEL PROYECTO `<link>` : <https://youtu.be/kuMqxuW7_Po>

## Recuerda darme un follow :black_nib:

En mi perfil podras encontrar cosas interesantes: 

[GitHub](https://github.com/Codeunit6 "GitHub")

:link: `<link>` : <https://github.com/Codeunit6>
