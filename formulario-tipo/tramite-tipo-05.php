<?php
  $title = 'Trámite tipo - Paso 5';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 5</li>
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

                                        Paso <strong>5</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li></li>
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

                                <span class="Steps-item is-active">
                                
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

                        <h2>Medios de pago</h2>

                        <div class="Alert--tipo Alert--dialog" role="alert" aria-live="assertive">
                    
                                <h4 class="Alert-title">Detalle de la reserva</h4>
                                <ul class="resumen-datos">
                                    
                                    <li>
                                        <span>Resumen:</span> <strong>12345</strong>
                                    </li>
                                
                                    <li>
                                        <span>Concepto:</span> <strong>Timbre</strong>
                                    </li>

                                    <li>
                                        <span>Total:</span> <strong>$U 100</strong>
                                    </li>
                            
                                </ul>
                                
                            
                                <a href="#">Ocultar detalle</a>
                        
                        </div>

                        <table class="Table--tipo">

                        <caption>Detalle</caption>

                            <thead>
                                
                                <tr>
                                    <th>Detalles</th>
                                    <th>Valor</th>
                                </tr>
                            
                            </thead>

                            <tbody>
                            
                                <tr>
                                    <td>
                                        <p>Convenio 123. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <p class="texto-secundario">Cutota 1 de 10.</p>
                                    </td>
                                    <td class="u-textRight">$4.143 <p class="texto-secundario">(5 UR)</p></td>
                                </tr>
                            
                                <tr>
                                    <td>
                                        <p>Mauris lobortis nunc nec nulla viverra, non blandit velit pharetra.</p>
                                    </td>
                                    <td class="u-textRight">$82.540 <p class="texto-secundario">(100 UR)</p></td>
                                </tr>
                            
                            </tbody>
                            
                            <tfoot>
                                <tr>
                                    <td class="u-textRight">
                                        Total
                                    </td>
                                    <td class="u-textRight">
                                        $86.683
                                    </td>
                                </tr>
                            </tfoot>


                        </table>

                        <form action="tramite-tipo-06.php" class="Form--tipo">

                            <fieldset>

                                <legend>
                                    <span>Seleccione el medio de pago:</span>
                                </legend>


                            <div class="Form-group" role="group"  aria-labelledby="grupo-medios-pago" >

                                <div class="Form-label-wrap">
                                    <div id="grupo-medios-pago" class="Form-label" >Medios de pago:</div>
                                </div>

                                <div class="Form-object-wrap">

                                    <div class="Form-options">

                                        <label for="enlinea" class="Form-option">

                                            <input type="radio" id="enlinea" name="opciones">
                                            <span>En linea (será redirigido a la página de pago)

                                                <span class="Form-hint">

                                                    <div class="Grid Form-grid medios-pago">

                                                        <div class="Grid-item u-size1of3 u-md-size1of4">
                                                            <img src="./img/logo-visa.png" alt="logotipo Visa" />
                                                        </div>

                                                        <div class="Grid-item u-size1of3 u-md-size1of4">
                                                            <img src="./img/logo-bits.png" alt="logotipo Bits" />
                                                        </div>

                                                        <div class="Grid-item u-size1of3 u-md-size1of4">
                                                            <img src="./img/logo-brou.png" alt="logotipo Brou" />
                                                        </div>

                                                    </div>

                                                </span>

                                            </span>

                                        </label>


                                        <label for="redes" class="Form-option">

                                            <input type="radio" id="redes" name="opciones">
                                            <span>Redes de cobranza

                                                <span class="Form-hint">

                                                    <div class="Grid Form-grid medios-pago">
 
                                                        <div class="Grid-item u-size1of3 u-md-size1of3">

                                                            <img src="./img/logo-abitab.png" alt="logotipo Abitab">
                                                            <a href="#">Locales Abitab</a>

                                                        </div>

                                                        <div class="Grid-item u-size1of3 u-md-size1of3">

                                                            <img src="./img/logo-redpagos.png" alt="logotipo Redpagos">
                                                            <a href="#">Locales Redpagos</a>

                                                        </div>

                                                        <div class="Grid-item u-size1of3 u-md-size1of3">

                                                            <img src="./img/100x35.png" alt="oficina del organismo">
                                                            <a href="#">Oficinas del organismo</a>

                                                        </div>

                                                    </div>

                                                </span>

                                            </span>

                                        </label>

                                    </div>

                                </div>

                            </div>

                            </fieldset>

                            <div class="Form-actions">
                                <div class="Form-actions--left">
                                    <a href="tramite-ripo-04.php" class="Button Button--link" >Volver al paso anteror</a>
                                </div>

                                <div class="Form-actions--right">
                                    <button class="Button Button--primary">Finalizar</button>
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

