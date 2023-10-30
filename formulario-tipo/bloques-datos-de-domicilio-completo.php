<?php
  $title = 'Bloques - Datos de domicilio (Completo)';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Datos de domicilio (Completo)</li>
				</ul>
		</div>
</div>
  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">


                  <div class="Page Page--formulario" >


                    <h2 class="Page-title">Datos de domicilio (Completo)</h2>

                    <form action="./" class="Form">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
              
                        <fieldset>
                        
                        <legend>
                          <span>Datos de domicilio</span>
                        </legend>

                        <div class="Form-group" >

                          <label for="departamento" class="Form-label">Departamento:*</label>

                            <select name="departamento" id="departamento" class="Form-widget" required>
                                <option selected="">Seleccione un departamento</option>
                                <option>Artigas</option>
                                <option>Canelones</option>
                                <option>Cerro Largo</option>
                                <option>Colonia</option>
                                <option>Durazno</option>
                                <option>Flores</option>
                                <option>Florida</option>
                                <option>Lavalleja</option>
                                <option>Maldonado</option>
                                <option>Montevideo</option>
                                <option>Paysandú</option>
                                <option>Rio Negro</option>
                                <option>Rivera</option>
                                <option>Rocha</option>
                                <option>Salto</option>
                                <option>San José</option>
                                <option>Soriano</option>
                                <option>Tacuarembó</option>
                                <option>Treinta y Tres</option>
                            </select>

                        </div>


                        <div class="Form-group" >

                          <label for="localidad" class="Form-label">Localidad:*</label>

                            <select name="localidad" id="localidad" class="Form-widget" required>
                                <option selected="">Seleccione una localidad</option>
                                <option>Montevideo</option>
                                <option>Opción 2</option>
                                <option>Opción 3</option>
                            </select>
                            
                        </div>

                        <div class="Form-group" >
                          <label class="Form-label" for="calle">Calle:*</label>
                          <input class="Form-widget" name="calle" type="text" id="calle" aria-describedby="ayuda-calle" required >
                          <div class="Form-hint" id="ayuda-calle">Ejemplo: 18 de Julio o Ruta 8</div>
                        </div>

                        <div class="Form-group" >
                          <label class="Form-label" for="numero-puerta">Número:*</label>
                          <input class="Form-widget Form-widget--small" name="numero-puerta" type="text" id="numero-puerta" aria-describedby="ayuda-numero-puerta" required>
                          <div class="Form-hint" id="ayuda-numero-puerta">Ejemplo: 1242 o Km. 80</div>
                        </div>


                        <div class="Form-group" >
                          <label class="Form-label" for="esquina">Esquina:</label>
                          <input class="Form-widget" name="esquina" type="email" id="esquina" >
                        </div>

                        <div class="Form-group" >
                          <label class="Form-label" for="manzana">Manzana:</label>
                          <input class="Form-widget Form-widget--small" name="manzana" type="text" id="manzana" >
                        </div>

                        <div class="Form-group" >
                          <label class="Form-label" for="solar">Solar:</label>
                          <input class="Form-widget Form-widget--small" name="solar" type="text" id="solar" >
                        </div>


                        <div class="Form-group" >
                          <label class="Form-label" for="padron">Número de padrón:</label>
                          <input class="Form-widget Form-widget--small" name="padron" type="text" id="padron" >
                        </div>

                        <div class="Form-group" >
                          <label class="Form-label" for="otros-datos">Otros datos</label>
                          <input class="Form-widget" name="otros-datos" type="text" id="otros-datos" aria-describedby="ayuda-otros-datos">
                          <div class="Form-hint" id="ayuda-otros-datos">Apto, bloque, etc.</div>
                        </div>


                        <div class="Form-group Form-group--aligned"  >
                          <button class="Button Button--primary">Confirmar domicilio</button>
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