 <?php 
	include("header.php");
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>         
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script> 
	<div class="col l9 m12 s12">
		<div class="padding-left">
			<!--PONENETES-->
		 	<section class="" ng-app="ponentes" ng-controller="app">
					  <div class="efecto">
						  	<div id="footer-social">
						  		Ponentes
			                </div>
					  <div class="ponentes">
					  	 <div ng-show="loading"> Cargando...</div> 
					   
             <div class="cont-ponentes col l4 s12 m6" ng-repeat="ponen in ponentes">
						   	<a href="#modal{{ponen.id}}" class=" modal-trigger" modal>
                <div class="box">
						   		<div class="cont-img">
						   			<img ng-src="{{ponen.foto}}">
						   		</div>
						   		<div class="cont-info">
						   			<span><img  ng-src="{{ponen.bandera}}"></span>
						   			<h2>{{ponen.nombre}} <br> 
                                         {{ponen.paterno}}  <br> 
                                         {{ponen.materno}}</h2>
                    
						   		</div>
						   	</div>
                </a>
					   </div> 
             
					   </div>
					  </div>

           
            
            
            <div id="modal{{ponen.id}}" class="modal" ng-repeat="ponen in ponentes">
                <div class="modal-content">
                      <h4>{{ponen.nombre}} {{ponen.paterno}}</h4>
                      <div style="padding:1rem;">
                          <p style="text-align:center;">
                            <img width="200px" ng-src="{{ponen.foto}}">
                          </p>
                          <ul id="ul" class="ul">
                            <li  ng-repeat="li in ponen.lista" >
                                <p>
                                    {{li.li}}
                                </p>
                            </li> 
                          </ul>
                    </div>  
                </div>
                <div class="modal-footer">
                    <a href="#!" class="btn  modal-action modal-close waves-effect ">Gracias!</a>
                </div>
            </div> 
			</section>

			<!--FIN PONENETES-->
<?php 
	include("footer.php");

?>		
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.29/angular.min.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.1.9/angular-materialize.min.js"></script>
<script type="text/javascript" src="js/controller.js"></script>	   	
