<?php
  $title = 'Bloques - Confirmacion';
?>

<?php include "inc/head.php"; ?>


  
<main  id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">

                <a href="index.php">Inicio</a>

                <div class="Page Page--formulario" >

                        <h2 class="Page-title">Confirmación</h2>

                        <div class="Alert Alert--dialog Alert--success" role="alert" aria-live="assertive">
                            
                            <h3 class="Alert-title u-h4">El pago se ha realizado exitosamente</h3>
                            
                            <ul class="resumen-datos">
                                
                                <li>
                                    Resumen: <strong>12345</strong>
                                </li>
                            
                                <li>
                                    Concepto: <strong>Timbre</strong>
                                </li>
                                <li>
                                    Total: <strong>$U 100</strong>
                                </li>
                        
                            </ul>
                            
                            <p>Se ha enviado una confirmación a correo@correo.uy</p>
                            <a href="#">Imprimir recibo</a>
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