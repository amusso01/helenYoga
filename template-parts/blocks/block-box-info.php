<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   Information Boxes, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_infoBox',
 		'title'				     => __('Information Boxes'),
 		'description'		   => __('Information Boxes block'),
 		'render_callback'	 => 'foundry_gutenblock_infoBox',
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
 		'keywords'		     => ['fd', 'information', 'boxes']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_infoBox() {
    
    // Option vars
    $backgroud = get_field('background');


   
    // Get Vars
    $infoBoxes = get_field('info_boxes');
   

    

    // Return HTML

    ?>

    <section class="block-box-info content-block">
        <?php foreach($infoBoxes as $boxes) : ?>
            <div class="info-box" style="background-color:<?php echo $backgroud ?>">
                <h2><?php echo $boxes['box_title'] ?></h2>
                <p><?php echo $boxes['box_text'] ?></p>
                <a href="<?php echo $boxes['box_link'] ?>" class="btn">READ MORE <span><?php get_template_part( 'svg-template/svg', 'white-arrow' ) ?></span></a>
            </div>
        <?php endforeach; ?>
    </section>

<?php
 }

   
 
