    <style type="text/css">
	.margintop50{
	  margin-top: 50px;
	}
	</style>
    	<div class="container">
    		<div class="row">
    			<div class="col-3">
    				<nav class="navbar navbar-expand  flex-md-column flex-row align-items-start">
                	<div class="collapse navbar-collapse">
				        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
					        <li class="nav-item">MENÚ</li>
					        <li class="nav-item">
					          <a class="nav-link pl-0" href="<?=base_url("index/index")?>">
					            <i class="fa fa-list"></i>
					            <span>Inicio</span>
					            <span class="pull-right-container">
					              <span class="label label-primary pull-right"></span>
					            </span>
					          </a>
					        </li>

					        <li class="nav-item" >
					          <a class="nav-link pl-0" href="#" id="est_menu" >
					            <i class="fa fa-list"></i>
					            <span >Estadística educativa</span>
					            <span class="pull-right-container">
					              <i class="fa fa-list"></i>
					            </span>
					          </a>
					          <ul >
					            <li id="gen_submenu"><a class="nav-link pl-0" href="<?=base_url("index/concentrado")?>"><i class="fa fa-list"></i> General</a>
					            </li>
					            <li id="esp_submenu"><a class="nav-link pl-0" href="<?=base_url("index/estadistica_e_indicadores")?>"><i class="fa fa-list"></i> Específica (por búsqueda)</a></li>
					            <li id="rie_submenu"><a class="nav-link pl-0" href="<?=base_url("index/riesgo_de_abandono")?>"><i class="fa fa-list"></i> Riesgo de abandono escolar</a></li>
					          </ul>
					        </li>
					        <li>
					          <a  class="nav-link pl-0" href="#" id="inf_menu">
					            <i class="fa fa-list"></i> 
					            <span >Información por escuela</span>
					            <span class="pull-right-container">
					              <small class="fa fa-angle-left pull-righ"></small>
					            </span>
					          </a>
					          <ul >
					            <li id="loc_submenu"><a  class="nav-link pl-0" href="<?=base_url("index/catalogo_escolar")?>"><i class="fa fa-list"></i> Localiza tu escuela</a></li>
					            <li id="tue_submenu"><a class="nav-link pl-0" href="<?=base_url("index/ubicacion_escolar")?>""><i class="fa fa-list"></i> Tu escuela en el mapa</a></li>
					            
					          </ul>
					        </li>
					        <li class="nav-item">
					          <a  class="nav-link pl-0" href="<?=base_url("index/información_para_padres")?>" id="infop_menu">
					            <i class="fa fa-list"></i>
					            <span >Información para padres <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;de familia</span>
					            <span class="pull-right-container">
					              <span class="fa fa-angle-left pull-righ"></span>
					            </span>
					          </a>
					          <ul >
					            <li id="inf_submenu"><a class="nav-link pl-0"  href="pdfydoc/Resumen 696.pdf"><i class="fa fa-list"></i> ¿Sabía usted que...?</a></li>
					            
					          </ul>

					        </li>
					        <li>
					          <a class="nav-link pl-0" href="#" id="prog_menu">
					            <i class="fa fa-list"></i> 
					            <span >Buenas prácticas escolares</span>
					            <span class="pull-right-container">
					              <small class="fa fa-angle-left pull-righ"></small>
					            </span>
					          </a>
					          <ul >
					            <li id="apo_submenu"><a class="nav-link pl-0" href="<?=base_url("index/buenas_prac_esc")?>"><i class="fa fa-list"></i> Buenas prácticas</a></li>
					          </ul>
					        </li>

					        <li>
					          <a class="nav-link pl-0" href="#" id="enc_menu">
					            <i class="fa fa-list"></i> 
					            <span >Modelo Educativo Sonora</span>
					            <span class="pull-right-container">
					              <small class="fa fa-angle-left pull-righ"></small>
					            </span>
					          </a>
					          <ul >
					            <li id="gra_submenu"><a class="nav-link pl-0"  href="<?=base_url("index/vista_pdf")?>"><i class="fa fa-list"></i> Modelo ACA</a></li>
					          </ul>
					        </li>

					        <li class="nav-item">
					          <a class="nav-link pl-0" href="#" id="cal_menu">
					            <i class="fa fa-list"></i> 
					            <span >Guías de consejo técnico</span>
					            <span class="pull-right-container">
					              <i class="fa fa-list"></i>
					            </span>
					          </a>
					          <ul >
					            <li id="201_submenu"><a href="<?=base_url("index/guias_cte")?>"><i class="fa fa-list"></i> Guías CTE 2016-2017 </a></li>
					          </ul>
					        </li>
					        
					         <li class="nav-item">
					          <a class="nav-link pl-0" href="#" id="cont_menu">
					            <i class="fa fa-list"></i>
					            <span >Control escolar</span>
					            <span class="pull-right-container">
					              <span class="fa fa-angle-left pull-righ"></span>
					            </span>
					          </a>
					          <ul >
					            <li id="sic_submenu"><a href="http://www.sicres.gob.mx/" target="_blank"><i class="fa fa-list"></i> SICRES v2.O</a></li>
					            <li id="yoe_submenu"><a href="<?=base_url("index/yoemia")?>"><i class="ion ion-iphone"></i> ACA YOEMIA</a></li>
					          </ul>

					        </li>

					        <li>
					          <a class="nav-link pl-0" href="#" id="gui_menu">
					            <i class="fa fa-list"></i> 
					            <span >Calendarios escolares</span>
					            <span class="pull-right-container">
					              <small class="fa fa-angle-left pull-righ"></small>
					            </span>
					          </a>
					          <ul>
					            <li id="gra_submenu"><a  class="nav-link pl-0"  href="<?=base_url("index/vista_calendario")?>"><i class="fa ion-calendar"></i>2016-2017 </a></li>
					          </ul>
					        </li>
				        
				      	</ul>
					</div>
					</nav>
    			</div>
    			<div class="col-9">
	    			<div class="row">
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_graphs.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Estadística educativa</h5>
					      		<p class="card-text">Integra datos las estadísticas básicas que describen la situación actual y los avances en la prestación de los servicios educativos.</p>
					      		<ul >
						            <li id="gen_submenu"><a class="nav-link pl-0" href="est_concentrado.php"><i class="fa fa-list"></i> General</a></li>
						            <li id="esp_submenu"><a class="nav-link pl-0" href="<?=base_url("index/estadistica_e_indicadores")?>"><i class="fa fa-list"></i> Específica (por búsqueda)</a></li>
						            <li id="rie_submenu"><a class="nav-link pl-0" href="<?=base_url("index/riesgo_de_abandono")?>"><i class="fa fa-list"></i> Riesgo de abandono escolar</a></li>
					          	</ul>
					    	</div>
					  	</div>
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_control.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Control escolar</h5>
					      		<p class="card-text">El proceso de regular actividades que aseguren que se están cumpliendo como fueron planificadas y corrigiendo cualquier desviación significativa.</p>
					      		<ul >
					            	<li id="sic_submenu"><a href="http://www.sicres.gob.mx/" target="_blank"><i class="fa fa-list"></i> SICRES v2.O</a></li>
					            	<li id="yoe_submenu"><a href="<?=base_url("index/yoemia")?>"><i class="ion ion-iphone"></i> ACA YOEMIA</a></li>
					          	</ul>
					    	</div>
					  	</div>
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_catalogo.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Información por escuela</h5>
					      		<p class="card-text">En esta sección encontrarás información referente a escuelas oficiales y particulares que se encuentran incorporadas al Sistema Educativo tanto en el ámbito federal como estatal.</p>
					      		<ul >
					            	<li id="loc_submenu"><a  class="nav-link pl-0" href="<?=base_url("index/catalogo_escolar")?>"><i class="fa fa-list"></i> Localiza tu escuela</a></li>
					            	<li id="tue_submenu"><a class="nav-link pl-0" href="<?=base_url("index/ubicacion_escolar")?>"><i class="fa fa-list"></i> Tu escuela en el mapa</a></li>
					            
					          	</ul>
					    	</div>
					  	</div>
		    		</div>

		    		<div class="row">
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_programas.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Programas</h5>
					      		<p class="card-text">Un programa educativo es un documento que permite organizar y detallar un proceso pedagógico. El programa brinda orientación al docente respecto a los contenidos que debe impartir.</p>
					      		<ul >
					            	<li id="201_submenu"><a href=""><i class="fa fa-list"></i>Apoyos a escuelas</a></li>
					          	</ul>
					    	</div>
					  	</div>
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_encuesta.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Encuesta educativa</h5>
					      		<p class="card-text">Se proyectan resultados de encuestas realizadas en el ámbito educativo.</p>
					      		<ul >
					            	<li id="201_submenu"><a href=""><i class="fa fa-list"></i>Graficas </a></li>
					          	</ul>
					    	</div>
					  	</div>
					  	<div class="col-4">
					    	<img class="card-img-top" src="<?=base_url('assets/img/photo_calendario.jpg')?>" alt="Card image cap" height="200">
					    	<div class="card-body">
					      		<h5 class="card-title">Calendarios escolares</h5>
					      		<p class="card-text">Calendarios escolares para el ciclo lectivo 2016-2017, uno de 200 días y el otro de 185.</p>
					      		<ul >
					            	<li id="201_submenu"><a href="<?=base_url("index/guias_cte")?>"><i class="fa fa-list"></i>2016-2017 </a></li>
					          	</ul>
					    	</div>
					  	</div>
		    		</div>
    			</div>
    		</div>

		</div>


