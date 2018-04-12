<?php foreach ($times as $row): ?>
	<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
		<div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">

	      <div class="mdl-card__supporting-text">
			    <div class="mdl-grid">
			        <div class="mdl-cell mdl-cell--5-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
			        	<img src="assets/escudos/<?php echo $row->escudo; ?>" style="width: 100px;">
			        	
			        </div>
			        <div class="mdl-cell mdl-cell--6-col mdl-cell--3-col-tablet mdl-cell--1-col-phone center">
			        	<h3 style="margin-top: 20px;"><?php echo $row->nome; ?></h3>
			        </div>
			    </div>
	      </div>
	      <div class="mdl-card__actions">
	        <a href="#" class="mdl-button">Mais detalhes do time [Em breve]</a>
	      </div>
	    </div>

	</section>
<?php endforeach; ?>