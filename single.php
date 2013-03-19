<?php get_header(); ?>
        
        <section id="contenido">
		    
		    <?php get_sidebar('noticias'); ?>
		    
		    <section class="main_content_col">
		    	<?php if (have_posts()) : while (have_posts()) : the_post();?>
		    		<h1 class="contenido">Noticias</h1>
		    		<p class="epigrafe"><?php echo get_post_meta($post->ID, 'Epígrafe', true); ?></p>
		    		<h2 class="contenido" id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
		    		<?php the_content(); ?>
		    	<?php endwhile; endif; ?>
		    </section><!-- /main_content_col -->
		    
        </section><!-- /contenido -->
        
        <?php get_footer(); ?>

        <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
    </body>
</html>