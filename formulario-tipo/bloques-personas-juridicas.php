<?php
  $title = 'Bloques - Representación de Personas jurídicas';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Representación de Personas jurídicas</li>
				</ul>
		</div>
</div>

  
<main  id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">

                <div class="Page" >

                    <h2 class="Page-title">Representación de Personas jurídicas</h2>

                    <form action="./" class="Form--tipo">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                        <fieldset>

                          <legend>
                            <span>Representación de Personas jurídicas</span>
                          </legend>

                          <fieldset>
                        
                            <legend>
                              <span>Empresa</span>
                            </legend>

                            <div class="Form-group">
                              <div class="Form-label-wrap">
                                <label class="Form-label" for="rut">Rut:*</label>
                              </div>
                              <div class="Form-object-wrap">
                                <input class="Form-widget" name="rut" type="text" id="rut" required>
                              </div>
                            </div>

                            <div class="Form-group">
                              <div class="Form-label-wrap">
                                <label class="Form-label" for="razon-social">Razón Social:*</label>
                              </div>
                              <div class="Form-object-wrap">
                                <input class="Form-widget" name="razon-social" type="text" id="razon-social" required>
                              </div>
                            </div>

                            <div class="Form-group">

                              <div class="Form-label-wrap">
                                <label for="rol" class="Form-label">Rol: *</label>
                              </div>

                              <div class="Form-object-wrap">
                                <select class="Form-widget" name="rol" id="rol" required>
                                  <option value="0">Selecciona rol</option>
                                  <option value="1">Opción 1</option>
                                  <option value="2">Opción 2</option>
                                  <option value="3">Opción 3</option>
                                </select>
                                <div class="Form-status Form-status--ok" id="campo-ok">Dato validado</div>
                              </div>

                            </div>



                            <div class="Form-group" role="group"  aria-labelledby="grupo-validacion" >

                              <div class="Form-label-wrap">
                                <div id="grupo-validacion" class="Form-label" >Validación:*</div>
                              </div>

                              <div class="Form-object-wrap">

                                <div class="Form-options">

                                  <label for="verificar" class="Form-option">
                                    <input type="radio" id="verificar" name="validacion">
                                    <span>Verificar registro de DGI/DGR</span>
                                  </label>

                                  <label for="presentar" class="Form-option">
                                    <input type="radio" id="presentar" name="validacion">
                                    <span>Presentar documentación en <a href="#">oficinas del organismo</a> o <a href="#">PAC</a></span>
                                  </label>

                                </div>

                              </div>

                            </div>


                            <div class="Form-group">

                              <div class="Form-label-wrap">
                                <label class="Form-label" for="adjuntos-1">Adjuntar certificado notarial electrónico (PDF max 45KB):</label>
                              </div>

                              <div class="Form-object-wrap">
                                <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                              </div>

                            </div>

                        </fieldset>

                        <a href="#">+ Agregar empresa</a>


                      </fieldset>
                        
                    </form>

                </div>


            </div>

        </div>

    </div>

</main>


<?php include "inc/footer.php"; ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/portal-unificado.js"></script>
<script src="js/custom.js"></script>

</body>
</html>