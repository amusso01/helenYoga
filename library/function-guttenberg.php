<?php 
/*==================================================================================
Register new category in guttenberg block
==================================================================================*/

function my_foundry_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'fd-category',
				'title' => __( 'FD Category', 'fd-category' ),
			),
		)
	);
}
add_filter( 'block_categories', 'my_foundry_category', 10, 2);

/*==================================================================================
Register color paette for guttenberg
==================================================================================*/
function foundry_block_setup() {
	// Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );

	// global $txtcolors;
	// foreach($txtcolors as $color){

	// }  TODO BUILD FROM CUSTOMISER

	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Text', 'foundry' ),
			'slug'  => 'text',
			'color'	=> '#6D90B5',
		),
		array(
			'name'  => __( 'Blue', 'foundry' ),
			'slug'  => 'blue',
			'color' => '#4788C0',
		),
		array(
			'name'  => __( 'White', 'foundry' ),
			'slug'  => 'bright',
			'color' => '#ffffff',
		)
	) );
}
add_action( 'after_setup_theme', 'foundry_block_setup' );


/*==================================================================================
Allow certain block on Guttenberg
==================================================================================*/
 
/* function misha_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/fd-greybgtext',
		'acf/fd-sharetitle',
		'acf/fd-bluebg',
		'acf/fd-button',
		'acf/fd-teamcard',
		'acf/fd-imagetext',
		'acf/mediatextareablock',
		'core/image',
		'core/separator',
		'core/spacer',
		'core/paragraph',
		'core/heading',
		'core/list'
	);
 
}

add_filter( 'allowed_block_types', 'misha_allowed_block_types' );

*//*==================================================================================
  LOAD CUSTOM ACF-GUTENBERG-BLOCKS
==================================================================================*/

require get_template_directory().'/template-parts/blocks/block-hero.php';