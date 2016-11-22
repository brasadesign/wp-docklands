<?php
// custom search
function advanced_search( $query ) {
    if ( is_search() && isset($_GET['instock']) && $_GET['instock'] == 'true' ) {
        $query->set( 'meta_key', '_stock_status' );
        $query->set( 'meta_value', 'instock' );
    }
    if ( isset( $_GET[ 'per_page'] ) ) {
    	if ( intval( $_GET[ 'per_page'] ) < 100 && $query->get( '_is_wc_query' ) != true ) {
    		$query->set( 'posts_per_page', $_GET[ 'per_page' ] );
    	}
    }
}
add_action( 'pre_get_posts', 'advanced_search' );
?>
