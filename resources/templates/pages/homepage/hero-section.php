<?php

/**
 * 
 *
 */
?>
<section class="section section--hero bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-4 col-12 px-0">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php the_field('logo', 'options'); ?>" alt="logo">
        </a>
        <div>
          <?php the_sub_field('hero_headline'); ?>
        </div>
        <?php get_template_part('resources/templates/pages/global/contact-component');?>
      </div>
      <div class="col-lg-7">
        <?php
        $image = get_sub_field('hero_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => '', 'alt' => 'img'));
        }
        ?>
      </div>
    </div>
  </div>
</section>