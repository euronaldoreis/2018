<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar Partida - Liga Tarcio</title>

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
              <div class="row">
                <form class="col s12" action="http://localhost/liga/painel/salvar_partida/" method="post">
                	<p>Partida ocorrida em:</p>
                  <div class="row">
    
                    <div class="input-field  col s6">

                        <select name="time_um" class="browser-default">
                          <option value="" disabled selected>Escolha o time 1</option>
                          <?php foreach($times as $row): ?>
                            <option value="<? echo $row->idtimes;?>"  data-icon="http://localhost/liga/assets/escudos/<? echo $row->escudo; ?>" class="left"><? echo $row->nome; ?>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                       <input id="icon_prefix" type="text" name="time_um_gols" class="validate">
                      <label for="icon_prefix">Placar Time Um</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field  col s6">

                        <select name="time_dois" class="browser-default">
                          <option value="" disabled selected>Escolha o time 2</option>
                          <?php foreach($times as $row): ?>
                            <option value="<? echo $row->idtimes;?>"><? echo $row->nome; ?>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div class="input-field col s6">
                       <input id="icon_prefix" type="text" name="time_dois_gols" class="validate">
                      <label for="icon_prefix">Placar Time Dois</label>
                    </div>

                   <button type="submit" class="waves-effect waves-light btn red right">Salvar time</button>
                  </div>
              </form>
            </div>
          </div>

          </div>
        </div>
      </main>
    </div>

    <script type="text/javascript">
      var elem = document.querySelector('select');
      var instance = M.FormSelect.init(elem, options);

      // Or with jQuery

      $(document).ready(function(){
        $('select').formSelect();
      });
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>