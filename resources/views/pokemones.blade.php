<!DOCTYPE HTML>
<html>
	<head>
		<title>Hackers History</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="">
		
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="{{route('index')}}" class="logo">
									<span class="symbol"><img src="images/cargapoke.gif" alt="" /></span><span class="title">PICKYOURIMAGE</span>
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
							<li><a href="{{route('login')}}">PERFIL</a></li>
							
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						
						<div class="inner">
							
							<header>
								<h1>Pokemones</h1>		
							</header>

							@auth
							<section class="tiles">
								@foreach($pokemon as $poke)
								@if($poke['tipo'] == 'normal')
								<article class="style7">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style7">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style7">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'dark')
								<article class="style8">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style8">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style8">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'water')
								<article class="style2">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'steel')
								<article class="style9">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style9">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style9">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'fairy')
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'fighting')
								<article class="style10">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style10">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style10">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'poison')
								<article class="style13">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style13">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style13">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'ground')
								<article class="style12">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style12">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style12">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'rock')
								<article class="style14">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style14">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style14">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'bug')
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style1">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'ghost')
								<article class="style15">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style15">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style15">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'electric')
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'psychic')
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style11">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'ice')
								<article class="style3">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@if($poke['tipo'] == 'dragon')
								<article class="style16">
									<span class="image">
										<img src="{{$poke['imagen1']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style16">
									<span class="image">
										<img src="{{$poke['imagen2']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								<article class="style16">
									<span class="image">
										<img src="{{$poke['imagen3']}}" alt="" />
									</span>
									<a href="{{route('detallepokemon',$poke['nombre'],'/')}}">
										<h2>{{$poke['nombre']}}</h2>
										<div class="content">
											<p>{{$poke['tipo']}}</p>
										</div>
									</a>
								</article>
								@endif
								@endforeach
							</section>
							@endauth
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>COMENTARIOS</h2>
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
										<li><input type="submit" value="ENVIAR" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>REDES SOCIALES</h2>
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
		<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>