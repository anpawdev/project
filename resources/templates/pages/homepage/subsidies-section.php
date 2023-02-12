<?php

/**
 * 
 *
 */
?>
<section class="section section--subsidies">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0 text-center text-uppercase mt-xl-3 mt-4">
        <?php the_sub_field('subsidies_headline'); ?>
      </div>
      <div class="col-12 px-xxl-0 subsidies p-small">
        <?php
        if (get_sub_field('subsidies_repeater')) :
          while (have_rows('subsidies_repeater')) : the_row();
        ?>
            <div class="mb-xl-0 mb-md-4">
              <?php
              $image = get_sub_field('subsidies_image');
              $size = 'full';
              if ($image) {
                echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid w-100', 'alt' => 'img'));
              }
              ?>
              <div class="subsidies__description text-center text-md-left">
                <h3 class="mb-4 pb-md-1"><?php the_sub_field('subsidies_title'); ?></h3>
                <p><?php the_sub_field('subsidies_text'); ?></p>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>