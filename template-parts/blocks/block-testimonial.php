<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   testimonial, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_testimonial',
 		'title'				     => __('Testimonial'),
 		'description'		   => __('Testimonial block'),
 		'render_callback'	 => 'foundry_gutenblock_testimonial',
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
 		'keywords'		     => ['fd', 'testimonial']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_testimonial() {
    
    // Option vars
    $backgroudGradient = get_field('background_gradient');
    $isTextWhite = get_field('is_text_white');

   
    // Get Vars
    $testimonials = get_field('testimonials');
   

    

    // Return HTML

    ?>

    <section class="block-testimonial" id="fdSlider"  style="background:transparent linear-gradient(180deg, <?php echo $backgroudGradient[0]['color'] ?> 0%, <?php echo $backgroudGradient[1]['color'] ?> 49%, <?php echo $backgroudGradient[2]['color'] ?> 100%) 0% 0% no-repeat padding-box;">
        <div class="testimonial_container content-block">
            <!-- Slider main container -->
            <div class="swiper-container " id="testimonialSlider">
                <!-- Additional required wrapper -->
                <h5 style="<?php echo $isTextWhite ? 'color:white' : '' ?>" >TESTIMONIALS</h5>
                <div class="swiper-wrapper">
                    <?php foreach($testimonials as $testimonial) : ?>
                        <div class="testimonial-slide swiper-slide">
                            <p class="text" style="<?php echo $isTextWhite ? 'color:white' : '' ?>" ><?php echo $testimonial['text'] ?></p>
                            <p class="author" style="<?php echo $isTextWhite ? 'color:white' : '' ?>" ><?php echo $testimonial['author'] ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
  
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"><?php get_template_part( 'svg-template/svg', 'swiper' ) ?></div>
                <div class="swiper-button-next"><?php get_template_part( 'svg-template/svg', 'swiper' ) ?></div>

            </div>
        </div>
    </section>

<?php
 }

   
 
