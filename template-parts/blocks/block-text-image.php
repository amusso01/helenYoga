<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   text-image, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_text-image',
 		'title'				     => __('Text and image'),
 		'description'		   => __('Text and image block'),
 		'render_callback'	 => 'foundry_gutenblock_text_image',
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
 		'keywords'		     => ['fd', 'text-image', 'image']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_text_image() {
    
    // Option vars
    $backgroundColor = get_field('background_color');
    $position = get_field('image_position');
    $hasBgGradient = get_field('display_gradient_background');
    $backgroudGradient = get_field('background_gradient');
    $isTextWhite = get_field('is_text_white');
    $isTextCenter = get_field('is_text_vertical_aligned');
   
        // Get Vars
    $image = get_field('image');
    $text = get_field('text');
   

    

    // Return HTML

    ?>
    <?php if($hasBgGradient) : ?>
        <section class="block-text-image"  style="background: transparent linear-gradient(79deg, <?php echo $backgroudGradient[0]['color'] ?> 0%,  <?php echo $backgroudGradient[1]['color'] ?> 49%,  <?php echo $backgroudGradient[2]['color'] ?> 100%) 0% 0% no-repeat padding-box;">
    <?php else : ?>
        <section class="block-text-image"  style="background-color:<?php echo $backgroundColor ?>">
    <?php endif; ?>
        <div class="block-text-image__container content-block" >
            <div class="block-text-image__box" style="<?php echo $isTextCenter ? 'align-self:center;' : '' ?><?php echo $position == 'left' ? 'grid-column-start: 2;  grid-column-end: 3; order:2' : '' ?>">
            <?php if($text['big_text']) : ?>
                <div class="big-text">
                    <h2 style="<?php echo $isTextWhite ? 'color:white' : '' ?>" ><?php echo $text['big_text'] ?></h2>
                </div>
            <?php endif; ?>
                <div class="small-text">
                    <p style="<?php echo $isTextWhite ? 'color:white' : '' ?>"><?php echo $text['normal_text'] ?></p>
                </div>
            </div>
            <div class="block-text-image__box" style="<?php echo $position == 'left' ? 'grid-column-start: 1;  grid-column-end: 2; order:1' : '' ?>">
                <img src="<?php echo $image['url']  ?>" alt="<?php echo $image['title'] ?>">
            </div>
        </div>
    </section>


<?php
 }

   
 
