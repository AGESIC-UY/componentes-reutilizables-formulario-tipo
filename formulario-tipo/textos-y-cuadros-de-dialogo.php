<?php
  $title = 'Presentación de datos, cuadros de diálogo y tablas';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Presentación de datos, cuadros de diálogo y tablas</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">

                <div class="Page">

                    <h1 class="Page-title">Presentación de datos, cuadros de diálogo y tablas</h1>

                    <h2 class="u-mb3 u-mt6">Encabezados y textos</h2>

                    <h1>h1. Encabezado de primer nivel</h1>
                    <h2>h2. Encabezado de segundo nivel</h2>
                    <h3>h3. Encabezado de tercer nivel</h3>
                    <h4>h4. Encabezado de cuarto nivel</h4>
                    <h5>h5. Encabezado de quinto nivel</h5>
                    <h6>h6. Encabezado de sexto nivel</h6>

                    <h2 class="u-mb3 u-mt6">Párrafos (<code>strong, em, mark, a</code>)</h2>

                    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit. Delectus nihil <em>nesciunt saepe perferendis</em> repellat ratione aliquam <a href="#" class="u-outerLink">expedita aliquid deleniti<span class="u-hideVisually">Enlace externo</span></a> quasi animi laboriosam, molestias architecto <mark>recusandae dolor</mark> perspiciatis accusamus earum minima.</p>
                    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit. Delectus nihil <em>nesciunt saepe perferendis</em> repellat ratione aliquam <a href="#">expedita aliquid deleniti</a> quasi animi laboriosam, molestias architecto <mark>recusandae dolor</mark> perspiciatis accusamus earum minima.</p>

                    <h2 class="u-mb3 u-mt6">Listas con viñeta</h2>

                    <ul class="List-text">
                      <li>Lorem ipsum dolor sit amet.</li>
                      <li>Esse necessitatibus, adipisci saepe laboriosam.
                        <ul>
                          <li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.</li>
                          <li>Assumenda cumque tenetur quidem.</li>
                          <li>Corrupti enim rem voluptate.</li>
                        </ul>
                      </li>
                      <li>Neque tempore est, natus ad!</li>
                      <li>Ex labore officiis, tempore nemo!
                        <ol>
                           <li>Lorem ipsum dolor sit.</li>
                           <li>Assumenda cumque tenetur quidem.</li>
                           <li>Corrupti enim rem voluptate.</li>
                        </ol>
                      </li>
                      <li>Vitae libero, quae doloribus dignissimos?</li>
                    </ul>

                    <h2 class="u-mb3 u-mt6">Listas numeradas</h2>

                    <ol class="List-text">
                      <li>Lorem ipsum dolor sit amet.</li>
                      <li>Esse necessitatibus, adipisci saepe laboriosam.
                        <ol>
                          <li>Lorem ipsum dolor sit.</li>
                          <li>Assumenda cumque tenetur quidem.</li>
                          <li>Corrupti enim rem voluptate.</li>
                        </ol>
                      </li>
                      <li>Neque tempore est, natus ad!
                        <ul>
                          <li>Lorem ipsum dolor sit. Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.Lorem ipsum dolor sit.</li>
                          <li>Assumenda cumque tenetur quidem.</li>
                          <li>Corrupti enim rem voluptate.</li>
                        </ul>
                      </li>
                      <li>Ex labore officiis, tempore nemo!</li>
                      <li>Vitae libero, quae doloribus dignissimos?</li>
                    </ol>

                    

                    <h2 class="u-mb2 u-mt6">Cuadros de diálogo</h2>
										<p>
											<a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones/guia-para-creacion-formularios-digitales/guia-para-creacion-4" class="u-outerLink">Guía para la creación de formularios digitales: Manejo de errores y mensajes<span class="u-hideVisually">Enlace externo</span></a>
										</p>

                    <div class="Alert--tipo Alert--dialog Alert--success" role="alert" aria-live="assertive">
                        <h4 class="Alert-title">Título de mensaje de validación exitosa</h4>
                        <p>Mensaje de confirmación de que se ha realizado una acción en forma correcta.</p>
                        <a href="#">Enlace de acción</a>
                    </div>

                    <div class="Alert--tipo Alert--dialog Alert--warning" role="alert" aria-live="assertive">
                        <h4 class="Alert-title">Título de mensaje de advertencia</h4>
                        <p>Mensaje de aviso ante una situación determinada.</p>
                        <a href="#">Enlace de acción</a>
                    </div>

                    <div class="Alert--tipo Alert--dialog Alert--danger" role="alert" aria-live="assertive">
                        <h4 class="Alert-title">Título de mensaje de error</h4>
                        <p>Mensaje que indica que se ha producido un error.</p>
                        <a href="#">Enlace de acción</a>
                    </div>

                    <div class="Alert--tipo Alert--dialog Alert--info" role="alert" aria-live="assertive">
                        <h4 class="Alert-title">Título de mensaje de notificación</h4>
                        <p>Mensaje que notifica de alguna acción.</p>
                        <a href="#">Enlace de acción</a>
                    </div>

                    <div class="Alert--tipo Alert--dialog" role="alert" aria-live="assertive">
                        <h4 class="Alert-title">Título de mensaje de información</h4>
                        <p>Mensaje que brinda información complementaria.</p>
                        <a href="#">Enlace de acción</a>
                    </div>

                    <h2 class="u-mb3 u-mt6">Cuadro de diálogo con listado</h2>

                    <div class="Alert--tipo Alert--dialog Alert--danger" role="alert" aria-live="assertive">

                        <h4 class="Alert-title">Hay <strong>3 errores</strong> en el formulario</h4>
                        <ol>
                            <li><a href="#">Debe ingresar una fecha</a></li>
                            <li><a href="#">Lorem ipsum ad his scripta</a></li>
                            <li><a href="#">Blandit incorrupte quaerendum in quo</a></li>
                        </ol>

                    </div>

                    <div class="Alert--tipo Alert--dialog Alert--warning" role="alert" aria-live="assertive">
                        
                        <h4 class="Alert-title">Para continuar el trámite es necesario:</h4>
                        <ol>
                            <li>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in</li>
                            <li>Lorem ipsum ad his scripta blandit partiendo, eum fastidii accumsan euripidis in</li>
                        </ol>

                        <p>Se ha enviado una confirmación a correo@correo.uy</p>
                        <a href="#">Imprimir formulario</a>

                    </div>

                    <h2 class="u-mb3 u-mt6">Notificaciones</h2>
                    <p>Para mensajes de relevancia relativa, que no requieren acciones por parte del usuario.</p>

                    <div class="Alert--tipo" role="alert">
                        <strong>simple:</strong> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, libero.
                    </div>

                    <div class="Alert--tipo Alert--warning" role="alert">
                        <strong>warning:</strong> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, libero.
                    </div>

                    <div class="Alert--tipo Alert--info" role="alert">
                        <strong>info:</strong> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, libero.
                    </div>

                    <div class="Alert--tipo Alert--success" role="alert">
                        <strong>success:</strong> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, libero.
                    </div>

                    <div class="Alert--tipo Alert--danger" role="alert">
                        <strong>danger:</strong> lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, libero.
                    </div>

                    <h2 class="u-mb2 u-mt6">Tablas</h2>
										<p class="u-mb3">
											<a href="https://www.gub.uy/agencia-gobierno-electronico-sociedad-informacion-conocimiento/comunicacion/publicaciones/guia-para-creacion-formularios-digitales/componentes-del-formulario-11" class="u-outerLink">Guía para la creación de formularios digitales: Tablas<span class="u-hideVisually">Enlace externo</span></a>
										</p>

                    <div class="Table-wrapper">

                        <table class="Table--tipo Table--striped Table--responsive">

                            <caption>Tabla 1. Título de tabla agregado con la etiqueta <code>caption</code></caption>

                            <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th>Temática</th>
                                    <th>Disertantes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">08:30</td>
                                    <td data-title="Temática">Inscripción</td>
                                    <td data-title="Disertantes"></td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">09:00</td>
                                    <td data-title="Temática">Apertura Autoridades de Gobierno</td>
                                    <td data-title="Disertantes"></td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">09:30</td>
                                    <td data-title="Temática">Gobierno Digital en Uy: Avances y Desafíos </td>
                                    <td data-title="Disertantes">Juan Pérez</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">10:00</td>
                                    <td data-title="Temática">Corte</td>
                                    <td data-title="Disertantes"></td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">10:30</td>
                                    <td data-title="Temática">Transformación digital para un desarrollo sostenible</td>
                                    <td data-title="Disertantes">Alicia Bárcenas, Fabricio Hochschild</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">11:30</td>
                                    <td data-title="Temática">Cooperación Internacional en la Era Digital</td>
                                    <td data-title="Disertantes">Ministros del D9</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">12:30</td>
                                    <td data-title="Temática">Almuerzo</td>
                                    <td data-title="Disertantes"></td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">14:00</td>
                                    <td data-title="Temática">La próxima Frontera para los Servicios de Gobierno</td>
                                    <td data-title="Disertantes">Panel de CIOs del D9</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">15:00</td>
                                    <td data-title="Temática">Transformación Digital en la región</td>
                                    <td data-title="Disertantes">Panel de CIOs. Regionales</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">16:30</td>
                                    <td data-title="Temática">Impacto actual y futuro de la transformación digital</td>
                                    <td data-title="Disertantes">Barbara Ubaldi, Vincenzo Aquaro, BID tbc</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">17:30</td>
                                    <td data-title="Temática">Principios Generales para la era Digital</td>
                                    <td data-title="Disertantes">Web Foundation Keynote</td>
                                </tr>
                                <tr>
                                    <td data-title="Hora" class="u-textRight">18:00</td>
                                    <td data-title="Temática">Relatoría y cierre</td>
                                    <td data-title="Disertantes"></td>
                                </tr>
                            </tbody>

                        </table>

                    </div>


                    <div class="Table-wrapper">

                        <table class="Table--tipo Table--striped Table--responsive">

                            <caption>Tabla 3. Tabla con íconos y menú contextual</caption>

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
                                    <td class="table-actions">

                                        <button aria-label="Eliminar"><span class="Icon Icon--delete"></span></button>
                                        <button aria-label="Menú contextual" class="link-tool-contextual-menu"><span class="Icon Icon--dropmenu"><span class="u-hideVisually">Acciones para Resumen de activo de la empresa del mes de agosto</span></span></button>

                                        <!-- menú contextual -->

                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#">Reenviar <span class="u-hideVisually">Reenviar Resumen de activo de la empresa del mes de agosto</span></a>
                                                <a href="#">Responder <span class="u-hideVisually">Responder Resumen de activo de la empresa del mes de agosto</span></a>
                                                <a href="#">Eliminar <span class="u-hideVisually">Elminar Resumen de activo de la empresa del mes de agosto</span></a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>

                                <tr>

                                    <td>OPP</td>
                                    <td><a href="">Informe anual 2020</a></td>
                                    <td>12/06/23 - 08:30</td>
                                    <td class="table-actions">

                                        <button aria-label="Eliminar"><span class="Icon Icon--delete"></span></button>
                                        <button aria-label="Menú contextual" class="link-tool-contextual-menu" ><span class="Icon Icon--dropmenu"><span class="u-hideVisually">Acciones para Reenviar Informe anual 2020</span></span></button>

                                        <!-- menú contextual -->

                                        <div class="tool-contextual-menu">

                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#">Reenviar <span class="u-hideVisually">Reenviar Informe anual 2020</span></a>
                                                <a href="#">Responder <span class="u-hideVisually">Responder Informe anual 2020</span></a>
                                                <a href="#">Eliminar <span class="u-hideVisually">Elminar Informe anual 2020</span></a>
                                            </div>

                                        </div>

                                    </td>

                                </tr>

                                <tr>

                                    <td>Juan Gonzáles</td>
                                    <td><a href="">Gestión de trámites internos</a></td>
                                    <td>12/06/23 - 08:30</td>
                                    <td class="table-actions">
                                        <button aria-label="Eliminar"><span class="Icon Icon--delete"></span></button>
                                        <button aria-label="Menú contextual" class="link-tool-contextual-menu"><span class="Icon Icon--dropmenu"><span class="u-hideVisually">Acciones para Reenviar Gestión de trámites internos</span></span></button>

                                        <!-- menú contextual -->

                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#">Reenviar <span class="u-hideVisually">Reenviar Gestión de trámites internos</span></a>
                                                <a href="#">Responder <span class="u-hideVisually">Responder Gestión de trámites internos</span></a>
                                                <a href="#">Eliminar <span class="u-hideVisually">Elminar Gestión de trámites internos</span></a>
                                            </div>
                                        </div>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    <div class="Table-wrapper">

                        <table class="Table--tipo Table--striped Table--responsive">

                            <caption>Tabla 4. Tabla con botones</caption>

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
                                    <td class="table-buttons">                                        
                                        <button class="Button Button--primary Button--small"><span class="Icon Icon--edit-white"></span>Editar</button>
                                        <button class="Button Button--inverse Button--small"><span class="Icon Icon--delete-white"></span>Eliminar</button>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>OPP</td>
                                    <td><a href="">Informe anual 2020</a></td>
                                    <td>12/06/23 - 08:30</td>
                                    <td class="table-buttons">                                        
                                        <button class="Button Button--primary Button--small"><span class="Icon Icon--edit-white"></span>Editar</button>
                                        <button class="Button Button--inverse Button--small"><span class="Icon Icon--delete-white"></span>Eliminar</button>
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>Juan Gonzáles</td>
                                    <td><a href="">Gestión de trámites internos</a></td>
                                    <td>12/06/23 - 08:30</td>
                                    <td class="table-buttons">
                                    <button class="Button Button--primary Button--small"><span class="Icon Icon--edit-white"></span>Editar</button>
                                    <button class="Button Button--inverse Button--small"><span class="Icon Icon--delete-white"></span>Eliminar</button>
                                    
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                    <div class="Table-wrapper">

                        <table class="Table--tipo Table--striped Table--responsive">

                            <caption>Tabla 5. Tabla con boton y menú contextual</caption>

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
                                    <td class="table-buttons">
                                        <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar <span class="u-hideVisually">Elminar Resumen de activos de la empresa del mes de agosto</span></button>
                                        <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span> <span class="u-hideVisually">En Resumen de activos de la empresa del mes de agosto</span></button>

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
                                    <td>OPP</td>
                                    <td><a href="">Informe anual 2020</a></td>
                                    <td>12/06/23 - 08:30</td>
                                    <td class="table-buttons">
                                        <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar </button>
                                        <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span> <span class="u-hideVisually">En Informe anual 2020</span></button>

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
                                    <td class="table-buttons">
                                        <button class="Button Button--primary Button--small"><span class="Icon Icon--delete-white"></span>Eliminar <span class="u-hideVisually">Elminar Gestión de trámites internos</span></button>
                                        <button class="Button Button--inverse Button--small link-tool-contextual-menu">Más acciones<span class="Icon Icon--right Icon--dropdown-white"></span> <span class="u-hideVisually">En Elminar Gestión de trámites internos</span></button>

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
									
									
									<h2 class="u-mb4 u-mt6">Íconos</h2>

                    <p>Los íconos se encuentran en la carpeta <code>/assets/icons</code> y en dos formatos: <code>svg</code> y <code>png</code>.</p>

                    <ul style="display: flex; flex-wrap: wrap;" class="u-listReset">
                      <li class="u-p2"><span class="Icon Icon--search"></span></li>
                      <li class="u-p2"><span class="Icon Icon--share"></span></li>
                      <li class="u-p2"><span class="Icon Icon--print"></span></li>
                      <li class="u-p2"><span class="Icon Icon--download"></span></li>
                      <li class="u-p2"><span class="Icon Icon--phone"></span></li>
                      <li class="u-p2"><span class="Icon Icon--delete"></span></li>
                      <li class="u-p2"><span class="Icon Icon--edit"></span></li>
                      <li class="u-p2"><span class="Icon Icon--dropmenu"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--facebook"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--twitter"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--youtube"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--google"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--instagram"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--vera"></span></li>
                      <li class="u-p2 u-bgBlue"><span class="Icon Icon--rss"></span></li>
                    </ul>

									

                </div>

            </div>

        </div>

    </div>

</main>

<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>