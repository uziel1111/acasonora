<div id="content">
<div class="card section-header">
	<div class="card-body">
	  <div class="row justify-content-end">
		<div class="col-12 col-md">
		  <div class="section-name">
			Riesgo de abandono escolar
		  </div>
		</div>
	<div class="col-12 col-md-auto">
	  <div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url("/"); ?>">Inicio</a></li>
    <li class="breadcrumb-item active">Estadística</li>
    <li class="breadcrumb-item active" aria-current="page">Riesgo de abandono</li>
  </ol>
</nav>
	  </div>
	</div>
  </div>
</div>
</div>
<!--<div class="modal fade" id="modal_visor_riesgo" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-style-1">
      <div class="modal-header bgcolor-2">
        <h5 class="modal-title text-white" id="exampleModalLabel">Riesgo de abandono escolar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_modal_riesgo">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>-->

        <div class="card mb-3 card-style-1">
        <div class="card-header card-1-header bg-light">Módulo de Búsqueda</div>
        <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
            <div class="form-group form-group-style-1">
              <?=form_label('Municipio', 'minicipio', array('class' => 'mr-sm-2'));?>
              <?=form_dropdown('minicipio', $municipios, 'large', array('class' => 'form-control', 'id' => 'slt_municipio_ries'));?>
            </div>
        </div>
           <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
             <div class="form-group form-group-style-1">
              <?=form_label('Nivel', 'nivel');?>
                <?=form_dropdown('nivel', $niveles, 'large', array('class' => 'form-control', 'id' => 'slt_nivel_ries'));?>
            </div>
        </div>
             <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
               <div class="form-group form-group-style-1">
                <?=form_label('Bimestre', 'bimestre');?>
                <?=form_dropdown('bimestre', $bimestres, 'large', array('class' => 'form-control', 'id' => 'slt_bimestre_ries'));?>
            </div>
        </div>
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                <div class="form-group form-group-style-1">
                <?=form_label('Ciclo', 'ciclo');?>
                <?=form_dropdown('ciclo', $ciclos, 'large', array('class' => 'form-control', 'id' => 'slt_ciclo_ries'));?>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                <button class="btn btn-light btn-block btn-style-1" id="btn_ayuda_ries">Ayuda</button>
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                <button class="btn btn-info btn-block btn-style-1" id="btn_buscar_ries_muni">Buscar</button>
            </div>
        </div>
        </div>
        </div>

<!--    </div>
  </div>
</div>-->

<script src="<?= base_url('assets/js/riesgo/funcionalidad_riesgo.js') ?>"></script>
<script src="<?= base_url('assets/highcharts5.0.3/highcharts.js'); ?>"></script><!--Problemas con esta versión <script src="https://code.highcharts.com/highcharts.js"></script>-->
<script src="<?= base_url('assets/highcharts5.0.3/modules/data.js'); ?>"></script><!--Problemas con esta versión <script src="https://code.highcharts.com/modules/data.js"></script>-->
<script src="<?= base_url('assets/highcharts5.0.3/modules/drilldown.js'); ?>"></script><!--Problemas con esta versión<script src="https://code.highcharts.com/modules/drilldown.js"></script>-->
<script src="<?= base_url('assets/js/riesgo/grafica.js'); ?>"></script>
