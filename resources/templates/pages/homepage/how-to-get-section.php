<?php

/**
 * 
 *
 */
?>
<section class="section section--how-to-get bg-green">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">
        <h2><?php the_sub_field('section_headline'); ?></h2>
        <p><?php the_sub_field('section_text'); ?></p>
      </div>
      <div class="col-12 px-0">
        <?php
        if (get_sub_field('repeater_field')) :
          while (have_rows('repeater_field')) : the_row();
        ?>
            <div>
              <?php
              $image = get_sub_field('repeater_image');
              $size = 'full';
              if ($image) {
                echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid', 'alt' => 'img'));
              }
              ?>
              <h4><?php the_sub_field('repeater_title'); ?></h4>
              <p><?php the_sub_field('repeater_text'); ?></p>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>