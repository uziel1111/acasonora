    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map{
		position: inherit;
   		height: 100%;
        width: auto;
		margin: 0px 20px 20px 20px;
      }
    </style>
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
    <li class="breadcrumb-item active" aria-current="page">Escuela en el mapa</li>
  </ol>
</nav>
	  </div>
	</div>
  </div>
</div>
</div>
    <div class="col-xs">
      <button class="btn btn_primary" id="btn_getvistabuscador">Buscar</button>
    </div>
    <div class="container-fluid pb-1 pt-1">
      <div class="row">
        <div class="col-12 alert alert-dark pb-0 pt-2" role="alert">
            <div class="row">
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#000000;">place</i> Especial</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#810000;">place</i> Inicial</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#0101ff;">place</i> Preescolar</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#6b8f1e;">place</i> Primaria</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#2ece2e;">place</i> Secundaria</label>
        </div>
        </div>
        <div class="row">
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#9471dc;">place</i> Media superior</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#ff8d00;">place</i> Superior</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#ff0000;">place</i> Formación para el trabajo</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#ff00ff;">place</i> Otro nivel educativo</label>
        </div>
        <div class="col-sm mb-1">
            <label class="d-inline-flex fw500"><i class="material-icons" style="color:#ffff00;">place</i> No aplica</label>
        </div>
       </div>
     </div>
      </div>
    </div>
	</div>
    <div id="map"></div>

  <div class="modal fade bd-example-modal-lg" id="modalbuscador" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Busca tu escuela</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
      </div>
    </div>
  </div>


    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="http://jawj.github.io/OverlappingMarkerSpiderfier/bin/oms.min.js"></script>
    <script src="<?= base_url();?>assets/js/mapa/mapaindex.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqGxPT1KkV0q3eSoIOpuZeSrsLm_A5Uhs&callback=initMap"
    async defer></script>
