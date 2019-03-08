
<div class="modal fade" id="modal_resultado_estadistica" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: scroll;">
  	<div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content modal-style-1">
	      	<div class="modal-header bgcolor-2">
	        	<h5 class="modal-title text-white" id="exampleModalLabel"></h5>
		        <button type="button" class="close" data-dismiss="modal"  aria-label="Close" id="close_modal_resultado_estadistica">
		          	<span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="container">
		        <div class="row">
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
		            	<div class="form-group form-group-style-1">
		              		<?= form_label('Nombre:', 'nombre') ?>
		              		<?= $result[0]['nombre_centro']?>
		            	</div>
		          	</div>
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Nivel:', 'nivel') ?>
			             	<?= $result[0]['nivel']?>
			            </div>
		          	</div>
		            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Región estratégica:', 'region') ?>
			             	<?= $result[0]['region']?>
			            </div>
		          	</div>
		        </div>
		        <div class="row">
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
		            	<div class="form-group form-group-style-1">
		              		<?= form_label('Zona:', 'zona') ?>
		              		<?= $result[0]['zona']?>
		            	</div>
		          	</div>
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Municipio:', 'municipio') ?>
			             	<?= $result[0]['municipio']?>
			            </div>
		          	</div>
		            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Estatus:', 'estatus') ?>
			             	<?= $result[0]['estatus']?>
			            </div>
		          	</div>
		        </div>
		        <div class="row">
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
		            	<div class="form-group form-group-style-1">
		              		<?= form_label('Modalidad:', 'modalidad') ?>
		              		<?= $result[0]['modalidad']?>
		            	</div>
		          	</div>
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Sostenimiento:', 'sostenimiento') ?>
			             	<?= $result[0]['sostenimiento']?>
			            </div>
		          	</div>
		            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Domicilio:', 'domicilio') ?>
			             	<?= $result[0]['domicilio']?>
			            </div>
		          	</div>
		        </div>
		        <div class="row">
		          	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
		            	<div class="form-group form-group-style-1">
		              		<?= form_label('Localidad:', 'localidad') ?>
		              		<?= $result[0]['localidad']?>
		            	</div>
		          	</div>
		         
		            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
			            <div class="form-group form-group-style-1">
			              	<?= form_label('Nombre del director:', 'nombre_director') ?>
			             	<?= $result[0]['nombre_director']?>
			            </div>
		          	</div>
		        </div>
		        <h2><center>Estadística</center></h2>
			       <div  id="visor_graficas_estadistica" class="row">	
			       </div>
		        <br>
		       	<h2><center>Indicadores de permanencia</h2></center>
		        <div  class="row">
		        	<div class="col-12 col-sm-12 col-md-4 col-lg-4">
				       	<div id="visor_graficas_indicadores_permanencia"  style="width: 200px; height: 200px;">
				        </div>
				        <div data-toggle="popover" data-placement="bottom" data-placement="top" data-content="Porcentaje de alumnos que permanecen en la escuela entre ciclos escolares consecutivos antes de concluir el nivel educativo de referencia, por cada cien alumnos matriculados al inicio del ciclo escolar. Fuente: INEE">
					    	<center>Retención</center>	
	            		</div> 

				    </div>
				    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
				       	<div id="visor_graficas_indicadores_permanencia1" style="width: 200px; height: 200px;">
				        </div>
				        <div data-toggle="popover" data-placement="bottom" data-placement="top" data-content="Porcentaje de alumnos aprobados de un determinado grado, por cada cien alumnos que están matriculados al final del ciclo escolar. Fuente: INEE">
					    	<center>Aprobación</center>	
	            		</div> 
				    </div>
				    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
				       	<div id="visor_graficas_indicadores_permanencia2" style="width: 200px; height: 200px;">
				        </div>
				        <div data-toggle="popover" data-placement="bottom" data-placement="top" data-content="Porcentaje de alumnos que egresan de cierto nivel o tipo educativo en un determinado ciclo escolar por cada cien alumnos de nuevo ingreso, inscritos tantos ciclos escolares atrás como dure el nivel o tipo educativo en cuestión. Fuente: INEE">
					    	<center>Eficiencia Terminal</center>	
	            		</div> 
				    </div>
		        </div>
		        <div id="container"></div>
		        <h2><center>Indicadores de aprendizaje</center></h2>
			    <div  class="row">
			    	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				       	<div id="visor_graficas_indicadores_aprendizaje" style="width:20%; height:20%" 
				       	>
				        </div>
				    </div>
				    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
				        <div id="visor_graficas_indicadores_aprendizaje1" style="width:20%; height:20%">
				        </div>
				    </div>
			    </div>
			    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
			    	<table class='table table-bordered'>
		              	<thead>
			                <tr class="bg-info">
			                  	<th class="text-center"></th>
			                  	<th class="text-center" colspan="4">Lenguaje y comunicación</th>
			                  	<th class="text-center" colspan="4">Matemáticas</th>
			                </tr>
		              	</thead>
		              	<tbody>
			                <tr>
			                  	<th class="text-center"></th>
			                  	<td cope="col" class="text-center">I</td>
			                  	<td cope="col" class="text-center">II</td>
			                  	<td cope="col" class="text-center">II</td>
			                  	<td cope="col" class="text-center">IV</td>
			                  	<td cope="col" class="text-center">I</td>
			                  	<td cope="col" class="text-center">II</td>
			                  	<td cope="col" class="text-center">II</td>
			                  	<td cope="col" class="text-center">IV</td>
			                </tr>
			                <tr>
			                  	<th class="text-center">Estado de Sonora Planea 2015</th>
			                  	<td cope="col" class="text-center">38.8%</td>
			                  	<td cope="col" class="text-center">20.1%</td>
			                  	<td cope="col" class="text-center">25.9%</td>
			                  	<td cope="col" class="text-center">15.3%</td>
			                  	<td cope="col" class="text-center">42.2%</td>
			                  	<td cope="col" class="text-center">30.4%</td>
			                  	<td cope="col" class="text-center">16.1%</td>
			                  	<td cope="col" class="text-center">11.3%</td>
			                </tr>
			                <tr>
			                  	<th class="text-center">Nacional Planea 2015</th>
			                  	<td cope="col" class="text-center">43%</td>
			                  	<td cope="col" class="text-center">21%</td>
			                  	<td cope="col" class="text-center">24%</td>
			                  	<td cope="col" class="text-center">12%</td>
			                  	<td cope="col" class="text-center">51%</td>
			                  	<td cope="col" class="text-center">30%</td>
			                  	<td cope="col" class="text-center">12%</td>
			                  	<td cope="col" class="text-center">6%</td>
			                </tr>
		              	</tbody>
            		</table>
			    </div>
			    <br>
			    <h2><center>Riesgo de abandono escolar</center></h2>
		        <div  class="row">
		        	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
				       	<div id="visor_graficas_riesgo" style="width:20%; height:20%" 
				       	>
				        </div>
				    </div>
				    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
				        <div id="visor_graficas_riesgo1" style="width:20%; height:20%">
				        </div>
				    </div>
		        </div>
		        <div class="row">
			        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
			            <table class="table table-bordered">
			              <thead>
			                <tr>
			                  <th class="text-center">Total</th>
			                  <th class="text-center">Muy Alto</th>
			                  <th class="text-center">Alto</th>
			                  <th class="text-center">Medio</th>
			                  <th class="text-center">Bajo</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <td class="text-center">224</td>
			                  <td class="text-center" style="background-color:#FF0000; color:white;">1</td>
			                  <td class="text-center" style="background-color:#FF9900;">10</td>
			                  <td class="text-center" style="background-color:#FFFF00;">54</td>
			                  <td class="text-center" style="background-color:#3CB371;">159</td>
			                </tr>
			              </tbody>
			            </table>
			        </div>
		          	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
			            <table class="table table-bordered">
			              <thead>
			                <tr>
			                  <th class="text-center"></th>
			                  <th class="text-center">1er °</th>
			                  <th class="text-center">2do °</th>
			                  <th class="text-center">3er °</th>
			                  <th class="text-center">4to °</th>
			                  <th class="text-center">5to °</th>
			                  <th class="text-center">6to °</th>
			                </tr>
			              </thead>
			              <tbody>
			                <tr>
			                  <th class="text-center">Total</th>
			                  <td class="text-center">3</td>
			                  <td class="text-center">3</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">1</td>
			                  <td class="text-center">2</td>
			                  <td class="text-center">0</td>
			                </tr>
			                <tr>
			                  <th class="text-center">Muy Alto</th>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                </tr>
			                <tr>
			                  <th class="text-center">Alto</th>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">0</td>
			                </tr>
			                <tr>
			                  <th class="text-center">Medio</th>
			                  <td class="text-center">3</td>
			                  <td class="text-center">3</td>
			                  <td class="text-center">0</td>
			                  <td class="text-center">1</td>
			                  <td class="text-center">2</td>
			                  <td class="text-center">0</td>
			                </tr>
			              </tbody>
			            </table>
		          	</div>
        		</div>
        		<h2> <center>Ubicación geográfica</center></h2>
		      	<div class="row"> <!--background-color:#C4EDDE-->
			        <div class="col-sm-12">
			          <div id="googleMap" style="padding-top:10px; maring-bottom:10px; height:350px;width:100%;"></div>
			        </div>
		      	</div>
		      	
	      	</div>
	    </div>
  	</div>
</div>
<script src="<?= base_url('assets/highcharts5.0.3/highcharts.js'); ?>"></script><!--Problemas con esta versión <script src="https://code.highcharts.com/highcharts.js"></script>-->
<script src="<?= base_url('assets/highcharts5.0.3/modules/data.js'); ?>"></script><!--Problemas con esta versión <script src="https://code.highcharts.com/modules/data.js"></script>-->
<script src="<?= base_url('assets/highcharts5.0.3/modules/drilldown.js'); ?>"></script><!--Problemas con esta versión<script src="https://code.highcharts.com/modules/drilldown.js"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqGxPT1KkV0q3eSoIOpuZeSrsLm_A5Uhs&callback=initMap"
    async defer></script>



<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});

  // var myCenter = new google.maps.LatLng(26.581389, -109.328056);

 function initMap() {
  var mapProp = {
    center:{lat:26.581389,lng: -109.328056},
    zoom:12,
    scrollwheel:false,
    draggable:false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker = new google.maps.Marker({
    position:new google.maps.LatLng(26.581389,-109.328056),
    });

  marker.setMap(map);
  }

</script>

