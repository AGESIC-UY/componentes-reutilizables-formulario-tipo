<?php
  $title = 'Bloques - Datos de contacto';
?>

<?php include "inc/head.php"; ?>



  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">

                <a href="index.php">Inicio</a>

                <div class="Page Page--formulario" >


                    <h2 class="Page-title">Datos de contacto</h2>

                    <form action="./" class="Form">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
              
                        <fieldset>

                          <legend>
                            <span>Datos de contacto</span>
                          </legend>

                          <div class="Form-group" >
                            <label class="Form-label" for="telefono">Teléfono:*</label>
                            <input class="Form-widget" name="telefono" type="text" id="telefono" required>
                          </div>

                          <div class="Form-group" >
                            <label class="Form-label" for="otro-telefono">Otro teléfono:</label>
                            <input class="Form-widget" name="otro-telefono" type="text" id="otro-telefono">
                          </div>


                          <div class="Form-group" >
                            <label class="Form-label" for="e-mail">Correo electrónico:</label>
                            <input class="Form-widget" name="e-mail" type="email" id="e-mail" required>
                          </div>
                          


                          <div class="Form-group Form-group--aligned" >
                            <button type="submit" class="Button Button--primary">Enviar</button>
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