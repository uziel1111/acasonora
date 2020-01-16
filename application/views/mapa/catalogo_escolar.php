<div id="content">
<div class="card section-header">
	<div class="card-body">
	  <div class="row justify-content-end">
		<div class="col-12 col-md">
		  <div class="section-name">
			Localiza tu escuela
		  </div>
		</div>
	<div class="col-12 col-md-auto">
	  <div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url("/"); ?>">Inicio</a></li>
    <li class="breadcrumb-item active">Información</li>
    <li class="breadcrumb-item active" aria-current="page">Localiza tu escuela</li>
  </ol>
</nav>
	  </div>
	</div>
  </div>
</div>
</div>

<!--<div class="modal fade" id="modal_localiza_tu_escuela" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-style-1">
      <div class="modal-header bgcolor-2">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close" id="close_modal_localiza_tu_escuela">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>-->
        <div class="card mb-3 card-style-1">
        <div class="card-header card-1-header bg-light">Módulo de Búsqueda</div>
        <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="form-group form-group-style-1">
              <?= form_label('Nombre de la Escuela', 'nombre') ?>
              <?= form_input('nombreBusqueda', '', array('id' => 'nombreBusqueda', 'class'=>'form-control input_cct')) ?>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="form-group form-group-style-1">
              <?= form_label('Municipio', 'municipio') ?>
              <?= form_dropdown('municipio', $arr_municipios, '', array('id' => 'municipio', 'class'=>'form-control')) ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
            <div class="form-group form-group-style-1">
              <?= form_label('Ir a búsqueda avanzada', 'busquedaAvanzada') ?>
              <?= form_checkbox('check_busquedaAvanzada', '',false, array('id' => 'check_busquedaAvanzada','type'=>'checkbox')) ?>
            </div>
          </div>
        </div>
        <div id="divBusquedaAvanzada">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
              <div class="form-group form-group-style-1">
                <?= form_label('Zona', 'zona') ?>
                <?= form_dropdown('zonaBusqueda', $arr_zonas, '', array('id' => 'zonaBusqueda', 'class'=>'form-control')) ?>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
              <div class="form-group form-group-style-1">
                <?= form_label('Nivel', 'nivel') ?>
                <?= form_dropdown('nivelBusqueda', $arr_nivel, '', array('id' => 'nivelBusqueda', 'class'=>'form-control')) ?>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
              <div class="form-group form-group-style-1">
                <?= form_label('Clave CT', 'clave_cct') ?>
                <?= form_input('clave_cct', '', array('id' => 'clave_cct', 'class'=>'form-control input_cct')) ?>
              </div>
            </div>

          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-9">
          </div>
          <div class="col-md-3">
            <?= form_submit('mysubmit', 'Buscar', array('id' => 'btn_localizar_escuela', 'class'=>'btn btn-info btn-block btn-style-1' )); ?>
          </div>
        </div>
        <div id="resultado_busqueda"></div>
      </div>
      </div>
<!--    </div>
  </div>
</div>-->

</div>

<script src="<?= base_url('assets/js/mapa/localiza.js'); ?>"></script>
