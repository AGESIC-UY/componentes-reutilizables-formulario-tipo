<?php
  $title = 'Bloques - Medios de pago';
?>

<?php include "inc/head.php"; ?>

  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">

            <a href="index.php">Inicio</a>

                <div class="Page Page--formulario" >


                    <h2 class="Page-title">Medios de pago</h2>

                    <div class="Alert">
                    
                                                
                            <ul class="resumen-datos">
                                
                                <li>
                                    <label>Resumen:</label>
                                    <p>12345</p>
                                </li>
                            
                                <li>
                                    <label>Concepto:</label>
                                    <p>Timbre</p>
                                </li>
                                <li>
                                    <label>Total:</label>
                                    <p>$U 100</p>
                                </li>
                        
                            </ul>
                            
                        
                            <a href="#">Mostrar detalle</a>
                    
                    </div>


                    <form action="./" class="Form">

                        <fieldset>

                            <legend><span>Seleccione el medio de pago:</span></legend>

                            <div class="Form-group" role="group"  aria-labelledby="grupo-medios-pago">
                            
                                <div id="grupo-medios-pago" class="Form-label">Medios de pago:</div>

                                <div class="Form-options" >
                                
                                    <label for="enlinea" class="Form-option Form-option--wrap">
                                        
                                        <input type="radio" id="enlinea" name="opciones">
                                        <span>En linea (será redirigido a la página de pago)</span>

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

                                        
                                    
                                    </label>

                                    <label for="redes" class="Form-option Form-option--wrap">
                                    
                                        <input type="radio" id="redes" name="opciones">
                                        <span>Redes de cobranza</span>

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

                                
                                    </label>
                                
                                </div>

                            </div>

                            <div class="Alert Alert--dialog Alert--warning">
                            
                                <h4 class="Alert-title">Título de mensaje de advertencia</h4>
                                <p>Mensaje deMensaje de aviso ante una situación determinada.</p>
                                <a href="#">Enlace de acción</a>
                        
                            </div>


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