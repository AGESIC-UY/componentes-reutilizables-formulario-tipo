<?php
  $title = 'Bloques - Firma';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Firma</li>
				</ul>
		</div>
</div>

  
<main  id="contenido" class="u-main">


    <div class="Container">

        <div class="Grid">


            <div class="Grid-item Grid-item--center  u-md-size3of4 u-lg-size8of10">


              <div class="Page" >



                <h2 class="Page-title">Datos de domicilio (Completo)</h2>


                <form action="./" class="Form--tipo">

                    <fieldset >
                        
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

                    <div class="Alert--tipo Alert--dialog" role="alert" aria-live="assertive">

                        <h4 class="Alert-title">Forma presencialmente</h4>
                        <p>También es posible llevar el formulario firmado a las <a href="">oficina del organismo</a></p>
                        
                    </div>


                    <fieldset >
                        
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