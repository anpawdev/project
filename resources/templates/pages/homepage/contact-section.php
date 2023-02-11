<?php

/**
 * 
 *
 */
?>
<section class="section section--contact bg-grey">
  <div class="container">
    <div class="row">
      <div class="offset-lg-1 col-md-6 col-12 px-0">
        <h1><?php the_sub_field('contact_headline'); ?></h1>
        <p><?php the_sub_field('contact_section_subheading'); ?></p>
        <?php get_template_part('resources/templates/pages/global/contact-component'); ?>
      </div>
      <div class="offset-lg-1 col-md-4 col-12 px-0">
        <?php
        $image = get_sub_field('contact_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid', 'alt' => 'img'));
        }
        ?>
      </div>
    </div>
  </div>
</section>