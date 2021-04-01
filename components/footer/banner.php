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
$display = get_field('display_banner', 'option');

?>
<?php if($display) :?>
<div id="siteBanner" class="fd-banner">
    <div class="bannerText">
        <p><?php echo get_field('banner_text' , 'option'); ?></p>
    </div>
  <div class="bannerClose" id="bannerClose">
      <?php get_template_part( 'svg-template/svg', 'close' ); ?>
  </div>
</div>
<?php endif ?>