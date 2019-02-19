$("#modal_visor_xedoxmuni").modal("show");
function Regularexpression(){
}

Regularexpression.prototype.cct = function(value){
  let regex = /^([a-z]{3})([0-9]{4})([a-z]{1})$/i;
  return regex.test(value);
};

$(function () {
 this_buscador = new Buscador();
});

function Buscador(){
}

$("#slc_xest_muni_estmunicipio").change(function(){
  var id_municipio = $( "#slc_xest_muni_estmunicipio" ).val();
  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getnivel",
    method:"POST",
    data:{"id_municipio":id_municipio},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      // $("#wait").modal("hide");
      $("#slc_xest_muni_nivel").empty();
      $.each(data, function (index, item) {
          $("#slc_xest_muni_nivel").append('<option value="'+index+'">'+item+'</option>');
        });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});

$("#slc_xest_muni_nivel").change(function(){
  var id_municipio = $( "#slc_xest_muni_estmunicipio" ).val();
  var id_nivel = $( "#slc_xest_muni_nivel" ).val();
  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getsost",
    method:"POST",
    data:{"id_municipio":id_municipio,"id_nivel":id_nivel},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      // $("#wait").modal("hide");
      $("#slc_xest_muni_sostenimiento").empty();
      $.each(data, function (index, item) {
          $("#slc_xest_muni_sostenimiento").append('<option value="'+index+'">'+item+'</option>');
        });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});

$("#slc_xest_muni_sostenimiento").change(function(){
  var id_municipio = $( "#slc_xest_muni_estmunicipio" ).val();
  var id_nivel = $( "#slc_xest_muni_nivel" ).val();
  var id_sostenimiento = $( "#slc_xest_muni_sostenimiento" ).val();
  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getmodali",
    method:"POST",
    data:{"id_municipio":id_municipio,"id_nivel":id_nivel,"id_sostenimiento":id_sostenimiento},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      // $("#wait").modal("hide");
      $("#slc_xest_muni_modalidad").empty();
      $.each(data, function (index, item) {
          $("#slc_xest_muni_modalidad").append('<option value="'+index+'">'+item+'</option>');
        });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});



$("#slc_xest_nivel_zona").change(function(){
  var id_nivel = $( "#slc_xest_nivel_zona" ).val();
  $("#slc_xest_zona").prop('disabled', 'disabled');
  $('#slc_xest_zona').css( 'cursor', 'no-drop' );
  if (id_nivel!=0) {
    $("#slc_xest_sostenimiento_zona").removeAttr("disabled");
    $('#slc_xest_sostenimiento_zona').css( 'cursor', 'pointer' );
  }
  else {
    $("#slc_xest_sostenimiento_zona").prop('disabled', 'disabled');
    $('#slc_xest_sostenimiento_zona').css( 'cursor', 'no-drop' );
  }

  $("#slc_xest_zona").val('0');
  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getsubsost_zona",
    method:"POST",
    data:{"id_nivel":id_nivel},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      // $("#wait").modal("hide");
      $("#slc_xest_sostenimiento_zona").empty();
      $.each(data, function (index, item) {
          $("#slc_xest_sostenimiento_zona").append('<option value="'+index+'">'+item+'</option>');
        });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});

