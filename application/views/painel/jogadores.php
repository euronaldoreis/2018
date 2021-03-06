<!DOCTYPE html>
<html>
<head>
  <title>Jogadores - Liga Tarcio</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>

    <!-- Uses a header that scrolls with the text, rather than staying
      locked at the top -->
    <div class="mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--scroll">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Painel</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Painel</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="<?php echo base_url('painel/times'); ?>">Times</a>
          <a class="mdl-navigation__link" href="<?php echo base_url('painel/jogadores'); ?>">Jogadores</a>
          <a class="mdl-navigation__link" href="<?php echo base_url('painel/classificacao'); ?>">Classificação</a>
          <a class="mdl-navigation__link" href="<?php echo base_url('painel/artilharia'); ?>">Artilharia</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
          <div class="container" style="margin-top: 70px;">
          	<div style="margin-bottom: 20px;">
          		<a href="<?php echo base_url('painel'); ?>" class="waves-effect waves-light btn"><i class="material-icons left"></i>Voltar</a>
          		<a href="<?php echo base_url('painel/cadastrar_jogador'); ?>" class="waves-effect waves-light btn red right"><i class="material-icons left">add</i>Novo jogador</a>
          	</div>
          	  <ul class="collection">
          	  	<?php foreach ($jogadores as $row): ?>
				    <li class="collection-item avatar">
				      <img src="<?php echo base_url('assets/escudos/'); ?><?php echo $row->escudo; ?>" alt="" class="circle">
				      <span class="title"><?php echo $row->jogador .' '. $row->camisa; ?></span>
				      <p>Time: <?php echo $row->nome; ?> <br>
				         Gols: 
				      </p>
				      <a href="<?php echo base_url('painel/editar_jogador/'); ?><?php echo $row->idjogadores; ?>" class="secondary-content btn-floating btn waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
				    </li>
				<?php endforeach; ?>
			  </ul>
          </div>
        </div>
      </main>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>