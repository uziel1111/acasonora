<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title> Secretaría de Educación y Cultura del Estado de Sonora</title>
	<script src="<?=base_url('assets/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('assets/jquery/jquery.validate.js')?>"></script>
    <link href="<?= base_url('assets/css/main.css'); ?>" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?= base_url('assets/css/linearicons.css'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="<?= base_url('assets/bootstrap-411/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  	<link href="<?= base_url('assets/css/loader.css') ?>" rel="stylesheet" media="screen">
  	<link href="<?= base_url('assets/css/src_up.css') ?>" rel="stylesheet" media="screen">
  	<link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?= base_url('assets/bootstrap-411/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/src_up.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="<?= base_url();?>assets/js/load.js"></script>


</head>
	<header class="main-header">
		<a href="http://www.sec.gob.mx/" target="_blank" class="logo-mini">
	      <span class="logo-mini"><img src="<?=base_url('assets/img/gob-sonora_c_s.png')?>"></span>
	      <span class="logo-lg"><img src="<?=base_url('assets/img/sec-sonora.png')?>"></span>
	    </a>
	    <nav class="navbar navbar-static-top">
	      	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	        	<span class="sr-only">Toggle navigation</span>
	      	</a>
	      	<div id="titulo_encabezado">
	      		<h4> <center>SEC SONORA</center></h4>
	      	</div>
	      	<div class="navbar-custom-menu" >
	            <a href="http://www.sonora.gob.mx/" target="_blank" class="dropdown-toggle">
	              <img id="img_logo" src="<?=base_url('assets/img/gob_sonora-m.png')?>" alt="Sonora">
	            </a> 
	      	</div>
	    </nav>
  </header>
<body>
	<div class="row">
		<div class="col-3">
			<div class="container">
		        <div class="header-content d-flex justify-content-between align-items-center">
		            <div class="right-bar d-flex align-items-center">
		                <nav class="d-flex align-items-center">
		                    <ul class="main-menu">
		                    	<li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="<?= base_url("index/index"); ?>" id="navbarDropdownMenuLink"  aria-haspopup="true" aria-expanded="false">
		                                  Inicio
		                            </a>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                          Estadística educativa
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item hcolor-1" href="<?= base_url("index.php/Estadistica/estad_indi_general"); ?>">General</a>
		                                <a class="dropdown-item hcolor-2" href="<?= base_url("index.php/Estadistica/estad_indi_generales"); ?>">Específica (por búsqueda)</a>
		                                <a class="dropdown-item hcolor-2" href="<?= base_url("index.php/Riesgo/riesgo_x_muni_zona"); ?>">Riesgo de abandono escolar</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                          Información por escuela
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" href="<?= base_url("index/catalogo_escolar"); ?>" target="_blank">Localiza tu escuela</a>
		                                <a class="dropdown-item hcolor-2" href=="<?=base_url("index/ubicacion_escolar");?>"  target="_blank">Tu escuela en el mapa</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                          Información para padres de familia
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" id="btn_index_guiaspadres" href="<?= base_url("index/pdf_696"); ?>">¿Sabía usted que...?</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                         Buenas prácticas escolares
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                            	<a class="dropdown-item hcolor-4" id="btn_index_modeloeducativo" href="<?=base_url("index/buenas_prac_esc");?>"> Buenas prácticas</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                         Modelo Educativo Sonora
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" id="btn_index_modeloeducativo" href="<?=base_url("index/vista_pdf");?>"> Modelo ACA</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                         Guías de consejo técnico
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" id="btn_index_modeloeducativo" href="<?=base_url("index/guias_cte");?>"> Guías CTE 2016-2017</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                         Control escolar
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" id="btn_index_modeloeducativo" href="http://www.sicres.gob.mx/" target="_blank">SICRES v2.O</a>
		                                <a class="dropdown-item hcolor-2" id="btn_index_modeloeducativo" href="<?=base_url("index/yoremia");?>"> ACA YOEMIA</a>
		                            </div>
		                        </li>
		                        <li class="nav-item dropdown">
		                            <a class="nav-link hcolor-2" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                         Calendarios escolares
		                            </a>
		                            <div class="dropdown-menu dropdown-menu-right ddm-color-2" aria-labelledby="navbarDropdownMenuLink">
		                                <a class="dropdown-item hcolor-2" id="btn_index_modeloeducativo" href="<?=base_url("index/vista_calendario");?>"> 2016-2017</a>
		                            </div>
		                        </li>
		                    </ul>        
		                </nav>
		            </div>
		        </div>
			</div>
		</div>
		<div class="col-9">
	<!-- </div> -->
<script type="text/javascript">
	$(function() {
		base_url = live_url = "<?=base_url()?>";
	});
</script>