$("#slc_xest_sostenimiento_zona").change(function(){
  var id_nivel = $( "#slc_xest_nivel_zona" ).val();
  var id_subsost = $( "#slc_xest_sostenimiento_zona" ).val();
  if (id_subsost!=0) {
    $("#slc_xest_zona").removeAttr("disabled");
    $('#slc_xest_zona').css( 'cursor', 'pointer' );
  }
  else {
    $("#slc_xest_zona").prop('disabled', 'disabled');
    $('#slc_xest_zona').css( 'cursor', 'no-drop' );
  }
  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getzonassubsost_zona",
    method:"POST",
    data:{"id_nivel":id_nivel,"id_subsost":id_subsost},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      console.table(data.array);
      // $("#wait").modal("hide");
      $("#slc_xest_zona").empty();
      $("#slc_xest_zona").append(data.array);
      // $.each(data, function (index, item) {
      //     $("#slc_xest_zona").append('<option value="'+index+'">'+item+'</option>');
      //   });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});

$("#slc_xest_zona").change(function(){
  var id_nivel = $( "#slc_xest_nivel_zona" ).val();
  var id_subsost = $( "#slc_xest_sostenimiento_zona" ).val();
  var id_zona = $( "#slc_xest_zona" ).val();


  $.ajax({
    url:base_url+"Estadistica/estad_indi_generales_getcicloxnxsubxz_zona",
    method:"POST",
    data:{"id_nivel":id_nivel,"id_subsost":id_subsost,"id_zona":id_zona},
    beforeSend: function(xhr) {
      // $("#wait").modal("show");
    },
    success:function(data){
      // $("#wait").modal("hide");
      $("#slc_xest_cicloe_zona").empty();
      $.each(data, function (index, item) {
          $("#slc_xest_cicloe_zona").append('<option value="'+index+'">'+item+'</option>');
        });
      // console.log(data);
    },
    error: function(error){
      console.log(error);
    }
  });

});
$("#btn_buscar_zona").click(function(){
  var id_nivel = $( "#slc_xest_nivel_zona" ).val();
  var id_subsost = $( "#slc_xest_sostenimiento_zona" ).val();
  var id_zona = $( "#slc_xest_zona" ).val();
  var id_ciclo_z = $('#slc_xest_cicloe_zona').val();

  if (id_nivel=='0') {
    alert("Seleccione nivel");
  }
  else if (id_subsost=='0') {
    alert("Seleccione sostenimiento");
  }
  else if (id_zona=='0') {
    alert("Seleccione número de zona escolar");
  }
  if(id_nivel!='0' && id_subsost!='0' && id_zona!='0'){
      $.ajax({
        url: base_url+"estadistica/xest_zona_x/",
        method: 'POST',
        data: {slc_xest_nivel_zona:id_nivel,slc_xest_sostenimiento_zona:id_subsost,
          slc_xest_zona:id_zona,slc_xest_cicloe_zona:id_ciclo_z},
      })
      .done(function( data ) {
        console.log(data);
        $("#visor_estadistica").empty();
        $("#visor_estadistica").append(data.str_view);
        $("#modal_visor_xedoxmuni").modal("hide");
 
      })
      .fail(function(e) {
        console.error("Error in xest_zona_x()"); console.table(e);
      })

  }
});

$("#slc_xest_sostenimiento_zona").prop('disabled', 'disabled');
$("#slc_xest_zona").prop('disabled', 'disabled');
$('#slc_xest_sostenimiento_zona').css( 'cursor', 'no-drop' );
$('#slc_xest_zona').css( 'cursor', 'no-drop' );

$("#btn_buscar_mun_est").click(function(){
  var id_municipio = $('#slc_xest_muni_estmunicipio').val();
  var id_nivel = $('#slc_xest_muni_nivel').val();
  var id_sostenimiento = $('#slc_xest_muni_sostenimiento').val();
  var id_modalidad = $('#slc_xest_muni_modalidad').val();
  var id_ciclo = $('#slc_xest_muni_cicloe').val();
    $.ajax({
        url: base_url+"estadistica/xest_muni_x/",
        method: 'POST',
        data: {slc_xest_muni_estmunicipio:id_municipio,slc_xest_muni_nivel:id_nivel,
          slc_xest_muni_sostenimiento:id_sostenimiento,slc_xest_muni_modalidad:id_modalidad,
          slc_xest_muni_cicloe:id_ciclo},
      })
      .done(function( data ) {
        console.log(data);
        $("#visor_estadistica").empty();
        $("#visor_estadistica").append(data.str_view);
        $("#modal_visor_xedoxmuni").modal("hide");
        // $('.modal-backdrop').remove(); 
 
      })
      .fail(function(e) {
        console.error("Error in get_xcvecentro()"); console.table(e);
      })
});

$("#xest_muni-tab").click(function(){
  $(".dv_tablas_estzona").empty();
  $(".dv_tablas_estmuni").empty();
  $(".dv_filtro").empty();
});

$("#xzona-tab").click(function(){
  $(".dv_tablas_estmuni").empty();
  $(".dv_tablas_estzona").empty();
  $(".dv_filtro").empty();
});

$("#itxt_busquedalista_cct").keyup(function() {
  console.log("llego a la funcion");
  if($(this).val().length==8){
      let obj_re = new Regularexpression();
      let valid = obj_re.cct(this.value);
      if(valid){
        this_buscador.get_xcvecentro(this.value);
      }
  }
  else if ($(this).val().length>8) {
    alert('longitud incorrecta');
    this.value = this.value.substring(0, this.value.length - 1);
  }
});

Buscador.prototype.get_xcvecentro = function get_xcvecentro(cve_centro){
    // let ruta = base_url+"Estadistica/escuelas_xcvecentro";
      $.ajax({
        url: base_url+"Estadistica/escuelas_xcvecentro",
        method: 'POST',
        data: {'cve_centro':cve_centro},
        beforeSend: function(xhr) {
              // Notification.loading("");
        },
      })
      .done(function( data ) {
        console.log(data);
        if(data.total_escuelas==0){
          alert('sin resultados');
        }
        if(data.total_escuelas==1){
          this_buscador.form(data.id_cct);
        }
        else if (data.total_escuelas>1) {
          $("#id_cct").empty();
          $("#id_cct").append(data.str_select);
          $("#busquedalista_modal").modal("show");
        }
      })
      .fail(function(e) {
        console.error("Error in get_xcvecentro()"); console.table(e);
      })
      .always(function() {
        swal.close();
      });
};