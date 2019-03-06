// $("#modal_resultado_estadistica").modal("show");

$("#ver_detalle").click(function(e){
  	e.preventDefault();
  		$.ajax({
		    url:base_url+"mapa/estadistica",
		    method:"POST",
		    data:{'':$("#id_cct").val()},
		    beforeSend: function(xhr) {

		    },
		    success:function(data){
				$("#visor_estadistica").empty();
        		$("#visor_estadistica").append(data.str_view);
        		$("#modal_resultado_estadistica").modal("show");
		    },
		    error: function(error){
		      console.log(error);
		    }
	  	});

});