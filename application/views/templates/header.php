<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://www.sonora.gob.mx/images/zo2_zone/assets/zo2/images/favicon.jpg">

    <title>ACA | Sonora</title>

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:400,500,700" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">	  

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	  
	<!--Fontawesome  -->
	  <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	  <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	  -->

    <!-- Custom styles for this template 
    <link href="assets/css/main.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>"> 
	  
	<script type="text/javascript">
		$(function() {
			base_url = live_url = "<?=base_url()?>";
		});
	</script>
	  
	  
<!--	<script src="<?=base_url('assets/jquery/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('assets/jquery/jquery.validate.js')?>"></script>
	  
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="<?= base_url('assets/bootstrap-411/js/bootstrap.min.js'); ?>"></script>	  

  	<link href="<?= base_url('assets/bootstrap-411/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
  	<link href="<?= base_url('assets/css/loader.css') ?>" rel="stylesheet" media="screen">
  	<link href="<?= base_url('assets/css/src_up.css') ?>" rel="stylesheet" media="screen">

  	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	<script src="<?= base_url('assets/js/src_up.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script src="<?= base_url();?>assets/js/load.js"></script>	 --> 
	  
	  
	  
	  
	  
  </head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header bg-dark">
                <h3 class="mb-0"><img src="<?=base_url('assets/img/template/logo-sonora-2015.png')?>" alt="Responsive image" height="60px;"></h3>
                <strong><img src="<?=base_url('assets/img/template/logo-sonora-2015-escudo.png')?>" alt="Responsive image" height="60px;"></strong>
            </div>
            <div class="sidebar-header">
                <h3 class="mb-0"><img src="<?=base_url('assets/img/template/logo-acasonora.png')?>" alt="Responsive image" height="20px;"></h3>
                <strong class="my-1"><img src="<?=base_url('assets/img/template/logo-aca.png')?>" alt="Responsive image" height="20px;"></strong>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#navEstadistica" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle navitem">
                        <i class="fas fa-home"></i>
                        <span>Estadística</span>
					</a>
					</div>	
                    <ul class="collapse list-unstyled" id="navEstadistica">
                        <li>
                            <a href="#">General</a>
                        </li>
                        <li>
                            <a href="#">Específica</a>
                        </li>
                        <li>
                            <a href="#">Risgo de Abandono</a>
                        </li>
                    </ul>
                </li>
                <li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#navInformacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle navitem">
                        <i class="fas fa-copy"></i>
                        <span>Información</span>
                    </a>
					</div>	
                    <ul class="collapse list-unstyled" id="navInformacion">
                        <li>
                            <a href="#">Localiza tu escuela</a>
                        </li>
                        <li>
                            <a href="#">Escuela en el mapa</a>
                        </li>
                    </ul>
                </li>
                <li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#navFamilia" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle navitem">
                        <i class="fas fa-copy"></i>
                        <span>Familia</span>
                    </a>
					</div>	
                    <ul class="collapse list-unstyled" id="navFamilia">
                        <li>
                            <a href="#">¿Sabía usted que?</a>
                        </li>
                    </ul>
                </li>
				<li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#" class="navitem">
                        <i class="fas fa-image"></i>
                        <span>Buenas prácticas</span>
                    </a>
					</div>
				</li>
				<li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#" class="navitem">
                        <i class="fas fa-question"></i>
                        <span>Modelo Educativo</span>
                    </a>
					</div>
				</li>	
                <li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#navCTec" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle navitem">
                        <i class="fas fa-copy"></i>
                        <span>Consejo Técnico</span>
                    </a>
					</div>	
                    <ul class="collapse list-unstyled" id="navCTec">
                        <li>
                            <a href="#">Guías CTE</a>
                        </li>
                    </ul>
                </li>	
                <li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#navCE" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle navitem">
                        <i class="fas fa-copy"></i>
                        <span>Control Escolar</span>
                    </a>
					</div>	
                    <ul class="collapse list-unstyled" id="navCE">
                        <li>
                            <a href="#">SICRES</a>
                        </li>
                        <li>
                            <a href="#">ACA Yoremia</a>
                        </li>						
                    </ul>					
                </li>				
                <li>
					<div class="sidebar-header p-0 bg-transparent">
                    <a href="#" class="navitem">
                        <i class="fas fa-paper-plane"></i>
                        <span>Calendario</span>
                    </a>
					</div>	
                </li>
            </ul>

<!--            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul>-->	
        </nav>

        <!-- Page Rightside  -->
        <div id="rightside">
			<!-- Header  -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid pl-0">

                    <button type="button" id="sidebarCollapse" class="btn btn-collapse" onclick="rotArrow()">
                        <div id="rtarrow" class="my-auto"><i class="fas fa-angle-left" id="rtarrow"></i></div>
                    </button>

					<div class="ml-auto my-1">
						<img src="<?=base_url('assets/img/template/logo-sonora-color.png')?>" alt="Responsive image" height="30px;">
					</div>	

                </div>
            </nav>
			<!-- END Header  -->