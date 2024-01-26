<?php
  $title = 'Trámite tipo - Paso 3';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 3</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-lg-size8of10">


                    <div class="Page ">

                        <h1 class="Page-title">Trámite tipo</h1>

                        <!-- Pasos -->

                        <div class="Steps--tipo">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>3</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p class="step-info">Firma</p>

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

                                <a href="tramite-tipo-02.php"  class="Steps-item is-finished">

                                    <div>
                                        <span class="Steps-number">2</span>
                                    </div>
                                    <div>Datos del trámite</div>

                                </a>

                                <span class="Steps-item is-active">

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

                        <h2>Firma</h2>

                        <form action="tramite-tipo-04.php" class="Form--tipo">

                            <fieldset >
                                
                                <legend>

                                    <span>Métodos de firma</span>
                                
                                </legend>

                                
                                <div class="Form-group" role="group"  aria-labelledby="grupo-metodos">
                                
                                <div id="grupo-metodos" class="Form-label">Métodos:</div>
                                
                                <div class="Form-options">
                                
                                    <label for="firma-digital" class="Form-option">
                                    <input type="radio" id="firma-digital" name="metodos">
                                    <span>Firmar en forma digital</span>
                                    </label>

                                    <label for="imprimir-formulario" class="Form-option">
                                    <input type="radio" id="imprimir-formulario" name="metodos">
                                    <span><a href="">Imprimir formulario</a></span>
                                    </label>

                                </div>

                                </div>

                            </fieldset>

                            <div class="Alert--tipo Alert--dialog" role="alert" aria-live="assertive">

                                <h4 class="Alert-title">Forma presencialmente</h4>
                                <p>También es posible llevar el formulario firmado a las <a href="">oficina del organismo</a></p>
                                
                            </div>


                            <fieldset >
                                
                                <legend>

                                    <span>Adjuntar formulario firmado</span>
                                
                                </legend>

                                <div class="Form-group">
                                <label class="Form-label" for="adjuntos-1">Archivos:</label>
                                <input class="Form-widget" type="file" name="adjuntos-1" id="adjuntos-1">
                                </div>
                                

                            </fieldset>

                            <div class="Form-actions">
                                    <div>
                                        <a class="Button Button--link" href="tramite-tipo-02.php">Volver al paso anteror</a>
                                    </div>

                                    <div>
                                       
                                        <button class="Button Button--primary">Ir a Agenda</button>
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

