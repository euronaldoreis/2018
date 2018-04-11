<!DOCTYPE html>
<html>
<head>
	<title>Liga Tarcio</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<link rel="icon" href="assets/img/favicon.png" />
</head>

<body>
	<style type="text/css">

		body {
			background-color: #e9e9e9;
		}
		.jogo_name tr {
			border-bottom: none;
			padding-top: 20px;
		}
		.jogo_date tr {
			border-bottom: none;
		}

		.jogo_date {
			margin-left: 30%;
		}

		.escudo {
			height: 40px;
			width: 60px;
		}
		.mdl-layout__container {
			position: relative!important;
		}
	</style>

	<!-- Simple header with fixed tabs. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--header mdl-layout--fixed-tabs">
	  <header class="mdl-layout__header">
	    <div class="mdl-layout__header-row">
	      <!-- Title -->
	      <span class="mdl-layout-title center"><h4>Liga Tárcio [PATROCINADOR] dos Campeões</h4></span>
	    </div>
	    <!-- Tabs -->
	    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
	      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Partidas</a>
	      <a href="#fixed-tab-2" class="mdl-layout__tab">Classificação</a>
	      <a href="#fixed-tab-3" class="mdl-layout__tab">Artilharia</a>
	      <a href="#fixed-tab-4" class="mdl-layout__tab">Times</a>
	      <a href="#fixed-tab-5" class="mdl-layout__tab">Sobre</a>
	    </div>
	  </header>
	  <main class="mdl-layout__content">
	    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
	    	<?php include('partidas.php'); ?>
	    </section>
	    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
	    	<?php include('classificacao.php'); ?>
	    </section>
	    <section class="mdl-layout__tab-panel" id="fixed-tab-3">
	      <div class="page-content center">
	      	<div class="container" style="margin-top: 30px;">
	      		<p>Os dados estatísticos serão calculados no ínicio do campeonato.</p>
	      	</div>
	      </div>
	    </section>
	    <section class="mdl-layout__tab-panel" id="fixed-tab-4">
	    	<?php include('times.php'); ?>
	    </section>
	    <section class="mdl-layout__tab-panel" id="fixed-tab-5">
	    	<?php include('sobre.php'); ?>
	    </section>
	  </main>
	</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>