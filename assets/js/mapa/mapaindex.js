$(function() {
    obj_mapa= new Mapa();
});

$("#btn_getvistabuscador").click(function(){
    obj_mapa.get_buscador();
});



function Mapa(){
  _thispropiedad = this;
}

 Mapa.prototype.get_buscador = function(){
    $.ajax({
        url: base_url+'mapa/get_buscadormapa',
        type: 'POST',
        dataType: 'JSON',
        data: '',
        // beforeSend: function(xhr) {
        //     Notification.loading("");
        // },
    })
    .done(function(result) {
        $("#modalbuscador .modal-body").empty();
        $("#modalbuscador .modal-body").append(result.viewform);
        $("#modalbuscador").modal('show');
    })
    .fail(function(e) {
        console.error("Error in get_x_coordenadas()"); console.table(e);
    })
    .always(function() {
    // swal.close();
    });
 }
