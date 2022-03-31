
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>API HACKERS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../res/assets/css/main.css" />
		<link rel="icon" href="../res/images/espiritu.png">
		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<h1 class="logo"><strong>API HACKER</strong> por Fernando Brayan Mejia Gomez</h1>
									<ul class="icons">
										<li><a href="https://twitter.com/?lang=es" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="https://www.facebook.com/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="https://www.instagram.com/?hl=es-la" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Introducción<br />
											API de HACKERS</h1>
											<p>Una API free</p>
										</header>
										<p class="justificar">Esta API es creada para el consumo GRATIS para el publico, con el fin de aportar conocimientos hacia todas las personas que empiecen en la programación con API's.</p>
										<ul class="actions">
											<li><a href="#seccion1" class="button big">VAMOS ALLA</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic01.jpg" alt="" />
									</span>
								</section>
								<section id="seccion1">
									<header class="main">
										<h2>Getting Started</h2>
									</header>

									<div class="image main"><img class="imagen" src="images/portada.jpg" alt="" /></div>

									<p class="justificar">Lo necesario para poder inicializar nuestra <code class="codigo"><b>API</b></code> es necesario conocer las rutas raiz</p>
									<p>La URL base contiene información sobre todos los recursos de API disponibles. Todas las solicitudes son solicitudes<code class="codigo"><b>GET</b></code>y pasan por <code class="codigo"><b>HTTP</b></code>Todas las respuestas devolverán datos en <code class="codigo"><b>JSON</b></code></p>
									<section class="language-shell">
											<code class="color alinear">
												<span class="request alinear">GET </span>https://hackerspi.herokuapp.com/api
											</code>
											<hr class="linea">
											<div>
												<br>
												<span class="color alinear">{</span><br>
												<span class="color alinear">
													https://bebidasapi.herokuapp.com/api/tipohacker
													https://bebidasapi.herokuapp.com/api/tipohacker/{id}
													https://bebidasapi.herokuapp.com/api/tipohackerrandom
												</span><br><span class="color alinear">}</span>
											</div>
									</section>
									
									<p>Actualmente hay tres recursos disponibles</p>
									<ul>
										<li><a>Hackers</a></li>
										<li><a>Tipos hackers</a></li>
										<li><a>Grupo hackers</a></li>
									</ul>
									<br>
									<section id="seccion2">
										<h2>GET ALL</h2>
										<p>Para leer toda la API es necesario ejecutar este <code class="codigo"><b>HTTP</b></code> ya que este regresara un <code class="codigo"><b>JSON</b></code> </p>
									</section>
									<section class="language-shell2">
										<code class="color alinear">
											<span class="request alinear">GET </span>https://bebidasapi.herokuapp.com/api/tipohacker
										</code>
										<hr class="linea">
										<div>
											<br>
											<span class="colorblanco alinear">"hackers": [</span><br>
											<span class="colorblanco alinear"> {</span><br>
											<span class="colorblanco alinear">
												<span class="coloranaranjado">"id"</span>: 1, <br>
            									<span class="coloranaranjado">"nombre"</span>: "Jonh", <br>
            									<span class="coloranaranjado">"apellido"</span>: "Doom", <br>
            									<span class="coloranaranjado">"Fecha de nacimiento"</span>: "2001-12-21", <br>
            									<span class="coloranaranjado">"Sexo"</span> "Masculino", <br>
           									 	<span class="coloranaranjado">"Estado_civil"</span>: "Casado", <br>
												....
											</span><br><span class="colorblanco alinear"> }</span>
										</span><br><span class="colorblanco alinear">}</span>
										</div>
								</section>
									

									<hr class="major" />
								<section id="seccion3">
									<h2>Parametros</h2>
									<p class="justificar">Los parametros de la API son necesarios para poderlos implementar en nuestros codigos y tener una accesibilidad constante y facil hacia la API FREE</p>
									<p class="justificar">Aqui en esta tabla se mostraran los parametros del <code class="codigo"><b>JSON</b></code> de la tabla en la base de datos llamada <b>Hackers</b></p>
									<table>
										<thead>
											<tr>
												<td>Key</td>
												<td>Type</td>
												<td>Descripcion</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>id</td>
												<td>int autoincrement</td>
												<td>Sirve para identificiar la clave unica de la bebida en la BD</td>
											</tr>
											<tr>
												<td>nombre</td>
												<td>string</td>
												<td>El nombre del hacker para poderlo identificar de las demas</td>
											</tr>
											<tr>
												<td>apellido</td>
												<td>string</td>
												<td>Sirve para identificar el apellido del hacker</td>
											</tr>
											<tr>
												<td>Fecha de nacimiento</td>
												<td>date</td>
												<td>Sirve para filtrar la informacion mediante su fecha</td>
											</tr>
											<tr>
												<td>Sexo</td>
												<td>stiring</td>
												<td>Es necesario para identificar el sexo del hacker</td>
											</tr>
											<tr>
												<td>Estado_civil</td>
												<td>string</td>
												<td>Es necesario para identificar el estado civil del hacker</td>
											</tr>
										</tbody>
									</table>
									<br>
									<p class="justificar">Aqui en esta tabla se mostraran los parametros del <code class="codigo"><b>JSON</b></code> de la otra tabla en la base de datos llamada <b>Tipo hackers</b></p>
									<br>
									<table>
										<thead>
											<tr>
												<td>Key</td>
												<td>Type</td>
												<td>Descripcion</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>id</td>
												<td>int autoincrement</td>
												<td>Sirve para identificiar la clave unica de la bebida en la BD</td>
											</tr>
											<tr>
												<td>tipo</td>
												<td>string</td>
												<td>Sirve para identificar el tipo de hacker</td>
											</tr>
											<tr>
												<td>descripcion</td>
												<td>longText</td>
												<td>
                                                    Da una descripcion del tipo de hacker en cuestion para poderlo identificar de los demas dando una informacion mas
                                                </td>
											</tr>
                                            <tr>
												<td>estatus</td>
												<td>string</td>
												<td>Sirve para identificar el estatus del tipo de hacker</td>
											</tr>
											<tr>
												<td>imagen</td>
												<td>string (URL)</td>
												<td>Sirve para mostrar una imagen de la bebida esta viene en <b>URL</b></td>
											</tr>
											<tr>
												<td>created_at</td>
												<td>timestamps</td>
												<td>Sirve para ver cuando se hizo la subida de ese dato a la BD</td>
											</tr>
											<tr>
												<td>updated_at</td>
												<td>timestamps</td>
												<td>Sirve para ver cuando se hizo la bajada de ese dato a la BD</td>
											</tr>
										</tbody>
									</table>
									<br>
									<p class="justificar">Aqui en esta tabla se mostraran los parametros del <code class="codigo"><b>JSON</b></code> de la otra tabla en la base de datos llamada <b>grupo hacker</b></p>
									<br>
									<table>
										<thead>
											<tr>
												<td>Key</td>
												<td>Type</td>
												<td>Descripcion</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>id</td>
												<td>int autoincrement</td>
												<td>Sirve para identificiar la clave unica de la bebida en la BD</td>
											</tr>
											<tr>
												<td>nombre</td>
												<td>string</td>
												<td>Sorve para identificarlo de los demas</td>
											</tr>
											<tr>
												<td>descripcion</td>
												<td>longText</td>
												<td>Es necesario para poder identificar cada uno de los grupos con una descripcion</td>
											</tr>
											<tr>
												<td>imagen</td>
												<td>string (URL)</td>
												<td>Sirve para mostrar una imagen del grupo esta viene en <b>URL</b></td>
											</tr>
											<tr>
												<td>created_at</td>
												<td>timestamps</td>
												<td>Sirve para ver cuando se hizo la subida de ese dato a la BD</td>
											</tr>
											<tr>
												<td>updated_at</td>
												<td>timestamps</td>
												<td>Sirve para ver cuando se hizo la bajada de ese dato a la BD</td>
											</tr>
										</tbody>
									</table>
								</section>
									<hr class="major" />
									<br>
									<section id="seccion4">
									<h2>PHP</h2>
									<p class="justificar">La lectura por el lenguaje de backend llamado <code class="codigo"><b>PHP</b></code> la manera para la lectura del codigo es por metodo <code class="codigo"><b>GET</b></code></p>
									<section class="language-shell">
										<code class="color alinear">
											<span class="request alinear">GET </span>https://hackerspi.herokuapp.com/api/hacker
										</code>
										<hr class="linea">
										<div>
											<br>
											<span class="color alinear">API</span><br>
											<span class="colorblanco alinear">
												<span class="colorblanco">$api =</span> <span class="colorosa">new\</span><span class="colorblanco">GuzzleHttp</span><span class="colorosa">\</span>Client<span class="colorazul">()</span>;<br>
            									<span class="colorblanco">$response = $api</span><span class="colorosa">-></span><span class="colorblanco">request</span><span class="colorazul">(</span><span class="coloramarillo">'GET','https://hackerspi.herokuapp.com/api/hacker'</span><span class="colorazul">)</span>; <br>
            									<span class="colorblanco">$data =</span> 
												<span class="colorazul">json_decode</span>
												<span class="colorblanco">($response</span>
												<span class="colorosa">-></span>
												<span class="colorazul">getBody</span>
												<span class="coloramarillo">()</span>
												<span class="colorosa">-></span>
												<span class="colorazul">getContents</span>
												<span class="coloramarillo">()</span>, 
												<span class="coloranaranjado">true</span>);<br>
												....
											</span><br><span class="colorblanco alinear"> }</span>
										</div>
								</section>
							</section>
								</section>
								<section id="seccion5">
									<h2>Character Schema</h2>
									<table>
										<thead>
											<tr>
												<td>Key</td>
												<td>Type</td>
												<td>Descripcion</td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>id</td>
												<td>int autoincrement</td>
												<td>Es un valor de tipo INT que se autoincrementa solo de 1 a 1</td>
											</tr>
											<tr>
												<td>nombre</td>
												<td>string</td>
												<td>Este tiene el valor de varchar de 255 caracteres</td>
											</tr>
											<tr>
												<td>imagen</td>
												<td>string (URL)</td>
												<td>Este tiene el valor de varchar de 255 caracteres</td>
											</tr>
											<tr>
												<td>created_at</td>
												<td>timestamps</td>
												<td>Tiempo de subida de archivo date</td>
											</tr>
											<tr>
												<td>updated_at</td>
												<td>timestamps</td>
												<td>Tiempo de subida de archivo date</td>
											</tr>
										</tbody>
									</table>
									<br>
								</section>

							<!-- Section -->
								<section id="seccion6">
									<header class="major">
										<h2>Logros</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>FREE</h3>
												<p>El logro de la API es darla de manera gratis</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Facil de usar</h3>
												<p>Esta API es facil de ocupar gracias a su logica comprensible</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Implementable</h3>
												<p>Esta API pueden implementarla estudiantes que estan aprediendo a usar API's</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Escalable</h3>
												<p>Es facil de escalar con esta API debido a que es muy poco compleja en su algoritmo</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->
								

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2><a href="{{route('index')}}">Menu</a></h2>
									</header>
									<ul>
										<li><a href="#banner">Introduccion</a></li>
										<li><a href="#seccion1">Getting Started</a></li>
										<li><a href="#seccion2">GET all</a></li>
										<li><a href="#seccion3">Parametros</a></li>
										<li>
											<span class="opener">Lenguajes de programacion</span>
											<ul>
												<li><a href="#seccion4">PHP</a></li>
												<li><a href="#">Java Script</a></li>
												<li><a href="#">Python</a></li>
												<li><a href="#">Ruby</a></li>
											</ul>
										</li>
										<li><a href="#seccion5">Character schema</a></li>
										<li><a href="#seccion6">Logros</a></li>
									</ul>
								</nav>
							</section>

							<!-- Section -->
								

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contacto rapido</h2>
									</header>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">fernando.brayan.m.g@gmail.com</a></li>
										<li class="icon solid fa-phone">(+52) <a type="tel">5540124899</a></li>
										<li class="icon solid fa-home">Tecamac, Mexico<br />
										</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="../res/assets/js/jquery.min.js"></script>
			<script src="../res/assets/js/browser.min.js"></script>
			<script src="../res/assets/js/breakpoints.min.js"></script>
			<script src="../res/assets/js/util.js"></script>
			<script src="../res/assets/js/main.js"></script>
			<script src="../res/assets/js/scroll.js"></script>

	</body>
</html>

