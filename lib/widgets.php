<?php
/**
 * Register sidebars and widgets
 */
function widgets_init() {
	$class        = apply_filters( 'widgets_class', '' );
	$before_title = apply_filters( 'widgets_before_title', '<h3 class="widget-title">' );
	$after_title  = apply_filters( 'widgets_after_title', '</h3>' );
	

	
    //  Sidebar 
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'roots' ),
		'id'            => 'sidebar-primary',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
	
		// Jumbotron
	register_sidebar( array(
		'name'          => __( 'Jumbotron', 'roots' ),
		'id'            => 'sidebar-jumbotron',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));

	// Footer 
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'roots' ),
		'id'            => 'sidebar-footer-1',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
	

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'roots' ),
		'id'            => 'sitebar-footer-1',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
	
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'roots' ),
		'id'            => 'sitebar-footer-3',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
	
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'roots' ),
		'id'            => 'sitebar-footer-4',
		'before_widget' => '<section id="%1$s" class="' . $class . ' widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => $before_title,
		'after_title'   => $after_title,
	));
}
add_action( 'widgets_init', 'widgets_init' );