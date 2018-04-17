<div class="center">
		<img src="<?php echo base_url("assets/img/trofeu.jpg"); ?>" style="width: 220px; margin-bottom: 30px;">
</div>

<?php var_dump($jogadores);
die(); ?>

	 <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

	    <div class="img_artilharia mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
	    	<div class="mdl-card__supporting-text table">
	    		<h4>Artilharia</h4>
	    		<table>
	    			<thead>
    				  <tr>
    				  	  <th>Clas.</th>
    				  	  <th></th>
	    				  <th>Jogador</th>
			              <th></th>
			              <th></th>
			              <th>Gols</th>
		              </tr>
	    			</thead>

	    			<tbody>
	    				<?php
	    				 $pos = 1;
	    				 foreach ($jogadores as $row): ?>
		    				<tr>
		    					<td><?php echo $pos; ?></td>
		    					<td>
		    					    <?php if($row->capitao == 'S'):?> <img src="<?php echo base_url('assets/img/bracadeira.png'); ?>" alt="Braçadeira de Capitão" style="width: 24px!important;"><?php endif;?>
		    					</td>
		    					<td>
		    						<div style="font-size: 16px;">
		    							<img src="<?php echo base_url('assets/escudos/'); ?><?php echo $row->escudo; ?>" style="width: 36px; margin-right: -20px;">
		    							<img src="<?php echo base_url('assets/img/'); ?><?php echo $row->foto; ?>" style="width: 36px; border-radius: 50%; border: 2px solid #fff;">
		    							<?php echo $row->jogador;?>
		    						</div>
		    					</td>
		    					<td></td>
		    					<td></td>
		    					<td><?php echo $row->gols; ?></td>
		    				</tr>
	    				<?php
	    				$pos = $pos + 1; endforeach; ?>
	    			</tbody>
	    		</table>
	    	</div>

	    <div class="mdl-card__actions">
	        <p></p>
	    </div>

	    </div>

	  </section>