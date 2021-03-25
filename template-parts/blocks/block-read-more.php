<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   read-more, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_read-more',
 		'title'				     => __('Read More'),
 		'description'		   => __('Read more block'),
 		'render_callback'	 => 'foundry_gutenblock_readMore',
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
 		'keywords'		     => ['fd', 'read-more', 'read', 'more']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_readMore() {

    // Get Vars
    $showText = get_field('text_displayed');
    $hiddenText = get_field('text_hidden'); 

    // Return HTML
    ?>

    <section id="readBlock" class="block-read-more">
        <div class="text-show"><?php echo $showText ?></div>
        <div id="readHidden" class="hidden-text "><?php echo $hiddenText ?></div>
        <a href="#" id="readMore">Read More</a>
    </section>

    <?php
 }


   
 
