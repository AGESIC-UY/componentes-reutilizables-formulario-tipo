<?php
  $title = 'Bloques - Representación de Personas jurídicas';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Representación de Personas jurídicas</li>
				</ul>
		</div>
</div>

  
<main  id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">


                <div class="Page" >


                    <h2 class="Page-title">Representación de Personas jurídicas</h2>

                    <form action="./" class="Form--tipo">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
              
                        <fieldset >
                        <legend>
                          <span>Representación de Personas jurídicas</span>
                        </legend>

                        <fieldset>
                        
                            <legend><span>Empresa</span></legend>

                            <div class="Form-group"  >
                            
                              <label for="rut" class="Form-label">Rut:*</label>
                              <input type="text" class="Form-widget" id="rut" name="rut">
                            
                            </div>

                            <div class="Form-group">
                            
                              <label for="razon-social" class="Form-label">Razón Social:*</label>
                              <input type="text" class="Form-widget" id="razon-social" name="razon-social">
                            
                            </div>

                            <div class="Form-group"  >
                          
                              <label class="Form-label" for="rol">Rol:*</label>
                              
                                <select name="combo_stacked" id="rol" class="Form-widget Form-widget--w-icon">
                          
                                    <option value="0">Selecciona rol</option>
                                    <option value="1">Opción 1</option>
                                    <option value="2">Opción 2</option>
            
                               </select>

                                                    
                               <span href="#" class="Form-icon">
                                    <img src="assets/icons/icon-ok-circle.svg" alt="Icono rol validado">
                                    <span class="u-hideVisually">Rol validado</span>
                               </span>
                          
                            </div>

                            <div class="Form-group" role="group"  aria-labelledby="grupo-validacion"  >
                          
                                <div id="grupo-validacion" class="Form-label">Validación:*</div>
                          
                                <div class="Form-options">
                          
                                    <label for="verificar" class="Form-option">
                                        
                                        <input type="radio" id="verificar" name="validacion">
                                        <span>Verificar registro de DGI/DGR</span>
                                
                                    </label>

                                    <label for="presentar" class="Form-option">
                                        
                                        <input type="radio" id="presentar" name="validacion">
                                        <span>Presentar documentación en <a href="#">oficinas del organismo</a> o <a href="#">PAC</a></span>
                                
                                    </label>


                                  

                                   

                                </div>

                             

                            
                            </div>

                            <div class="Form-group">
                                    <label class="Form-label" for="adjuntos-1">Adjuntar certificado notarial electrónico (PDF max 45KB):</label>
                                    <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                                </div>


                        </fieldset>
                          
                        <a href="#">+ Agregar empresa</a>


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