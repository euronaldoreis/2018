	 <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

	    <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
	    	<div class="mdl-card__supporting-text table">
	    		<h4>Artilharia</h4>
	    		<table>
	    			<thead>
    				  <tr>
    				  	  <th>Clas.</th>
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
		    						<div style="font-size: 16px;">
		    							<?php echo $row->jogador; ?>
		    						</div>
		    						<div  style="padding-top: 6px; font-size: 12px;">
		    							<span><img src="<?php echo base_url('assets/escudos/'); ?><?php echo $row->escudo; ?>" style="width: 24px; padding-right: 4px;"></span>
		    							<span><?php echo $row->time; ?></span>
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