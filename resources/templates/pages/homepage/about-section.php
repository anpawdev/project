<?php

/**
 * 
 *
 */
?>
<section class="section section--about">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 px-0 d-lg-block d-md-none">
        <?php
        $image = get_sub_field('about_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid d-block mx-auto d-md-none d-xl-block', 'alt' => 'img'));
        }
        ?>
      </div>
      <div class="about__wrapper d-flex flex-xl-column flex-md-row flex-column col-xl-7 col-12 pr-0">
        <div class="mr-xl-0 mr-lg-6rem mr-3">
          <?php the_sub_field('about_us'); ?>
        </div>
        <div class="about__wrapper-list">
          <?php the_sub_field('about_advantages'); ?>
        </div>
      </div>
    </div>
  </div>
</section>