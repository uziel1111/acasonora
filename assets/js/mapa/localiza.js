$("#modal_localiza_tu_escuela").modal("show");

if($('#check_busquedaAvanzada').is(':checked')){
	$('#divBusquedaAvanzada').show();
}else{
	$('#divBusquedaAvanzada').hide();
}


$("#check_busquedaAvanzada").change(function() {
  	if($('#check_busquedaAvanzada').is(':checked')){
		$('#divBusquedaAvanzada').show();
	}else{
		$('#divBusquedaAvanzada').hide();
	}
});


$("#btn_localizar_escuela").click(function(e){
  	e.preventDefault();
  	if(validaFormulario()){
  		$.ajax({
		    url:base_url+"mapa/localiza_escuela",
		    method:"POST",
		    data:{"id_municipio":$("#municipio").val(),"id_nivel":$("#nivelBusqueda").val(),
				"zona_escolar":$("#zonaBusqueda").val(),"nombre_cct":$("#nombreBusqueda").val(),
				 "clave_cct":$("#clave_cct").val()},
		    beforeSend: function(xhr) {

		    },
		    success:function(data){
				$("#resultado_busqueda").empty();
        		$("#resultado_busqueda").append(data.str_view);
        		$("#modal_localiza_tu_escuela").modal("hide");
		    },
		    error: function(error){
		      console.log(error);
		    }
	  	});
  	}
});

function validaFormulario(){
	var bandera=false;
	var mensaje="";
	if($('#check_busquedaAvanzada').is(':checked')){
		if($("#municipio").val()!=0){
			if($("#nivelBusqueda").val()!=0){
				bandera=true;
			}else{
				mensaje="Debe de seleccionar un nivel";
			}
		}else{
			mensaje="Debe de seleccionar un municipio";
		}
	}else{
		if($("#municipio").val()!=0){
			bandera=true;
		}else{
			mensaje="Debe de seleccionar un municipio";
		}
		
	}

	if(mensaje!=""){
		alert(mensaje);
	}
	return bandera;
}