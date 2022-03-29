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
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../../assets/css/noscript.css" /></noscript>
	</head>
	<body class="">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="../../images/logo.svg" alt="" /></span><span class="title">Phantom</span>
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
							<h1>Detalles del grupo hacker: {{$grupo->nombre}} </h1>
							<h2 class="etiqueta">Localizacion: {{$grupo->localizacion}}</h2>
							<h2 class="etiqueta">Estatus: {{$grupo->estatus}}</h2>
							<br>
							<br>
							<div class="">							
								<span class="image main"><img src="{{$grupo->imagen}}" alt="" /></span>
							</div>
							<br>
							<br>
							<div class="centrartxt tamañotxt"><b>Descripcion de {{$grupo->nombre}}</b></div>
							<br>
							<p class="justificar">{{$grupo->descripcion}}</p>
							<br>
							<b>Numero de integrantes: </b><p>{{$grupo->numero_integrantes}}</p>
							<b>Estatus: </b><p>{{$grupo->estatus}}</p>
							<b>Fecha de aparicion: </b><p>{{$grupo->fecha_aparicion}}</p>
							<b>Localizacion: </b><p>{{$grupo->localizacion}}</p>
							<b>Registro creado el: </b><p>{{$grupo->created_at}}</p>
							<b>Registro modificado el: </b><p>{{$grupo->updated_at}}</p>
							<div class="centrartxt tamañotxt"><b>Integrantes de {{$grupo->nombre}}</b></div>
							<section class="tiles">
							@foreach($hacker as $hack)
							<article class="style1">
								<span class="image">
									<img  class ="tamañoarticle" src="{{$hack->imagen}}" alt="">
								</span>
								<a href="{{route('detallehacker',$hack->id)}}">
									<h2>{{$hack->nombre}}</h2>
									<div class="content">
										<p>{{$hack->grupoHacker->nombre}}</p>
									</div>
								</a>
							</article>
							@endforeach
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