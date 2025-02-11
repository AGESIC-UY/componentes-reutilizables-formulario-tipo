<?php
  $title = 'Trámite tipo - Paso 6';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 6</li>
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

                                        Paso <strong>6</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    
                                </ul>
                                <p class="step-info">Medios de pago</p>

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

                                <a href="tramite-tipo-03.php" class="Steps-item is-finished">

                                    <div>
                                        <span class="Steps-number">3</span>
                                    </div>
                                    <div>Firma</div>

                                </a>

                                <a href="tramite-tipo-04.php" class="Steps-item is-finished">
                                
                                    <div>
                                        <span class="Steps-number">4</span>
                                    </div>
                                    <div>Agenda</div>

                                </a>

                                <a href="tramite-tipo-05.php" class="Steps-item is-active is-finished">
                                
                                    <div>
                                        <span class="Steps-number">5</span>
                                    </div>
                                    <div>Medios de pago</div>

                                </a>

                                <span class="Steps-item is-active">
                                
                                <div>
                                    <span class="Steps-number">6</span>
                                </div>
                                <div>Confirmación</div>

                                </span>

                            </div>

                        </div>

                        <!-- fin pasos -->

                        <div class="Alert--tipo Alert--dialog Alert--success" role="alert" aria-live="assertive">

                            <h4 class="Alert-title">Su gestión se ha realizado correctamente</h4>
                            <p>Se ha enviado una confirmación a correo@correo.com.uy</p>
                            <a href="#">Imprimir comprobante</a>

                        </div>

                        <div class="Alert--tipo Alert--dialog Alert--info" role="alert" aria-live="assertive">

                                <h4 class="Alert-title">Información relevante</h4>
                                <p>Lorem ipsum dolor sit amet sed ut perspiciatis unde omnis iste</p>

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
