<?php

/**
 * 
 *
 */
?>
<section class="section section--contact overflow-hidden">
  <div class="container">
    <div class="row">
      <div class="col-12 px-xl-0 ">
        <div class="bg-grey d-flex flex-wrap border-radius-20 position-relative overflow-hidden">
          <div class="ml-xl-9 ml-md-4 col-xl-6 col-lg-7 col-md-8 col-12 px-lg-0 px-4 pt-xl-7 pt-md-5 pt-4 pb-lg-0 pb-4 z-index-2 position-relative">
            <?php the_sub_field('contact_headline'); ?>
            <p class="mt-xl-5 mt-2rem mb-xl-8 mb-lg-0 mb-2rem w-60"><?php the_sub_field('contact_section_subheading'); ?></p>
            <div class="w-80">
              <?php get_template_part('resources/templates/pages/global/contact-component'); ?>
            </div>
          </div>
          <div class="offset-xl-1 pl-xl-0 pl-lg-5 col-lg-4 col-md-5 col-12">
            <?php
            $image = get_sub_field('contact_image');
            $size = 'full';
            if ($image) {
              echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid image', 'alt' => 'img'));
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">
        <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz kontaktowy"]'); ?>
      </div>
    </div>
  </div>
</section>