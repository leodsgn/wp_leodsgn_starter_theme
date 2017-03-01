<?php
/* --------------------------------------------------------------------------------------------- */
/* 
/* enqueue.php
/* 
/* Enqueue scripts and styles in the admin panel with the current theme activated
/*
/* ---------------------------------------------------------------------------------------------- */
if( ! function_exists ( 'impacto_admin_enqueue' ) ) {
	
	
	function impacto_admin_enqueue(){
		
		global $typenow;
		
		if ( $typenow == "materials" || $typenow == "events" || $typenow == "partners" || $typenow == "page" ) {
			
			// 			register styles
			                    wp_register_style( 'admin_bootstrap_css', get_template_directory_uri() . '/public/lib/bootstrap/dist/css/bootstrap.min.css');
			
			// 			enqueue styles
			                    wp_enqueue_style( 'admin_bootstrap_css');
			
		}
		;
		
		return;
	}
	
	
}

?>
