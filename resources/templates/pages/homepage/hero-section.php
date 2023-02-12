<?php

/**
 * 
 *
 */
?>
<section class="section--hero hero bg-grey">
  <div class="container">
    <div class="row">
      <div class="hero__wrapper col-xxl-5 col-lg-6 col-12 pl-xxl-0 pr-xxl-3 pr-md-3 mb-3 mb-lg-0">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php the_field('logo', 'options'); ?>" alt="logo" class="hero__logo">
        </a>
        <div class="hero__headline my-5">
          <?php the_sub_field('hero_headline'); ?>
        </div>
        <?php get_template_part('resources/templates/pages/global/contact-component'); ?>
      </div>
      <div class="col-xxl-7 col-lg-6">
        <?php
        $image = get_sub_field('hero_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => 'hero__image position-relative d-none d-xl-block', 'alt' => 'img'));
        }
        ?>
        <?php
        $image = get_sub_field('hero_image_mobile');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => 'hero__image position-relative d-xl-none d-block mx-auto', 'alt' => 'img'));
        }
        ?>
      </div>
    </div>
  </div>
</section>