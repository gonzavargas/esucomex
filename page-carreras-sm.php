<?php
/*
Template Name: Carreras sin malla
*/
?>

<?php get_header(); ?>
        
        <section id="contenido">
		    
		    <?php get_sidebar(); ?>
		    
		    <section class="main_content_col">
		    
		    	<?php if (have_posts()) : while (have_posts()) : the_post();?>
			    	
			    	<header id="header_pag_carrera">
			    		<?php 
							if ( has_post_thumbnail() ) {
							  the_post_thumbnail();
							} 
						?>
			    		<h1 class="pagina_carrera" id="post-<?php the_ID(); ?>"><?php the_title();?></h1>
			    	</header>
			    	
			    	<div id="col_txt_carreras">
			    		<?php the_content(); ?>
			    	</div><!-- /col_txt_carreras -->
			    	
			    	<div id="col_ficha_carreras">
			    	
			    		<table class="ficha" cellpadding="0" cellspacing="0">
							<tr>
								<td colspan="2" class="encabezado_ficha">Título</td>
							</tr>
							<tr>
								<td colspan="2"><?php echo get_post_meta($post->ID, 'Título', true); ?></td>
							</tr>
							<tr>
								<td>Duración</td>
								<td><?php echo get_post_meta($post->ID, 'Duración', true); ?></td>
							</tr>
							<tr>
								<td>Nivel</td>
								<td><?php echo get_post_meta($post->ID, 'Nivel', true); ?></td>
							</tr>
						</table>
			    		
			    	</div><!-- /col_ficha_carreras -->
		    		
		    	<?php endwhile; endif; ?>
		    </section><!-- /main_content_col -->
		    
        </section><!-- /contenido -->
        
        <?php get_footer(); ?>

        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>