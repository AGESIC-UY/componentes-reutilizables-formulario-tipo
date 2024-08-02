<?php
  $title = 'Bloques - Backend Registros';
?>

<?php include "inc/head.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li><a href="bloques.php">Bloques</a></li>
						<li>Backend Registros</li>
				</ul>
		</div>
</div>

<main class="u-main"  id="contenido">

    <div class="Container">

        <div class="Page">

            <div class="Page-body">

                <div class="Page-title--wrap Form--tipo ">

                    <h1 class="Page-title u-h2 link-tool-contextual">
                        <a href="" class="link-tool-contextual-menu u-textColorInherit u-hoverHideUnderline">Todos los registros <span class="Icon Icon--right Icon--dropdown"></span></a>
                        <div class="tool-contextual-menu">
                            <div class="tool-contextual-menu-wrap">
                                <a href="#">Todos los registros</a>
                                <hr />
                                <a href="#"><span class="Status Status--rojo"></span>Vencidos</a>
                                <a href="#"><span class="Status Status--amarillo"></span>Vencimiento próximo</a>
                                <a href="#"><span class="Status Status--verde"></span>Vigentes</a>
                                <hr />
                                <a href="#">Borradores</a>
                                <a href="#">Publicados</a>
                                <a href="#">En edición</a>
                                <a href="#">En apobación</a>
                                <a href="#">Con observaciones</a>
                                <a href="#">Eliminados</a>
                            </div>
                        </div>
                    </h1>

                    <div class="Page-title--controls">
                        <button class="Button Button--primary">Nuevo</button>
                    </div>

                </div>

                <div class="Page-info Form--tipo">

                    <div class="Bar">

                        <div class="Bar-cell">
                            <button class="Button Button--Icon"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span class="u-hideVisually">Publicar</span></button>
                            <button class="Button Button--Icon"><span class="Icon Icon--eye" title="Ver" alt="Ver"></span><span class="u-hideVisually">Ver</span></button>
                            <button class="Button Button--Icon"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span class="u-hideVisually">Editar</span></button>
                            <button class="Button Button--Icon"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span class="u-hideVisually">Devolver al editor</span></button>
                            <button class="Button Button--Icon"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span class="u-hideVisually">Borrar</span></button>

                            <button class="Button u-ml0 u-xs-ml4 u-mt2 u-xs-mt0">Exportar .csv</button>
                            <button class="Button Button--Icon link-tool-contextual-menu  u-mt2 u-xs-mt0">
                                <span class="Icon Icon--dropdown" title="formatos" alt="formatos">
                                    <span class="u-hideVisually">Formatos</span>
                                </span>
                            </button>
                            <div class="tool-contextual-menu">
                                <div class="tool-contextual-menu-wrap">
                                    <a href="#">Exportar .xls</a>
                                    <a href="#">Exportar .pdf</a>
                                    <a href="#">Exportar .rdf</a>
                                    <a href="#">Exportar .json</a>
                                </div>
                            </div>

                        </div>

                        <div class="Bar-cell u-textRight">
                           
                        </div>

                    </div>

                </div>


                <div class="Table-wrapper">

                    <form class="Form--tipo">

                        <table class="Table--tipo Table--striped Table--responsive">

                            <thead>
                                <tr>
                                    <th class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_all" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_all" name="opcion_table_check_all" />
                                                <span class="u-hideVisually">Seleccionar todos</span>
                                            </label>
                                        </div>
                                    </th>
                                    <th><a href="#">Id <span class="Icon Icon--keyboard-arrow-down" title="Orden descendente" alt="Orden descendente"></span></a></th>
                                    <th width="45%"><a href="#">Nombre <span class="Icon Icon--keyboard-arrow-down" title="Orden descendente" alt="Orden descendente"></span></a></th>
                                    <th><a href="#">Estado <span class="Icon Icon--keyboard-arrow-down" title="Orden descendente" alt="Orden descendente"></span></a></th>
                                    <th><a href="#">Área <span class="Icon Icon--keyboard-arrow-down" title="Orden descendente" alt="Orden descendente"></span></a></th>
                                    <th><a href="#">Vence <span class="Icon Icon--keyboard-arrow-down" title="Orden descendente" alt="Orden descendente"></span></a></th>
                                    <th><span class="u-hideVisually">Acciones</span></th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_1" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_1" name="opcion_table_check_1" />
                                                <span class="u-hideVisually">Seleccionar fila 1</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Nombre de un registro para ejemplificar el listado en la Bandeja de Entrada Tipo</a></td>
                                    <td>Borrador</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status Status--verde"></span>
                                            <span>En 2 meses <br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table-row-highlight">
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_2" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_2" name="opcion_table_check_2" />
                                                <span class="u-hideVisually">Seleccionar fila 2</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Nombre de un registro para ejemplificar el listado en la Bandeja de Entrada Tipo</a></td>
                                    <td>En edición</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status Status--rojo"></span>
                                            <span>En 2 meses <br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_3" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_3" name="opcion_table_check_3" />
                                                <span class="u-hideVisually">Seleccionar fila 3</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Nombre de un registro para ejemplificar el listado en la Bandeja de Entrada Tipo</a></td>
                                    <td>Publicado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status Status--amarillo"></span>
                                            <span>En 2 meses <br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="has-sub-row">
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_4" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_4" name="opcion_table_check_4" />
                                                <span class="u-hideVisually">Seleccionar fila 4</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit sagittis</a></td>
                                    <td>Borrador</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status"></span>
                                            <span>Creado el<br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="sub-row">
                                    <td></td>
                                    <td>1000</td>
                                    <td><a href="">Sub registro Lorem ipsum dolor, sit amet consectetur.</a></td>
                                    <td>Eliminado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status"></span>
                                            <span>Creado el<br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="sub-row">
                                    <td></td>
                                    <td>1000</td>
                                    <td><a href="">Sub registro Lorem ipsum dolor, sit amet consectetur.</a></td>
                                    <td>Eliminado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status"></span>
                                            <span>Creado el<br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr class="has-sub-row">
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_5" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_5" name="opcion_table_check_5" />
                                                <span class="u-hideVisually">Seleccionar fila 5</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit sagittis</a></td>
                                    <td>Eliminado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status"></span>
                                            <span>Creado el<br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="sub-row">
                                    <td></td>
                                    <td>1002</td>
                                    <td><a href="">Sub registro Lorem ipsum dolor, sit amet consectetur.</a></td>
                                    <td>Eliminado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status"></span>
                                            <span>Creado el <br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="Form-group">
                                        <div class="Form-options">
                                            <label for="opcion_table_check_6" class="Form-option u-textCenter u-sm-textLeft">
                                                <input type="checkbox" id="opcion_table_check_6" name="opcion_table_check_6" />
                                                <span class="u-hideVisually">Seleccionar fila 6</span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>2768</td>
                                    <td><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit sagittis</a></td>
                                    <td>Publicado</td>
                                    <td>XXXX</td>
                                    <td>
                                        <span class="u-flex">
                                            <span class="Status Status--verde"></span>
                                            <span>En 2 meses <br /><span class="u-textSmall">00/00/0000</span></span>
                                        </span>
                                    </td>
                                    <td class="u-nowrap">
                                        <button class="Button Button--small Button--Icon">
                                            <span class="Icon Icon--view-window" title="Ver versión publicada" alt="Ver versión publicada"></span>
                                            <span class="u-hideVisually">Ver versión publicada</span>
                                        </button>
                                        <button class="Button Button--small link-tool-contextual-menu">
                                            Más acciones<span class="Icon Icon--right Icon--dropdown"></span>
                                        </button>
                                        <div class="tool-contextual-menu">
                                            <div class="tool-contextual-menu-wrap">
                                                <a href="#"><span class="Icon Icon--publish" title="Publicar" alt="Publicar"></span><span>Publicar</span></a>
                                                <a href="#"><span class="Icon Icon--edit" title="Editar" alt="Editar"></span><span>Editar</span></a>
                                                <a href="#"><span class="Icon Icon--editor-back" title="Devolver al editor" alt="Devolver al editor"></span><span>Devolver al editor</span></a>
                                                <a href="#"><span class="Icon Icon--delete" title="Borrar" alt="Borrar"></span><span>Borrar</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </form>

                    <div class="Pagination--tipo">
                        <div class="Pagination-text">
                            <label for="pager">Mostrando</label>
                            <select name="pager" id="pager">
                                <option value="1">50</option>
                                <option value="2">100</option>
                                <option value="3">200</option>
                            </select>
                            de 120 resultados</div>
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

<script src="js/vendor/jquery.js"></script>
<script src="js/portal-unificado.js"></script>
<script src="js/custom.js"></script>

<script>

$(function() {
    $('.Table--tipo.Table--striped .sub-row').before('<tr class="u-hide" style="display:none"></tr>');
});

</script>

</body>
</html>
