<?php
  $title = 'Bloques - Firma';
?>

<?php include "inc/head.php"; ?>



  
<main  id="contenido">


    <div class="Container">

        <div class="Grid">


            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">

              <a href="index.php">Inicio</a>

              <div class="Page Page--formulario" >



                <h2 class="Firma">Firma</h2>

                <form action="./" class="Form">

                    <fieldset class="u-mt5">
                        
                        <legend>

                            <span>Métodos de firma</span>
                        
                        </legend>

                        
                        <div class="Form-group" role="group" aria-labelledby="grupo-metodos" >
                          
                          <div id="grupo-metodos" class="Form-label" >Métodos:</div>
                          
                          <div class="Form-options">
                          
                            <label for="firma-digital" class="Form-option">
                              <input type="radio" id="firma-digital" name="metodos">
                              <span>Firmar en forma digital</span>
                            </label>

                            <label for="imprimir-formulario" class="Form-option">
                              <input type="radio" id="imprimir-formulario" name="metodos">
                              <span><a href="">Imprimir formulario</a></span>
                            </label>

                          </div>

                        </div>

                    </fieldset>

                    <div class="Alert Alert--dialog" role="alert" aria-live="assertive">

                        <h4 class="Alert-title">Forma precencialmente</h4>
                        <p>También es posible llevar el formulario firmado a las <a href="">oficina del organismo</a></p>
                        
                    </div>


                    <fieldset class="u-mt5">
                        
                        <legend>

                            <span>Adjuntar formulario firmado</span>
                        
                        </legend>

                        <div class="Form-group"  >
                          <label class="Form-label" for="adjuntos-1">Archivos:</label>
                          <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
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