console.log("llegue al js");
var Utiles = {
  path_docs : "http://www.acasonora.gob.mx/assets/docs/",

  showPDF : function(idModal, urlPdf){
    var dom = '<iframe src="https://docs.google.com/viewerng/viewer?url='+this.path_docs+urlPdf+'&embedded=true" width="100%" height="500" style="border: none;"></iframe>';
    console.log("dom:"+dom);
    $("#"+idModal +" .modal-body").empty();
    $("#"+idModal +" .modal-body").html(dom);
    $("#"+idModal).modal("show");
  }

};
  $("#visor_generico").empty();
  $("#visor_generico").append(data.strView);
  Utiles.showPDF("modal_visor_pdf", "Resumen_696.pdf");
    