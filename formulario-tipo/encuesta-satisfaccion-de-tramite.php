<?php
  $title = 'Trámite tipo - Paso 5';
?>

<?php include "inc/head.php"; ?>


<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">

                <div class="Page Page--formulario">

                    <h1 class="Page-title">¿Cómo fue la experiencia realizando trámites en línea?</h1>

                    <form action="./" class="Form">

                        <fieldset>

                            <legend>
                                <span>Formulario de la encuesta</span>
                            </legend>

                            <fieldset>

                                <legend>
                                    <span>Nivel Satisfacción</span>
                                </legend>

                            <p>Teniendo en cuenta todas las etapas del trámite realizado en línea, por favor indicar el nivel de satisfacción en términos generales, donde una estrella es nada satisfecho/a y cinco estrellas muy satisfecho/a:</p>

                            <div class="Form-group" role="group"  aria-describedby="grupo-valoraciones">

                                <div id="grupo-valoraciones" class="Form-label" >Indica el nivel de satisfacción:</div>

                                <div class="Rating">

                                    <input type="radio" id="Mala" class="Rating-control" name="rating-star" value="Mala" title="Mala" aria-checked="false">
                                    <input type="radio" id="Regular" class="Rating-control" name="rating-star" value="Regular" title="Regular" aria-checked="false">
                                    <input type="radio" id="Buena" class="Rating-control" name="rating-star" value="Buena" title="Buena" aria-checked="true" >
                                    <input type="radio" id="Muybuena" class="Rating-control" name="rating-star" value="Muy buena" title="Muy buena" aria-checked="false">
                                    <input type="radio" id="Excelente" class="Rating-control" name="rating-star" value="Excelente" title="Excelente" aria-checked="false">
                                    


                                    <label for="Mala" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">1</span></label>
                                    <label for="Regular" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">2</span></label>
                                    <label for="Buena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">3</span></label>
                                    <label for="Muybuena" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">4</span></label>
                                    <label for="Excelente" class="Rating-item"><svg class="Rating-star"><use xlink:href="#star"></use></svg><span class="Rating-label">5</span></label>	                        

                                    <svg xmlns="http://www.w3.org/2000/svg" class="u-hide">
                                        <symbol id="star" viewBox="0 0 26 28">
                                            <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"></path>
                                        </symbol>
                                    </svg> 

                                </div>

                            </div>

                            </fieldset>

                            <fieldset>

                                <legend>
                                    <span>Experiencia</span>
                                </legend>

                                <p>Seleccionar la opción que mejor representa su experiencia según las siguientes afirmaciones:</p>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-fue-confiable" >

                                    <div id="grupo-fue-confiable" class="Form-label">Fue confiable:</div>

                                    <div class="Form-options">

                                        <label for="total-desacuerdo" class="Form-option">
                                            <input type="radio" id="total-desacuerdo" name="fue-confiable">
                                            <span>Totalmente en desacuerdo</span>
                                        </label>

                                        <label for="bastante-desacuerdo" class="Form-option">
                                            <input type="radio" id="bastante-desacuerdo" name="fue-confiable">
                                            <span>Bastante en desacuerdo</span>
                                        </label>

                                        <label for="bastante-acuerdo" class="Form-option">
                                            <input type="radio" id="bastante-acuerdo" name="fue-confiable">
                                            <span>Bastante de acuerdo</span>
                                        </label>

                                        <label for="total-acuerdo" class="Form-option">
                                            <input type="radio" id="total-acuerdo" name="fue-confiable">
                                            <span>Totalmente de acuerdo</span>
                                        </label>

                                    </div>

                                </div>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-fue-facil" >

                                    <div id="grupo-fue-facil" class="Form-label">Fue fácil de realizar:</div>

                                    <div class="Form-options">

                                        <label for="total-desacuerdo-fue-facil" class="Form-option">
                                            <input type="radio" id="total-desacuerdo-fue-facil" name="fue-facil">
                                            <span>Totalmente en desacuerdo</span>
                                        </label>

                                        <label for="bastante-desacuerdo-fue-facil" class="Form-option">
                                            <input type="radio" id="bastante-desacuerdo-fue-facil" name="fue-facil">
                                            <span>Bastante en desacuerdo</span>
                                        </label>

                                        <label for="bastante-acuerdo-fue-facil" class="Form-option">
                                            <input type="radio" id="bastante-acuerdo-fue-facil" name="fue-facil">
                                            <span>Bastante de acuerdo</span>
                                        </label>

                                        <label for="total-acuerdo-fue-facil" class="Form-option">
                                            <input type="radio" id="total-acuerdo-fue-facil" name="fue-facil">
                                            <span>Totalmente de acuerdo</span>
                                        </label>

                                    </div>

                                </div>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-ahorra-dinero" >

                                    <div id="grupo-ahorra-dinero" class="Form-label">Permite ahorrar dinero:</div>

                                    <div class="Form-options">

                                        <label for="total-desacuerdo-ahorra-dinero" class="Form-option">
                                            <input type="radio" id="total-desacuerdo-ahorra-dinero" name="ahorra-dinero">
                                            <span>Totalmente en desacuerdo</span>
                                        </label>

                                        <label for="bastante-desacuerdo-ahorra-dinero" class="Form-option">
                                            <input type="radio" id="bastante-desacuerdo-ahorra-dinero" name="ahorra-dinero">
                                            <span>Bastante en desacuerdo</span>
                                        </label>

                                        <label for="bastante-acuerdo-ahorra-dinero" class="Form-option">
                                            <input type="radio" id="bastante-acuerdo-ahorra-dinero" name="ahorra-dinero">
                                            <span>Bastante de acuerdo</span>
                                        </label>

                                        <label for="total-acuerdo-ahorra-dinero" class="Form-option">
                                            <input type="radio" id="total-acuerdo-ahorra-dinero" name="ahorra-dinero">
                                            <span>Totalmente de acuerdo</span>
                                        </label>

                                    </div>

                                </div>

                                <div class="Form-group" role="group"  aria-labelledby="grupo-ahorra-tiempo" >

                                    <div id="grupo-ahorra-tiempo" class="Form-label">Permite ahorrar dinero:</div>

                                    <div class="Form-options">

                                        <label for="total-desacuerdo-ahorra-tiempo" class="Form-option">
                                            <input type="radio" id="total-desacuerdo-ahorra-tiempo" name="ahorra-tiempo">
                                            <span>Totalmente en desacuerdo</span>
                                        </label>

                                        <label for="bastante-desacuerdo-ahorra-tiempo" class="Form-option">
                                            <input type="radio" id="bastante-desacuerdo-ahorra-tiempo" name="ahorra-tiempo">
                                            <span>Bastante en desacuerdo</span>
                                        </label>

                                        <label for="bastante-acuerdo-ahorra-tiempo" class="Form-option">
                                            <input type="radio" id="bastante-acuerdo-ahorra-tiempo" name="ahorra-tiempo">
                                            <span>Bastante de acuerdo</span>
                                        </label>

                                        <label for="total-acuerdo-ahorra-tiempo" class="Form-option">
                                            <input type="radio" id="total-acuerdo-ahorra-tiempo" name="ahorra-tiempo">
                                            <span>Totalmente de acuerdo</span>
                                        </label>

                                    </div>

                                </div>

                                <div class="Form-group" >

                                    <label for="como-mejorar" class="Form-label">¿Cómo se podría mejorar?:</label>
                                    <textarea name="como-mejorar" id="como-mejorar" class="Form-widget"></textarea>

                                </div>

                            </fieldset>

                            <div class="Form-group Form-group--aligned" >

                                <button type="submit" class="Button Button--primary">Enviar encuesta</button>

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