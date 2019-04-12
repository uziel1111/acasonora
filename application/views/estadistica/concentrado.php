 <div id="content"> 
<div class="card section-header">
  <div class="card-body">
	  <div class="row justify-content-end">
		<div class="col-12 col-md">  
		  <div class="section-name">
			Estadística educativa general
		  </div>
		</div>
	<div class="col-12 col-md-auto">	  
	  <div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url("index.php"); ?>">Inicio</a></li>
    <li class="breadcrumb-item active">Estadística</li>
    <li class="breadcrumb-item active" aria-current="page">General</li>
  </ol>
</nav>
	  </div>
	</div>	
  </div>
</div>
</div>	
 <div class="alert alert-light" role="alert">
	 <div class="form-group form-group-style-1">
       <div class="row align-items-end">
		   
        <div class="col-12 col-md">
          
            <?= form_label('Estado/Municipio', 'xedomuni') ?>
            <?= form_dropdown('xedomuni', $arr_municipio, '', array('id' => 'xedomuni', 'class'=>'form-control')) ?>
          </div>
        
        <div class="col-12 col-md">
            <?= form_label('Ciclo escolar', 'slc_xest_cicloe_zona') ?>
            <?= form_dropdown('slc_xest_cicloe_zona', $arr_ciclos, '', array('id' => 'slc_xest_cicloe_zona', 'class'=>'form-control')) ?>
          </div>
        
        <div class="col-auto mt-4">
          <?= form_submit('mysubmit', 'Mostrar Detalle', array('id' => 'btn_detalle', 'class'=>'btn btn-sm btn-info btn-style-1' )); ?>
        </div><!--  col-sm-6 -->
		 </div><!-- formgroup -->  
      </div>
	
      <?= form_close() ?>
</div>              
<div class="accordion accordion-style-1" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="cursor: pointer;">
       <i class="fas fa-american-sign-language-interpreting"></i> Educación Especial
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body p-0">		  
		  
<ul class="nav nav-tabs nav-justified nav-tabs-style-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="alumno-tab" data-toggle="tab" href="#alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="docente-tab" data-toggle="tab" href="#docente" role="tab" aria-controls="profile" aria-selected="false">Docentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="director-tab" data-toggle="tab" href="#director" role="tab" aria-controls="contact" aria-selected="false">Directores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="auxiliar-tab" data-toggle="tab" href="#auxiliar" role="tab" aria-controls="profile" aria-selected="false">Personal auxiliar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="infra-tab" data-toggle="tab" href="#infraestructura" role="tab" aria-controls="contact" aria-selected="false">Infrestructura</a>
  </li>	
</ul>
<div class="tab-content tab-content-style-1" id="myTabContent">
  <div class="tab-pane fade show active" id="alumno" role="tabpanel" aria-labelledby="alumno-tab">
                  <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-graduate"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="docente" role="tabpanel" aria-labelledby="docente-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-chalkboard-teacher"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="director" role="tabpanel" aria-labelledby="director-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-tie"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="auxiliar" role="tabpanel" aria-labelledby="auxiliar-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-friends"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="infraestructura" role="tabpanel" aria-labelledby="infra-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-school"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
                            <tr>
                              <td style="width: 5%"><i class="fa fa-school"></i></td>
                              <td style="width: 20%">60,000</td>
                              <td style="width: 65%">
                                <div class="progress">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td style="width: 10%"><span class="badge bg-red">60%</span></td>
                            </tr>
                            <tr>
                              <td><i class="fa fa-edit"></i></td>
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
</div>		  
      </div>
    </div>
  </div>
	
  <div class="card">
    <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="cursor: pointer;">
      <i class="fas fa-shapes"></i> Educación Preescolar
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body p-0">		  
		  
<ul class="nav nav-tabs nav-justified nav-tabs-style-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pree-alumno-tab" data-toggle="tab" href="#pree-alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pree-docente-tab" data-toggle="tab" href="#pree-docente" role="tab" aria-controls="profile" aria-selected="false">Docentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pree-director-tab" data-toggle="tab" href="#pree-director" role="tab" aria-controls="contact" aria-selected="false">Directores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pree-auxiliar-tab" data-toggle="tab" href="#pree-auxiliar" role="tab" aria-controls="profile" aria-selected="false">Personal auxiliar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pree-infra-tab" data-toggle="tab" href="#pree-infraestructura" role="tab" aria-controls="contact" aria-selected="false">Infrestructura</a>
  </li>	
</ul>
<div class="tab-content tab-content-style-1" id="myTabContent">
  <div class="tab-pane fade show active" id="pree-alumno" role="tabpanel" aria-labelledby="pree-alumno-tab">
                  <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-graduate"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pree-docente" role="tabpanel" aria-labelledby="pree-docente-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-chalkboard-teacher"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pree-director" role="tabpanel" aria-labelledby="pree-director-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-tie"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pree-auxiliar" role="tabpanel" aria-labelledby="pree-auxiliar-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-friends"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pree-infraestructura" role="tabpanel" aria-labelledby="pree-infra-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-school"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
</div>		  
      </div>
    </div>
  </div>
	
  <div class="card">
    <div class="card-header collapsed" id="headingTree" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree" style="cursor: pointer;">
      <i class="fas fa-child"></i> Educación Primaria
    </div>
    <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionExample">
      <div class="card-body p-0">		  
		  
