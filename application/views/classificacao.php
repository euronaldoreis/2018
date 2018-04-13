<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

	    <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
	    	<div class="mdl-card__supporting-text table">
	    		<h4>Classificação</h4>
	    		<table>
	    			<thead>
    				  <tr>
    				  	  <th></th>
	    				  <th></th>
			              <th style="text-align: center;">PTS</th>
			              <th style="text-align: center;">PJ</th>
			              <th style="text-align: center;">VIT</th>
			              <th style="text-align: center;">E</th>
			              <th style="text-align: center;">DER</th>
			              <th style="text-align: center;">SG</th>
		              </tr>
	    			</thead>

	    			<tbody>
	    				<?php foreach ($classificacao as $row): ?>
		    				<tr>
		    					<td><img src="assets/escudos/<?php echo $row->escudo; ?>" width="40px;"></td>
		    					<td><?php echo $row->nome; ?></td>
		    					<td style="text-align: center;"><?php echo $row->pts; ?></td>
		    					<td style="text-align: center;"><?php echo $row->pj; ?></td>
		    					<td style="text-align: center;"><?php echo $row->vit; ?></td>
		    					<td style="text-align: center;"><?php echo $row->e; ?></td>
		    					<td style="text-align: center;"><?php echo $row->der; ?></td>
		    					<td style="text-align: center;"><?php echo $row->sg; ?></td>
		    				</tr>
	    				<?php endforeach; ?>
	    			</tbody>
	    		</table>
	    	</div>

	    <div class="mdl-card__actions">
	        <p>* PTS = Pontos, PJ = Partidas Jogadas, VIT = Vitórias, E = Empates, DER = Derrotas, SG = Saldo de Gol</p>
	    </div>

	    </div>

	  </section>