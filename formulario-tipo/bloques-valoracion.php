<?php
  $title = 'Bloques - Valoración';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Valoración</li>
				</ul>
		</div>
</div>

  
<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4  u-lg-size8of10">

            <div class="Page" >


                    <h2 class="Page-title">Valoración</h2>

                        <form action="./" class="Form--tipo">

                            <fieldset>

                              <legend>
                                  <span>Ayúdanos a mejorar</span>
                              </legend>




                              <div class="Form-group" role="group"  aria-labelledby="grupo-calificacion" >

                                <div class="Form-label-wrap">
                                  <div id="grupo-calificacion" class="Form-label" >¿Cómo calificarías esta gestión?:</div>
                                </div>

                                <div class="Form-object-wrap">

                                  <div class="Form-options">

                                  <label for="excelente" class="Form-option">
                                    <input type="radio" id="excelente" name="calificacion">
                                    <span>Excelente</span>
                                  </label>

                                  <label for="muy-buena" class="Form-option">
                                    <input type="radio" id="muy-buena" name="calificacion">
                                    <span>Muy buena</span>
                                  </label>

                                  <label for="buena" class="Form-option">
                                    <input type="radio" id="buena" name="calificacion">
                                    <span>Buena</span>
                                  </label>

                                  <label for="regular" class="Form-option">
                                    <input type="radio" id="regular" name="calificacion">
                                    <span>Regular</span>
                                  </label>

                                  <label for="mala" class="Form-option">
                                    <input type="radio" id="mala" name="calificacion">
                                    <span>Mala</span>
                                  </label>

                                  </div>

                                </div>
                              
                              </div>


                              <div class="Form-group">
                                <div class="Form-label-wrap">
                                  <label for="comentarios" class="Form-label" >Comentarios:</label>
                                </div>
                                <div class="Form-object-wrap">
                                  <textarea name="comentarios" id="comentarios" class="Form-widget"></textarea>
                                </div>
                              </div>


                              <div class="Form-group" >
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap">
                                  <button class="Button Button--primary">Enviar</button>
                                </div>
                              </div>


                            </fieldset>

                        </form>


                        <form action="./" class="Form--tipo">


                        <fieldset>

                            <legend>
                              <span>Ayúdanos a mejorar</span>
                            </legend>

                            <div class="Form-group" role="group"  aria-labelledby="grupo-valoraciones" >

                                <div class="Form-label-wrap">
                                  <div id="grupo-valoraciones" class="Form-label" >¿Cómo calificarías esta gestión?:</div>
                                </div>

                                <div class="Form-object-wrap">

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

                            </div>

                            <div class="Form-group">
                               <div class="Form-label-wrap">
                                 <label for="comentarios-2" class="Form-label" >Comentarios:</label>
                               </div>
                               <div class="Form-object-wrap">
                                 <textarea name="comentarios-2" id="comentarios-2" class="Form-widget"></textarea>
                               </div>
                             </div>
                          
                             <div class="Form-group" >
                                <div class="Form-label-wrap"></div>
                                <div class="Form-object-wrap">
                                  <button type="submit" class="Button Button--primary">Enviar</button>
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