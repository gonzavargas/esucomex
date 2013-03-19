<?php get_header(); ?>
        
        <section id="contenido">
        
        	<?php get_sidebar(); ?>
        	
        	<section class="main_content_col">
		    	<h1 class="contenido">Noticias Esucomex</h1>
		    	
		    	
		    	<?php if (have_posts()) : while (have_posts()) : the_post();?>
			    	<section class="news">
			    		
			    		<?php 
							if ( has_post_thumbnail() ) {
							  the_post_thumbnail();
							} 
						?>
						
						<span class="epigrafe"><?php echo get_post_meta($post->ID, 'Epígrafe', true); ?></span>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						
						<?php the_excerpt(); ?>
			    		
			    	</section><!-- /news -->
		    	<?php endwhile; endif; ?>
		    	
		    	
		    </section><!-- /main_content_col -->
		    
        </section><!-- /contenido -->
        
        <?php get_footer(); ?>

        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>