<?php
  $title = 'Bloques - Ingreso usuarios';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Ingreso usuarios</li>
				</ul>
		</div>
</div>

  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">


              <div class="Page Page--formulario" >

                

                <h2 class="Page-title">Ingreso de usuario</h2>

                <form action="./" class="Form">

                    <fieldset>

                        <legend><span>Ingreso de usuario:</span></legend>

                        <div class="Form-group" >

                          <label class="Form-label" for="usuario">Usuario:</label>
                          <input class="Form-widget" name="usuario" type="text" id="usuario">
                                                
                        </div>

                        <div class="Form-group" >

                          <label class="Form-label" for="contrasena">Contraseña:</label>
                          <input class="Form-widget" name="contrasena" type="password" aria-describedby="enlace-olvide-contrasena" id="contrasena">
                          <div class="Form-hint" id="enlace-olvide-contrasena"><a href="">Olvidé mi contraseña</a></div>
                                                
                        </div>


                        <div class="Form-group Form-group--aligned" >
                          <button class="Button Button--primary" aria-describedby="enlace-registro">Ingresar</button>
                          <div class="Form-hint" id="enlace-registro"><a href="">No estoy registrado</a></div>
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