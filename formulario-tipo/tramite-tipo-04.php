<?php
  $title = 'Trámite tipo - Paso 4';
?>

<?php include "inc/head.php"; ?>

<?php include "inc/header.php"; ?>

<div class="Breadcrumb">
		<div class="Container">
				<ul>
						<li><a href="index.php">Formulario Tipo</a></li>
						<li>Paso 4</li>
				</ul>
		</div>
</div>

<main id="contenido" class="u-main">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-lg-size8of10">



                    <div class="Page ">

                        <h1 class="Page-title">Trámite tipo</h1>

                        <!-- Pasos -->

                        <div class="Steps--tipo">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>4</strong> de 6
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <p class="step-info">Agenda</p>

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

                                <span class="Steps-item is-active">
                                
                                    <div>
                                        <span class="Steps-number">4</span>
                                    </div>
                                    <div>Agenda</div>

                                </span>

                                <span class="Steps-item">
                                
                                    <div>
                                        <span class="Steps-number">5</span>
                                    </div>
                                    <div>Medios de pago</div>

                                </span>

                                <span class="Steps-item">
                                
                                <div>
                                    <span class="Steps-number">6</span>
                                </div>
                                <div>Confirmación</div>

                                </span>

                            </div>

                        </div>

                        <!-- fin pasos -->

                        <h2>Agenda</h2>

                        <div class="Alert--tipo Alert--dialog Alert--success" role="alert" aria-live="assertive">
                            <h4 class="Alert-title">Su reserva está confirmada</h4>
                            
                            <ul class="resumen-datos">
                                
                                <li>
                                   <span>Fecha:</span> <strong>9 de junio de 2023</strong>
                                </li>
                            
                                <li>
                                    <span>Hora:</span> <strong>10:30hs</strong>
                                </li>
                                <li>
                                    <span>Lugar:</span> <strong>Torre Ejecutiva Sur, Liniers 1324 piso 4 - Montevideo</strong>
                                </li>
                        
                            </ul>

                            <a href="#">Imprimir</a>
                        </div>

                        <form action="tramite-tipo-05.php" class="Form--tipo">

                        <fieldset>
                                    
                            <legend>

                                <span>Agendar reserva</span>
                                    
                            </legend>


                                <div class="Form-group" role="group"  aria-labelledby="grupo-turnos-disponibles">

                                    <div id="grupo-turnos-disponibles" class="Form-label" >Turnos disponibles:</div>

                                    <div class="Form-options Form-options--tags">

                                            <label for="110923-0930" class="Form-option">
                                                <input type="radio" id="110923-0930" name="seleccione-turno" >
                                                <span>Lunes 11 de Setiembre - 09:30 hs.</span>
                                            </label>

                                            <label for="120923-1030" class="Form-option">
                                                <input type="radio" id="120923-1030" name="seleccione-turno">
                                                <span>Martes 12 de Setiembre - 10:30 hs.</span>
                                            </label>

                                            <label for="130923-1100" class="Form-option">
                                                <input type="radio" id="130923-1100" name="seleccione-turno">
                                                <span>Miércoles 13 de Setiembre 11:00 hs.</span>
                                            </label>

                                           

                                    </div>

                                    <p class="Form-item-aligned"><a href="#!" id="show-calendar"  >Ver calendario completo</a></p>

                                </div>

                                


                                <div class="Form-group u-hide" role="group" id="calendario-agenda-2" aria-labelledby="label-calendario-2">
                        

                                    <div id="label-calendario-2" class="Form-label">Seleccione el día en el calendario: </div> 

                                        <div>

                                            <div class="calendar" id="calendario">

                                                <div class="calendar-header">
                                                    
                                                    <div class="previous-month">
                                                    <button class="nav-button" title="Mes anterior">
                                                        <img src="assets/icons/icon-prev.svg" alt="<"> 
                                                        <span>May.</span>
                                                    </button>
                                                    </div>


                                                    <div class="current-month">

                                                        <span>Junio 2023</span>

                                                    </div>

                                                    <div class="next-month">
                                                    <button class="nav-button" title="Mes siguiente">
                                                        <span>Jul.</span>
                                                        <img src="assets/icons/icon-next.svg" alt=">"> 
                                                    </button>
                                                    </div>
                                                
                                                </div>

                                                <div class="calendar-grid" role="table" aria-label="Calendario de fechas disponibles">

                                                <!-- <div id="label-tabla-calendario" class="u-hideVisually">Tabla calendario: </div> -->
                                                    
                                                    <div class="weekdays" role="row">
                                                    <div class="weekday" role="columnheader">LU</div>
                                                    <div class="weekday" role="columnheader">MA</div>
                                                    <div class="weekday" role="columnheader">MI</div>
                                                    <div class="weekday" role="columnheader">JU</div>
                                                    <div class="weekday" role="columnheader">VI</div>
                                                    <div class="weekday" role="columnheader">SA</div>
                                                    <div class="weekday" role="columnheader">DO</div>
                                                    </div>
                                                    
                                                    <div class="days">
                                                        <!-- Días del mes de junio de 2023 -->
                                                        <div class="day disabled"><span aria-disabled="true">29</span></div>
                                                        <div class="day disabled"><span aria-disabled="true">30</span></div>
                                                        <div class="day disabled"><span aria-disabled="true">31</span></div>
                                                        <div class="day"><span>1</span></div>
                                                        <div class="day"><span>2</span></div>
                                                        <div class="day"><span>3</span></div>
                                                        <div class="day"><span>4</span></div>
                                                        <div class="day"><span>5</span></div>
                                                        <div class="day"><span class="current">6</span></div>
                                                        <div class="day"><span>7</span></div>
                                                        <div class="day"><span>8</span></div>
                                                        <div class="day"><span class="marked">9</span></div>
                                                        <div class="day"><a href="">10</a></div>
                                                        <div class="day"><a href="">11</a></div>
                                                        <div class="day"><a href="">12</a></div>
                                                        <div class="day"><a href="">13</a></div>
                                                        <div class="day"><a href="">14</a></div>
                                                        <div class="day"><a href="">15</a></div>
                                                        <div class="day"><a href="">16</a></div>
                                                        <div class="day"><span>17</span></div>
                                                        <div class="day"><span>18</span></div>
                                                        <div class="day"><span>19</span></div>
                                                        <div class="day"><span>20</span></div>
                                                        <div class="day"><span>21</span></div>
                                                        <div class="day"><span>22</span></div>
                                                        <div class="day"><span>23</span></div>
                                                        <div class="day"><span>24</span></div>
                                                        <div class="day"><span>25</span></div>
                                                        <div class="day"><span>26</span></div>
                                                        <div class="day"><span>27</span></div>
                                                        <div class="day"><span>28</span></div>
                                                        <div class="day"><span>29</span></div>
                                                        <div class="day"><span>30</span></div>
                                                        <div class="day disabled"><span aria-disabled="true">1</span></div>
                                                        <div class="day disabled"><span aria-disabled="true">2</span></div>
                                                    </div>

                                                </div>

                                                <div class="calendar-today">

                                                    <span>9 de Junio de 2023</span>

                                                </div>

                                            </div>

                                        </div>


                                    </div>


                                    <div class="Form-group u-hide" id="horas-disponibles" >
                                        <label for="combo-1" class="Form-label">Horários disponibles:</label>
                                        <select name="combo-1" id="combo-1" class="Form-widget Form-widget--small">
                                            
                                            <option value="1">8:00 hs.</option>
                                            <option value="2">9:30 hs.</option>
                                            <option value="3">10:00 hs.</option>
                                        </select>
                                    </div>

                               


                        <div class="Form-group Form-group--aligned" >

                            <button type="submit" class="Button Button--primary">Confirmar reserva</button>

                        </div>


                    </fieldset>

                        <div class="Form-actions">

                            <div>
                                <a class="Button Button--link" href="tramite-tipo-03.php">Volver al paso anteror</a>
                            </div>

                            <div>
                                <button class="Button Button--primary">Ir a Medios de pago</button>
                            </div>
                                
                        </div>

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

<script>

   

$(document).ready(function() {


   // Turnos: le asigna el atributo checked al radio seleccionado


    $('input[name="seleccione-turno"]').on('change', function() {

        $('#calendario-agenda-2, #horas-disponibles').addClass('u-hide');
    
    });


    $('#show-calendar').on('click', function(event){

        event.preventDefault();
        $('input[name="seleccione-turno"]').prop('checked', false);
        $('#calendario-agenda-2, #horas-disponibles').toggleClass('u-hide');


    })



});

</script>

</body>
</html>

