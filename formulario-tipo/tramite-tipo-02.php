<?php
  $title = 'Trámite tipo - Paso 2';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 2</li>
				</ul>
		</div>
</div>

<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">


                    <div class="Page Page--formulario">

                        <h1 class="Page-title">Trámite tipo</h1>

                       <!-- Pasos -->

                        <div class="Steps">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>2</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>

                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p class="step-info">Datos del trámite</p>

                            </div>

                            <div class="overlay-mobile"> </div>


                            <div class="Steps-inner">

                                <h4>Detalle de pasos</h4>

                                <a href="tramite-tipo-01.php" class="Steps-item is-finished">

                                    <div>
                                        <span class="Steps-number">1</span>
                                    </div>

                                    <div>Datos personales</div>

                                </a>

                                <span class="Steps-item is-active">

                                    <div>
                                        <span class="Steps-number">2</span>
                                    </div>
                                    <div>Datos del trámite</div>

                                </span>

                                <span class="Steps-item">

                                    <div>
                                        <span class="Steps-number">3</span>
                                    </div>
                                    <div>Firma</div>

                                </span>

                                <span class="Steps-item">
                                
                                    <div>
                                        <span class="Steps-number">4</span>
                                    </div>
                                    <div>Agenda</div>

                                </span>

                                <span class="Steps-item">
                                
                                    <div>
                                        <span class="Steps-number">5</span>
                                    </div>
                                    <div>Medios de pago</div>

                                </span>
                            
                                <span class="Steps-item">
                                
                                    <div>
                                        <span class="Steps-number">6</span>
                                    </div>
                                    <div>Confirmación</div>

                                </span>

                            </div>

                        </div>

                        <!-- fin pasos -->

                        

                        <h2>Datos del trámite</h2>

                        <div class="Alert Alert--dialog Alert--danger" role="alert" aria-live="assertive">
                                
                                <h4 class="Alert-title">Hay <strong>2 errores</strong> en el formulario</h4>

                                <ol>

                                    <li><a href="#">Debe ingresar una fecha</a></li>
                                    <li><a href="#">Debe ingresa una cifra</a></li>
                                    
                                </ol>
                                
                            
                        </div>

                        <form action="tramite-tipo-03.php" class="Form">

                            <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                            <fieldset>

                                <legend><span>Datos personales:</span></legend>

                                <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id.</p>

                                <div class="Form-group">
                                    
                                    <label class="Form-label" for="example-campo-con-ayuda">Etiqueta de campo con ayuda:</label>
                                    <input class="Form-widget" name="example-campo-con-ayuda" type="text" id="example-campo-con-ayuda" aria-describedby="ayuda-campo">
                                    <div class="Form-hint" id="ayuda-campo">Este es un texto de ayuda</div>
                                
                                </div>

                                <div class="Form-group Form-group--disabled">
                            
                                    <label class="Form-label" for="example-campo-disabled">Etiqueta de campo deshabilitado:</label>
                                    <input class="Form-widget" type="text" id="example-campo-disabled" name="example-campo-disabled" disabled="">
                                    
                                </div>

                                <div class="Form-group">
                          
                                    <label for="combo-1" class="Form-label">Etiqueta de combo:</label>
                                    <select name="combo-1" id="combo-1" class="Form-widget">
                                        <option value="0">Opción seleccionada de un combo</option>
                                        <option value="1">Opción 1</option>
                                        <option value="2">Opción 2</option>
                                        <option value="3">Opción 3</option>
                                    </select>
                                
                                </div>

                                <div class="Form-group">
                          
                                    <div class="Form-label">Dato de solo lectura:</div>
                                    <div class="Form-widget Form-widget--read">Información ya ingresada</div>
                                
                                </div>

                                <div class="Form-group">
                                    
                                    <label for="example-campo-textarea" class="Form-label">Etiqueta de campo extenso:</label>
                                    <textarea name="example-campo-textarea" id="example-campo-textarea" class="Form-widget" placeholder="Campo extenso para desarrollo de texto"></textarea>
                                
                                </div>

                                <div class="Form-group" role="group" aria-labelledby="grupo-radios">
                          
                                    <div id="grupo-radios" class="Form-label">Grupo de opciones de radio button:</div>
                          
                                    <div class="Form-options">
                          
                                        <label for="opcion_1" class="Form-option">
                                            <input type="radio" id="opcion_1" name="opciones" >
                                            <span>Radio 1</span>
                                        </label>
                                    
                                        <label for="opcion_2" class="Form-option">
                                            <input type="radio" id="opcion_2" name="opciones" checked>
                                            <span>Radio 2</span>
                                        </label>
                                        
                                    </div>
                                
                                </div>

                                <div class="Form-group" role="group" aria-labelledby="grupo-checkboxes">
                          
                                      <div id="grupo-checkboxes" class="Form-label">Grupo de opciones de checkboxes:</div>
                                        
                                      <div  class="Form-options">
                                          
                                         <label for="opcion_check_3" class="Form-option">
                                              <input type="checkbox" id="opcion_check_3" name="opciones_check_2">
                                              <span>Checkbox 1</span>
                                         </label>

                                         <label for="opcion_check_4" class="Form-option">
                                              <input type="checkbox" id="opcion_check_4" name="opciones_check_2" checked>
                                              <span>Checkbox 2</span>
                                          </label>
                                      
                                      </div>
                                
                                </div>

                                <div class="Form-group">
                          
                                    <label for="fecha-campo" class="Form-label">Fecha:</label>
                                    <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo" id="fecha-campo">
                        
                                </div>

                                <div class="Form-group">
                                    
                                    <label class="Form-label" for="dato-agregado-1">Dato 1:</label>
                                    <input class="Form-widget" name="dato-agregado-1" type="text" id="dato-agregado-1" >
                          
                                    <a href="#" class="Button Button--link Button--small">+ Agregar otro campo</a>
                        
                                </div>

                                <div class="Form-group">
                          
                                    <label class="Form-label" for="adjuntos-1">Archivos:</label>
                                    <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                        
                                </div>

                                <div class="Form-group">
                          
                                    <label for="combo-requerido" class="Form-label">Etiqueta de combo requerido*:</label>
                                    <select name="combo-requerido" id="combo-requerido" class="Form-widget" >
                                        <option value="0">Opción seleccionada de un combo</option>
                                        <option value="1">Opción 1</option>
                                        <option value="2">Opción 2</option>
                                        <option value="3">Opción 3</option>
                                    </select>
                                
                                </div>

                                <div class="Form-group">
                          
                                    <label class="Form-label" for="con_tooltip-2">Con tooltip de ayuda:</label>
                                    <input type="url" class="Form-widget  Form-widget--w-icon" id="con_tooltip-2" name="con_tooltip-2">
                                    <a href="#" class="Form-icon" data-toggle="modal" data-target="#modalExample">
                                        <img src="assets/icons/icon-help-circle.svg" alt="Icono ayuda">
                                        <span class="u-hideVisually">Ayuda</span>
                                    </a>

                                </div>

                                <div class="Form-group">

                                    <label class="Form-label" for="con_tooltip-1">Con ícono:</label>
                                    <input type="url" class="Form-widget Form-widget--w-icon" id="con_tooltip-1" name="con_tooltip-1">
                                    
                                    <a href="#" class="Form-icon">
                                        <img src="assets/icons/icon-ok-circle.svg" alt="Icono rol validado">
                                        <span class="u-hideVisually">Rol validado</span>
                                    </a>
                          
                                </div>

                                <div class="Form-group Form-group--alert Form-group--error">
                          
                                    <label class="Form-label" for="fecha-campo-fecha-error">Etiqueta de campo con error:</label>
                                    <input class="Form-widget Form-widget--medium" name="fecha-campo-fecha-error" id="fecha-campo-fecha-error"  type="date" aria-describedby="error-campo-fecha"> 
                                    <div class="Form-error" id="error-campo-fecha"><strong>ERROR</strong> - Este campo es obligatorio</div>
                        
                                </div>

                                <fieldset class="u-mt5">

                                    <legend>
                                        <span>Título de subgrupo de campos</span>
                                    </legend>

                                    <div class="Form-group" role="group"  aria-labelledby="grupo-etiqueta">
                                        
                                        <div class="Form-label" id="grupo-etiqueta">Grupo de opciones de radio button:</div>
                                        
                                        <div class="Form-options">
                                        
                                            <label for="opcion_1_b" class="Form-option">
                                                <input type="radio" id="opcion_1_b" name="opciones_b" checked>
                                                <span>Opción grupo 1</span>
                                            </label>
                                    
                                            <label for="opcion_2_b" class="Form-option">
                                                <input type="radio" id="opcion_2_b" name="opciones_b">
                                                <span>Opción grupo 2</span>
                                            </label>
                                    
                                        </div>
                                    
                                    </div>
                                
                                </fieldset>

                                <a href="#">+ Agregar otro fieldset igual</a>

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
                                                
                                                                                                
                                                    <label class="Form-label u-hideVisually" for="example-campo-error-tabla">Etiqueta de campo con error tabla:</label>
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
                                        <a href="tramite-ripo-01.php" class="Button Button--link" >Volver al paso anteror</a>
                                    </div>

                                    <div>
                                        <button class="Button" >Acción secundaria</button>
                                        <button class="Button Button--primary">Ir a Firma</button>
                                    </div>
                            </div>

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

