<div class="container">
    <h4 align="center">Estadística educativa General</h4>                  
      <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
          <div class="form-group">
            <?= form_label('Estado/Municipio', 'xedomuni') ?>
            <?= form_dropdown('xedomuni', $arr_municipio, '', array('id' => 'xedomuni', 'class'=>'form-control')) ?>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-2">
          <div class="form-group">
            <?= form_label('Ciclo escolar', 'slc_xest_cicloe_zona') ?>
            <?= form_dropdown('slc_xest_cicloe_zona', $arr_ciclos, '', array('id' => 'slc_xest_cicloe_zona', 'class'=>'form-control')) ?>
          </div>
        </div><!-- col-md-4 -->
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4">
          <?= form_submit('mysubmit', 'Mostrar Detalle', array('id' => 'btn_detalle', 'class'=>'btn btn-info btn-block btn-style-1' )); ?>
        </div><!--  col-sm-6 -->
      </div>
      <?= form_close() ?>
</div>

<div class="container">
  <div class="card">
    <div class="card-header" id="accordion">
      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseEspecial">
              <span class="fa fa-book" aria-hidden="true"></span> Educación Especial
            </a>
          </h4>
        </div>
        <div id="collapseEspecial" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul  class="nav nav-tabs nav-tabs-style-1" id="tab_busqg" role="tablist">
                <li  class="nav-item"><a href="#especial_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#especial_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#especial_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#especial_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#especial_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="especial_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_especial.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="especial_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_es.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="especial_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="especial_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="especial_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura_cam.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row box-especial">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Grupos</span>
                                <span class="info-box-number">41,410</span>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseInicial">
              <span class="fa fa-bars" aria-hidden="true"></span> Educación Inicial
            </a>
          </h4>
        </div>
        <div id="collapseInicial" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs nav-tabs-style-1">
                <li class="nav-item"><a href="#inicial_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#inicial_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#inicial_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#inicial_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#inicial_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="inicial_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_inicial.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-inicial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="inicial_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_in.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-inicial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="inicial_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-inicial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="inicial_4">
                  <div class="row">
                    <div class="col-sm-2">
                    <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img></div>
                      <div class="col-sm-10">
                        <div class="box box-inicial">
                          <div class="box-body no-padding">
                            <table class="table">
                              <tr>
                                <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                              </tr>
                              <tr>
                                <td style="width: 5%"><i class="fa fa-female"></i></td>
                                <td style="width: 20%">60,000</td>
                                <td style="width: 65%">
                                  <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                              </tr>
                              <tr>
                                <td><i class="fa fa-male"></i></td>
                                <td>40,000</td>
                                <td>
                                  <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                                <td><span class="badge bg-yellow">40%</span></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>

                <div class="tab-pane" id="inicial_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>

                        </div>
                          <div class="col-md-6">
                            <div class="info-box bg-yellow">
                              <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Aulas</span>
                                <span class="info-box-number">41,410</span>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="info-box bg-red">
                              <span class="info-box-icon"><i class="fa fa-users"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Grupos</span>
                                <span class="info-box-number">41,410</span>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapsePreescolar">
             <span class="fa fa-paint-brush" aria-hidden="true"></span> Educación Preescolar
            </a>
          </h4>
        </div>
        <div id="collapsePreescolar" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs nav-tabs-style-1">
                <li class="nav-item"><a href="#preescolar_1" data-toggle="tab"  class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#preescolar_2" data-toggle="tab"  class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#preescolar_3" data-toggle="tab"  class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#preescolar_4" data-toggle="tab"  class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#preescolar_5" data-toggle="tab"  class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="preescolar_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_preescolar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-preescolar">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#ModalPreescolar"><i class="fa fa-tasks"></i> Ver Detalle por Grado</button>
                        <div class="modal fade" id="ModalPreescolar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Detalle por Grado: Preescolar</h4>
                              </div>
                              <div class="modal-body">
                                            <div class="box-body no-padding">
                                              <table class="table table-striped">
                                                <tr>
                                                  <td style="width: 5%">1°</td>
                                                  <td style="width: 20%">10,000</td>
                                                  <td style="width: 65%">
                                                    <div class="progress">
                                                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                    </div>
                                                  </td>
                                                  <td style="width: 10%"><span class="badge bg-red">55%</span></td>
                                                </tr>
                                                <tr>
                                                  <td>2°</td>
                                                  <td>10,000</td>
                                                  <td>
                                                    <div class="progress">
                                                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                    </div>
                                                  </td>
                                                  <td><span class="badge bg-yellow">70%</span></td>
                                                </tr>
                                                <tr>
                                                  <td>3°</td>
                                                  <td>10,000</td>
                                                  <td>
                                                    <div class="progress progress-xs progress-striped active">
                                                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                    </div>
                                                  </td>
                                                  <td><span class="badge bg-light-blue">30%</span></td>
                                                </tr>
                                              </table>
                                            </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="preescolar_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_pr.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-preescolar">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="preescolar_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-preescolar">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                            <td style="width: 5%"><i class="fa fa-female"></i></td>
                            <td style="width: 20%">60,000</td>
                            <td style="width: 65%">
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="preescolar_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-preescolar">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                                <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="preescolar_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Grupos</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapsePrimaria">
              <span class="fa fa-balance-scale" aria-hidden="true"></span> Educación Primaria
            </a>
          </h4>
        </div>
        <div id="collapsePrimaria" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs nav-tabs-style-1">
                <li class="nav-item"><a href="#primaria_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#primaria_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#primaria_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#primaria_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#primaria_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="primaria_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_primaria.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-primaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#ModalPrimaria"><i class="fa fa-tasks"></i> Ver Detalle por Grado</button>
                        <div class="modal fade" id="ModalPrimaria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Detalle por Grado: Primaria</h4>
                              </div>
                                <div class="modal-body">
                                  <div class="box-body no-padding">
                                    <table class="table table-striped">
                                      <tr>
                                        <td style="width: 5%">1°</td>
                                        <td style="width: 20%">10,000</td>
                                        <td style="width: 65%">
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                          </div>
                                        </td>
                                        <td style="width: 10%"><span class="badge bg-red">55%</span></td>
                                      </tr>
                                      <tr>
                                        <td>2°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                          </div>
                                        </td>
                                         <td><span class="badge bg-yellow">70%</span></td>
                                      </tr>
                                      <tr>
                                        <td>3°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-light-blue">30%</span></td>
                                      </tr>
                                      <tr>
                                        <td>4°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-green">90%</span></td>
                                      </tr>
                                      <tr>
                                        <td>5°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-light-blue">30%</span></td>
                                      </tr>
                                      <tr>
                                        <td>6°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-green">90%</span></td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="primaria_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_pri.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-primaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="primaria_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-primaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="primaria_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-primaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                               <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="primaria_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                 <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                  70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                              <div class="info-box-content">
                                <span class="info-box-text">Grupos</span>
                                <span class="info-box-number">41,410</span>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="progress-description">
                                  70% del Presupuesto
                                </span>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseSecundaria">
              <span class="fa fa-flask" aria-hidden="true"></span> Educación Secundaria
            </a>
          </h4>
        </div>
        <div id="collapseSecundaria" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs nav-tabs-style-1">
                <li class="nav-item"><a href="#secundaria_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#secundaria_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#secundaria_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#secundaria_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#secundaria_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="secundaria_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_secundaria.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-secundaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#ModalSecundaria"><i class="fa fa-tasks"></i> Ver Detalle por Grado</button>
                        <div class="modal fade" id="ModalSecundaria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Detalle por Grado: Secundaria</h4>
                              </div>
                                <div class="modal-body">
                                  <div class="box-body no-padding">
                                    <table class="table table-striped">
                                      <tr>
                                        <td style="width: 5%">1°</td>
                                        <td style="width: 20%">10,000</td>
                                        <td style="width: 65%">
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                          </div>
                                        </td>
                                        <td style="width: 10%"><span class="badge bg-red">55%</span></td>
                                      </tr>
                                      <tr>
                                        <td>2°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress">
                                            <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-yellow">70%</span></td>
                                      </tr>
                                      <tr>
                                        <td>3°</td>
                                        <td>10,000</td>
                                        <td>
                                          <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                          </div>
                                        </td>
                                        <td><span class="badge bg-light-blue">30%</span></td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="secundaria_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_se.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-secundaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="secundaria_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-secundaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="secundaria_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-secundaria">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="secundaria_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Grupos</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseMSuperior">
              <span class="fa fa-superscript" aria-hidden="true"></span> Educación Media Superior
            </a>
          </h4>
        </div>
        <div id="collapseMSuperior" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul  class="nav nav-tabs nav-tabs-style-1">
                <li  class="nav-item"><a href="#msuperior_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#msuperior_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#msuperior_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#msuperior_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#msuperior_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="msuperior_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_msuperior.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-msuperior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#ModalMSuperior"><i class="fa fa-tasks"></i> Ver Detalle por Grado</button>
                        <div class="modal fade" id="ModalMSuperior" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Detalle por Grado: Media Superior</h4>
                              </div>
                              <div class="modal-body">
                                <div class="box-body no-padding">
                                  <table class="table table-striped">
                                    <tr>
                                      <td style="width: 5%">1°</td>
                                      <td style="width: 20%">10,000</td>
                                      <td style="width: 65%">
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                      </td>
                                      <td style="width: 10%"><span class="badge bg-red">55%</span></td>
                                    </tr>
                                    <tr>
                                      <td>2°</td>
                                      <td>10,000</td>
                                      <td>
                                        <div class="progress">
                                          <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                        </div>
                                      </td>
                                      <td><span class="badge bg-yellow">70%</span></td>
                                    </tr>
                                    <tr>
                                      <td>3°</td>
                                      <td>10,000</td>
                                      <td>
                                        <div class="progress progress-xs progress-striped active">
                                          <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                        </div>
                                      </td>
                                      <td><span class="badge bg-light-blue">30%</span></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="msuperior_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_pre.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-msuperior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="msuperior_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-msuperior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="msuperior_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-msuperior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="msuperior_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Grupos</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="card-header">
          <h4 class="card-text">
            <a class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseSuperior">
              <span class="fa fa-university" aria-hidden="true"></span> Educación Superior
            </a>
          </h4>
        </div>
        <div id="collapseSuperior" class="panel-collapse collapse">
          <div class="card-header">
            <div class="nav-tabs-custom">
              <ul  class="nav nav-tabs nav-tabs-style-1">
                <li  class="nav-item"><a href="#superior_1" data-toggle="tab" class="nav-link nav-link-style-1 active">Alumnos</a></li>
                <li class="nav-item"><a href="#superior_2" data-toggle="tab" class="nav-link nav-link-style-1">Docentes</a></li>
                <li class="nav-item"><a href="#superior_3" data-toggle="tab" class="nav-link nav-link-style-1">Directores</a></li>
                <li class="nav-item"><a href="#superior_4" data-toggle="tab" class="nav-link nav-link-style-1">Personal Auxiliar</a></li>
                <li class="nav-item"><a href="#superior_5" data-toggle="tab" class="nav-link nav-link-style-1">Infraestructura</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="superior_1">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/alumno_superior.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-superior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>100,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="superior_2">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/docente_un.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-superior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>90,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="superior_3">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/director.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-superior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>80,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="superior_4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/auxiliar.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-superior">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <th style="text-align:right" colspan="4" class="lead">Total: <strong>70,000</strong></th>
                            </tr>
                            <tr>
                              <td style="width: 5%"><i class="fa fa-female"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-male"></i></td>
                              <td>40,000</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="badge bg-yellow">40%</span></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="superior_5">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?=base_url('assets/img/infraestructura.png')?>" alt="Responsive image" height="120px;"></img>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="info-box bg-lime">
                            <span class="info-box-icon"><span class="icon-escuelas" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Escuelas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-green">
                            <span class="info-box-icon"><span class="icon-edificios" aria-hidden="true"></span></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Edificios</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Aulas</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                                70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box bg-red">
                            <span class="info-box-icon"><i class="fa fa-users"></i></span>
                            <div class="info-box-content">
                              <span class="info-box-text">Grupos</span>
                              <span class="info-box-number">41,410</span>
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <span class="progress-description">
                              70% del Presupuesto
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

