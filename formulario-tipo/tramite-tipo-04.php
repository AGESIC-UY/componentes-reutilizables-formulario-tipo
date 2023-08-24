<?php
  $title = 'Trámite tipo - Paso 4';
?>

<?php include "inc/head.php"; ?>


<main id="contenido">

    <div class="Container">

        <div class="Grid">

            <div class="Grid-item Grid-item--center u-mt5 u-md5 u-lg-size8of10">

                    <a href="index.php">Inicio</a>

                    <div class="Page Page--formulario">

                        <h1 class="Page-title">Trámite tipo</h1>

                        <!-- Pasos -->

                        <div class="Steps">

                            <div class="progress-mobile">
                                
                                <div class="progress-head">

                                    <p class="progress-text">

                                        Paso <strong>4</strong> de 5
                                    </p>

                                    <a href="#" class="step-modal-link">Mostrar detalle</a>



                                </div>
                                
                                <ul class="progress-bar">
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
                                    <li class="progress-dot progress-dot--active"></li>
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

                                <a href="#" class="Steps-item is-active">
                                
                                    <div>
                                        <span class="Steps-number">4</span>
                                    </div>
                                    <div>Agenda</div>

                                </a>

                                <a href="#" class="Steps-item">
                                
                                    <div>
                                        <span class="Steps-number">5</span>
                                    </div>
                                    <div>Medios de pago</div>

                                </a>

                            </div>

                        </div>

                        <!-- fin pasos -->

                        <h2>Agenda</h2>

                        <div class="Alert Alert--dialog Alert--success" role="alert" aria-live="assertive">
                            <h4 class="Alert-title">Su reserva está confirmada</h4>
                            
                            <ul class="resumen-datos">
                                
                                <li>
                                   <span>Fecha:</span> <strong>9 de junio de 2023</strong>
                                </li>
                            
                                <li>
                                    <span>Fecha:</span> <strong>Fecha:10:30hs</strong>
                                </li>
                                <li>
                                    <span>Fecha:</span> <strong>Torre Ejecutiva Sur, Liniers 1324 piso 4 - Montevideo</strong>
                                </li>
                        
                            </ul>

                            <a href="#">Imprimir</a>
                        </div>

                        <form action="tramite-tipo-05.php" class="Form">

                            <fieldset class="u-mt5">
                                    
                                    <legend>

                                        <span>Selecciona una reserva</span>
                                    
                                    </legend>




                                    <div class="Form-group" role="group" aria-labelledby="label-calendario">
                        

                        <div id="label-calendario"  class="Form-label">Selecciona el día: </div> 

               

                         <div>

                        <div class="calendar" id="calendario">

                      <div class="calendar-header">
                        
                        <div class="previous-month">
                          <button class="nav-button" title="Mes anterior">
                            <img src="assets/icons/icon-prev.svg"  alt="<" > 
                            <span>May.</span>
                          </button>
                        </div>


                        <div class="current-month">

                            <span>Junio 2023</span>

                        </div>

                        <div class="next-month">
                          <button class="nav-button" title="Mes siguiente">
                              <span>Jul.</span>
                              <img src="assets/icons/icon-next.svg" alt=">" > 
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


                            <fieldset>

                                    <legend>

                                        Horarios disponibles

                                    </legend>

                                    <div class="Form-group" role="group"  aria-labelledby="grupo-radios-horas-manana" >
                                    
                                            <div id="grupo-radios-horas-manana" class="Form-label" >Por la mañana:</div>
                                    
                                                    <div class="Form-options">
                                                    
                                                        <label for="0930" class="Form-option">
                                                            <input type="radio" id="0930" name="opciones-hora">
                                                            <span>09:30 hs. - 1 Lugar</span>
                                                        </label>
                                                        <label for="1030" class="Form-option">
                                                            <input type="radio" id="1030" name="opciones-hora" checked>
                                                            <span>10:30 hs. - 1 Lugar</span>
                                                        </label>
                                                        <label for="1100" class="Form-option">
                                                            <input type="radio" id="1100" name="opciones-hora">
                                                            <span>11:00 hs. - 1 Lugar</span>
                                                        </label>
                                                    
                                                    </div>
                                    
                                  

                                    </div>

                                    <div class="Form-group" role="group"  aria-labelledby="grupo-radios-horas-tarde" >

                                    <div id="grupo-radios-horas-tarde" class="Form-label" >Por la tarde:</div>
                                    
                                            <div class="Form-options">
                                            
                                                <label for="1200" class="Form-option">
                                                    <input type="radio" id="1200" name="opciones-hora">
                                                    <span>12:00 hs. - 1 Lugar</span>
                                                </label>
                                                <label for="1230" class="Form-option">
                                                    <input type="radio" id="1230" name="opciones-hora">
                                                    <span>12:30 hs. - 1 Lugar</span>
                                                </label>
                                                <label for="1300" class="Form-option">
                                                    <input type="radio" id="1300" name="opciones-hora">
                                                    <span>13:00 hs. - 1 Lugar</span>
                                                </label>
                                            
                                            </div>
                                    
                                    </div>
                            
                            </fieldset>

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

</body>
</html>

