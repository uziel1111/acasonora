<div class="modal fade" id="modal_visor_xedoxmuni" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-style-1">
      <div class="modal-header bgcolor-2">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <!-- Start Main Area -->
      <div class="container">
        <div class="row">
          <div data-toggle="collapse" data-target="#demo" class="card-header card-1-header bg-light">Estadística educativa específica</div>
          <div id="demo" class="collapse show">
      <?= form_label('', 'lb_titbusq') ?>
        <ul class="nav nav-tabs nav-tabs-style-1" id="tab_busqg" role="tablist">
          <li class="nav-item">
            <a class='<?=$tmuni?>' id="xest_muni-tab" data-toggle="tab" href="#xest_muni" role="tab" aria-controls="xest_muni" aria-selected="true">Por Estado / Municipio</a>
          </li>
          <li class="nav-item">
            <a class='<?=$tzona?>' id="xzona-tab" data-toggle="tab" href="#xzona" role="tab" aria-controls="xzona" aria-selected="false">Por zona escolar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-style-1" id="xcct-tab" data-toggle="tab" href="#xcct" role="tab" aria-controls="xcct" aria-selected="false">Por CCT</a>
          </li>
        </ul>
              <div class="tab-content tab-content-style-1" id="myTabContent_busqg">

                <div class="tab-pane fade show <?=$tmuni?>" id="xest_muni" role="tabpanel" aria-labelledby="xest_muni-tab">
            
                  <div class="row">

                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                    <div class="form-group form-group-style-1">
                        <?= form_label('Estado / Municipio', 'slc_xest_muni_estmunicipio') ?>
                        <?= form_dropdown('slc_xest_muni_estmunicipio', $arr_municipios, '', array('id' => 'slc_xest_muni_estmunicipio', 'class'=>'form-control')) ?>
                    </div><!-- col-md-4 -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 mt-2">
                    <div class="form-group form-group-style-1">
                        <?= form_label('Nivel', 'slc_xest_muni_nivel') ?>
                        <?= form_dropdown('slc_xest_muni_nivel', $arr_niveles, '', array('id' => 'slc_xest_muni_nivel', 'class'=>'form-control')) ?>
                    </div><!-- col-md-4 -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 mt-2">
                        <div class="form-group form-group-style-1">
                        <?= form_label('Sostenimiento', 'slc_xest_muni_sostenimiento') ?>
                        <?= form_dropdown('slc_xest_muni_sostenimiento', $arr_sostenimientos, '', array('id' => 'slc_xest_muni_sostenimiento', 'class'=>'form-control')) ?>
                    </div><!-- col-md-4 -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                        <div class="form-group form-group-style-1">
                        <?= form_label('Modalidad', 'slc_xest_muni_modalidad') ?>
                        <?= form_dropdown('slc_xest_muni_modalidad', $arr_modalidad, '', array('id' => 'slc_xest_muni_modalidad', 'class'=>'form-control')) ?>
                    </div><!-- col-md-4 -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 mt-2">
                        <div class="form-group form-group-style-1">
                        <?= form_label('Ciclo escolar', 'slc_xest_muni_cicloe') ?>
                        <?= form_dropdown('slc_xest_muni_cicloe', $arr_ciclos, '', array('id' => 'slc_xest_muni_cicloe', 'class'=>'form-control')) ?>
                        </div><!-- col-md-4 -->
                    </div><!-- form-group -->
                  </div><!-- row -->

                  <div class="row">
                    <div class="col-0 col-sm-0 col-md-8 col-lg-8 mt-2"></div><!--  col-0 -->
                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= anchor(base_url(), 'Regresar', array('class' => 'btn btn-light btn-block btn-style-1')) ?>
                    </div><!--  col-sm-6 -->

                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= form_submit('mysubmit', 'Buscar', array('id' => 'btn_buscar_mun_est', 'class'=>'btn btn-info btn-block btn-style-1' )); ?>
                    </div><!--  col-sm-6 -->
                  </div><!-- row -->

                  <?= form_close() ?>
                </div><!-- xest_muni -->


                <div class="tab-pane fade show <?=$tzona?>" id="xzona" role="tabpanel" aria-labelledby="xzona-tab">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-style-1">
                       
                        <div class="row">
                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-group">
                              <?= form_label('Nivel', 'slc_xest_nivel_zona') ?>
                              <?= form_dropdown('slc_xest_nivel_zona', $arr_nivelesz, '', array('id' => 'slc_xest_nivel_zona', 'class'=>'form-control')) ?>
                            </div>
                          </div><!-- col-md-4 -->
                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-group">
                              <?= form_label('Sostenimiento', 'slc_xest_sostenimiento_zona') ?>
                              <?= form_dropdown('slc_xest_sostenimiento_zona', $arr_subsostenimientos, '', array('id' => 'slc_xest_sostenimiento_zona', 'class'=>'form-control')) ?>
                            </div>
                          </div><!-- col-md-4 -->
                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-group">
                              <?= form_label('Número de zona escolar', 'slc_xest_zona') ?>
                              <?= form_dropdown('slc_xest_zona', $arr_nzonae, '', array('id' => 'slc_xest_zona', 'class'=>'form-control')) ?>
                            </div>
                          </div><!-- col-md-4 -->
                          <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-group">
                              <?= form_label('Ciclo escolar', 'slc_xest_cicloe_zona') ?>
                              <?= form_dropdown('slc_xest_cicloe_zona', $arr_ciclos, '', array('id' => 'slc_xest_cicloe_zona', 'class'=>'form-control')) ?>
                            </div>
                          </div><!-- col-md-4 -->
                        </div><!-- row -->
                      </div>
                    </div><!--  col-sm-12 -->
                  </div><!-- row -->

                  <div class="row">
                    <div class="col-0 col-sm-0 col-md-8 col-lg-8 mt-2"></div><!--  col-0 -->
                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= anchor(base_url(), 'Regresar', array('class' => 'btn btn-light btn-block btn-style-1')) ?>
                    </div><!--  col-sm-6 -->

                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= form_submit('mysubmit', 'Buscar', array('id' => 'btn_buscar_zona', 'class'=>'btn btn-info btn-block btn-style-1' )); ?>
                    </div><!--  col-sm-6 -->
                  </div><!-- row -->

                  <?= form_close() ?>
                  </div>
                  <div class="tab-pane fade" id="xcct" role="tabpanel" aria-labelledby="xcct-tab">
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-3 mt-2">
                      <div class="form-group form-group-style-1">
                          <?= form_label('Escriba su CCT', 'itxt_busquedalista_cct') ?>
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text label_cct">26</span>
                            </div>
                              <?= form_input('itxt_busquedalista_cct', '', array('id' => 'itxt_busquedalista_cct', 'class'=>'form-control input_cct' )) ?>
                        </div>
                      </div>
                    </div><!--  col-sm-12 -->
                  </div><!-- row -->

                  <div class="row">
                    <div class="col-0 col-sm-0 col-md-8 col-lg-8 mt-2"></div><!--  col-0 -->
                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= anchor(base_url(), 'Regresar', array('class' => 'btn btn-light btn-block btn-style-1')) ?>
                    </div><!--  col-sm-6 -->

                    <div class="col-6 col-sm-6 col-md-2 col-lg-2 mt-2">
                      <?= form_submit('mysubmit', 'Buscar', array('id' => 'btn_buscar_xcct', 'class'=>'btn btn-info btn-block btn-style-1' )); ?>
                    </div><!--  col-sm-6 -->
                  </div><!-- row -->
                </div>
                </div>
              </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="<?= base_url('assets/js/est_e_ind/est_e_ind_g.js'); ?>"></script>



