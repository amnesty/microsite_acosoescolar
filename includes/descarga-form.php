            <p>Rellena el formulario para recibirlo vía email</p>
            <form id="formDescarga" name="formDescarga" class="formulario-descarga" action="" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email*">
                <p style="visibility: hidden;" class="error email">No has introducido este dato.</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre*">
                <p style="visibility: hidden;" class="error nombre">No has introducido este dato</p>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="telefono" placeholder="Teléfono (solo España)" maxlength="9">
                <p style="visibility: hidden;" class="error telefono">No has introducido este dato</p>
              </div>
              <button id="btnDescarga" type="button" class="btn-formulario boton bcolor-yellow black">
                Descargar
              </button>
            </form>
