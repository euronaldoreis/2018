<div class="page-content center">
	<div class="container" style="margin-top: 30px;">
		<table>
		    <thead>
		      <tr>
		          <th>TIME</th>
		          <th></th>
		      </tr>
		    </thead>

	    <tbody style="background-color: #ffffff;">
	    	<?php foreach ($times as $row): ?>
		      <tr>
					<td class="escudo" style="padding: 20px!important;"> <img src="assets/escudos/<?php echo $row->escudo; ?>" style="width: 50px"></td>
		        <td style="padding: 20px!important;">
		        	<?php echo $row->nome; ?>
		        </td>
		      </tr>
	  	<?php endforeach; ?>
	    </tbody>
	</table>
</div>

</div>