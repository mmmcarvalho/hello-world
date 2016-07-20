<?php

// Informações sobre o Software
date_default_timezone_set ( 'America/Belem' );

$stat 			= stat ( __FILE__ );
$iBUILDATE 		= date ( "d/m/Y H:m:s T", $stat ['mtime'] );
$iVERSAO 		= "0.3";
$iANO 			= date ( "Y" );

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello World</title>
<style>
body {
	font-family: Verdana, Geneva, sans-serif;
}

div.container {
	width: 100%;
	border: 1px solid gray;
}

header, footer {
	padding: 1em;
	color: white;
	background-color: black;
	clear: left;
	text-align: center;
}

nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1em;
}

nav ul {
	list-style-type: none;
	padding: 0;
}

nav ul a {
	text-decoration: none;
}

article {
	margin-left: 170px;
	border-left: 1px solid gray;
	padding: 1em;
	overflow: hidden;
}
</style>
</head>
<body>

	<div class="container">

		<header>
			<h1 class="header">Hello World</h1>
			<small>Vers&atilde;o <?= $iVERSAO ?></small> <br> <small>Última atualização: <?= $iBUILDATE ?></small>
		</header>

		<nav>
			<ul>
				<li><a href="#">Sobre</a></li>
			</ul>
		</nav>

		<article>
			<h1>Hello World</h1>
			<p>Página de HTML5 implementada para teste em geral.</p>
			<p>Teste de <i>lay-out</i> HTML5 com as novas tags.</p>
			<ul>
				<li><code>&lt;header&gt;</code></li>
				<li><code>&lt;nav&gt;</code></li>
				<li><code>&lt;article&gt;</code></li>
				<li><code>&lt;footer&gt;</code></li>
			</ul>

		</article>

		<footer>
			Copyright © 2016 backoffice.net.br. Todos os direitos reservados.
			<br>
			Tecnologia <b style="font-size: 15px">&#127864;Pub!</b>
		</footer>

	</div>

</body>
</html>
