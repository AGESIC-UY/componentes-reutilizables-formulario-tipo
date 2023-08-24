<?php
  $title = 'Trámite tipo - Paso 5';
?>

<?php include "inc/head.php"; ?>


<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">

                    <a href="index.php">Inicio</a>

                    <div class="Page Page--formulario">

                        <h1 class="Page-title">Trámite tipo</h1>

                        <!-- Pasos -->

                        <div class="Steps">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>5</strong> de 5
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
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

                                <a href="#" class="Steps-item is-active">
                                
                                    <div>
                                        <span class="Steps-number">5</span>
                                    </div>
                                    <div>Medios de pago</div>

                                </a>

                            </div>

                        </div>

                        <!-- fin pasos -->

                        <h2>Medios de pago</h2>

                        <div class="Alert" role="alert" aria-live="assertive">
                    
                                                
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

                        <table class="Table">

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

                        <form action="./" class="Form">

                            <fieldset>

                                <legend><span>Seleccione el medio de pago:</span></legend>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-medios-pago">
                                
                                    <div id="grupo-medios-pago" class="Form-label">Medios de pago:</div>

                                    <div class="Form-options">
                                    
                                        <label for="enlinea" class="Form-option Form-option--wrap">
                                            
                                            <input type="radio" id="enlinea" name="opciones">
                                            <span>En linea (será redirigido a la página de pago)</span>

                                            <div class="Grid Form-grid medios-pago">
                                                
                                                <div class="Grid-item u-size1of3 u-md-size1of4">
                                                
                                                    <img src="./img/logo-visa.png" alt="logotipo Visa">
                                                
                                                </div>

                                                <div class="Grid-item u-size1of3 u-md-size1of4">

                                                    <img src="./img/logo-bits.png" alt="logotipo Bits">
                                                
                                                </div>

                                                <div class="Grid-item u-size1of3 u-md-size1of4">

                                                    <img src="./img/logo-brou.png" alt="logotipo Brou">

                                                </div>
                                            
                                            </div>

                                            
                                        
                                        </label>

                                        <label for="redes" class="Form-option Form-option--wrap">
                                        
                                            <input type="radio" id="redes" name="opciones">
                                            
                                            <span>Redes de cobranza</span>

                                            <div class="Grid Form-grid medios-pago">
                                                
                                                <div class="Grid-item u-size1of3 u-md-size1of3">
                                                
                                                    <img src="./img/logo-abitab.png" alt="abitab">
                                                    <a href="#">Locales Abitab</a>
                                                
                                                </div>

                                                <div class="Grid-item u-size1of3 u-md-size1of3">

                                                    <img src="./img/logo-redpagos.png" alt="redpagos">
                                                    <a href="#">Locales Redpagos</a>
                                                
                                                </div>

                                                <div class="Grid-item u-size1of3 u-md-size1of3">

                                                    <img src="./img/100x35.png" alt="oficina del organismo">
                                                    <a href="#">Oficinas del organismo</a>

                                                </div>
                                            
                                            </div>

                                    
                                        </label>
                                    
                                    </div>

                                </div>



                            </fieldset>

                            <div class="Form-actions">

                                    <div>
                                        <a class="Button Button--link" href="tramite-tipo-04.php">Volver al paso anteror</a>
                                    </div>

                                    <div>
                                       
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

