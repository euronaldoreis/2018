<?php 
var_dump($partidas);
die(); ?>


<h4 class="center">Rodada 1</h4>
	<?php foreach ($partidas as $row): ?>
	  <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

	    <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">

	      <div class="mdl-card__supporting-text">
	        	<h5>Jogo <?php echo $row->idpartidas; ?></h5>
			    <div class="mdl-grid center-items">
			        <div class="mdl-cell mdl-cell--5-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
			        	<img src="<?php echo base_url(); ?>assets/escudos/<?php echo $row->time_um_escudo; ?>" style="width: 80px">
			        	<p style="margin-top: 20px;"><?php echo $row->time_um; ?></p>
			        </div>
			        <div class="mdl-cell mdl-cell--2-col mdl-cell--2-col-phone center" style="margin-top: 10px;">
			        	<h3><?php echo $row->time_um_gols .' x '. $row->time_dois_gols;?></h3>
			        </div>
			        <div class="mdl-cell mdl-cell--5-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
			        	<img src="<?php echo base_url(); ?>assets/escudos/<?php echo $row->time_dois_escudo; ?>" style="width: 80px">
			        	<p style="margin-top: 20px;"><?php echo $row->time_dois; ?></p>
			        </div>
			        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-phone center">
			        	<p><?php echo $row->data; ?></p>
			        </div>
			    </div>
	      </div>
	      <!--<div class="mdl-card__actions">
	        <a href="#" class="mdl-button">Mais detalhes da partida</a>
	      </div>-->
	    </div>
	  </section>
	<?php endforeach; ?>