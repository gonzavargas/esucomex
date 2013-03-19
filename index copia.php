<?php get_header(); ?>
        
        <section id="contenido">
        	
        	<a class="fancybox fancybox.iframe" href="<?php bloginfo("template_url"); ?>/formulario_telefono.html">
				<div id="caja_llamado"></div><!-- /caja_llamado -->
		    </a>
        	
        	<!-- NIVO SLIDER -->
			<div id="slider" class="nivoSlider">
				<img src="<?php bloginfo("template_url"); ?>/img/banner-07.jpg" alt="" data-transition="boxRainGrow" />
				<img src="<?php bloginfo("template_url"); ?>/img/banner-08.jpg" alt="" data-transition="boxRain" />
		    </div>
		    
		    <!-- CARRERAS -->
		    <div id="carreras_tecnicas">
		    	<header class="header_carreras">
		    		<h1 class="carreras">Carreras T&eacute;cnicas</h1>
		    	</header>
		    	<nav class="col_carreras">
		    		<?php
						$menu_carreras_tec_args = array(
							'theme_location'  => 'menu-carreras-tec',
							'menu'            => 'menu-carreras-tec',
							'menu_class'      => 'carreras',
							'echo'            => true
						);
						
						wp_nav_menu( $menu_carreras_tec_args );
					?>
		    	</nav><!-- /col_carreras -->
		    	
		    	<nav class="col_carreras_r">
		    		<?php
						$menu_carreras_tec2_args = array(
							'theme_location'  => 'menu-carreras-tec-2',
							'menu'            => 'menu-carreras-tec-2',
							'menu_class'      => 'carreras',
							'echo'            => true
						);
						
						wp_nav_menu( $menu_carreras_tec2_args );
					?>
		    	</nav><!-- /col_carreras_r -->
		    	
		    </div><!-- /carreras_tecnicas -->
		    
		    <div id="carreras_profesionales">
		    	<header class="header_carreras">
		    		<h1 class="carreras">Carreras Profesionales</h1>
		    	</header>
		    	<nav class="col_carreras_r">
		    		<?php
						$menu_carreras_pro_args = array(
							'theme_location'  => 'menu-carreras-pro',
							'menu'            => 'menu-carreras-pro',
							'menu_class'      => 'carreras',
							'echo'            => true
						);
						
						wp_nav_menu( $menu_carreras_pro_args );
					?>
		    	</nav><!-- /col_carreras_r -->
		    </div><!-- /carreras_profesionales -->
		    
		    <?php get_sidebar(); ?>
		    
        </section><!-- /contenido -->

        <div id="noticias_wrapp">
        	<section id="franja_noticias">

	        	<?php query_posts('showposts=3'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	        		<section class="noticia_box">
	        			<article class="noticia">
	        				<?php 
								if ( has_post_thumbnail() ) {
								  the_post_thumbnail();
								} 
							?>
	        				<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	        			</article>
	        			<footer class="noticia_footer">
	        				<a class="seguir_leyendo" href="<?php the_permalink() ?>">Seguir Leyendo</a>
	        			</footer>
	        		</section><!-- /noticia_box -->

	        	<?php endwhile; else: ?>
				<?php endif; wp_reset_query();?>

				<section class="info_box">
		    		<div class="info_icon"></div>
		    		<h2>Información Alumnos</h2>
		    		<ul>
		    			<li class="pdf_list"><a href="<?php bloginfo("template_url"); ?>/documentos/calendario-academico-2013.pdf">Calendario Académico 2013</a></li>
		    			<li class="pdf_list"><a href="<?php bloginfo("template_url"); ?>/documentos/reglamento-academico.pdf">Reglamento Académico</a></li>
		    		</ul>
		    	</section>

			</section><!-- /franja_noticias -->
        </div><!-- /noticias_wrapp -->
        
        <?php get_footer(); ?>

        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>