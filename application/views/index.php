			<!-- Content  -->
<div id="content">
<div class="card section-header mb-0">
  <div class="card-body">
	  <div class="row justify-content-end">
		<div class="col-12 col-md">
		  <div class="section-name">
			Bienvenido
		  </div>
		</div>
	<div class="col-12 col-md-auto">
	  <div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Inicio</li>
  </ol>
</nav>
	  </div>
	</div>
  </div>
</div>
</div>



  <div class="card-columns mt-3">
    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box1.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Estadística educativa</h5>
        <p class="card-text text-justify">Integra datos las estadísticas básicas que describen la situación actual y los avances en la prestación de los servicios educativos.</p>
      </div>
      <ul class="list-group list-group-flush">
    	  <a href="<?= base_url("Estadistica/estadistica_general"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> General</a>
    	  <a href="<?= base_url("Estadistica/estad_indi_generales"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Específica (por búsqueda)</a>
    	  <a href="<?= base_url("Riesgo/riesgo_x_muni_zona"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Riesgo de abandono escolar</a>
      </ul>
    </div>
    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box4.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Programas</h5>
        <p class="card-text text-justify">Conoce sobre programas educativos lo cuales permiten organizar y detallar los procesos pedagógicos.</p>
      </div>
      <ul class="list-group list-group-flush">
    	  <a href="<?= base_url("Index/programas_apoyo"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Apoyos a escuelas</a>
      </ul>
    </div>
    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box2.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Control escolar</h5>
        <p class="card-text text-justify">Tecnología orientada al cumplimiento a las necesidades de educación de calidad, que demandan los padres de familia en Sonora.</p>
      </div>
      <ul class="list-group list-group-flush">
    	  <a href="http://www.sicres.gob.mx/" class="list-group-item list-group-item-action" target="_blank"><i class="fas fa-genderless text-muted"></i> SICRES v2.O</a>
    	  <a href="https://www.yoremia.org/" class="list-group-item list-group-item-action" target="_blank"><i class="fas fa-genderless text-muted"></i> YOEMIA</a>
      </ul>
    </div>
    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box5.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Encuesta educativa</h5>
        <p class="card-text text-justify">Obten informaicón importante sobre resultados proyectados de las encuestas realizadas en el ámbito educativo.</p>
      </div>
      <ul class="list-group list-group-flush">
    	  <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Graficas</a>
      </ul>
    </div>
    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box3.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Información por escuela</h5>
        <p class="card-text text-justify">Información referente a escuelas oficiales y particulares que se encuentran incorporadas al Sistema Educativo.</p>
      </div>
      <ul class="list-group list-group-flush">
    	  <a href="<?= base_url("Index/localiza_tu_escuela"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Localiza tu escuela</a>
    	  <a href="<?= base_url("Mapa/index"); ?>" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> Tu escuela en el mapa</a>
      </ul>
    </div>

    <div class="card card-index shadow mb-4">
    	<div class="inner">
    		<img src="<?=base_url('assets/img/home/box6.jpg')?>" class="card-img-top" alt="...">
    	</div>
      <div class="card-body">
        <h5 class="card-title">Calendario</h5>
        <p class="card-text text-justify">Consulta los calendarios escolares para el ciclo lectivo 2019-2020, uno de 200 días y el otro de 185.</p>
      </div>
      <ul class="list-group list-group-flush">
        <a id="btn_boton_prueba" class="list-group-item list-group-item-action"><i class="fas fa-genderless text-muted"></i> 2019-2020</a>
      </ul>
    </div>
  </div>
</div>
<!-- END Content  -->
<div id="visor_generico"></div>
<script src="<?= base_url();?>assets/js/index/index.js"></script>
