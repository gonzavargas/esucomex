<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php bloginfo('name');?></title>
        <meta name="author" content="Gonzalo Vargas - www.gonzalovargas.com"/>
        <meta name="keywords" lang="es" content="instituto profesional, carreras tecnicas, careras profesionales, carreras vespertinas, administracion de empresas, asistente ejecutivo gerencial mencion bilingue, comercio exterior, contabilidad general, gestion financiera e inversiones, secretariado ejecutivo bilingue, secretariado ejecutivo computacional, tecnico juridico, decoracion de interiores, dibujo tecnico, tecnico en prevencion de riesgos, analisis de sistemas, soporte en redes computacionales, turismo, auditoria, ingenieria ejecucion administracion de empresas, ingenieria en administracion, ingenieria ejecucion comercio internacional, ingenieria ejecucion industrial, ingenieria en prevencion de riesgos, ingenieria ejecucion en informatica, ingenieria ejecucion en redes mencion telecomunicaciones" />
        <meta name="description" content="Sitio web Instituto Profesional Esucomex">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
        
        <!--ESTILOS PARA NIVO SLIDER-->
        <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/nivo-slider.css">
        
        <!--ESTILOS PARA FANCYBOX-->
    	<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/css/jquery.fancybox.css" media="screen">

        <!-- libreria de MODRNIZR -->
        <script src="<?php bloginfo("template_url"); ?>/js/modernizr-2.6.2.min.js"></script>
        
        <!--LIBRERÍAS PARA NIVO SLIDER-->
	    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-1.8.3.min.js"></script>
	    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.nivo.slider.js"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	    
	    <!--FANCYBOX-->
    	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.fancybox.js"></script>
    	<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */
	
				$('.fancybox').fancybox();
	
				/*
				 *  Different effects
				 */
	
				// Change title type, overlay closing speed
				$(".fancybox-effects-a").fancybox({
					helpers: {
						title : {
							type : 'outside'
						},
						overlay : {
							speedOut : 0
						}
					}
				});
	
				// Disable opening and closing animations, change title type
				$(".fancybox-effects-b").fancybox({
					openEffect  : 'none',
					closeEffect	: 'none',
	
					helpers : {
						title : {
							type : 'over'
						}
					}
				});
	
				// Set custom style, close if clicked, change title type and overlay color
				$(".fancybox-effects-c").fancybox({
					wrapCSS    : 'fancybox-custom',
					closeClick : true,
	
					openEffect : 'none',
	
					helpers : {
						title : {
							type : 'inside'
						},
						overlay : {
							css : {
								'background' : 'rgba(238,238,238,0.85)'
							}
						}
					}
				});
	
				// Remove padding, set opening and closing animations, close if clicked and disable overlay
				$(".fancybox-effects-d").fancybox({
					padding: 0,
	
					openEffect : 'elastic',
					openSpeed  : 150,
	
					closeEffect : 'elastic',
					closeSpeed  : 150,
	
					closeClick : true,
	
					helpers : {
						overlay : null
					}
				});
	
				/*
				 *  Button helper. Disable animations, hide close button, change title type and content
				 */
	
				$('.fancybox-buttons').fancybox({
					openEffect  : 'none',
					closeEffect : 'none',
	
					prevEffect : 'none',
					nextEffect : 'none',
	
					closeBtn  : false,
	
					helpers : {
						title : {
							type : 'inside'
						},
						buttons	: {}
					},
	
					afterLoad : function() {
						this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				});
	
	
				/*
				 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
				 */
	
				$('.fancybox-thumbs').fancybox({
					prevEffect : 'none',
					nextEffect : 'none',
	
					closeBtn  : false,
					arrows    : false,
					nextClick : true,
	
					helpers : {
						thumbs : {
							width  : 50,
							height : 50
						}
					}
				});
	
				/*
				 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
				*/
				$('.fancybox-media')
					.attr('rel', 'media-gallery')
					.fancybox({
						openEffect : 'none',
						closeEffect : 'none',
						prevEffect : 'none',
						nextEffect : 'none',
	
						arrows : false,
						helpers : {
							media : {},
							buttons : {}
						}
					});
	
				/*
				 *  Open manually
				 */
	
				$("#fancybox-manual-a").click(function() {
					$.fancybox.open('1_b.jpg');
				});
	
				$("#fancybox-manual-b").click(function() {
					$.fancybox.open({
						href : 'iframe.html',
						type : 'iframe',
						padding : 5
					});
				});
	
				$("#fancybox-manual-c").click(function() {
					$.fancybox.open([
						{
							href : '1_b.jpg',
							title : 'My title'
						}, {
							href : '2_b.jpg',
							title : '2nd title'
						}, {
							href : '3_b.jpg'
						}
					], {
						helpers : {
							thumbs : {
								width: 75,
								height: 50
							}
						}
					});
				});
				
				
			});
		</script>
    	
    	<style type="text/css">
			.fancybox-custom .fancybox-skin {
				box-shadow: 0 0 50px #222;
			}
		</style>
		
		<!--LIBRERÍAS Y SCRIPT PARA FORMULARIO DE CONTACTO-->
    	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/funciones.js"></script>
    	
    	<!-- jQuery PARA TABLA CEBRADA -->
	    <script type="text/javascript">
			$(document).ready(function()
				{
					$('.easy-table tr:even').addClass('gris');
					$('.easy-table tr:odd').addClass('crema');
				}
			);
		</script>
		
		<!-- SCRIPT PARA GOOGLE MAPS API -->
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
		
		<script type="text/javascript">
	      var map;
	      function initialize() {
	        
	        var sedeA = new google.maps.LatLng(-33.447286,-70.661603);
	        var sedeB = new google.maps.LatLng(-33.448521,-70.661375);
	        var sedeC = new google.maps.LatLng(-33.448134,-70.661603);
	        
	        var mapOptions = {
	          zoom: 15,
	          center: new google.maps.LatLng(-33.447762, -70.661517),
	          disableDefaultUI: true,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        };
	        
	        map = new google.maps.Map(document.getElementById('map_ejercito'),
	            mapOptions);
	        
	        var marker = new google.maps.Marker({
	      		position: sedeA, 
	      		map: map, 
	      		title:"Instalaciones Ejercito 27"
	  		});
	  		
	  		var marker = new google.maps.Marker({
	      		position: sedeB, 
	      		map: map, 
	      		title:"Instalaciones Ejercito 119"
	  		});
	  		
	  		var marker = new google.maps.Marker({
	      		position: sedeC, 
	      		map: map, 
	      		title:"Instalaciones Ejercito 91"
	  		});
	  		
	  		var styles = [
	  			{
	    			stylers: [
	      				{ hue: "#00ffe6" },
	      				{ saturation: -20 }
	    			]
	  			},{
	    			featureType: "road",
	    			elementType: "geometry",
	    			stylers: [
	      				{ lightness: 100 },
	      				{ visibility: "simplified" }
	    			]
	  			},{
	    			featureType: "road",
	    			elementType: "labels",
	    			stylers: [
	      				{ visibility: "off" }
	    			]
	  			}
				];
	
	map.setOptions({styles: styles});
	        
	      }
	
	      google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	    
	    <script type="text/javascript">
	      var map;
	      function initialize() {
	        
	        var sedeD = new google.maps.LatLng(-33.437013,-70.636441);
	        
	        var mapOptions = {
	          zoom: 15,
	          center: new google.maps.LatLng(-33.437013, -70.636441),
	          disableDefaultUI: true,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        };
	        
	        map = new google.maps.Map(document.getElementById('map_alameda'),
	            mapOptions);
	        
	        var marker = new google.maps.Marker({
	      		position: sedeD, 
	      		map: map, 
	      		title:"Sede Alameda"
	  		});
	  			  		
	  		var styles = [
	  			{
	    			stylers: [
	      				{ hue: "#00ffe6" },
	      				{ saturation: -20 }
	    			]
	  			},{
	    			featureType: "road",
	    			elementType: "geometry",
	    			stylers: [
	      				{ lightness: 100 },
	      				{ visibility: "simplified" }
	    			]
	  			},{
	    			featureType: "road",
	    			elementType: "labels",
	    			stylers: [
	      				{ visibility: "off" }
	    			]
	  			}
				];
	
	map.setOptions({styles: styles});
	        
	      }
	
	      google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
        
        <!-- GOOGLE ANALYTICS -->
        <script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-6577308-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	
		</script>
		
		<!--Start of Zopim Live Chat Script-->
		<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
		d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
		$.src='//cdn.zopim.com/?12SdVXHhlvRLw7Lrk3AFgYB62XTVmZBY';z.t=+new Date;$.
		type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
		</script>
		<!--End of Zopim Live Chat Script-->
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Estás usando un navegador <strong>obsoleto</strong>. Por favor <a href="http://browsehappy.com/">actualiza tu navegador</a> o <a href="http://www.google.com/chromeframe/?redirect=true">activa Google Chrome Frame</a> para mejorar tu experiencia.</p>
        <![endif]-->

        <div id="header_wrap">
        	<header id="cabecera">
        		<div id="franja_tec"></div><!-- /franja_tec -->
        		<div id="header_img">
					<a class="inicio" href="<?php bloginfo('url');?>" title="Volver a <?php bloginfo('name');?>"></a>
				</div>
        	</header><!-- /cabecera -->
        </div><!-- /header_wrap -->
        
        <div id="nav_wrap">
        	<nav>
        		<?php
	        		$menu_principal_args = array(
						'theme_location'  => 'menu-principal',
						'menu'            => 'menu-principal', 
						'container'       => false, 
						'echo'            => true
					);
					
					wp_nav_menu($menu_principal_args);
        		?>
        	</nav>
        </div><!-- /nav_wrap -->