<ul class="nav nav-tabs nav-justified nav-tabs-style-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pri-alumno-tab" data-toggle="tab" href="#pri-alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pri-docente-tab" data-toggle="tab" href="#pri-docente" role="tab" aria-controls="profile" aria-selected="false">Docentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pri-director-tab" data-toggle="tab" href="#pri-director" role="tab" aria-controls="contact" aria-selected="false">Directores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pri-auxiliar-tab" data-toggle="tab" href="#pri-auxiliar" role="tab" aria-controls="profile" aria-selected="false">Personal auxiliar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pri-infra-tab" data-toggle="tab" href="#pri-infraestructura" role="tab" aria-controls="contact" aria-selected="false">Infrestructura</a>
  </li>	
</ul>
<div class="tab-content tab-content-style-1" id="myTabContent">
  <div class="tab-pane fade show active" id="pri-alumno" role="tabpanel" aria-labelledby="pri-alumno-tab">
                  <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-graduate"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pri-docente" role="tabpanel" aria-labelledby="pri-docente-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-chalkboard-teacher"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pri-director" role="tabpanel" aria-labelledby="pri-director-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-tie"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pri-auxiliar" role="tabpanel" aria-labelledby="pri-auxiliar-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-friends"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="pri-infraestructura" role="tabpanel" aria-labelledby="pri-infra-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-school"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
</div>		  
      </div>
    </div>
  </div>
	
  <div class="card">
    <div class="card-header collapsed" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="cursor: pointer;">
      <i class="fas fa-book-reader"></i> Educación Secundaria
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body p-0">		  
		  
<ul class="nav nav-tabs nav-justified nav-tabs-style-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="sec-alumno-tab" data-toggle="tab" href="#sec-alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sec-docente-tab" data-toggle="tab" href="#sec-docente" role="tab" aria-controls="profile" aria-selected="false">Docentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sec-director-tab" data-toggle="tab" href="#sec-director" role="tab" aria-controls="contact" aria-selected="false">Directores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sec-auxiliar-tab" data-toggle="tab" href="#sec-auxiliar" role="tab" aria-controls="profile" aria-selected="false">Personal auxiliar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="sec-infra-tab" data-toggle="tab" href="#sec-infraestructura" role="tab" aria-controls="contact" aria-selected="false">Infrestructura</a>
  </li>	
</ul>
<div class="tab-content tab-content-style-1" id="myTabContent">
  <div class="tab-pane fade show active" id="sec-alumno" role="tabpanel" aria-labelledby="sec-alumno-tab">
                  <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-graduate"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="sec-docente" role="tabpanel" aria-labelledby="sec-docente-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-chalkboard-teacher"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="sec-director" role="tabpanel" aria-labelledby="sec-director-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-tie"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="sec-auxiliar" role="tabpanel" aria-labelledby="sec-auxiliar-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-friends"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="sec-infraestructura" role="tabpanel" aria-labelledby="sec-infra-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-school"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
</div>		  
      </div>
    </div>
  </div>
	
  <div class="card">
    <div class="card-header collapsed" id="headingFive" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="cursor: pointer;">
      <i class="fas fa-laptop"></i> Educación Media Superior
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body p-0">		  
		  
<ul class="nav nav-tabs nav-justified nav-tabs-style-1" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="ms-alumno-tab" data-toggle="tab" href="#ms-alumno" role="tab" aria-controls="home" aria-selected="true">Alumnos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ms-docente-tab" data-toggle="tab" href="#ms-docente" role="tab" aria-controls="profile" aria-selected="false">Docentes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ms-director-tab" data-toggle="tab" href="#ms-director" role="tab" aria-controls="contact" aria-selected="false">Directores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ms-auxiliar-tab" data-toggle="tab" href="#ms-auxiliar" role="tab" aria-controls="profile" aria-selected="false">Personal auxiliar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="ms-infra-tab" data-toggle="tab" href="#ms-infraestructura" role="tab" aria-controls="contact" aria-selected="false">Infrestructura</a>
  </li>	
</ul>
<div class="tab-content tab-content-style-1" id="myTabContent">
  <div class="tab-pane fade show active" id="ms-alumno" role="tabpanel" aria-labelledby="ms-alumno-tab">
                  <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-graduate"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="ms-docente" role="tabpanel" aria-labelledby="ms-docente-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-chalkboard-teacher"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="ms-director" role="tabpanel" aria-labelledby="ms-director-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-tie"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="ms-auxiliar" role="tabpanel" aria-labelledby="ms-auxiliar-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-user-friends"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
  <div class="tab-pane fade" id="ms-infraestructura" role="tabpanel" aria-labelledby="ms-infra-tab">
                 <div class="row">
                    <div class="col">
                      	<div class="wrimagecard wrimagecard-topimage">
          
          <div class="wrimagecard-topimage_header">
            <center><i class="fas fa-school"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>100,000</h4>
          </div>
        
      </div>
                    </div>
                    <div class="col-sm-10">
                      <div class="box box-especial">
                        <div class="box-body no-padding">
                          <table class="table">
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
</div>		  
      </div>
    </div>
  </div>	
</div>

</div>

<script src="<?= base_url('assets/js/est_e_ind/concentrado.js'); ?>"></script>