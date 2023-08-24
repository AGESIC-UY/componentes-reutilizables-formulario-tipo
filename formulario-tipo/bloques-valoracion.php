<?php
  $title = 'Bloques - Valoración';
?>

<?php include "inc/head.php"; ?>



  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-mt5 u-md5 u-lg-size8of10">

            <a href="index.php">Inicio</a>

            <div class="Page Page--formulario" >


                    <h2 class="Page-title">Valoración</h2>

                    <form action="./" class="Form">

                       
              
                        <fieldset >
                        
                        <legend>
                          <span>Ayúdanos a mejorar</span>
                        </legend>



                        <div class="Form-group" role="group"  aria-labelledby="grupo-calificacion" >
                          
                          <div id="grupo-calificacion" class="Form-label">¿Cómo calificarías esta gestión?:</div>
                          
                          <div class="Form-options">
                          
                            <label for="excelente" class="Form-option">
                              <input type="radio" id="excelente" name="calificacion">
                              <span>Excelente</span>
                            </label>

                            <label for="muy-buena" class="Form-option">
                              <input type="radio" id="muy-buena" name="calificacion">
                              <span>Muy buena</span>
                            </label>

                            <label for="buena" class="Form-option">
                              <input type="radio" id="buena" name="calificacion">
                              <span>Buena</span>
                            </label>

                            <label for="regular" class="Form-option">
                              <input type="radio" id="regular" name="calificacion">
                              <span>Regular</span>
                            </label>

                            <label for="mala" class="Form-option">
                              <input type="radio" id="mala" name="calificacion">
                              <span>Mala</span>
                            </label>
                          
                          </div>
                        
                        </div>

                        <div class="Form-group" >
                          
                            <label for="comentarios" class="Form-label">Comentarios:</label>
                            <textarea name="comentarios" id="comentarios" class="Form-widget"></textarea>
                        
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