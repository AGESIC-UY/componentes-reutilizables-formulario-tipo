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

                        <legend><span>Datos personales:</span></legend>

                        <div class="Form-group" >

                          <label class="Form-label" for="documento-identidad">Documento de identidad:*</label>
                          <input class="Form-widget" name="documento-identidad" type="text" aria-describedby="ayuda-documento-identidad" id="documento-identidad" required>
                          <div class="Form-hint" id="ayuda-documento-identidad">Incluir dígito verificador</div>
                          <a href="#" class="Form-item-aligned">No tengo documento uruguayo</a>
                          
                        </div>

                        <div class="Form-group">
                          
                          <label class="Form-label" for="apellido">Apellido:*</label>
                          <input class="Form-widget" name="apellido" type="text" id="apellido" required>
                         
                        </div>

                        <div class="Form-group" >
                          
                          <label class="Form-label" for="nombre">Nombre:*</label>
                          <input class="Form-widget" name="nombre" type="text" id="nombre" required>
                         
                        </div>

                        <div class="Form-group Form-group--aligned">
                          
                          <button class="Button Button--primary">Enviar</button>
                                                  
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