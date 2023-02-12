<?php

/**
 * 
 *
 */
?>
<section class="section section--numbers text-center">
  <div class="container">
    <div class="row">
      <div class="col-12 px-xxl-0 numbers">
        <div class="numbers__wrapper">
          <h2 class="mb-xl-3 mb-md-2"><?php the_sub_field('number_title'); ?></h2>
          <span><?php the_sub_field('number_subsidies'); ?></span>
        </div>
        <div class="numbers__wrapper">
          <h2 class="mb-xl-3 mb-md-2"><?php the_sub_field('number_text'); ?></h2>
          <span><?php the_sub_field('number_application'); ?></span>
        </div>
      </div>
    </div>
  </div>
</section>