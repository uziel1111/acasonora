<br>
<div class='container'>
	<?= form_open('estadistica/escuelas') ?>
    <h2><center>Resultado de Búsqueda</center></h2>          
    <br>
	    <p>Aquí se puede incluir alguna descripción de los resultados mostrados a continuación:</p>    
	    <br>
	    <div id="table_escuelas">
      		<div class="table-responsive">         
				<table class='table table-bordered'>
				<thead  class="bg-info">
				  	<tr>
					    <th scope="col">CCT</th>
					    <th scope="col">Turno</th>
					    <th scope="col">Nombre</th>
					    <th scope="col">Nivel</th>
					    <th scope="col">Municipio</th>
					    <th scope="col">Localidad</th>
					    <th scope="col">Domicilio</th>
				  	</tr>
				</thead>


				<?php foreach ($result as $item) {  
					?>
					<tr data-idescuela="<?= $item['id_cct'] ?>">
						<td><?= $item['cct'] ?></td>
						<td><?= $item['turno'] ?></td>
						<td><?= $item['nom_esc'] ?></td>
						<td><?= $item['nivel'] ?></td>
						<td><?= $item['municipio'] ?></td>
						<td><?= $item['localidad'] ?></td>
						<td><?= $item['domicilio_esc'] ?></td>
					</tr>
				<?php 
				}
				?>
				</table>
		    </div>              
	   </div>
	    <?php
          $data = array(
              'name' => '',
              'id' => '',
              'value' => 'true',
              'type' => 'submit',
              'class'=>'btn btn-info btn-style-1 btn-block',
              'content' => '<i class="fa fa-search"></i>',
              'data-toggle' => "tooltip",
              'data-placement' => "top",
              'title' => ''
          );
          echo form_button($data);
          ?>
          <?= form_close() ?>
</div>
<script src="<?= base_url('assets/js/mapa/estadistica.js'); ?>"></script>
<div id="visor_estadistica"></div>

