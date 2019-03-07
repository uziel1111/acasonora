<br>
<div class='container'>
    <h2><center>Resultado de Búsqueda</center></h2>          
    <br>
	    <p>Aquí se puede incluir alguna descripción de los resultados mostrados a continuación:</p>    
	    <br>
	    <div class='row'>          
		    <div class='col-sm-12'>            
				<table class='table table-bordered'>
				<thead>
				  	<tr class="bg-info">
					    <th>CCT</th>
					    <th>Turno</th>
					    <th>Nombre</th>
					    <th>Nivel</th>
					    <th>Municipio</th>
					    <th>Localidad</th>
					    <th>Domicilio</th>
					    <th>Estadísticas</th>
				  	</tr>
				</thead>


				<?php foreach ($result as $key => $item) {  
					$id_cct=$item['id_cct'];
					// echo base_url('index.php/mapa/estadistica/$id_cct');
					// die();
					?>
					<tr>
						<td cope="col"><?= $item['cct'] ?></td>
						<td cope="col"><?= $item['turno'] ?></td>
						<td cope="col"><?= $item['nom_esc'] ?></td>
						<td cope="col"><?= $item['nivel'] ?></td>
						<td cope="col"><?= $item['municipio'] ?></td>
						<td cope="col"><?= $item['localidad'] ?></td>
						<td cope="col"><?= $item['domicilio_esc'] ?></td>
						<td >
							<button class="btn btn-info btn-block" id="ver_detalle">Info_escuela</button>
							 <?= form_input_hidden('id_cct', $item['id_cct'], array('id' => 'id_cct', 'class'=>'form-control input_cct')) ?>
						</td>
					</tr>
				<?php 
				}
				?>
				</table>
		    </div>              
	   </div>
</div>
<script src="<?= base_url('assets/js/mapa/estadistica.js'); ?>"></script>
<div id="visor_estadistica"></div>

