<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="App da Liga Tarcio">
	<title>Liga Tarcio</title>

	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="icon" href="assets/img/favicon.png" />
</head>

<body class="mdl-demo mdl-base">
	<style type="text/css">

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

		.mdl-grid.center-items {
		  justify-content: center;
		}
		.center {
			text-align: center;
		}
	</style>
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Liga Tarcio</a>
    </div>
    <div class="nav-content center">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#fixed-tab-1">Partidas</a></li>
        <li class="tab"><a  href="#fixed-tab-2">Classificação</a></li>
        <li class="tab"><a href="#fixed-tab-3">Artilharia</a></li>
        <li class="tab"><a href="#fixed-tab-4">Times</a></li>
      </ul>
    </div>
  </nav>

	<!-- Simple header with fixed tabs. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--header">
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
    <script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js"></script>
</body>
</html>