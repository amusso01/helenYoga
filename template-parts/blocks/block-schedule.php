<?php
/**
 * Requires ACF Version 5.8+
 *
 * @author      Andrea Musso
 *
 *
 */



 /*==================================================================================
   Schedule, Preset ACF Gutenberg Block
 ==================================================================================*/

 /* Register ACF Block
 /––––––––––––––––––––––––*/
 if( function_exists('acf_register_block') ) {

 	$result = acf_register_block(array(
 		'name'				     => 'fd_schedule',
 		'title'				     => __('Schedule'),
 		'description'		   => __('Schedule block'),
 		'render_callback'	 => 'foundry_gutenblock_schedule',
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
 		'keywords'		     => ['fd', 'schedule']
 	));
 }

 /* Render Block
 /––––––––––––––––––––––––*/
 function foundry_gutenblock_schedule() {
    
    // Option vars

    $backgroudGradient = get_field('title_background_gradient');
    $background = get_field('body_background');
    $isTitleWhite = get_field('is_title_white');
    $isTextWhite = get_field('is_text_white');

   
    // Get Vars
    $classTitle = get_field('class_title');
    $timetable = get_field('timetable');
    $prices = get_field('prices');
   

    

    // Return HTML

    ?>

    <section class="block-schedule"  >

        <div class="block-schedule__title" style="background:transparent linear-gradient(92deg, <?php echo $backgroudGradient[0]['color'] ?> 0%, <?php echo $backgroudGradient[1]['color'] ?> 49%, <?php echo $backgroudGradient[2]['color'] ?> 100%) 0% 0% no-repeat padding-box;">
            <p style="<?php echo $isTitleWhite ? 'color:white' : '' ?>" ><?php echo $classTitle ?></p>
        </div>

        <div class="block-schedule__body" style="background-color:<?php echo $background ?>">
            <div class="block-schedule__dayTime">
                <?php foreach($timetable as $time ) : ?>
                    <p style="<?php echo $isTextWhite ? 'color:white' : '' ?>" ><?php echo $time['day_and_time'] ?></p>
                <?php endforeach; ?>
            </div>
            <div class="line"></div>
            <p style="<?php echo $isTextWhite ? 'color:white' : '' ?>" >Prices</p>
            <div class="block-schedule__prices" style="<?php echo $isTextWhite ? 'color:white' : '' ?>">
                <?php echo $prices ?>
            </div>
        </div>
   
    </section>

<?php
 }

   
 
