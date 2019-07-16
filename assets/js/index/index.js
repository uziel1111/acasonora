
var Utiles = {
  path_docs : "http://localhost/acasonora/assets/docs/",

  showPDF : function(idModal, urlPdf){
    //var dom = '<iframe src="https://docs.google.com/viewerng/viewer?url='+this.path_docs+urlPdf+'&embedded=true" width="100%" height="500" style="border: none;"></iframe>';
    // console.log("dom:"+dom);
    var dom = '<iframe src="'+this.path_docs+urlPdf+'" width="100%" height="500" style="border: none;"></iframe>';
    $("#"+idModal +" .modal-body").empty();
    $("#"+idModal +" .modal-body").html(dom);
    $("#"+idModal).modal("show");
  }

};

$("#btn_index_guiaspadres").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico").empty();
      $("#visor_generico").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "Resumen_696.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});
  

$("#btn_boton_prueba").click(function(e){
  console.log("calendario");
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico").empty();
      $("#visor_generico").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "CALENDARIO-2016-2017.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});
  
  

// $("#close_modal_visor_xedoxmuni").click(function(e){
  
// });

  
  $("#btn_pdf_modelo_educ").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico").empty();
      $("#visor_generico").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "ModeloEducativoSonora.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});

$("#btn_reporte_aca").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico2").empty();
      $("#visor_generico2").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "PRIMARIA_26EPR0001CTM11_01_1617.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});

$("#btn_buenas_practicas").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico2").empty();
      $("#visor_generico2").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "BP_Educacion_Indigena.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});
  
$("#btn_programa_escuelas").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico2").empty();
      $("#visor_generico2").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "buenas_practicas2.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});

$("#btn_guia_preescolar").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      console.log("llego a la funcion");
      $("#visor_generico3").empty();
      $("#visor_generico3").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "GUIA_Preescolar_FaseIntensiva2016.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});

$("#btn_guia_primaria").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico3").empty();
      $("#visor_generico3").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "GUIA_Primaria_FaseIntensiva2016.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});

$("#btn_guia_secundaria").click(function(e){
    var ruta = base_url+"Index/visorpdf";
    $.ajax({
      url: ruta,
      method: 'POST',
      data: { 'folder':1, 'file':1 },
      beforeSend: function(xhr) {
        Notification.loading("");
      }
    })
    .done(function( data ) {
      $("#visor_generico3").empty();
      $("#visor_generico3").append(data.strView);
      Utiles.showPDF("modal_visor_pdf", "GUIA_Secundaria_FaseIntensiva2016.pdf");
    })
    .fail(function(e) {
      console.error("Error in visorpdf()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});