<?php 
	function modificar_numero_posts_cpt( $query ) {
	    if ( $query->query_vars['post_type'] == 'Movies' ) {
	        $query->query_vars['posts_per_page'] = 3;
	    }

	    return $query;
	}	

	if( !is_admin() ) {
    	add_filter( 'pre_get_posts', 'modificar_numero_posts_cpt' );
	}
?>