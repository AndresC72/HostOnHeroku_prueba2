<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Phantom by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="../images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="{{route('index')}}">INICIO</a></li>
							<li><a href="{{route('hacker')}}">HACKERS HISTORY</a></li>
							<li><a href="{{route('documentacion')}}">API HACKERS</a></li>
							<li><a href="{{route('apipokemon')}}">API POKEMON</a></li>
							<li><a href="{{route('about')}}">SOBRE NOSOTROS</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Detalles del hacker {{$hacker->nombre}} {{$hacker->apellido}} </h1>
							<h2 class="etiqueta">Grupo: {{$hacker->grupoHacker->nombre}}</h2>
							<h2 class="etiqueta">Tipo: {{$hacker->tipohacker->tipo}}</h2>
							<h2 class="etiqueta">Estatus: {{$hacker->estatus}}</h2>
							<br>
							<br>
							<div style="background-image: url('../images/pic13.jpg'); background-repeat: no-repeat;background-size: cover">
							<br>
							<img  class="centrar tamaño" src="{{$hacker->imagen}}" alt="" />
							<br>
							</div>
							<br>
							<div class="centrartxt tamañotxt"><b>Descripcion de {{$hacker->nombre}}</b></div>
							<br>
							<p class="justificar">{{$hacker->descripcion}}</p>
							<div class="centrartxt tamañotxt"><b>Datos personales de {{$hacker->nombre}}</b></div>
							<br>
							<b>Estatus: </b><p>
								@if($hacker->estatus == 'Vivo')
								<li class="vivo"><span class="negro">{{$hacker->estatus}}</span></li> 
								@endif
								@if($hacker->estatus == 'Muerto')
								<li class="muerto"><span class="negro">{{$hacker->estatus}}</span></li> 
								@endif
							</p>
							<b>Estado civil: </b><p>{{$hacker->estado_civil}}</p>
							<b>Sexo: </b><p>{{$hacker->sexo}}</p>
							<b>Fecha de nacimiento: </b><p>{{$hacker->fecha_nacimiento}}</p>
							<div class="centrartxt tamañotxt"><b>Datos del grupo hacker  de {{$hacker->nombre}}</b></div> 
							<br>
							<b>Nombre del grupo hacker: </b><p>{{$hacker->grupoHacker->nombre}}</p>
							<p class="justificar">{{$hacker->grupoHacker->descripcion}}</p>
							<b><a href="{{route('detallegrupo',$hacker->grupo_hacker_id)}}">Más informacion</a></b>
							<br>
							<div class="centrartxt tamañotxt"><b>Mas hackers aqui</b></div> 
							<br>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img  class ="tamañoarticle" src="{{$hackerandom1->imagen}}" alt="">
									</span>
									<a href="{{route('detallehacker',$hackerandom1->id)}}">
										<h2>{{$hackerandom1->nombre}}</h2>
										<div class="content">
											<p>{{$hackerandom1->grupoHacker->nombre}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img  class ="tamañoarticle" src="{{$hackerandom2->imagen}}" alt="" />
									</span>
									<a href="{{route('detallehacker',$hackerandom2->id)}}">
										<h2>{{$hackerandom2->nombre}}</h2>
										<div class="content">
											<p>{{$hackerandom2->grupoHacker->nombre}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img  class ="tamañoarticle" src="{{$hackerandom3->imagen}}" alt="" />
									</span>
									<a href="{{route('detallehacker',$hackerandom3->id)}}">
										<h2>{{$hackerandom3->nombre}}</h2>
										<div class="content">
											<p>{{$hackerandom3->grupoHacker->nombre}}</p>
										</div>
									</a>
								</article>
							</section>
							
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>