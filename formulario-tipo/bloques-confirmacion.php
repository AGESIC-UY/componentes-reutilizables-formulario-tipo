<?php
  $title = 'Bloques - Confirmación';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="bloques.php">Formulario Tipo</a></li>
						<li>Confirmación</li>
				</ul>
		</div>
</div>
  
<main  id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">


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