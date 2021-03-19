<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   timetable, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_timetable',
 		'title'				     => __('Text and image'),
 		'description'		   => __('Text and image block'),
 		'render_callback'	 => 'foundry_gutenblock_timetable',
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
 		'keywords'		     => ['fd', 'timetable', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_timetable() {
    
    // Option vars

    $backgroudGradient = get_field('background_gradient');
    $isTextWhite = get_field('is_text_white');

   
    // Get Vars

   

    

    // Return HTML

    ?>

    <section class="block-text-image"  style="background: transparent linear-gradient(79deg, <?php echo $backgroudGradient[0]['color'] ?> 0%,  <?php echo $backgroudGradient[1]['color'] ?> 49%,  <?php echo $backgroudGradient[2]['color'] ?> 100%) 0% 0% no-repeat padding-box;">
   
    </section>

<?php
 }

   
 
