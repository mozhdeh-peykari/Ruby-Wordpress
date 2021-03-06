<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function meysam() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div><hr class="noscreen" />',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3><ul id="category">',
	) );

	register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'tutsplus' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'tutsplus' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 

}
add_action( 'widgets_init', 'meysam' );




?>


