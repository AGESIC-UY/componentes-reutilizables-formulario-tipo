<?php
  $title = 'Bloques - Identificación documento extrangero';
?>

<?php include "inc/head.php"; ?>
 
<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Identificación documento extranjero</li>
				</ul>
		</div>
</div>

<main  id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-md-size3of4 u-lg-size8of10">


              <div class="Page Page--formulario" >


                <h2 class="Page-title">Identificación con documento de identidad extranjero</h2>

                <form action="./" class="Form">

                    <p class="Form-note">Todos los campos indicados con * son obligatorios</p>

                    <fieldset>

                        <legend><span>Datos personales:</span></legend>

                        <fieldset class="fieldset-form-multifield">
                        
                          <legend>
                            <span>Identificación de usuario:</span>
                          </legend>

                        <div class="Form-group" >
                          
                          <div class="Form-label">Documento de Identidad:</div>
                          
                          <div class="Grid Form-grid">
                            <div class="Grid-item u-size1of3">
                              <label for="select-cedula" class="u-hideVisually" >Tipo de Documento</label>
                              <select name="select-cedula" id="select-cedula" class="Form-widget" >
                                <option value="ci">C.I.</option>
                                <option value="pasaporte">Pasaporte</option>
                              </select>

                            </div>

                            <div class="Grid-item u-size2of3">
                              <label for="numero-cedula" class="u-hideVisually">Número de Documento</label>
                              <input type="text" class="Form-widget" name="numero-cedula" aria-describedby="ayuda-documento-identidad" id="numero-cedula" >
                              <div class="Form-hint" id="ayuda-documento-identidad">Incluir dígito verificador</div>
                            </div>
                          
                          </div>

                        </div>

                        </fieldset>


                        <div class="Form-group" >
                          
                          <label for="pais-emisor" class="Form-label">País emisor:*</label>
                          
                          <select name="pais-emisor" id="pais-emisor" class="Form-widget">
                                <option>Seleccionar país emisor</option>
                                <option>Akrotiri</option>
                                <option>Albania</option>
                                <option>Alemania</option>
                                <option>Andorra</option>
                                <option>Angola</option>
                                <option>Anguila</option>
                                <option>Antártida</option>
                                <option>Antigua y Barbuda</option>
                                <option>Antillas Neerlandesas</option>
                                <option>Arabia Saudí</option>
                                <option>Arctic Ocean</option>
                                <option>Argelia</option>
                                <option>Argentina</option>
                                <option>Armenia</option>
                                <option>Aruba</option>
                                <option>Ashmore and Cartier Islands</option>
                                <option>Atlantic Ocean</option>
                                <option>Australia</option>
                                <option>Austria</option>
                                <option>Azerbaiyán</option>
                                <option>Bahamas</option>
                                <option>Bahráin</option>
                                <option>Bangladesh</option>
                                <option>Barbados</option>
                                <option>Bélgica</option>
                                <option>Belice</option>
                                <option>Benín</option>
                                <option>Bermudas</option>
                                <option>Bielorrusia</option>
                                <option>Birmania; Myanmar</option>
                                <option>Bolivia</option>
                                <option>Bosnia y Hercegovina</option>
                                <option>Botsuana</option>
                                <option>Brasil</option>
                                <option>Brunéi</option>
                                <option>Bulgaria</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>Bután</option>
                                <option>Cabo Verde</option>
                                <option>Camboya</option>
                                <option>Camerún</option>
                                <option>Canadá</option>
                                <option>Chad</option>
                                <option>Chile</option>
                                <option>China</option>
                                <option>Chipre</option>
                                <option>Clipperton Island</option>
                                <option>Colombia</option>
                                <option>Comoras</option>
                                <option>Congo</option>
                                <option>Coral Sea Islands</option>
                                <option>Corea del Norte</option>
                                <option>Corea del Sur</option>
                                <option>Costa de Marfil</option>
                                <option>Costa Rica</option>
                                <option>Croacia</option>
                                <option>Cuba</option>
                                <option>Dhekelia</option>
                                <option>Dinamarca</option>
                                <option>Dominica</option>
                                <option>Ecuador</option>
                                <option>Egipto</option>
                                <option>El Salvador</option>
                                <option>El Vaticano</option>
                                <option>Emiratos Árabes Unidos</option>
                                <option>Eritrea</option>
                                <option>Eslovaquia</option>
                                <option>Eslovenia</option>
                                <option>España</option>
                                <option>Estados Unidos</option>
                                <option>Estonia</option>
                                <option>Etiopía</option>
                                <option>Filipinas</option>
                                <option>Finlandia</option>
                                <option>Fiyi</option>
                                <option>Francia</option>
                                <option>Gabón</option>
                                <option>Gambia</option>
                                <option>Gaza Strip</option>
                                <option>Georgia</option>
                                <option>Ghana</option>
                                <option>Gibraltar</option>
                                <option>Granada</option>
                                <option>Grecia</option>
                                <option>Groenlandia</option>
                                <option>Guam</option>
                                <option>Guatemala</option>
                                <option>Guernsey</option>
                                <option>Guinea</option>
                                <option>Guinea Ecuatorial</option>
                                <option>Guinea-Bissau</option>
                                <option>Guyana</option>
                                <option>Haití</option>
                                <option>Honduras</option>
                                <option>Hong Kong</option>
                                <option>Hungría</option>
                                <option>India</option>
                                <option>Indian Ocean</option>
                                <option>Indonesia</option>
                                <option>Irán</option>
                                <option>Iraq</option>
                                <option>Irlanda</option>
                                <option>Isla Bouvet</option>
                                <option>Isla Christmas</option>
                                <option>Isla Norfolk</option>
                                <option>Islandia</option>
                                <option>Islas Caimán</option>
                                <option>Islas Cocos</option>
                                <option>Islas Cook</option>
                                <option>Islas Feroe</option>
                                <option>Islas Georgia del Sur y Sandwich del Sur</option>
                                <option>Islas Heard y McDonald</option>
                                <option>Islas Malvinas</option>
                                <option>Islas Marianas del Norte</option>
                                <option>Islas Marshall</option>
                                <option>Islas Pitcairn</option>
                                <option>Islas Salomón</option>
                                <option>Islas Turcas y Caicos</option>
                                <option>Islas Vírgenes Americanas</option>
                                <option>Islas Vírgenes Británicas</option>
                                <option>Israel</option>
                                <option>Italia</option>
                                <option>Jamaica</option>
                                <option>Jan Mayen</option>
                                <option>Japón</option>
                                <option>Jersey</option>
                                <option>Jordania</option>
                                <option>Kazajistán</option>
                                <option>Kenia</option>
                                <option>Kirguizistán</option>
                                <option>Kiribati</option>
                                <option>Kuwait</option>
                                <option>Laos</option>
                                <option>Lesoto</option>
                                <option>Letonia</option>
                                <option>Líbano</option>
                                <option>Liberia</option>
                                <option>Libia</option>
                                <option>Liechtenstein</option>
                                <option>Lituania</option>
                                <option>Luxemburgo</option>
                                <option>Macao</option>
                                <option>Macedonia</option>
                                <option>Madagascar</option>
                                <option>Malasia</option>
                                <option>Malaui</option>
                                <option>Maldivas</option>
                                <option>Malí</option>
                                <option>Malta</option>
                                <option>Man, Isle of</option>
                                <option>Marruecos</option>
                                <option>Mauricio</option>
                                <option>Mauritania</option>
                                <option>Mayotte</option>
                                <option>México</option>
                                <option>Micronesia</option>
                                <option>Moldavia</option>
                                <option>Mónaco</option>
                                <option>Mongolia</option>
                                <option>Montenegro</option>
                                <option>Montserrat</option>
                                <option>Mozambique</option>
                                <option>Mundo</option>
                                <option>Namibia</option>
                                <option>Nauru</option>
                                <option>Navassa Island</option>
                                <option>Nepal</option>
                                <option>Nicaragua</option>
                                <option>Níger</option>
                                <option>Nigeria</option>
                                <option>Niue</option>
                                <option>Noruega</option>
                                <option>Nueva Caledonia</option>
                                <option>Nueva Zelanda</option>
                                <option>Omán</option>
                                <option>Pacific Ocean</option>
                                <option>Países Bajos</option>
                                <option>Pakistán</option>
                                <option>Palaos</option>
                                <option>Panamá</option>
                                <option>Papúa-Nueva Guinea</option>
                                <option>Paracel Islands</option>
                                <option>Paraguay</option>
                                <option>Perú</option>
                                <option>Polinesia Francesa</option>
                                <option>Polonia</option>
                                <option>Portugal</option>
                                <option>Puerto Rico</option>
                                <option>Qatar</option>
                                <option>Reino Unido</option>
                                <option>República Centroafricana</option>
                                <option>República Checa</option>
                                <option>República Democrática del Congo</option>
                                <option>República Dominicana</option>
                                <option>Ruanda</option>
                                <option>Rumania</option>
                                <option>Rusia</option>
                                <option>Sáhara Occidental</option>
                                <option>Samoa</option>
                                <option>Samoa Americana</option>
                                <option>San Cristóbal y Nieves</option>
                                <option>San Marino</option>
                                <option>San Pedro y Miquelón</option>
                                <option>San Vicente y las Granadinas</option>
                                <option>Santa Helena</option>
                                <option>Santa Lucía</option>
                                <option>Santo Tomé y Príncipe</option>
                                <option>Senegal</option>
                                <option>Serbia</option>
                                <option>Seychelles</option>
                                <option>Sierra Leona</option>
                                <option>Singapur</option>
                                <option>Siria</option>
                                <option>Somalia</option>
                                <option>Southern Ocean</option>
                                <option>Spratly Islands</option>
                                <option>Sri Lanka</option>
                                <option>Suazilandia</option>
                                <option>Sudáfrica</option>
                                <option>Sudán</option>
                                <option>Suecia</option>
                                <option>Suiza</option>
                                <option>Surinam</option>
                                <option>Svalbard y Jan Mayen</option>
                                <option>Tailandia</option>
                                <option>Taiwán</option>
                                <option>Tanzania</option>
                                <option>Tayikistán</option>
                                <option>Territorio Británico del Océano Indico</option>
                                <option>Territorios Australes Franceses</option>
                                <option>Timor Oriental</option>
                                <option>Togo</option>
                                <option>Tokelau</option>
                                <option>Tonga</option>
                                <option>Trinidad y Tobago</option>
                                <option>Túnez</option>
                                <option>Turkmenistán</option>
                                <option>Turquía</option>
                                <option>Tuvalu</option>
                                <option>Ucrania</option>
                                <option>Uganda</option>
                                <option>Unión Europea</option>
                                <option>Uruguay</option>
                                <option>Uzbekistán</option>
                                <option>Vanuatu</option>
                                <option>Venezuela</option>
                                <option>Vietnam</option>
                                <option>Wake Island</option>
                                <option>Wallis y Futuna</option>
                                <option>West Bank</option>
                                <option>Yemen</option>
                                <option>Yibuti</option>
                                <option>Zambia</option>
                                <option>Zimbabue</option>
                          
                          </select>
                        
                        </div>



                        <div class="Form-group" >
                          
                          <label class="Form-label" for="apellido">Apellidos:*</label>
                          <input class="Form-widget" name="apellido" type="text" id="apellido" required>
                         
                        </div>

                        <div class="Form-group" >
                          
                          <label class="Form-label" for="nombres">Nombres:*</label>
                          <input class="Form-widget" name="nombres" type="text" id="nombres" required>
                         
                        </div>

                        <div class="Form-group Form-group--aligned" >
                          
                          <button class="Button Button--primary">Enviar</button>
                                                  
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