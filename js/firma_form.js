function validarFormFirma(f) {
  $(".error").css('visibility', 'hidden');
  error = 0;

  //VALIDAR DATOS PERSONALES
  if (f.nombre.value.search(/\S/) == -1 || f.nombre.value.length < 3) {

    $(".error.nombre").html("El nombre no puede estar vacío.");
    $(".error.nombre").css('visibility', 'visible');

    f.nombre.focus();
    error = 1;
  }

  if(f.apellidos.value.search(/\S/) == -1 || f.apellidos.value.length < 3) {

    $(".error.apellidos").html("Los apellidos no pueden estar vacíos.");
    $(".error.apellidos").css('visibility', 'visible');

    f.apellidos.focus();
    error = 1;
  }

  if(f.email.value.search(/\S/) == -1) {

    $(".error.email").html("El email no puede estar vacío.");
    $(".error.email").css('visibility', 'visible');

    f.email.focus();
    error = 1;
  }else if (f.email.value.trim().search(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.[a-z]{2,}$/i) == -1) {

    $(".error.email").html("Email con formato incorrecto.");
    $(".error.email").css('visibility', 'visible');

    f.email.focus()
    error = 1;
  }

  if(f.telefono.value.search(/\S/) == 0) {
    if(f.telefono.value.length != 9 || isNaN(f.telefono.value)) {
      $(".error.telefono").html("Teléfono con formato incorrecto.");
      $(".error.telefono").css('visibility', 'visible');

      f.telefono.focus()
      error = 1;
    }
  }

  if(f.pais.value == 0) {
    $(".error.pais").html("Selecciona el país de residencia.");
    $(".error.pais").css('visibility', 'visible');

    f.pais.focus()
    error = 1;
  }

  /*
  $('.open-popup-link').magnificPopup({
    type:'inline',
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

*/
  if(error == 1){
    //MOSTRAR LOS ERRORES
    return false;
  }else{

    var check = $("#check_reminder");
    var check_reminder_modal = $('#ai-accion-firma__masinfo_reminder');
    var _paq = _paq || [];


    if(!check.prop("checked") ) { // in case that exist an reminder_modal div

            

            Swal.fire({
              //title: 'Firma',
              //icon: 'info',
              html:' <div id="test-popup" class="modal-dialog mfp-hide white-popup mfp-hide" role="document"><div class="modal-content">		<div class="modal-body form-check">							<p>Si quieres recibir otras acciones como esta e información adicional de Amnistía Internacional para cambiar el mundo, haz click en el botón verde.</p>						</div>						<div class="modal-footer">									<label class="ai-accion-firma__check bigger form-check-label">											<input type="checkbox" id="ai-accion-firma__masinfo_reminder" class="form-check-input" style="display:none"/>											<button type="checkbox" id="ai-accion-firma__masinfo_button" class="form-check-input" onClick="$(\'.swal2-close\').click()">Sí quiero</button>	</label>	</div>					</div>			</div>',
              showCloseButton: true,
              showCancelButton: false,
              showConfirmButton: false,
              focusConfirm: false,
              allowEscapeKey:false,
            }).then((result) => {

              _paq.push(["trackEvent", "popup_check", "mostrado"]);

              /* Read more about isConfirmed, isDenied below */
              if (result.dismiss == "close") {
                //$( "#ai-accion-firma__masinfo_button" ).click(function(){
                  var check = $("#ai-accion-firma__masinfo");
                  $('#ai-accion-firma__masinfo_reminder').prop("checked", true);
                  $("#check_reminder").prop("checked", true);
                  document.formFirma.submit();
                //});
              }
            })

/*          
            $.magnificPopup.open({
                items: {
                    src: '#test-popup'

                },
                removalDelay: 50,
                callbacks: {
                  open: function() {
                    var popup = this;
                    var input = popup.currItem.inlineElement.find("input");
                    var check = $("#ai-accion-firma__masinfo");
                    input.prop("checked", false);
                    check.prop("checked", false);
                    $('#test-popup').data("shown", 1);
                    _paq.push(["trackEvent", "popup_check", "mostrado"]);
                    $( "#ai-accion-firma__masinfo_button" ).click(function(){
                        var check = $("#ai-accion-firma__masinfo");
                        $('#ai-accion-firma__masinfo_reminder').prop("checked", true);
                        $("#check_reminder").prop("checked", true);
                        document.formFirma.submit();
                    });
                  },
                  beforeClose: function(){
                        document.formFirma.submit();
                  }
                },
                midClick: true
            });


*/


            event.stopImmediatePropagation();
            return false;
    }


    $('#btnEnviar').css('display', 'none');
    $('#btnEnviando').css('display', 'block');
    //$('#formFirma').submit();
    document.formFirma.submit();
    return true;
  }
}

function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if((tecla < 48 || tecla > 57) && (tecla != 32 && tecla != 43 && tecla != 8 && tecla != 0)){
        return false;
    }
}

function ocultarTel(valor) {
  if(valor == '1198') {
    $('input[name=telefono]').removeAttr('disabled');
    $('input[name=telefono]').removeAttr('readonly');
  }else {
    $('input[name=telefono]').attr('disabled', 'disabled');
    $('input[name=telefono]').attr('readonly', 'readonly');
    $('input[name=telefono]').val('');
  }
}
