
    <div id="footer">
  		<div class="container">
    		<div class="row justify-content-between">
          <div class="col-12 col-lg">
        	  <p class="ml-3 mb-1 h6 text-muted">Secretaría de Educación y Cultura</p>
        	  <hr class="ml-3 my-2"/>
        	  <ul class="fa-ul">
            <li><span class="fa-li text-success"><i class="fas fa-map-marker-alt"></i></span>Blvd. Luis Donaldo Colosio, Col. Las Quintas. Hermosillo, Sonora. C.P. 83240</li>
            <li><span class="fa-li text-success"><i class="fas fa-phone"></i></span>01 800 623 77 00</li>
            <li><span class="fa-li text-success"><i class="fas fa-location-arrow"></i></span><a href="http://www.sec.gob.mx/" target="_blank">www.sec.gob.mx</a></li>
            <li class="text-muted"><span class="fa-li"><i class="fas fa-copyright"></i></span>Todos los Derechos Reservados</li>
            </ul>
          </div>
          <div class="col-12 col-lg mx-3 mb-4 text-left text-lg-right align-self-end">
            <img src="<?=base_url('assets/img/template/sec-sonora.png')?>" class="mb-4" alt="Responsive image" height="60px;">
      	    <br>
            <a href="https://www.facebook.com/SECSonoraOficial/" target="_blank" class="btn btn-sm btn-secondary text-light" style="width: 37px;"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/secsonora/" target="_blank" class="btn btn-sm btn-dark text-light" style="width: 37px;"><i class="fab fa-twitter"></i></a>
            <a href="https://www.google.com.mx/maps/place/Secretar%C3%ADa+de+Educaci%C3%B3n+y+Cultura/@29.0834647,-110.9993167,15z/data=!4m5!3m4!1s0x0:0x68b276c73b4b88fb!8m2!3d29.0834647!4d-110.9993167" target="_blank" class="btn btn-sm btn-secondary text-light" style="width: 37px;"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://www.youtube.com/channel/UCHImaMFdXPtPYwzCdxjflhQ" target="_blank" class="btn btn-sm btn-dark text-light" style="width: 37px;"><i class="fab fa-youtube"></i></a>	  
          </div>
        </div>
      </div>
  	</div>	
	</div>
</div>

	<script>
function rotArrow() {
	$('#rtarrow').toggleClass('rotarrow');
}
</script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
   <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <!-- Bootstrap JS -->
  <!--   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <div id="visor_generico">
      <script src="<?= base_url();?>assets/js/index/index.js"></script>
    </div>
</body>
</html>


