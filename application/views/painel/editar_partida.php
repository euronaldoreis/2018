<!DOCTYPE html>
<html>
<head>
  <title>Editar Partida - Liga Tarcio</title>

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
              <a href="<?php echo base_url('painel/partidas'); ?>" class="waves-effect waves-light btn"><i class="material-icons left"></i>Voltar</a>
            </div>
            <div class="card-panel">
              <?php if($partida): ?>
              <div class="row">
                <form class="col s12" action="http://localhost/liga/painel/salvar_partida/<?php echo $partida[0]->idpartidas;?>" method="post">
                	<p>Partida ocorrida em: <?php echo date('d/m/Y', strtotime($partida[0]->data)); ?></p>
                  <div class="row">
                    <input id="icon_prefix" type="hidden" name="idpartidas" value="<?php echo $partida[0]->idpartidas; ?>" class="validate">
                    <div class="input-field col s6">
                      <input id="icon_prefix" type="text" name="nome" value="<?php echo $partida[0]->time_um; ?>" class="validate">
                      <label for="icon_prefix">Time 1</label>
                    </div>
                    <div class="input-field col s6">
                       <input id="icon_prefix" type="text" name="time_um_gols" value="<?php echo $partida[0]->time_um_gols; ?>" class="validate">
                      <label for="icon_prefix">Placar Time Um</label>
                    </div>
                   <div class="input-field col s6">
                      <input id="icon_prefix" type="text" name="nome" value="<?php echo $partida[0]->time_dois; ?>" class="validate">
                      <label for="icon_prefix">Time 2</label>
                    </div>
                    <div class="input-field col s6">
                       <input id="icon_prefix" type="text" name="time_dois_gols" value="<?php echo $partida[0]->time_dois_gols; ?>" class="validate">
                      <label for="icon_prefix">Placar Time Dois</label>
                    </div>

                   <button type="submit" class="waves-effect waves-light btn red right">Salvar time</button>
                  </div>
              </form>
            </div>
          <?php endif; ?>
          </div>

          </div>
        </div>
      </main>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>