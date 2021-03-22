<?php
/**
 * 
 * banner
 * 
 * @author   Andrea Musso
 * 
 * @package  Foundry
 * 
 */

?>

<div id="siteBanner" class="fd-banner">
    <div class="bannerText">
        <p><?php echo get_field('banner_text' , 'option'); ?></p>
    </div>
  <div class="bannerClose" id="bannerClose">
      <?php get_template_part( 'svg-template/svg', 'close' ); ?>
  </div>
</div>
