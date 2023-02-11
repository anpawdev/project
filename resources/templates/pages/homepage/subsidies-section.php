<?php

/**
 * 
 *
 */
?>
<section class="section section--subsidies">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0 text-center">
        <h3><?php the_sub_field('subsidies_headline'); ?></h3>
      </div>
      <div>
        <?php
        if (get_sub_field('subsidies_repeater')) :
          while (have_rows('subsidies_repeater')) : the_row();
        ?>
            <div>
              <?php
              $image = get_sub_field('subsidies_image');
              $size = 'full';
              if ($image) {
                echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid', 'alt' => 'img'));
              }
              ?>
              <h2><?php the_sub_field('subsidies_title'); ?></h2>
              <p><?php the_sub_field('subsidies_text'); ?></p>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>