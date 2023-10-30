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

<main id="contenido">

    <div class="Container">

        <div class="Grid">


        <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">


            <div class="Page Page--formulario">

                <h1 class="Page-title">Trámite tipo</h1>

<!-- Pasos -->

                        <div class="Steps">

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

                <div class="Alert Alert--dialog Alert--success" role="alert" aria-live="assertive">
                
                    <h4 class="Alert-title">Su gestión se ha realizado correctamente</h4>
                    <p>Se ha enviado una confirmación a correo@correo.com.uy</p>
                    <a href="#">Imprimir comprobante</a>
                
                </div>

                <div class="Alert Alert--dialog Alert--info" role="alert" aria-live="assertive">
                
                        <h4 class="Alert-title">Información relevante</h4>
                        <p>Lorem ipsum dolor sit amet sed ut perspiciatis unde omnis iste</p>
                
                </div>

                <form action="./" class="Form">


                    <fieldset>

                        <legend>
                            <span>Ayúdanos a mejorar</span>
                        </legend>
                      
                        <div class="Form-group" role="group"  aria-labelledby="grupo-valoraciones">

                            <div id="grupo-valoraciones" class="Form-label" >¿Cómo calificarías esta gestión?:</div>
                            
                            <div class="Rating">
                                <input type="radio" id="Mala" class="Rating-control" name="rating-star" value="Mala" title="Mala" >
                                <input type="radio" id="Regular" class="Rating-control" name="rating-star" value="Regular" title="Regular" >
                                <input type="radio" id="Buena" class="Rating-control" name="rating-star" value="Buena" title="Buena"  checked>
                                <input type="radio" id="Muybuena" class="Rating-control" name="rating-star" value="Muy buena" title="Muy buena" >
                                <input type="radio" id="Excelente" class="Rating-control" name="rating-star" value="Excelente" title="Excelente" >

                                <label for="Mala" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">1 estrella</span></label>
                                <label for="Regular" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">2 estrella</span></label>
                                <label for="Buena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">3 estrella</span></label>
                                <label for="Muybuena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">4 estrella</span></label>
                                <label for="Excelente" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">5 estrella</span></label>	                        
                                
                                <svg xmlns="http://www.w3.org/2000/svg" class="u-hide">
                                    <symbol id="star" viewBox="0 0 26 28">
                                        <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"></path>
                                    </symbol>
                                </svg> 
                                
                            </div>

                        </div>
                  
                        <div class="Form-group" >

                          <label for="comentarios-2" class="Form-label">Comentarios:</label>
                          <textarea name="comentarios-2" id="comentarios-2" class="Form-widget"></textarea>

                        </div>

                        <div class="Form-group Form-group--aligned" >

                            <button type="submit" class="Button Button--primary">Enviar</button>

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
