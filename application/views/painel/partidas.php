<!DOCTYPE html>
<html>
<head>
  <title>Partidas - Liga Tarcio</title>

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
              <a href="<?php echo base_url('painel/cadastrar_partida'); ?>" class="waves-effect waves-light btn red right"><i class="material-icons left">add</i>Nova partida</a>
            </div>
            <?php foreach ($partidas as $row): ?>
              <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

                <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">

                  <div class="mdl-card__supporting-text">
                      <h5>Jogo <?php echo $row->idpartidas; ?></h5>
                    <div class="mdl-card__actions">
                   <a href="<?php echo base_url('painel/editar_partida/'); ?><?php echo $row->idpartidas; ?>" class="secondary-content btn-floating btn waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
                  </div>
                    <div class="mdl-grid center-items">
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
                          <img src="<?php echo base_url('assets/escudos/'); ?><?php echo $row->time_um_escudo; ?>" style="width: 80px">
                          <p style="margin-top: 20px;"><?php echo $row->time_um; ?></p>
                        </div>
                        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone center" style="margin-top: 10px;">
                          <h3><?php echo $row->time_um_gols .' x '. $row->time_dois_gols;?></h3>
                        </div>
                        <div class="mdl-cell mdl-cell--5-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
                          <img src="<?php echo base_url('assets/escudos/'); ?><?php echo $row->time_dois_escudo; ?>" style="width: 80px">
                          <p style="margin-top: 20px;"><?php echo $row->time_dois; ?></p>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone center">
                          <p><?php echo date('d/m/Y', strtotime($row->data)); ?></p>
                        </div>
                    </div>
                  </div>

                </div>
              </section>
            <?php endforeach; ?>
          </div>
        </div>
      </main>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>