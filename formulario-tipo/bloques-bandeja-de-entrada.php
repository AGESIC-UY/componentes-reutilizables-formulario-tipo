<?php
  $title = 'Bloques - Bandeja de entrada';
?>

<?php include "inc/head.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Bandeja de entrada</li>
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

                            <h1 class="Page-title u-h2 ">Bandeja de entrada básica</h1>

                            <form class="Form--tipo">

                            <div class="Page-info">
                                <div class="Bar">

                                        <div class="Bar-cell">
                                        <p class="u-textRight u-md-textLeft u-mb1 u-mr1">Ordenar por:</p>
                                        </div>
                                        <div class="Bar-cell" style="width: 190px;">
                                            <select name="ordenar_bandeja" id="ordenar_bandeja" class="Form-widget">
                                                <option value="0">Remitente A-Z</option>
                                                <option value="1">Remitente Z-A</option>
                                                <option value="2">Fecha ascentede</option>
                                                <option value="2">Fecha descendente</option>
                                            </select>
                                        </div>
                                </div>
                            </div>

                            </form>

                            <div class="Table-wrapper">

                                <table class="Table--tipo Table--striped Table--responsive">

                                    <caption>Ejemplo de bandeja de entrada</caption>

                                    <thead>

                                        <tr>

                                            <th>Remitente</th>
                                            <th>Asunto</th>
                                            <th>Fecha y Hora</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td>MEF</td>

                                            <td><a href="">Resumen de activos de la empresa del mes de agosto</a></td>
                                            <td>12/06/23 - 08:30</td>
                                            <td class="u-textRight table-actions">
                                                <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar <span class="u-hideVisually">Elminar Gestión de trámites internos</span></button>
                                                <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span></button>

                                            
                                                <!-- menú contextual -->

                                                <div class="tool-contextual-menu">

                                                    <div class="tool-contextual-menu-wrap">
                                                            <a href="#">Reenviar <span class="u-hideVisually">Reenviar Gestión de trámites internos</span></a>
                                                            <a href="#">Responder <span class="u-hideVisually">Responder Gestión de trámites internos</span></a>
                                                    </div>

                                                </div>                                            
                                            
                                            </td>




                                        </tr>


                                        <tr>

                                            <td>OPP</td>

                                            <td><a href="">Informe anual 2020</a></td>
                                            <td>12/06/23 - 08:30</td>
                                            <td class="u-textRight table-actions">
                                                <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar <span class="u-hideVisually">Elminar Informe anual 2020</span></button>
                                                <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span></button>

                                                <!-- menú contextual -->

                                                <div class="tool-contextual-menu">

                                                    <div class="tool-contextual-menu-wrap">
                                                            <a href="#">Reenviar <span class="u-hideVisually">Reenviar Informe anual 2020</span></a>
                                                            <a href="#">Responder <span class="u-hideVisually">Responder Informe anual 2020</span></a>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>


                                        <tr>

                                            <td>Juan Gonzáles</td>

                                            <td><a href="">Gestión de trámites internos</a></td>
                                            <td>12/06/23 - 08:30</td>
                                            <td class="u-textRight table-actions">
                                                <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar <span class="u-hideVisually">Elminar Gestión de trámites internos</span></button>
                                                <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span></button>

                                                <!-- menú contextual -->

                                                <div class="tool-contextual-menu">

                                                    <div class="tool-contextual-menu-wrap">
                                                            <a href="#">Reenviar <span class="u-hideVisually">Reenviar Gestión de trámites internos</span></a>
                                                            <a href="#">Responder <span class="u-hideVisually">Responder Gestión de trámites internos</span></a>
                                                    </div>

                                                </div>
                                            </td>

                                        </tr>


                                        

                                    </tbody>

                                </table>

                            </div>

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
