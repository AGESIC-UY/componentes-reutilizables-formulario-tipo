<!-- Menú lateral -->

<div class="Page-nav Page-nav--mf">
	<div class="Page-navWrap">
		<button type="button" class="Button Button--filters u-md-hide" data-toggle="modal" data-target="#modalFilters"><span class="Icon Icon--filtros"></span> Filtros</button>
	</div>
</div>

<div class="Filters Filters--mf">  
	<div class="modal fade modal--filters" id="modalFilters" tabindex="-1" role="dialog" aria-labelledby="modalTitle">
		<div class="modal-dialog modal-sm u-md-my0" role="document">
			<div class="modal-content"> 
				<button type="button" class="close u-right u-p1 u-px2 u-md-hide" data-dismiss="modal" aria-label="Cerrar filtros"></button>
				<?php include 'inc/filtros/form-filtros.php'?>
			</div>
		</div>
	</div>
</div>	