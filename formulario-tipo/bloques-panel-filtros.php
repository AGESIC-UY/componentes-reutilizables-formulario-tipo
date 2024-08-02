<?php
  $title = 'Bloques - Panel de filtros';
?>

<?php include "inc/head.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Panel de filtros</li>
				</ul>
		</div>
</div>


<main class="u-main"  id="contenido">

    <div class="Container">

        <div class="Page Page--hasNav">

                <div class="Grid Grid--noGutter">

                    <div class="Grid-item u-md-size1of4">

											<!-- Navegación local + filtros MF -->
											<?php include 'inc/filtros.php' ?>
											<!-- -->
                        
                    </div>

                    <div class="Grid-item u-md-size3of4">

                        <div class="Page-body">

                            <h1 class="Page-title u-h2">Panel de filtros</h1>

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
