<!DOCTYPE html>
<html>
<head>
  <title>Painel - Liga Tarcio</title>

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
          <div class="container" style="margin-top: 30px;">
            <div class="row">
              <div class="col s12 m12">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo base_url('assets/img/partidas.jpg'); ?>" style="height: 235px;">
                    <span class="card-title">Partidas</span>
                    <a href="<?php echo base_url('painel/partidas'); ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p>Gerenciamento das partidas das rodadas</p>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo base_url('assets/img/bernabeu.jpeg'); ?>" style="width: 244; height: 235px;">
                    <span class="card-title">Times</span>
                    <a href="<?php echo base_url('painel/times'); ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p>Gerenciamento dos times</p>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo base_url('assets/img/time.jpeg'); ?>" style="width: 244; height: 235px;">
                    <span class="card-title">Jogadores</span>
                    <a href="<?php echo base_url('painel/jogadores'); ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p>Gerenciamento dos jogadores</p>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo base_url('assets/img/trofeu.jpeg'); ?>" style="width: 244; height: 235px;">
                    <span class="card-title">Classificação</span>
                    <a href="<?php echo base_url('painel/classificacao'); ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p>Gerenciamento da classificação da classificacao da Liga</p>
                  </div>
                </div>
              </div>

              <div class="col s12 m6">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo base_url('assets/img/artilharia.jpeg'); ?>" style="width: 244; height: 235px;">
                    <span class="card-title">Artilharia</span>
                    <a href="<?php echo base_url('painel/artilharia'); ?>" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                  </div>
                  <div class="card-content">
                    <p>Gerenciamento da artilharia da Liga</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>