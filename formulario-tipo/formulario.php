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

                                    Paso <strong>2</strong> de 4

                                </p>

                                <a href="#" class="step-modal-link">Mostrar detalle</a>



                            </div>
							
                            <ul class="progress-bar">
								<li class="progress-dot progress-dot--active"></li>
								<li class="progress-dot progress-dot--active"></li>
								<li></li>
								<li></li>
							</ul>
							<p class="step-info">Nombre del paso actual</p>
						
                        </div>

                        <div class="overlay-mobile"> </div>
                

                        
                        <div class="Steps-inner">

                            <h4>Detalle de pasos</h4>

                            <a href="#" class="Steps-item is-finished">

                                <div>
                                    <span class="Steps-number">1</span>
                                </div>

                                <div>Nombre del paso completado</div>

                            </a>

                            <a href="#" class="Steps-item is-active">

                                <div>
                                    <span class="Steps-number">2</span>
                                </div>
                                <div>Nombre del paso actual</div>

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

                    <!-- Nav tabs -->
                    <div class="Tabs">

                        <ul class="Tabs-nav" role="tablist">
                            <li role="presentation" class="Tabs-item active">
                            <a href="#tablink-1" class="Tabs-link" aria-controls="tab-1" role="tab" data-toggle="tab" id="tab-1">Pestaña activo</a>
                            </li>
                            <li role="presentation" class="Tabs-item">
                            <a href="#tablink-2" class="Tabs-link" aria-controls="tab-2" role="tab" data-toggle="tab" id="tab-2">Lorem ipsum</a>
                            </li>
                            <li role="presentation" class="Tabs-item">
                            <a href="#tablink-3" class="Tabs-link" aria-controls="tab-3" role="tab" data-toggle="tab" id="tab-3">Lorem ipsum</a>
                            </li>

                        </ul>

                    </div>

                    <!-- Tab panes -->
                    <div class="Tabs-content">

                        <div role="tabpanel" class="Tabs-pane fade in active" id="tablink-1" aria-labelledby="tab-1">
                        
                            <h3>Nombre de la Pestaña activa</h3>

                            <div class="Alert Alert--dialog Alert--danger" role="alert" aria-live="assertive">
                                
                                <h4 class="Alert-title">Hay <strong>3 errores</strong> en el formulario</h4>

                                <ol>

                                    <li><a href="#">Debe ingresar una fecha</a></li>
                                    <li><a href="#">Lorem ipsum ad his scripta</a></li>
                                    <li><a href="#">Blandit incorrupte quaerendum in quo</a></li>

                                </ol>
                                
                            
                            </div>

                            <form action="./" class="Form">

                                <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                                <fieldset>

                                    <legend>
                                    
                                        <span>Título de grupo de campos</span>
                                    
                                    </legend>

                                    <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id.</p>

                                    <div class="Form-group" >
                          
                                        <label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
                                        <input class="Form-widget" name="example-campos-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun">
                                        <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
                        
                                    </div>

                                    <fieldset class="fieldset-form-multifield">
                        
                                        <legend>
                                            <span>Identificación de usuario:</span>
                                        </legend>

                                        <div class="Form-group"  >
                                            
                                            <div class="Form-label">Documento de Identidad:</div>
                                            
                                                <div class="Grid Form-grid">
                                                
                                                    <div class="Grid-item u-size1of3">
                                                        
                                                        <label for="select-cedula" class="u-hideVisually" >Tipo de Documento</label>
                                                        
                                                        <select name="select-cedula" id="select-cedula" class="Form-widget" >
                                                            <option value="ci">C.I.</option>
                                                            <option value="pasaporte">Pasaporte</option>
                                                        </select>

                                                </div>

                                                <div class="Grid-item u-size2of3">
                                                    
                                                        <label for="numero-cedula" class="u-hideVisually">Número de Documento</label>
                                                    
                                                        <input type="text" class="Form-widget" name="numero-cedula" id="numero-cedula"  aria-describedby="ayuda-campo-documento">
                                                    
                                                        <div class="Form-hint" id="ayuda-campo-documento">Incluir dígito verificador</div>
                                                </div>
                                            
                                            </div>

                                        </div>

                                    </fieldset>

                                    <div class="Form-group Form-group--disabled"  >
                          
                                        <label class="Form-label" for="example-campo-disabled">Etiqueta de campo deshabilitado:</label>
                                        <input class="Form-widget" type="text" id="example-campo-disabled" name="example-campo-disabled" disabled>
                        
                                    </div>

                                    <div class="Form-group"  >
                          
                                        <label for="combo-2" class="Form-label">Etiqueta de combo:</label>
                          
                                        <select name="combo-2" id="combo-2" class="Form-widget">
                                                
                                                <option value="0">Opción seleccionada de un combo</option>
                                                <option value="1">Opción 1</option>
                                                <option value="2">Opción 2</option>
                                                <option value="3">Opción 3</option>
                                        </select>
                                    
                                    </div>


                                    <div class="Form-group u-py1">
                                        
                                        <div class="Form-label">Dato de solo lectura:</div>
                                        <div class="Form-widget Form-widget--read">Información ya ingresada</div>
                                    
                                    </div>

                                    <div class="Form-group"  >

                                        <label for="example-campo-textarea" class="Form-label">Etiqueta de campo extenso:</label>
                                        <textarea name="example-campo-textarea" id="example-campo-textarea" class="Form-widget" placeholder="Campo extenso para desarrollo de texto"></textarea>
                        
                                    </div>

                                    <div class="Form-group" role="group"  aria-labelledby="grupo-radios"  >
                          
                                        <div id="grupo-radios" class="Form-label">Grupo de opciones de radio button:</div>
                                        
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
                        
                                    </div>

                                    <div class="Form-group" role="group"  aria-labelledby="grupo-checkboxes"  >
                          
                                        <div id="grupo-checkboxes" class="Form-label">Grupo de opciones de checkboxes:</div>
                                        
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

                                    <div class="Form-group"  >
                          
                                        <label for="fecha-campo" class="Form-label">Fecha:</label>
                                        <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo" id="fecha-campo">
                        
                                    </div>

                                    <div class="Form-group"  >
                          
                                        <label class="Form-label" for="dato-uno">Dato uno:</label>
                                        <input class="Form-widget" name="dato-uno" type="text" id="dato-uno" aria-describedby="link-agregar-otro-dato">
                                        <div class="Form-hint" id="link-agregar-otro-dato"><a href="#">Agregar otro dato</a></div>
                        
                                    </div>

                                    <div class="Form-group"  >
                          
                                        <label class="Form-label" for="adjuntos-1">Archivos:</label>
                                        <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                        
                                    </div>

                                    <div class="Form-group"  >
                          
                                        <label for="combo-1" class="Form-label">Etiqueta de combo requerido:*</label>
                          
                                        <select name="combo-1" id="combo-1" class="Form-widget">
                                                
                                                <option value="0">Opción seleccionada de un combo</option>
                                                <option value="1">Opción 1</option>
                                                <option value="2">Opción 2</option>
                                                <option value="3">Opción 3</option>
                                        </select>
                                    
                                    </div>


                                    <div class="Form-group"  >
                          
                                        <label class="Form-label" for="con_tooltip-2">Con tooltip de ayuda:</label>
                                        <input type="url" class="Form-widget  Form-widget--w-icon" id="con_tooltip-2" name="con_tooltip-2" />
                                        
                                        <a href="#" class="Form-icon" data-toggle="modal" data-target="#modalExample">
                                            <img src="assets/icons/icon-help-circle.svg" alt="icono-ayuda" />
                                            <span class="u-hideVisually">Ayuda</span>
                                        </a>
            
                                    </div>


                                    <div class="Form-group"  >
                          
                                        <label class="Form-label" for="con_tooltip-1">Con ícono:</label>
                                        <input type="url" class="Form-widget Form-widget--w-icon" id="con_tooltip-1" name="con_tooltip-1" />
                          
                                        <a href="#" class="Form-icon">
                                            <img src="assets/icons/icon-ok-circle.svg" alt="icono-rol-validado"/>
                                            <span class="u-hideVisually">Rol validado</span>
                                        </a>
                          
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modalExample" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
                                        
                                        <div class="modal-dialog" role="document">
                                            
                                            <div class="modal-content">
                                                
                                                <div class="modal-header">
                                            
                                                    <h4 class="modal-title" id="modalTitle">Modal title</h4>
                                                </div>
                                                
                                                <div class="modal-body">
                                                
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus deleniti, possimus doloribus nulla aspernatur perspiciatis amet saepe quis deserunt cum eaque facilis odit quos officiis nihil ipsum dolorem explicabo reiciendis?</p>
                                                
                                                </div>
                                                
                                                <div class="modal-footer">
                                                
                                                    <button type="button" class="Button" data-dismiss="modal">Cerrar</button>
                                                    <button type="button" class="Button Button--primary u-ml2">Guardar cambios</button>
                                                
                                                </div>
                                            </div>
                                        
                                        </div>
                                    
                                    </div>

                                    <div class="Form-group Form-group--alert Form-group--error"  >
                          
                                        <label for="fecha-campo-2" class="Form-label">Fecha (con error):</label>
                                        <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo-2" id="fecha-campo-2">
                                        <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                        
                                    </div>

                                    <fieldset class="u-mt5">
                        
                                        <legend><span>Título de subgrupo de campos</span></legend>

                                        <div class="Form-group" role="group"  aria-labelledby="grupo-etiqueta"  >
                            
                                            <div id="grupo-etiqueta" class="Form-label">Etiqueta:</div>
                                            
                                            <div class="Form-options">
                            
                                                <label for="etiqueta_1" class="Form-option">
                                                    <input type="radio" id="etiqueta_1" name="opciones">
                                                    <span>Opción etiqueta 1</span>
                                                </label>
                                                
                                                <label for="etiqueta_2" class="Form-option">
                                                    <input type="radio" id="etiqueta_2" name="opciones">
                                                    <span>Opción etiqueta 2</span>
                                                </label>
                                            
                                            </div>
                            
                                        </div>
   

                                    </fieldset>

                                    <a href="#">+ Agregar otro fieldset igual</a>

                                    <fieldset  class="u-mt5">
          
                                        <legend><span>Cláusula de consentimiento informado:</span></legend>

                                        <p>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted quedarán incorporados en una base de datos, la cual será procesada exclusivamente para la siguiente finalidad: **Objetivo del formulario**.</p>

                                        <p>Los datos personales serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades distintas para las que han sido solicitadas al usuario.</p>

                                        <p>El responsable de la base de datos es **Titular de la base** y la dirección donde podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o supresión, es **Dirección del organismo**, según lo establecido en la LPDP".</p>


                                        <div class="Form-group"  role="group" aria-labelledby="terminos">
                                            
                                            <div id="terminos" class="Form-label" >Términos de la cláusula:*</div>
                                            
                                            <div class="Form-options" >
                                            
                                                <label for="acepto" class="Form-option">
                                                
                                                    <input type="radio" id="acepto" name="consentimiento">
                                                    <span>Acepto los términos</span>
                                                
                                                </label>
                                                
                                                <label for="no-acepto" class="Form-option">
                                                
                                                    <input type="radio" id="no-acepto" name="consentimiento">
                                                    <span>No acepto los términos. (No se enviará el mensaje)</span>
                                                
                                                </label>
                                            
                                            </div>
                                        
                                        </div>

                                    </fieldset>

                                    <table class="Table Table--middle Table--responsive">

                                        <caption>Nombre de la tabla</caption>

                                        <thead>
                                            
                                            <tr>

                                                <th>Título Columna 1</th>
                                                <th>Título Columna 2</th>
                                                <th>Título Columna 3</th>
                                                <th>Título Columna 4</th>
                                                <th>Título Columna 5</th>
                                                
                                            </tr>

                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="Form-group" data-title="Título Columna 1">

                                                    <div class="Form-options">
                                                    
                                                        <label for="radio-table" class="Form-option u-textCenter u-sm-textLeft">
                                                           
                                                            <input type="radio" id="radio-table" name="radio-table">
                                                            <span class="u-hideVisually">Radio</span>
                                                           
                                                        </label>
                                                    
                                                    </div>
                                                  
                                                </td>
                                                <td data-title="Título Columna 2">Fila 1 Columna 1</td>
                                                <td data-title="Título Columna 3">Fila 1 Columna 2</td>
                                                <td data-title="Título Columna 4">Fila 1 Columna 3</td>
                                                <td class="u-textRight" data-title="Título Columna 5">$1.004</td>
                                            </tr>

                                            <tr>
                                                <td class="Form-group" data-title="Título Columna 1">

                                                    <div class="Form-options">

                                                        <label for="opcion_table_check_3" class="Form-option u-textCenter u-sm-textLeft">

                                                            <input type="checkbox" id="opcion_table_check_3" name="opcion_table_check_3" />
                                                            <span class="u-hideVisually">Checkbox</span>
                                                                                                                  
                                                        </label>

                                                    </div>

                                                </td>
                                                <td data-title="Título Columna 2">Fila 2 Columna 2</td>
                                                <td class="Form-group Form-group--error Form-group--alert" data-title="Título Columna 3">
                                                    
                                                                                                       
                                                        <label class="Form-label u-hideVisually" for="example-campo-error-tabla">Etiqueta de campo con error en tabla:</label>
                                                        <input class="Form-widget" name="example-campo-error-tabla" type="text" id="example-campo-error-tabla" placeholder="input">
                                                        <div class="Form-error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                                                    

                                                </td>
                                                <td data-title="Título Columna 4">Fila 2 Columna 3</td>
                                                <td class="u-textRight Form-group" data-title="Título Columna 5">                                       
                                                
                                                        <label class="Form-label u-hideVisually" for="input-text-tabla">Importe:</label>
                                                        <input class="Form-widget u-textRight" name="input-text-tabla" type="text" id="input-text-tabla" value="$ 1.001">

                                                        
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="u-textCenter u-md-textLeft" data-title="Título Columna 1  "><span class="Icon Icon--delete"></span></td>
                                                <td class="Form-group" data-title="Título Columna 2">

                                                    <label for="select-table" class="Form-label u-hideVisually">Etiqueta de combo en tabla:</label>
                                                    <select name="select-table" id="select-table" class="Form-widget">
                                                    <option value="0">Opción seleccionada de un combo</option>
                                                    <option value="1">Opción 1</option>
                                                    <option value="2">Opción 2</option>
                                                    <option value="3">Opción 3</option>
                                                    </select>
                     
                                                </td>
                                                <td data-title="Título Columna 3">Fila 3 Columna 3</td>
                                                <td data-title="Título Columna 4">Fila 3 Columna 4</td>
                                                <td  class="u-textRight" data-title="Título Columna 5">$ 1.001</td>
                                            </tr>

                                            <tr>
                                                <td class="u-textCenter u-md-textLeft" data-title="Título Columna 1"><span class="Icon Icon--edit"></span></td>
                                                <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                                                <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                                                <td data-title="Título Columna 4">Fila 4 Columna 4</td>
                                                <td  class="u-textRight" data-title="Título Columna 5">$ 1.001</td>
                                            </tr>

                                            

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <td class="u-textRight" colspan="4"  > 
                                                    Total
                                                </td>
                                                <td class="u-textRight">
                                                    $86.683
                                                </td>
                                            </tr>
                                        </tfoot>

                                    </table>

                       
                                </fieldset>

                                <div class="Form-actions">
                                    <div>
                                        <button class="Button Button--link" type="button">Volver al paso anterior</button>
                                    </div>

                                    <div>
                                        <button class="Button" type="button">Acción secundaria</button>
                                        <button class="Button Button--primary">Continuar al paso siguiente</button>
                                    </div>
                                </div>

                            </form>


                        </div>

                        <div role="tabpanel" class="Tabs-pane fade" id="tablink-2" aria-labelledby="tab-2">Contenido de la Pestaña 2</div>
                        <div role="tabpanel" class="Tabs-pane fade" id="tablink-3" aria-labelledby="tab-3">Contenido de la Pestaña 3</div>
                        

                    </div>

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

