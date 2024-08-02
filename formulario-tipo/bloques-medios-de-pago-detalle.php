<?php
  $title = 'Bloques - Medios de pago (Detalle)';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Medios de pago (Detalle)</li>
				</ul>
		</div>
</div>

  
<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center  u-md-size3of4 u-lg-size8of10">



                <div class="Page" >


                    <h2 class="Page-title">Medios de pago</h2>

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


                    <form action="./" class="Form--tipo">

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