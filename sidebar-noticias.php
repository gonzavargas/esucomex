<!-- SIDEBAR -->
<aside class="sidebar">

	<?php
	if(function_exists('dynamic_sidebar')){
	    dynamic_sidebar('sidebar personalizada');
	    // Donde pone 'Sidebar Personalizada' iría el nombre
	    // que hayas puesto a tu sidebar al definirla
	}
	?>
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar personalizada') ) : ?> <?php endif; ?>

</aside><!-- /sidebar -->