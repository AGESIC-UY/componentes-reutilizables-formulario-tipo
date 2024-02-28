<?php
  $title = 'Trámite tipo - Paso 1 ';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 1</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-lg-size8of10">


                    <div class="Page">

                        <h1 class="Page-title">Trámite tipo</h1>

                        <!-- Pasos -->

                        <div class="Steps--tipo">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>1</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p class="step-info">Datos personales</p>

                            </div>

                            <div class="overlay-mobile"> </div>


                            <div class="Steps-inner">

                                <h4>Detalle de pasos</h4>

                                <span class="Steps-item is-active">

                                    <div>
                                        <span class="Steps-number">1</span>
                                    </div>

                                    <div>Datos personales</div>

                                </span>

                                <span class="Steps-item">

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

                        <h2>Datos personales</h2>

                        <div class="Alert--tipo Alert--dialog">

                            <h4 class="Alert-title">Información relevante</h4>
                            <p>Lorem ipsum dolor sit amet Sed ut perspiciatis unde omnis iste</p>
                            <a href="#">Enlace de acción</a>

                        </div>

                        <form  class="Form--tipo" action="tramite-tipo-02.php">

                            <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                            <fieldset>

                                <legend><span>Datos personales:</span></legend>

                                <div class="Form-group">
                                    <label class="Form-label" for="documento-identidad">Documento de identidad:*</label>
                                    <input class="Form-widget" name="documento-identidad" type="text" aria-describedby="ayuda-documento-identidad" id="documento-identidad" >
                                    <div class="Form-hint" id="ayuda-documento-identidad">Incluir dígito verificador</div>
                                    <a href="#">No tengo documento uruguayo</a>
                                </div>

                                <div class="Form-group" >


                                    <label class="Form-label" for="apellido">Apellido:</label>
                                    <input class="Form-widget" name="apellido" type="text" id="apellido" >

                                    <!--

                                    En caso de que el campo sea requerido, agregar el atributo required="" y el * en el label
                                    <label class="Form-label" for="apellido">Apellido:</label>
                                    <input class="Form-widget" name="apellido" type="text" id="apellido" required="">

                                    -->

                                </div>

                                <div class="Form-group" >
                                
                                    <label class="Form-label" for="nombre">Nombre:</label>
                                    <input class="Form-widget" name="nombre" type="text" id="nombre" >
                                
                                </div>

                            </fieldset>

                            <fieldset >

                                <legend>
                                    <span>Datos de domicilio</span>
                                </legend>

                                <div class="Form-group" >

                                    <label for="departamento" class="Form-label">Departamento:</label>
                                    <select name="departamento" id="departamento" class="Form-widget">
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

                                    <label for="localidad" class="Form-label">Localidad:</label>

                                    <select name="localidad" id="localidad" class="Form-widget" >
                                        <option selected="">Seleccione una localidad</option>
                                        <option>Montevideo</option>
                                        <option>Opción 2</option>
                                        <option>Opción 3</option>
                                    </select>

                                </div>

                                <div class="Form-group" >

                                    <label class="Form-label" for="domicilio">Domicilio:</label>
                                    <input class="Form-widget" name="domicilio" type="text" id="domicilio" >

                                </div>


                                <div class="Form-group Form-group--aligned" >

                                    <button type="submit" class="Button">Confirmar domicilio</button>

                                </div>


                            </fieldset>

                            <fieldset >

                                <legend>
                                    <span>Datos de contacto</span>
                                </legend>

                                <div class="Form-group" >

                                    <label class="Form-label" for="telefono">Teléfono:</label>
                                    <input class="Form-widget" name="telefono" type="text" id="telefono">

                                </div>

                                <div class="Form-group" >

                                    <label class="Form-label" for="otro-telefono">Otro teléfono:</label>
                                    <input class="Form-widget" name="otro-telefono" type="text" id="otro-telefono">

                                </div>

                                <div class="Form-group" >

                                    <label class="Form-label" for="e-mail">Correo electrónico:</label>
                                    <input class="Form-widget" name="e-mail" type="email" id="e-mail">
                                
                                </div>


                            </fieldset>


                            <fieldset >

                                <legend>
                                    <span>Cláusula de consentimiento informado:</span>
                                </legend>

                                <p>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted quedarán incorporados en una base de datos, la cual será procesada exclusivamente para la siguiente finalidad: **Objetivo del formulario**.</p>
                                <p>Los datos personales serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades distintas para las que han sido solicitadas al usuario.</p>
                                <p>El responsable de la base de datos es **Titular de la base** y la dirección donde podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o supresión, es **Dirección del organismo**, según lo establecido en la LPDP".</p>


                                <div class="Form-group" role="group" aria-labelledby="grupo-terminos" >

                                    <div id="grupo-terminos" class="Form-label">Términos de la cláusula:*</div>

                                    <div class="Form-options">

                                        <label for="acepto" class="Form-option">

                                            <input type="radio" id="acepto" name="concentimiento">
                                            <span>Acepto los términos</span>

                                        </label>

                                        <label for="no-acepto" class="Form-option">

                                            <input type="radio" id="no-acepto" name="concentimiento">
                                            <span>No acepto los términos. (No se enviará el mensaje)</span>

                                        </label>

                                    </div>

                                </div>

                            </fieldset>

                            <div class="Form-actions u-flex-right">

                                <div>

                                    <button  class="Button Button--primary">Ir a datos del trámite</button>

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

