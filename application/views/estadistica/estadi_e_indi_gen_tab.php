<section  class="main-area">


</section>

<div id="visor_modales"></div>
<div class="modal fade" id="modal_visor_xedoxmuni" tabindex="-1" role="dialog" aria-hidden="true" style="overflow-y: scroll;">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content modal-style-1">
      <div class="modal-header bgcolor-2">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>



<!-- <script>
$(function () {
  $(window).scroll(function() {
  var scroll = $(window).scrollTop();
  var position=300;
// alert("111111");
  if (scroll > position) {
      $( "#dv_flot_est" ).addClass("dv_flotante");
  } else {
      $( "#dv_flot_est" ).removeClass("dv_flotante");
  }

});

  $(".hide-ini").css("display","none");

  $('tr.parent').css("cursor","pointer").attr("title","Click para expander/contraer").click(function()
    {
      if($(this).siblings('.child-'+this.id).is(":visible"))
      {
        $(this).find('img').css("transform", "rotate(360deg)");
          $(this).siblings('.child-'+this.id).fadeOut('500');
          $(this).siblings('.child-'+this.id).siblings('.class-hide-'+this.id).fadeOut('500');
      }
      else
      {
        $(this).find('img').css("transform", "rotate(270deg)");
            $(this).siblings('.child-'+this.id).fadeIn('500');
      }
    });

    $('tr.child-parent').css("cursor","pointer").attr("title","Click para expander/contraer").click(function()
    {

          if($(this).siblings('.nieto-'+this.id).is(":visible"))
              {
                $(this).find('img').css("transform", "rotate(360deg)");
                    $(this).siblings('.nieto-'+this.id).fadeOut('500');
                    $(this).siblings('.nieto-'+this.id).siblings('.class-hide-'+this.id).fadeOut('500');
              }
              else
              {
                $(this).find('img').css("transform", "rotate(270deg)");
                    $(this).siblings('.nieto-'+this.id).fadeIn('500');
              }
    });

    $('tr.child-nieto').css("cursor","pointer").attr("title","Click para expander/contraer").click(function()
    {
        if($(this).siblings('.bisnieto-'+this.id).is(":visible"))
        {
          $(this).find('img').css("transform", "rotate(360deg)");
              $(this).siblings('.bisnieto-'+this.id).fadeOut('500');
        }
        else
        {
          $(this).find('img').css("transform", "rotate(270deg)");
              $(this).siblings('.bisnieto-'+this.id).fadeIn('500');
        }
    });
});

</script> -->
