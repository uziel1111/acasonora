var Notification = {

  notification : function(title,text,type){
      Swal.fire({
      type: type,
      title: title,
      text : text,
      confirmButtonText: 'Aceptar',
        width:'350px'
    })
	},
  loading : function(texto) {
    Swal.fire({
        // title: "<div class='loader'></div>",
        title:"<i class='fa fa-spinner fa-spin' style='font-size:100px; color:#23c6c6'></i>",
        text: texto,
        width: 250,
        padding: 60,
        showCancelButton: false,
        showConfirmButton: false,
        allowEscapeKey:false,
        allowOutsideClick:false,
        customClass : 'trans'

      });
	}

};
