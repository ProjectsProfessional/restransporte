<div class="sidebar-toggle content" id="sidebar-wrapper">
   <ul class="nav flex-column">
      <li class="nav-item sidebar-nav">
         <a class="nav-link active"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         <span data-feather="home"></span>
         Gestión <span class="sr-only">(current)</span>
         </a>
         <ul class = "nav-tabs navbar-collapse">
            <li id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
               <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseDefiniciones" aria-expanded="false" aria-controls="collapseDefiniciones">
               <span data-feather="folder-plus"></span>
               Definiciones
               </a>
               <div id="collapseDefiniciones" class="collapse" data-parent="#accordion">
                  <ul>
               </a>           
         				 <!-- Vehiculos-->
         				   <li>
                              <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseHab" aria-expanded="false" aria-controls="collapseHab">
                                 <span data-feather="chevron-down"></span>
                                 Vehiculos
                              </a>
                        </li>
                              <div id="collapseHab" class="collapse" data-parent="#accordion">
                                 <ul>
                                    <li>
                                       <a class="nav-link" href="{{route('tvehiculo')}}">
                                       <span data-feather="square"></span>
                                       Tipo Vehiculo
                                       </a>
                                    </li>
                                      <li>
                                          <a class="nav-link" href="{{route('marca')}}">
                                             <span data-feather="square"></span>
                                             Marca
                                          </a>
                                      </li>
                                       <li >
                                         <a class="nav-link" href="{{route('vehiculo')}}">
                                             <span data-feather="check-circle"></span>
                                             Vehiculo
                                         </a>
                                      </li>

                                  </ul>
                             </div>
                 
                     <!--Pilotos-->
                     <li>
                        <a class="nav-link" href="#" data-toggle="collapse"  data-target="#collapseRes" aria-expanded="false" aria-controls="collapseRes">
                         <span data-feather="chevron-down"></span>
                       Ingreso Pilotos
                        </a>
                     </li>
                     <div id="collapseRes" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="{{route('piloto')}}">
                              <span data-feather="cloud"></span>
                              Piloto
                              </a>
                           </li>
                        </ul>
                     </div>

                     <!--Estado Reserva-->
			            <li>
                        <a class="nav-link" href="{{route('estadoreserva')}}"  data-target="#collapseRes" aria-expanded="false" aria-controls="collapseRes">
                         <span data-feather="chevron-down"></span>
                       Estados Reservas
                        </a>
                     </li>
                     <div id="collapseRes" class="collapse" data-parent="#accordion">
                        <ul>
                           <li>
                              <a class="nav-link" href="{{route('estadoreserva')}}">
                              <span data-feather="cloud"></span>
                              Estado
                              </a>
                           </li>
                        </ul>
                     </div>
				        

                  </ul>
               </div>
            </li>
         </ul>
      </li>

      <li class="nav-item" data-toggle="collapse"  data-target="#collapseClientes" aria-expanded="false" aria-controls="collapseClientes">
         <a class="nav-link" href="#">
            <span data-feather="users"></span>
            Destinos
         </a>
         <ul class = "nav-tabs navbar-collapse" >
            <div id="collapseClientes" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" >
             <li>
                <a class="nav-link" href="{{route('destinos')}}">
                  <span data-feather="users"></span>
                  Turs
                </a>
               </li>
            </div>
         </ul>
      </li>
      <li class="nav-item" data-toggle="collapse" data-target="#collapseHabitaciones" aria-expanded="false" aria-controls="collapseHabitaciones">
         <a class="nav-link" href="#">
            <span data-feather="calendar"></span>
            Vehiculos
         </a>
         <ul class = "nav-tabs navbar-collapse" >
            <div id="collapseHabitaciones" class="collapse" data-parent="#accordion">
               <li >
                  <a class="nav-link" href="{{route('nvehiculo')}}">
                     <span data-feather="home"></span>
                     Vehiculos
                  </a>
               </li>
               
            </div>
         </ul>

      </li>
      <li class="nav-item" data-toggle="collapse"  data-target="#collapseSocios" aria-expanded="false" aria-controls="collapseSocios">
         <a class="nav-link" href="#">
         <span data-feather="calendar"></span>
         Reservas
         </a>
      </li>
         <div id="collapseSocios" class="collapse" data-parent="#accordion">
            <ul class = "nav-tabs navbar-collapse" >
               <li>
                  <a class="nav-link" href="#">
                     <span data-feather="calendar"></span>
                     Reservas
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="#">
                     <span data-feather="check-square"></span>
                     Disponibilidad
                  </a>
               </li>
            </ul>
         </div>

  
   </ul>
</div>
<script type="text/javascript">
$(window).resize(function() {
var path = $(this);
var contW = path.width();
if(contW >= 751){
	document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
}else{
	document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
}
});
$(document).ready(function() {
$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});
$('.dropdown').on('hide.bs.dropdown', function(e){
	$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
});
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	var elem = document.getElementById("sidebar-wrapper");
	left = window.getComputedStyle(elem,null).getPropertyValue("left");
	if(left == "200px"){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="-200px";
	}
	else if(left == "-200px"){
		document.getElementsByClassName("sidebar-toggle")[0].style.left="200px";
	}
});
});
</script>
<!--
<script type="text/javascript">
   $('.collapse').collapse();
</script>
-->
