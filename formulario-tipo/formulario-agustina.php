<?php
  $title = 'Ejemplo completo';
?>

<?php include "inc/head.php"; ?>


<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">

            <a href="index.php">Inicio</a>

                    <div class="Page Page--formulario">

                    <h1 class="Page-title">Nombre del trámite</h1>

                    <div class="Steps">

                        <div class="progress-mobile">
                            
                            <div class="progress-head">

                                <p class="progress-text">

                                    Paso <strong>1</strong> de 4

                                </p>

                                <a href="#" class="step-modal-link">Mostrar detalle</a>



                            </div>
							
                            <ul class="progress-bar">
								<li class="progress-dot progress-dot--active"></li>
								<li ></li>
								<li></li>
								<li></li>
							</ul>
							<p class="step-info">Nombre del paso actual</p>
						
                        </div>

                        <div class="overlay-mobile"> </div>
                

                        
                        <div class="Steps-inner">

                            <h4>Detalle de pasos</h4>

                            <a href="#" class="Steps-item is-active">

                                <div>
                                    <span class="Steps-number">1</span>
                                </div>

                                <div>Nombre del paso actual</div>

                            </a>

                            <a href="#" class="Steps-item">

                                <div>
                                    <span class="Steps-number">2</span>
                                </div>
                                <div>Nombre del segundo paso</div>

                            </a>

                            <a href="#" class="Steps-item">

                                <div>
                                    <span class="Steps-number">3</span>
                                </div>
                                <div>Nombre del tercer paso</div>

                            </a>

                            <a href="#" class="Steps-item">
                            
                                <div>
                                    <span class="Steps-number">4</span>
                                </div>
                                <div>Nombre del cuarto paso</div>

                            </a>

                        </div>

                    </div>
                    <h2>Nombre del Paso actual</h2>
                            <form action="./" class="Form">

                                <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                                <fieldset>

                                    <legend>
                                    
                                        <span>Título de grupo de campos</span>
                                    </legend>
                                

                                    <div class="Form-group">
                          
                                        <label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
                                        <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                                        <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
                        
                                    </div>

                                    <div class="Form-group">
                                        
                                        <label class="Form-label" for="example-campo-comun">Segunda etiqueta de campo común:</label>
                                        <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                                        <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
          
                                            </div>

                                         

                                    </fieldset>     

                                    <fieldset >
                        
                                        <legend>
                                            <span>Segundo título de grupo de campos</span>
                                        </legend>

                                        <div class="Form-group">
                                            
                                        <div class="Form-group">
                                                
                                                <label class="Form-label" for="example-campo-comun">Cuarta etiqueta de campo común:</label>
                                                <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                                                <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
                            
                                            </div>

                                            <div class="Form-group">
                          
                                                    <label for="combo-1" class="Form-label">Etiqueta de combo requerido:*</label>
                                        
                                                    <select name="combo-1" id="combo-1" class="Form-widget">
                                                            
                                                            <option value="0">Opción seleccionada de un combo</option>
                                                            <option value="1">Opción 1</option>
                                                            <option value="2">Opción 2</option>
                                                            <option value="3">Opción 3</option>
                                                    </select>
                      
                                            </div>




                                    </fieldset>

                                    <fieldset>
                                    <legend>
                                            <span>Tercer título de grupo de campos</span>
                                        </legend>

                                        <div class="Form-group">
                                                
                                                <label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
                                                <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                            
                                            </div>

                                            <div class="Form-group">
                                            
                                            <div class="Form-label">Documento de Identidad:</div>
                                            
                                                <div class="Grid Form-grid">
                                                
                                                    <div class="Grid-item u-size1of3">
                                                        
                                                        <label for="select-cedula" class="u-hideVisually" >Tipo</label>
                                                        
                                                        <select name="select-cedula" id="select-cedula" class="Form-widget" >
                                                            <option value="ci">C.I.</option>
                                                            <option value="pasaporte">Pasaporte</option>
                                                        </select>

                                                </div>

                                                <div class="Grid-item u-size2of3">
                                                    
                                                        <label for="numero-cedula" class="u-hideVisually">Número</label>
                                                    
                                                        <input type="text" class="Form-widget" name="numero-cedula" id="numero-cedula"  aria-describedby="ayuda-campo-documento">
                                                    
                                                        <div class="Form-hint" id="ayuda-campo-documento">Incluir dígito verificador</div>
                                                </div>
                                            
                                            </div>

                                        </div>

                                        <div class="Form-group">
                                                
                                                <label class="Form-label" for="example-campo-comun">Tercera etiqueta de campo común:</label>
                                                <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                                                <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
                            
                                            </div>

                                            <div class="Form-group">
                          
                          <label class="Form-label">Grupo de opciones de checkboxes:</label>
                          
                          <div class="Form-options">
              
                              <label for="opcion_check_3" class="Form-option">
                                  <input type="checkbox" id="opcion_check_3" name="opciones_check_2">
                                  <span>Checkbox 1</span>
                              </label>

                              <label for="opcion_check_4" class="Form-option">
                                  <input type="checkbox" id="opcion_check_4" name="opciones_check_2">
                                  <span>Checkbox 2</span>
                              </label>
                      
                          </div>
                      
                      </div>

                      <div class="Form-group">
                          
                                        <label class="Form-label">Grupo de opciones de radio button:</label>
                                        
                                        <div class="Form-options">
                          
                                            <label for="opcion_1" class="Form-option">
                                                <input type="radio" id="opcion_1" name="opciones">
                                                <span>Radio 1</span>
                                            </label>
                                            
                                            <label for="opcion_2" class="Form-option">
                                                <input type="radio" id="opcion_2" name="opciones">
                                                <span>Radio 2</span>
                                            </label>
                                        
                                        </div>
                                        <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>

                                    </fieldset>

                                

                                <div class="Form-actions">
                                    <div>
                                        <button class="Button Button--link" type="button">Volver al paso anterior</button>
                                    </div>

                                    <div>

                                        <button class="Button Button--primary">Continuar al paso siguiente</button>
                                    </div>
                                </div>

                            </form>


                        </div>

                        <div role="tabpanel" class="Tabs-pane fade" id="tab-2">Contenido de la Pestaña 2</div>
                        <div role="tabpanel" class="Tabs-pane fade" id="tab-3">Contenido de la Pestaña 3</div>
                        

                    </div>

                </div>

            </dvi>

        </div>

    </div>

</main>

<?php include "inc/footer.php"; ?>

<script src="js/vendor/jquery.js"></script>
<script src="js/portal-unificado.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

