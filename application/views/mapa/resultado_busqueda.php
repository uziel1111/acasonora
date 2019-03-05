<div class='container'>
  <div class='row'>          
    <h3>Resultado de Búsqueda</h3>          
    </div>        
    <div class='box-body'>        
    <p>Aquí se puede incluir alguna descripción de los resultados mostrados a continuación:</p>            
    <div class='row'>          
    <div class='col-sm-12'>            
	<table class='table table-hover text-center'>
	<thead>
	  <tr>
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


	<?php foreach ($result as $key => $item) {  ?>

		<tr>
			<td><?= $item['cct'] ?></td>
			<td><?= $item['turno'] ?></td>
			<td><?= $item['nom_esc'] ?></td>
			<td><?= $item['nivel'] ?></td>
			<td><?= $item['municipio'] ?></td>
			<td><?= $item['localidad'] ?></td>
			<td><?= $item['domicilio_esc'] ?></td>
			<td><a class="fancybox fancybox.iframe" style="margin:0px;padding:0px;" href="#" data-custom-value="<?=$item['cct'] ?>"><span class="glyphicon glyphicon-stats"></span></a></td>
		</tr>
	<?php 
	}
	?>
	</table>
    </div>              
   </div>
  </div>
 </div>