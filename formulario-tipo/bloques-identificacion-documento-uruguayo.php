<?php
  $title = 'Bloques - Identificación documento uruguayo';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Identificación documento uruguayo</li>
				</ul>
		</div>
</div>
 
<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center  u-md-size3of4 u-lg-size8of10">

              <div class="Page" >

                <h2 class="Page-title">Identificación con documento de identidad uruguayo</h2>

                <form action="./" class="Form Form--tipo">

                    <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                    <fieldset>

                        <legend>
                          <span>Datos personales:</span>
                        </legend>


                        <div class="Form-group">

                          <div class="Form-label-wrap">
                            <label class="Form-label" for="documento-identidad">Documento de identidad:*</label>
                          </div>

                          <div class="Form-object-wrap">
                            <input class="Form-widget" type="text" name="documento-identidad" id="documento-identidad" aria-describedby="ayuda-documento-identidad">
                            <div class="Form-hint" id="ayuda-documento-identidad">Incluir dígito verificador</div>
                            <div class="Form-hint"><a href="#" class="Form-item-aligned">No tengo documento uruguayo</a></div>
                          </div>

                        </div>


                        <div class="Form-group">

                          <div class="Form-label-wrap">
                            <label class="Form-label" for="apellido">Apellido:*</label>
                          </div>

                          <div class="Form-object-wrap">
                            <input class="Form-widget" type="text" name="apellido" id="apellido" required>
                          </div>

                        </div>

                        <div class="Form-group">

                          <div class="Form-label-wrap">
                            <label class="Form-label" for="nombre">Nombre:*</label>
                          </div>

                          <div class="Form-object-wrap">
                            <input class="Form-widget" type="text" name="nombre" id="nombre" required>
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