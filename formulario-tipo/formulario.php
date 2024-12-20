<?php
  $title = 'Ejemplo completo';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Ejemplo completo</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-lg-size8of10">
							
							<div class="Alert--tipo u-mt0 u-mb4 u-p3">
								<p class="u-h5">Guía para la creación de formularios digitales:</p>
								<ul class="List-text">
									<li><a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones/guia-para-creacion-formularios-digitales/guia-para-creacion-1" class="u-outerLink">Estructura básica de un formulario<span class="u-hideVisually">Enlace externo</span></a></li>
									<li><a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones/guia-para-creacion-formularios-digitales/guia-para-creacion-5" class="u-outerLink">Recomendaciones y buenas prácticas para elaborar buenos formularios<span class="u-hideVisually">Enlace externo</span></a></li>
								</ul>
							</div>

									<div class="Page">

                    <h1 class="Page-title">Nombre del trámite</h1>

                    <div class="Steps--tipo">

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

                    <div class="Alert--tipo Alert--dialog Alert--danger" role="alert" aria-live="assertive">

                        <h4 class="Alert-title">Hay <strong>3 errores</strong> en el formulario</h4>

                        <ol>
                            <li><a href="#">Debe ingresar una fecha</a></li>
                            <li><a href="#">Lorem ipsum ad his scripta</a></li>
                            <li><a href="#">Blandit incorrupte quaerendum in quo</a></li>
                        </ol>

                    </div>

                    <form action="./" class="Form--tipo">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                        <fieldset>

                            <legend><span>Título de grupo de campos</span></legend>

                            <p>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui ut wisi vocibus suscipiantur, quo dicit ridens inciderint id.</p>

                            <div class="Form-group" >
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-comun">Etiqueta de campo común:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="example-campo-comun" type="text" id="example-campo-comun" aria-describedby="ayuda-example-campo-comun" />
                                    <div class="Form-hint" id="ayuda-example-campo-comun">Texto de aclaración</div>
                                </div>
                            </div>

                            <fieldset class="fieldset-form-multifield">

                                <legend><span>Identificación de usuario:</span></legend>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-identidad">
                                    <div class="Form-label-wrap">
                                        <div id="grupo-identidad" class="Form-label">Documento de Identidad:</div>
                                    </div>
                                    <div class="Form-object-wrap">
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
                                                <input type="text" class="Form-widget" name="numero-cedula" aria-describedby="ayuda-numero-cedula" id="numero-cedula" >
                                                <div class="Form-hint" id="ayuda-numero-cedula">Incluir dígito verificador</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>


                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="combo-2" class="Form-label">Etiqueta de combo:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <select class="Form-widget" name="combo-2" id="combo-2" >
                                        <option value="0">Opción seleccionada de un combo</option>
                                        <option value="1">Opción 1</option>
                                        <option value="2">Opción 2</option>
                                        <option value="3">Opción 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="example-campo-sololectura">Dato de solo lectura:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="text" class="Form-widget Form-widget--read" value="Información ya ingresada" id="example-campo-sololectura" readonly/>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="example-campo-textarea" class="Form-label" >Etiqueta de campo extenso:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <textarea name="example-campo-textarea" id="example-campo-textarea" class="Form-widget" placeholder="Campo extenso para desarrollo de texto"></textarea>
                                </div>
                            </div>

                            <div class="Form-group" role="group"  aria-labelledby="grupo-radios" >
                                <div class="Form-label-wrap">
                                    <div id="grupo-radios" class="Form-label" >Grupo de opciones de radio button:</div>
                                </div>
                                <div class="Form-object-wrap">
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
                            </div>


                            <div class="Form-group" role="group"  aria-labelledby="grupo-checkboxes" >
                                <div class="Form-label-wrap">
                                    <div id="grupo-checkboxes" class="Form-label" >Grupo de opciones de checkboxes:</div>
                                </div>
                                <div class="Form-object-wrap">
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
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="fecha-campo" class="Form-label">Fecha:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo" id="fecha-campo">
                                </div>
                            </div>


                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="dato-uno">Dato uno:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" name="dato-uno" type="text" id="dato-uno" aria-describedby="link-agregar-otro-dato" />
                                    <!-- <a href="#" class="Button Button--link-simple" id="link-agregar-otro-dato">Agregar otro dato</a> -->
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap"><a href="#" class="Button Button--link-simple" >+ Agregar otro dato</a></div>
                            </div>


                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="adjuntos-1">Archivos:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label for="combo-1" class="Form-label">Etiqueta de combo requerido:*</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <select class="Form-widget" name="combo-1" id="combo-1" >
                                        <option value="0">Opción seleccionada de un combo</option>
                                        <option value="1">Opción 1</option>
                                        <option value="2">Opción 2</option>
                                        <option value="3">Opción 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="con_tooltip-2">Con modal de ayuda:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="url" class="Form-widget" id="con_tooltip-2" name="con_tooltip-2" aria-describedby="consulta-campo-con-link" />
                                    <div class="Form-status Form-status--question" id="consulta-campo-con-link"><a href="" data-toggle="modal" data-target="#modalExample">Link al modal</a></div>
                                </div>
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

                            <div class="Form-group">
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="con_tooltip-1">Con ícono:</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="url" class="Form-widget" id="con_tooltip-1" name="con_tooltip-1" aria-describedby="campo-ok" value="1.121.122-4"/>
                                    <div class="Form-status Form-status--ok" id="campo-ok">Dato validado</div>
                                </div>
                            </div>

                            <div class="Form-group Form-group--alert Form-group--error" >
                                <div class="Form-label-wrap">
                                    <label class="Form-label" for="fecha-campo-2">Fecha (con error):</label>
                                </div>
                                <div class="Form-object-wrap">
                                    <input type="date" class="Form-widget Form-widget--medium" name="fecha-campo-2"  id="fecha-campo-2" aria-describedby="error-fecha-campo-2">
                                    <div class="Form-status Form-status--error" id="error-fecha-campo-2"><strong>ERROR</strong> - Este campo es obligatorio</div>
                                </div>
                            </div>

                            <fieldset>

                                <legend>
                                    <span>Título de subgrupo de campos</span>
                                </legend>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-etiqueta" >

                                    <div class="Form-label-wrap">
                                        <div id="grupo-etiqueta" class="Form-label" >Etiqueta:</div>
                                    </div>

                                    <div class="Form-object-wrap">

                                        <div class="Form-options">

                                            <label for="etiqueta_1" class="Form-option">
                                                <input type="radio" id="etiqueta_1" name="opciones_etiqueta">
                                                <span>Opción etiqueta 1</span>
                                            </label>

                                            <label for="etiqueta_2" class="Form-option">
                                                <input type="radio" id="etiqueta_2" name="opciones_etiqueta">
                                                <span>Opción etiqueta 2</span>
                                            </label>

                                        </div>

                                    </div>

                                </div>

                            </fieldset>

                            <a href="#">+ Agregar otro fieldset igual</a>

                            <fieldset>

                                <legend><span>Cláusula de consentimiento informado:</span></legend>

                                <p>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted quedarán incorporados en una base de datos, la cual será procesada exclusivamente para la siguiente finalidad: **Objetivo del formulario**.</p>
                                <p>Los datos personales serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades distintas para las que han sido solicitadas al usuario.</p>
                                <p>El responsable de la base de datos es **Titular de la base** y la dirección donde podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o supresión, es **Dirección del organismo**, según lo establecido en la LPDP".</p>


                                <div class="Form-group" role="group"  aria-labelledby="terminos" >

                                    <div class="Form-label-wrap">
                                        <div id="terminos" class="Form-label" >Términos de la cláusula:*</div>
                                    </div>

                                    <div class="Form-object-wrap">

                                        <div class="Form-options">

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

                                </div>

                            </fieldset>

                            <div class="Table-wrapper">

                                <table class="Table--tipo Table--middle Table--responsive">

                                    <caption>Tabla con elementos de formulario</caption>

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
                                                <div class="Form-status Form-status--error"><strong>ERROR</strong> - Este campo es obligatorio</div>
                                            </td>
                                            <td data-title="Título Columna 4">Fila 2 Columna 3</td>
                                            <td class="u-textRight Form-group" data-title="Título Columna 5">                                       
                                                <label class="Form-label u-hideVisually" for="input-text-tabla">Importe:</label>
                                                <input class="Form-widget u-textRight" name="input-text-tabla" type="text" id="input-text-tabla" value="$ 1.001">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="u-textCenter u-md-textLeft" data-title="Título Columna 1  "><a href="#"><span class="Icon Icon--delete"></span><span class="u-hideVisually ">Eliminar</span></a></td>
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
                                            <td class="u-textCenter u-md-textLeft" data-title="Título Columna 1"><a href="#"><span class="Icon Icon--edit"></span><span class="u-hideVisually ">Editar</span></a></td>
                                            <td data-title="Título Columna 2">Fila 4 Columna 2</td>
                                            <td data-title="Título Columna 3">Fila 4 Columna 3</td>
                                            <td data-title="Título Columna 4">Fila 4 Columna 4</td>
                                            <td  class="u-textRight" data-title="Título Columna 5">$ 1.001</td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td class="u-textRight" colspan="4">Total</td>
                                            <td class="u-textRight">$86.683</td>
                                        </tr>
                                    </tfoot>

                                </table>

                            </div>

                        </fieldset>

                        <div class="Form-actions">
                            <div class="Form-actions--left">
                                <button class="Button Button--link" type="button">Volver al paso anterior</button>
                            </div>
                            <div class="Form-actions--right">
                                <button class="Button" type="button">Acción secundaria</button>
                                <button class="Button Button--primary">Continuar al paso siguiente</button>
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

