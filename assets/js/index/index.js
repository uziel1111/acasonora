
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

// $("#btn_index_guiaspadres").click(function(e){
//   console.log("estoy en el boton guiaparapadres");
//     var ruta = base_url+"Index/guiaparapadres";
//     $.ajax({
//       url: ruta,
//       method: 'POST',
//       data: { 'folder':1, 'file':1 },
//       beforeSend: function(xhr) {
//         Notification.loading("");
//       }
//     })
//     .done(function( data ) {
//       $("#visor_generico").empty();
//       $("#visor_generico").append(data.strView);
//       Utiles.showPDF("modal_visor_pdf", "Resumen_696.pdf");
//     })
//     .fail(function(e) {
//       console.error("Error in guiaparapadres()"); console.table(e);
//     })
//     .always(function() {
//       swal.close();
//     });
// });
  
  // $("#esta_gral").click(function(e){
  //   console.log("estoy aca");
  // });

// function estadistica_gral(){
//   var ruta = base_url+"estadistica/estad_indi_generales2";
//     $.ajax({
//       url: ruta,
//       method: 'POST',
//       data: { },
//     })
//     .done(function( data ) {
//       $("#visor_modales").empty();
//       $("#visor_modales").append(data.strView);
//       // Utiles.showPDF("modal_visor_pdf", "CALENDARIO-2016-2017.pdf");
//     })
//     .fail(function(e) {
//       console.error("Error in estad_indi_generales2()"); console.table(e);
//     })
//     .always(function() {
//       swal.close();
//     });
// }
  
  

// $("#btn_index_calendario").click(function(e){
//   console.log("estoy en el boton guiaparapadres");
//     var ruta = base_url+"Index/guiaparapadres";
//     $.ajax({
//       url: ruta,
//       method: 'POST',
//       data: { 'folder':1, 'file':1 },
//       beforeSend: function(xhr) {
//         Notification.loading("");
//       }
//     })
//     .done(function( data ) {
//       $("#visor_generico").empty();
//       $("#visor_generico").append(data.strView);
//       Utiles.showPDF("modal_visor_pdf", "CALENDARIO-2016-2017.pdf");
//     })
//     .fail(function(e) {
//       console.error("Error in guiaparapadres()"); console.table(e);
//     })
//     .always(function() {
//       swal.close();
//     });
// });
  
  
    