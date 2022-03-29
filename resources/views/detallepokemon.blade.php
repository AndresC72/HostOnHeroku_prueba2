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
	<body class="pre-load">
		
		
		
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
							<h1>Detalles del pokemon {{$datos['name']}}</h1>
							@if($datos['types']['0']['type']['name'] == 'normal')
							<h2 class="normale">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'fighting')
							<h2 class="fightinge">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'flying')
							<h2 class="flyinge">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'poison')
							<h2 class="poisone">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'ground')
							<h2 class="grounde">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'rock')
							<h2 class="rocke">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'bug')
							<h2 class="buge">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'ghost')
							<h2 class="ghoste">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'steel')
							<h2 class="steele">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'fire')
							<h2 class="firee">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'water')
							<h2 class="watere">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'grass')
							<h2 class="grasse">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'electric')
							<h2 class="electrice">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'psychic')
							<h2 class="psychice">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'ice')
							<h2 class="icee">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'dragon')
							<h2 class="dragone">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'dark')
							<h2 class="darke">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'fairy')
							<h2 class="fairye">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'unknown')
							<h2 class="unknowne">Habilidades: </h2>
							@endif
							@if($datos['types']['0']['type']['name'] == 'shadow')
							<h2 class="shadowe">Habilidades: </h2>
							@endif
							
							<h2 class="etiqueta">{{$datos['abilities']['0']['ability']['name']}}</h2>
							@if(isset( $datos['abilities']['1']['ability']['name'] ) ? $datos['abilities']['1']['ability']['name'] : null )
							<h2 class="etiqueta">{{$datos['abilities']['1']['ability']['name']}}</h2>
							@endif
							<br>
							<br>
							<div style="background-image: url('../images/pic13.jpg'); background-repeat: no-repeat;background-size: cover">
							<br>
							<img  class="centrar tamaño" src="{{$datos['sprites']['other']['home']['front_default']}}" alt="" />
							<br>
						</div>
						<br>
						<div class="centrartxt tamañotxt"><b>Habilidades de {{$datos['name']}}</b></div>
						<br>
						<p class="justificar"><b>{{$datos['abilities']['0']['ability']['name']}} </b>: {{$data2['effect_entries']['0']['effect']}}</p>
						@if(isset( $datos['abilities']['1']['ability']['name'] ) ? $datos['abilities']['1']['ability']['name'] : null )
						<p class="justificar"><b>{{$datos['abilities']['1']['ability']['name']}} </b>: {{$data2['effect_entries']['1']['effect']}}</p>						
						@endif
						<br>
						<div class="centrartxt tamañotxt"><b>Movimientos de {{$datos['name']}}</b></div>
						<br>
						<p><b>{{$movimiento['contest_type']['name']}} </b>: {{$movimiento['effect_entries']['0']['effect']}}</p>
						<p><b>{{$movimiento['damage_class']['name']}} </b>: {{$movimiento['flavor_text_entries']['0']['flavor_text']}}</p>
						<div class="centrartxt tamañotxt"><b>Grafica de poder de {{$datos['name']}}</b></div>
						<br>
						<p>El HP es de: <span id="hp">{{$datos['stats']['0']['base_stat']}}</span></p>
						<p>El ataque es de: <span id="ataque">{{$datos['stats']['1']['base_stat']}}</span></p>
						<p>La defensa es de: <span id="defensa">{{$datos['stats']['2']['base_stat']}}</span></p>
						<div class="centrar tamaño3"><canvas id="myChart" width="100" height="100"></canvas></div>
						<br>
						<div class="centrartxt tamañotxt"><b>Otras imagenes de {{$datos['name']}}</b></div>
						<br>
						<section>
						<div class="box alt">
							<div class="row gtr-uniform">
								<div class="col-4"><span class="image fit"><img src="{{$datos['sprites']['front_default']}}" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="{{$datos['sprites']['front_shiny']}}" alt="" /></span></div>
								<div class="col-4"><span class="image fit"><img src="{{$datos['sprites']['other']['official-artwork']['front_default']}}" alt="" /></span></div>
							</div>
						</div>
						<br>
						<div class="centrartxt tamañotxt"><b>Mas pokemones</b></div>
						<br>
						</section>
						<section class="tiles">
							@if ($data4['types']['0']['type']['name'] == 'normal')
							<article class="normal">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'fighting')
							<article class="fighting">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'flying')
							<article class="flying">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'poison')
							<article class="poison">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'ground')
							<article class="ground">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'rock')
							<article class="rock">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'bug')
							<article class="bug">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'ghost')
							<article class="ghost">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'steel')
							<article class="steel">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'fire')
							<article class="fire">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'water')
							<article class="water">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'grass')
							<article class="grass">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'electric')
							<article class="electric">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'psychic')
							<article class="psychic">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'ice')
							<article class="ice">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'dragon')
							<article class="dragon">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'dark')
							<article class="dark">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'fairy')
							<article class="fairy">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'unknown')
							<article class="unknown">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data4['types']['0']['type']['name'] == 'shadow')
							<article class="shadow">
								<span class="image">
									<img src="{{$data4['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data4['name'],'/')}}">
									<h2>{{$data4['name']}}</h2>
									<div class="content">
										<p>{{$data4['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							<!--random 2-->
							@if ($data5['types']['0']['type']['name'] == 'normal')
							<article class="normal">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'fighting')
							<article class="fighting">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'flying')
							<article class="flying">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'poison')
							<article class="poison">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'ground')
							<article class="ground">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'rock')
							<article class="rock">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'bug')
							<article class="bug">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'ghost')
							<article class="ghost">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'steel')
							<article class="steel">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'fire')
							<article class="fire">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'water')
							<article class="water">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'grass')
							<article class="grass">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'electric')
							<article class="electric">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'psychic')
							<article class="psychic">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'ice')
							<article class="ice">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'dragon')
							<article class="dragon">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'dark')
							<article class="dark">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'fairy')
							<article class="fairy">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'unknown')
							<article class="unknown">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data5['types']['0']['type']['name'] == 'shadow')
							<article class="shadow">
								<span class="image">
									<img src="{{$data5['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data5['name'],'/')}}">
									<h2>{{$data5['name']}}</h2>
									<div class="content">
										<p>{{$data5['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							<!--random 3-->
							@if ($data6['types']['0']['type']['name'] == 'normal')
							<article class="normal">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'fighting')
							<article class="fighting">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'flying')
							<article class="flying">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'poison')
							<article class="poison">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'ground')
							<article class="ground">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'rock')
							<article class="rock">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'bug')
							<article class="bug">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'ghost')
							<article class="ghost">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'steel')
							<article class="steel">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'fire')
							<article class="fire">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'water')
							<article class="water">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'grass')
							<article class="grass">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'electric')
							<article class="electric">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'psychic')
							<article class="psychic">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'ice')
							<article class="ice">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'dragon')
							<article class="dragon">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'dark')
							<article class="dark">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'fairy')
							<article class="fairy">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'unknown')
							<article class="unknown">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							@if ($data6['types']['0']['type']['name'] == 'shadow')
							<article class="shadow">
								<span class="image">
									<img src="{{$data6['sprites']['other']['home']['front_default']}}" alt="" />
								</span>
								<a href="{{route('detallepokemon',$data6['name'],'/')}}">
									<h2>{{$data6['name']}}</h2>
									<div class="content">
										<p>{{$data6['types']['0']['type']['name']}}</p>
									</div>
								</a>
							</article>
							@endif
							
							
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
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<script>
				

				const ctx = document.getElementById('myChart').getContext('2d');
				const myChart = new Chart(ctx, {
					type: 'polarArea',
					data: {
						labels: ['Ataque', 'Defensa', 'HP'],
						datasets: [{
							label: '# of Votes',
							data: [{{$datos['stats']['1']['base_stat']}}, {{$datos['stats']['2']['base_stat']}}, {{$datos['stats']['0']['base_stat']}}],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)'
							],
							borderColor: [
								'rgba(255, 99, 132, 1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
				</script>
	</body>
</html>