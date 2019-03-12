<?php

/**

 * Header style 1 template

 *

 * @author     BetterStudio

 * @package    Publisher

 * @version    1.8.4

 */



$class    = 'site-header header-style-1 ' . publisher_get_header_layout_class();

$ad_left  = publisher_get_ad_location_data( 'header_aside_logo_left' );

$ad_right = publisher_get_ad_location_data( 'header_aside_logo_right' );



if ( $ad_left['active_location'] || $ad_right['active_location'] ) {

	$class .= ' h-a-ad';

}



?>
<header <?php publisher_attr( 'header', $class ); ?>>
	<div class="navbar navbar-default navbar-static-top">
		<div class="container container-header">
	        <div class="navbar-header">
	        
		       <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		         </button>
		         
		        <a class="navbar-brand" href="https://www.unam.mx/">
		            <img src="<?php bloginfo('template_url'); ?>/views/general/header/img/logo-unam.png" height="110" width="85">
		        </a>
		        <a class="navbar-brand" href="http://www.cuautitlan.unam.mx/">   
		            <img src="<?php bloginfo('template_url'); ?>/views/general/header/img/logo-fesc.png" height="110" width="85">
		        </a>
		        <a class="navbar-brand" href="http://www.cuautitlan.unam.mx/">   
		            <img src="<?php bloginfo('template_url'); ?>/views/general/header/img/logo-fesc-difusion.png" height="110">
		        </a>
		        <div class="navbar-name" style="font-size: 23px; color:#FFF; font-family: Arial; text-align:left">
		        	<p>Universidad Nacional Autónoma de México</p>
		         	<p><span>Facultad de Estudios Superiores Cuautitlán</span></p>
		         	<p class="title-departamento">Departamento de Prensa y Difusión</p>
		     	</div>
		     	
	   		</div>
	     	<!--termina header-->
	      	<!--inicia menu-->  
	      	<div class="navbar-collapse collapse">
		        <ul class="nav navbar-nav" role="navigation">

			        <li class="dropdown" role="navigation">
				            <a href="http://www.cuautitlan.unam.mx/">
				               Inicio 
				           	</a>
			        </li>

			        <li class="dropdown" role="navigation">
			               <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="http://www.cuautitlan.unam.mx/index.html">
			               		Conoce la FESC 
			               		<i class="fa fa-angle-down"></i>
			           		</a>
				            <ul class="dropdown-menu" role="navigation" style="color: #FFF">
						        <li>
						          	<a href="http://www.cuautitlan.unam.mx/mision_vision.html">
						              Misión y Visión
						          	</a>				
						        </li>
					          	<li>
					          		<a href="http://www.cuautitlan.unam.mx/institucional/organizacion_institucional.html">
					              		Organización Institucional
					              	</a>
					            </li>
					            <li>
					            	<a href="http://www.cuautitlan.unam.mx/la_fesc_hoy.html">
					              		La FESC hoy
					          		</a>
					            </li>
					            <li>
					            	<a href="http://www.cuautitlan.unam.mx/historia.html">
					              		Historia
					              	</a>
					            </li>
					            <li>
					            	<a href="http://www.cuautitlan.unam.mx/videos.html">
					              		Videos
					              	</a>
					            </li>
					            <li>
					            	<a href="http://www.cuautitlan.unam.mx/ubicacion.html">
					              		Ubicación Geográfica
					              	</a>
					            </li>
				            </ul>
			         </li>
			                      
			        <li class="dropdown">
				              <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
				              	Alumnos 
				              	<i class="fa fa-angle-down"></i>
				              </a>
				              <ul class="dropdown-menu" role="navigation">
						            <li>
						            	<a href="http://www.cuautitlan.unam.mx/alumnos/">
						              		Sitio del Alumno
						              	</a>
						            </li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/institucional/secretaria_atencion_comunidad.html">
					              			Atenci&oacute;n a la Comunidad
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://cuautitlan.dgae.unam.mx/" target="new">
					              			Servicios Escolares
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/servicio_social/">
					              			Servicio Social
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/alumnos/bolsa_trabajo.html">
					              			Bolsa de Trabajo
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://virtual.cuautitlan.unam.mx/titulacion/" target="_blank">
					              			Titulaci&oacute;n
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/institucional/depto_servicios_medicos.html">
					              			Servicio M&eacute;dico
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/alumnos/seguro_facultativo.html">
					              			Seguro de Salud
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/zona_descargas.html">
					              			Reglamento Prácticas Escolares de Campo
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/seguros/">
					              			Seguro de Accidentes
					              			<br>y Gastos Médicos Escolares
					              		</a>
					              	</li>
					              	<li>
					              		<a href="http://www.cuautitlan.unam.mx/movilidad_estudiantil/">
					              			Movilidad Estudiantil
					              		</a>
					              	</li>
				              </ul>
			        </li>

			        <li class="dropdown">
			            <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
				            Oferta Educativa 
				            <i class="fa fa-angle-down"></i>
			         	</a>
			        	<ul class="dropdown-menu" role="navigation">
				             	<li>
				             		<a href="http://www.cuautitlan.unam.mx/licenciaturas/">
				             			Licenciaturas
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://www.cuaed.unam.mx/lic_diseno/" target="_blank">
				             			Licenciaturas en L&iacute;nea
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://www.cuautitlan.unam.mx/posgrado/">
				             			Posgrado
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://idiomas.cuautitlan2.unam.mx/" target="_blank">
				             			Idiomas
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://www.cuautitlan.unam.mx/educon/">
				             			Educaci&oacute;n Continua
				             		</a>
				             	</li>
				              	<li>
				              		<a href="http://distancia.cuautitlan2.unam.mx/edistancia/" target="_blank">
				             			Educaci&oacute;n a Distancia
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://asesorias.cuautitlan2.unam.mx/computo/" target="_blank">
				             			Centro de C&oacute;mputo
				             		</a>
				             	</li>
				           	 	<li>
				           	 		<a href="http://www.cuautitlan.unam.mx/difusion_cultural/talleres_culturales.html">
				             			Difusi&oacute;n Cultural
				             		</a>
				             	</li>
				             	<li>
				             		<a href="http://www.cuautitlan.unam.mx/deporte/index.html" target="_blank">
				             			Deportes
				             		</a>
				             	</li>
				             	<li>
				             		<a href="https://www.escolar.unam.mx/" target="_blank">
				             			Ingreso a la UNAM
				             		</a>
				             	</li>
		            	</ul>
		         	</li>
		                      
		            <li class="dropdown">
		             	<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
		             		Difusi&oacute;n 
		             		<i class="fa fa-angle-down"></i>
		             	</a>
		             
		             	<ul class="dropdown-menu" role="navigation">
			             		<li>
			             			<a href="http://www.cuautitlan.unam.mx/difusion_cultural/">
			             				Difusi&oacute;n Cultural
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://asesorias.cuautitlan2.unam.mx/saladeprensa/gacetaComunidad-2018.php" target="_blank">
			             				Gaceta Comunidad
			             			</a>
			             		</li>
			            		<li>
			            			<a href="http://asesorias.cuautitlan2.unam.mx/saladeprensa/" target="_blank">
			             				Sala de Prensa
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://virtual.cuautitlan.unam.mx/rudics/" target="_blank">
			             				Revista Universitaria Digital de Ciencias Sociales
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://www.cuautitlan.unam.mx/reflexionesdelmuralismo/index.html" target="_blank">
			             				Revista Reflexiones del Muralismo en el Siglo XXI
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://www.cuautitlan.unam.mx/revista/paciencia/" target="_blank">
			             				Revista PaCiencia Pa´Todos
			             			</a>
			             		</li>
			             
			            		<li>
			            			<a href="http://www.gaceta.unam.mx/" target="_blank">
			             				Gaceta UNAM
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://www.radiounam.unam.mx/" target="_blank">
			             				Radio UNAM
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://www.cultura.unam.mx/index.aspx" target="_blank">
			             				Cultura UNAM
			             			</a>
			             		</li>
			             		<li>
			             			<a href="http://www.fundacionunam.org.mx/de_la_unam/valores-unam/" target="_blank">
			             				Valores UNAM
			             			</a>
			             		</li>
		            	</ul>
		         	</li>
		                        
		            <li class="dropdown">
			             	<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
			             		Servicios 
			             		<i class="fa fa-angle-down"></i>
			             	</a>
			          
				            <ul class="dropdown-menu" role="navigation">
					             	<li>
					             		<a href="http://avalon.cuautitlan.unam.mx/biblioteca/" target="_blank">
					             			Biblioteca
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/hospital_equinos/index.html">
					             			Hospital de Equinos
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/institucional/hospital_pe.html">
					             			Hospital de Pequeñas Especies
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/liem/">
					             			Ensayos (Químicos y Físicos)
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/descargas/principal/solicitud_diseno_web.pdf" target="_blank">
					             			Publicar en el Portal
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/zona_descargas.html">
					             			Zona de Descargas
					             		</a>
					             	</li>
					             	<li>
					             		<a href="http://www.cuautitlan.unam.mx/descargas/principal/Directorio_FESC.pdf" target="_blank">
					             			Directorio Telef&oacute;nico 
					             		</a>
					             	</li>
				            </ul>
		         	</li>
		             
		            <li class="dropdown">
		            	<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover="dropdown" data-toggle="dropdown" href="#">
		            		Comunidad FESC 
		            		<i class="fa fa-angle-down"></i>
		            	</a>
		            
			            <ul class="dropdown-menu" role="navigation">
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/institucional/sgcc/index.html">
				            			Sistema de Gesti&oacute;n de Calidad
				            		</a>
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/institucional/unidad_acreditacion.html">
							            Unidad de Acreditaci&oacute;n<br>
							            y Certificaci&oacute;n Acad&eacute;mica
				            		</a>
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/incubadora/index.html" target="_blank">
				            			Sistema de Incubaci&oacute;n</a>
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/institucional/USAPA/index.html" target="_blank">
				           				USAPA
				           			</a>
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/siacf/index.html">
				            			SIACF
				            		</a>
				            	</li>
				           		<li>
				           			<a href="http://www.cuautitlan.unam.mx/cicuae/index.html" target="_blank">
				            			Comit&eacute; Interno CICUAE 
				            		</a> 
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/circulares/">
				            			Circulares
				            		</a> 
				            	</li>
				            	<li>
				            		<a href="http://www.cuautitlan.unam.mx/actas/consejo.html">
				            			Actas del H. Consejo
				            		</a> 
				            	</li>
			            </ul>
			        </li>

		        </ul>
	        </div> 
	    </div>
    </div>
	<!--termina menu-->  
	<!--header end-->
</header><!-- .header -->
<?php

