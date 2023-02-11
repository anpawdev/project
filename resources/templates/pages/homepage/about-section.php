<?php

/**
 * 
 *
 */
?>
<section class="section section--about">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 px-0 d-lg-block d-none">
        <?php
        $image = get_sub_field('about_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid', 'alt' => 'img'));
        }
        ?>
      </div>
      <div class="col-lg-7 col-12 px-0">
        <?php the_sub_field('about_us'); ?>
        <?php the_sub_field('about_advantages'); ?>
      </div>
    </div>
  </div>
</section>