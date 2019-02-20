console.log("llegue al js");
var Utiles = {
  path_docs : "http://www.acasonora.gob.mx/assets/docs/",

  showPDF : function(idModal, urlPdf){
    var dom = '<iframe src="https://docs.google.com/viewerng/viewer?url='+this.path_docs+urlPdf+'&embedded=true" width="100%" height="500" style="border: none;"></iframe>';
    // console.log("dom:"+dom);
    $("#"+idModal +" .modal-body").empty();
    $("#"+idModal +" .modal-body").html(dom);
    $("#"+idModal).modal("show");
  }

};

$("#btn_index_guiaspadres").click(function(e){
  console.log("estoy en el boton guiaparapadres");
    var ruta = base_url+"Index/guiaparapadres";
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
      console.error("Error in guiaparapadres()"); console.table(e);
    })
    .always(function() {
      swal.close();
    });
});
  
    