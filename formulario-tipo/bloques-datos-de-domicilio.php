<?php
  $title = 'Bloques - Datos de domicilio';
?>

<?php include "inc/head.php"; ?>
  
<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Datos de domicilio</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">


                  <div class="Page" >

                    <h2 class="Page-title">Datos de domicilio</h2>

                    <form action="./" class="Form Form--tipo">

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
                            <label class="Form-label" for="domicilio">Domicilio:*</label>
                            <input class="Form-widget" name="domicilio" type="text" id="domicilio" required>
                          </div>


                          <div class="Form-group Form-group--aligned" >
                            <button type="submit" class="Button Button--primary">Confirmar domicilio</button>
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