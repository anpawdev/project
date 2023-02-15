<?php

/**
 * 
 *
 */
?>
<section class="section section--block-steps bg-green">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-12 px-0 text-white ">
        <h2 class="h2 fw-900 text-uppercase mb-md-5 mb-4"><?php the_sub_field('section_headline'); ?></h2>
        <p><?php the_sub_field('section_text'); ?></p>
      </div>
      <div class="block-steps col-12 px-0">
        <?php
        if (get_sub_field('repeater_field')) :
          while (have_rows('repeater_field')) : the_row();

            $counter = get_row_index();
        ?>
            <div class="block-steps__item d-flex flex-xl-column flex-md-row flex-column bg-white border-radius-20 p-small pt-xl-2 position-relative">
              <div class="block-steps__item-badge position-absolute d-flex align-items-center justify-content-center bg-green"><span class="text-white fw-700"><?php echo get_row_index(); ?></span><?= __('/'); ?><?php echo $counter; ?></div>
              <?php
              $image = get_sub_field('repeater_image');
              $size = 'full';
              if ($image) {
                echo wp_get_attachment_image($image, $size, '', array('class' => 'img-fluid mx-auto d-block', 'alt' => 'img'));
              }
              ?>
              <div class="block-steps__item-content">
                <h3 class="fw-900 mb-4"><?php the_sub_field('repeater_title'); ?></h3>
                <p><?php the_sub_field('repeater_text'); ?></p>
              </div>
            </div>
            <?php $counter += 1; ?>
        <?php
          endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</section>