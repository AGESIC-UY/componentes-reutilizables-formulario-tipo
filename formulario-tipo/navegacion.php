<?php
  $title = 'Navegación';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Navegación</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-md-size3of4 u-lg-size8of10">

                <div class="Page">

                    <h1 class="Page-title">Navegación</h1>

                    <h2>Pasos</h2>
                    <p>La línea de pasos se utiliza cuando el formulario es extenso y se requiere hacerlo en etapas, es decir, en varias pantallas.</p>

                    <div class="Steps--tipo">

                        <div class="progress-mobile">

                            <div class="progress-head">

                                <p class="progress-text">Paso <strong>2</strong> de 4</p>
                                <a href="#" class="step-modal-link">Mostrar detalle</a>

                            </div>

                            <ul class="progress-bar">
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li></li>
                                <li></li>
                            </ul>

                        </div>

                        <div class="overlay-mobile"> </div>

                            <div class="Steps-inner">

                            <h4>Detalle de pasos</h4>

                            <a href="#" class="Steps-item is-finished">
                                <div><span class="Steps-number">1</span></div>
                                <div>Nombre del paso completado</div>
                            </a>

                            <a href="#" class="Steps-item is-active">
                                <div><span class="Steps-number">2</span></div>
                                <div>Nombre del paso actual</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">3</span></div>
                                <div>Nombre del tercer paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">4</span></div>
                                <div>Nombre del cuarto paso</div>
                            </a>

                        </div>

                    </div>
                    <p>Si hay más de 4 pasos se utiliza la siguiente visualización, en la que el único nombre que se muestra es el del paso actual.</p>
                    <div class="Steps--tipo Steps--many">

                        <div class="progress-mobile">

                            <div class="progress-head">

                                <p class="progress-text">Paso <strong>2</strong> de 8</p>
                                <a href="#" class="step-modal-link">Mostrar detalle</a>

                            </div>

                            <ul class="progress-bar">
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>

                        </div>

                        <div class="overlay-mobile"></div>

                        <div class="Steps-inner">

                            <a href="#" class="Steps-item is-finished">
                                <div><span class="Steps-number">1</span></div>
                                <div>Nombre del paso completado</div>
                            </a>

                            <a href="#" class="Steps-item is-active">
                                <div><span class="Steps-number">2</span></div>
                                <div>Nombre del paso actual</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">3</span></div>
                                <div>Nombre del tercer paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">4</span></div>
                                <div>Nombre del cuarto paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">5</span></div>
                                <div>Nombre del quinto paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">6</span></div>
                                <div>Nombre del sexto paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">7</span></div>
                                <div>Nombre del séptimo paso</div>
                            </a>

                            <a href="#" class="Steps-item">
                                <div><span class="Steps-number">8</span></div>
                                <div>Nombre del octavo paso</div>
                            </a>

                        </div>

                    </div>
                    
                    <p>La línea de pasos va cambiando de aspecto según su estado.</p>
                    <div class="Steps--tipo Steps--many">

                        <div class="progress-mobile">

                            <div class="progress-head">

                                <p class="progress-text">Paso <strong>8</strong> de 8</p>
                                <a href="#" class="step-modal-link">Mostrar detalle</a>

                            </div>

                            <ul class="progress-bar">
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                                <li class="progress-dot progress-dot--active"></li>
                            </ul>

                        </div>

                        <div class="overlay-mobile"></div>

                        <div class="Steps-inner">

                            <a href="#" class="Steps-item is-finished">
                                <div><span class="Steps-number">1</span></div>
                                <div>Nombre del paso completado</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number " >2</span></div>
                                <div>Nombre del paso actual</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number">3</span></div>
                                <div>Nombre del tercer paso</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number">4</span></div>
                                <div>Nombre del cuarto paso</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number">5</span></div>
                                <div>Nombre del quinto paso</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number">6</span></div>
                                <div>Nombre del sexto paso</div>
                            </a>

                            <a href="#" class="Steps-item  is-finished">
                                <div><span class="Steps-number">7</span></div>
                                <div>Nombre del séptimo paso</div>
                            </a>

                            <a href="#" class="Steps-item  is-active">
                                <div><span class="Steps-number">8</span></div>
                                <div>Nombre del octavo paso</div>
                            </a>

                        </div>

                    </div>

                    <hr />

                    <h2 class="u-mb3">Enlaces</h2>
                    <p>Existen dos tipos de enlace, azules y negros. Se recomienda el uso del enlace azul, que es el estándar. El enlace negro es solo para vínculos que se requiera que tengan menor jerarquía visual. Los enlaces que conducen a un sitio externo, llevan un ícono que indica esta acción. </p>

                    <div class="u-p1 u-inlineBlock">
                        <a href="#">Enlace</a>
                    </div>

                    <div class="u-p1 u-inlineBlock">
                        <a href="#" class="u-outerLink">Enlace externo<span class="u-hideVisually">Enlace externo</span></a>
                    </div>

                    <div class="u-p1 u-inlineBlock">
                        <a href="#" class="u-alternativeLink u-textBlack">Enlace alternativo</a>
                    </div>

                    <div class="u-p1 u-inlineBlock">
                        <a href="#" class="u-alternativeLink u-textBlack u-outerLink">Enlace externo alternativo<span class="u-hideVisually">Enlace externo</span></a>
                    </div>

                    <hr />

                    <h2 class="u-mb3">Botones</h2>

                    <h3 class="u-mb3"><code>.Button</code> aplicado a distintos elementos</h3>
                    <p>Cómo se transforman distintos elementos con estilo de botón.</p>

                    <div class="Form--tipo">

                        <div class="Button" tabindex="0" role="button">Button div</div>
                        <span class="Button" tabindex="0" role="button">Button span</span>
                        <a href="#" class="Button">Button link</a>
                        <button class="Button">Button button</button>

                        <div>
                            <div class="Button u-outerLink" tabindex="0" role="button">Button div</div>
                            <span class="Button u-outerLink" tabindex="0" role="button">Button span</span>
                            <a href="#" class="Button u-outerLink">Button link<span class="u-hideVisually">Enlace externo</span></a>
                            <button class="Button u-outerLink">Button button<span class="u-hideVisually">Enlace externo</span></button>
                        </div>

                    </div>

                    <h3 class="u-mt6 u-mb3">Modificadores de <code>.Button</code></h3>
                    <p>Los botones se utilizan para identificar las acciones principales de un formulario. Pueden contener íconos (impresión y link fuera del sitio) o estar en estado deshabilitado.</p>
                    <div class="Form--tipo">

                        <div>

                            <h4>Primarios</h4>
                            <p>El botón primario se utiliza siempre para la acción principal.</p> 
                            <button class="Button Button--primary">Botón primario</button>
                            <button class="Button Button--primary"><span class="Icon Icon--print-white"></span>Botón primario c/i</button>
                            <button class="Button Button--primary u-outerLink">Botón primario <span class="u-hideVisually">Enlace externo</span></button>
                            <button class="Button Button--primary is-disabled" aria-disabled="true">Botón primario deshabilitado</button>
                            <button class="Button Button--primary is-disabled" aria-disabled="true"><span class="Icon Icon--print-disabled"></span>Botón primario deshabilitado c/i</button>

                        </div>

                        <div class="u-mt3">

                            <h4>Secundarios</h4>
                            <p>Los botones secundarios se utilizan para acciones de menor relevancia o de segundo orden. Hay cuatro variantes que pueden utilizarse según la relevancia de la acción:</p>
                            <h5>Amarillo</h5>
                            <button class="Button Button--secondary">Botón secundario</button>
                            <button class="Button Button--secondary"><span class="Icon Icon--print"></span>Botón secundario c/i</button>
                            <button class="Button Button--secondary u-outerLink">Botón secundario<span class="u-hideVisually">Enlace externo</span></button>
                            <button class="Button Button--secondary is-disabled" aria-disabled="true">Botón secundario deshabilitado</button>
                            <button class="Button Button--secondary is-disabled" aria-disabled="true"><span class="Icon Icon--print-disabled"></span>Botón secundario deshabilitado c/i</button>

                        </div>

                        <div class="u-mt3">

                            <h5>Inverso</h5>
                            
                            <button class="Button Button--inverse">Botón inverso</button>
                            <button class="Button Button--inverse"><span class="Icon Icon--print-primary"></span>Botón inverso c/o</button>
                            <button class="Button Button--inverse u-outerLink">Botón inverso<span class="u-hideVisually">Enlace externo</span></button>
                            <button class="Button Button--inverse is-disabled" aria-disabled="true">Botón inverso deshabilitado</button>
                            <button class="Button Button--inverse is-disabled" aria-disabled="true"><span class="Icon Icon--print-disabled"></span>Botón inverso deshabilitado c/i</button>

                        </div>
                    <div class="u-mt3">

                            <h5>Botón tipo enlace simple</h5>
                            <button class="Button Button--link-simple">Botón enlace simple</button>
                            <button class="Button Button--link-simple"><span class="Icon Icon--print-primary"></span>Botón enlace simple c/i</button>
                            <button class="Button Button--link-simple u-outerLink">Botón enlace simple<span class="u-hideVisually">Enlace externo</span></button>
                            <button class="Button Button--link-simple is-disabled" aria-disabled="true">Botón enlace simple deshabilitado</button>
                            <button class="Button Button--link-simple is-disabled" aria-disabled="true"><span class="Icon Icon--print-disabled"></span>Botón enlace deshabilitado c/i<span class="u-hideVisually">Enlace externo</span></button>

                        </div>
                        <div class="u-mt3">

                            <h5>Botón tipo enlace con fondo</h5>
                            <button class="Button Button--link">Botón enlace</button>
                            <button class="Button Button--link"><span class="Icon Icon--print-primary"></span>Botón enlace c/i</button>
                            <button class="Button Button--link u-outerLink">Botón enlace<span class="u-hideVisually">Enlace externo</span></button>
                            <button class="Button Button--link is-disabled" aria-disabled="true">Botón enlace deshabilitado</button>
                            <button class="Button Button--link is-disabled" aria-disabled="true"><span class="Icon Icon--print-disabled"></span>Botón enlace deshabilitado c/i<span class="u-hideVisually">Enlace externo</span></button>

                        </div>

                       

                    </div>

                    <hr />

                    <h2 class="u-mb3">Paginación</h2>
                    <p>La paginación se usa para la presentación de datos, por ejemplo, una tabla.</p>

                    <div class="Pagination--tipo">
                        <div class="Pagination-text">Mostrando 5 de 9 resultados</div>
                            <ul class="Pagination-links">
                                <li class="Pagination-prev"><a href="#">Anterior</a></li>
                                <li class="is-selected"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="Pagination-next"><a href="#">Siguiente</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

<?php include "inc/footer.php"; ?>

<?php include "inc/foot.php"; ?>