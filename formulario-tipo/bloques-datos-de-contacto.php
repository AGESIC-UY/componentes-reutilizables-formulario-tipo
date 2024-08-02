<?php
  $title = 'Bloques - Datos de contacto';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Datos de contacto</li>
				</ul>
		</div>
</div>

  
<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">

            
                <div class="Page" >


                    <h2 class="Page-title">Datos de contacto</h2>

                    <form action="./" class="Form--tipo">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
              
                        <fieldset>

                          <legend>
                            <span>Datos de contacto</span>
                          </legend>

                          <div class="Form-group">
                            <div class="Form-label-wrap">
                              <label class="Form-label" for="telefono">Teléfono:*</label>
                            </div>
                            <div class="Form-object-wrap">
                              <input class="Form-widget" name="telefono" type="text" id="telefono" required>
                            </div>
                          </div>

                          <div class="Form-group">
                            <div class="Form-label-wrap">
                              <label class="Form-label" for="otro-telefono">Otro teléfono:*</label>
                            </div>
                            <div class="Form-object-wrap">
                              <input class="Form-widget" name="otro-telefono" type="text" id="otro-telefono">
                            </div>
                          </div>

                          <div class="Form-group">
                            <div class="Form-label-wrap">
                              <label class="Form-label" for="e-mail">Correo electrónico:</label>
                            </div>
                            <div class="Form-object-wrap">
                              <input class="Form-widget" name="e-mail" type="email" id="e-mail" required>
                            </div>
                          </div>


                          <div class="Form-group" >
                            <div class="Form-label-wrap"></div>
                            <div class="Form-object-wrap">
                              <button type="submit" class="Button Button--primary">Enviar</button>
                            </div>
                          </div>


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