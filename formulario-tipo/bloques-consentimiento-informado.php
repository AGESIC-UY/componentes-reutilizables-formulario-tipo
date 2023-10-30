<?php
  $title = 'Bloques - Cláusula de consentimiento informado';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Consentimiento informado</li>
				</ul>
		</div>
</div>

  
<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">


                <div class="Page Page--formulario" >


                    <h2 class="Page-title">Cláusula de consentimiento informado</h2>

                    <form action="./" class="Form">

                        <p class="Form-note">Todos los campos indicados con * son obligatorios</p>
              
                        <fieldset >
          
                            <legend><span>Cláusula de consentimiento informado:</span></legend>

                            <p>"De conformidad con la Ley N° 18.331, de 11 de agosto de 2008, de Protección de Datos Personales y Acción de Habeas Data (LPDP), los datos suministrados por usted quedarán incorporados en una base de datos, la cual será procesada exclusivamente para la siguiente finalidad: **Objetivo del formulario**.</p>

                            <p>Los datos personales serán tratados con el grado de protección adecuado, tomándose las medidas de seguridad necesarias para evitar su alteración, pérdida, tratamiento o acceso no autorizado por parte de terceros que lo puedan utilizar para finalidades distintas para las que han sido solicitadas al usuario.</p>

                            <p>El responsable de la base de datos es **Titular de la base** y la dirección donde podrá ejercer los derechos de acceso, rectificación, actualización, inclusión o supresión, es **Dirección del organismo**, según lo establecido en la LPDP".</p>


                            <div class="Form-group" role="group" aria-labelledby="grupo-terminos">
                                
                                <div id="grupo-terminos" class="Form-label">Términos de la cláusula:*</div>
                                
                                <div class="Form-options">
                                
                                    <label for="acepto" class="Form-option">
                                    
                                        <input type="radio" id="acepto" name="concentimiento">
                                        <span>Acepto los términos</span>
                                    
                                    </label>
                                    
                                    <label for="no-acepto" class="Form-option">
                                    
                                        <input type="radio" id="no-acepto" name="concentimiento">
                                        <span>No acepto los términos. (No se enviará el mensaje)</span>
                                    
                                    </label>
                                
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