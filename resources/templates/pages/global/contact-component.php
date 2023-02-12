<?php

/**
 * 
 *
 */
?>
<h2 class="mt-xl-5rem mt-md-5 mb-xl-3 mb-md-1 mb-3"><?php the_sub_field('contact_subheading'); ?></h2>
<div class="contact d-flex flex-wrap flex-md-nowrap justify-content-xxl-between justify-content-start py-1">
  <div>
    <span class="d-xl-block d-none fw-300"><?php the_sub_field('contact_phone'); ?></span>
    <a href="tel:<?= filter_var(get_sub_field(('phone_number')), FILTER_SANITIZE_NUMBER_INT); ?>" class="btn btn--small mr-xxl-0 mr-3"><?php the_sub_field('phone_number'); ?></a>
  </div>
  <div>
    <span class="d-xl-block d-none fw-300"><?php the_sub_field('contact_form'); ?></span>
    <?php
    $link = get_sub_field('contact_link');

    if ($link) :
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <a href="<?php echo esc_url($link_url); ?>" class="btn btn--large" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/chevron-right.svg" alt="icon" /></a>
    <?php endif; ?>
  </div>
</div>