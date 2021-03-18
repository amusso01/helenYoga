<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   Hero, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_hero',
 		'title'				     => __('Page Hero'),
 		'description'		   => __('the Hero of the page'),
 		'render_callback'	 => 'foundry_gutenblock_hero',
 		'category'		     => 'fd-category', // common, formatting, layout, widgets, embed
 		'icon' => array(
            // Specifying a background color to appear with the icon e.g.: in the inserter.
            'background' => '#fff ',
            // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
            'foreground' => '#1EBEA3',
            // Specifying a dashicon for the block
            'src' => 'media-spreadsheet',
            'mode'              => 'edit',
            'align'             => 'full',
            ),
 		'keywords'		     => ['fd', 'hero', 'banner']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_hero() {
    
    // Option vars
    $isSlider = get_field('is_image_a_slider');
    $hasButton = get_field('display_button');
    $isButtonExternal = get_field('is_button_an_external_link');
    $hasQuote = get_field('text_is_a_quote');
    $overlay = get_field('background_gradient');


    // Get Vars
    if($hasQuote){
        $quote = get_field('quote');
    }else{
        $title = get_field('hero_title');
        $text = get_field('hero_text');
    }

    if($isButtonExternal){
        $button = get_field('hero_button');
    }

    // Return HTML
    ?>
    <?php if($isSlider) : 
    // Get Vars
    $images = get_field('slider_images');
    ?>


    <?php else : 
     // Get Vars
     $singleImage = get_field('hero_image');    
    ?>

    <section class="block-hero">
       
    </section>

    <?php endif; ?>
<?php
 }