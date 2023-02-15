<?php

/**
 * 
 */
?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0 d-flex align-items-center justify-content-between">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php the_field('logo', 'options'); ?>" alt="logo">
        </a>
        <div class="col-xl-7 col-lg-10 px-0 d-flex align-items-center justify-content-end">
          <p class="p-small mb-0 fw-900"><?php the_field('contact_title', 'options'); ?></p>
          <a href="tel:<?= filter_var(get_field(get_field('footer_phone', 'options')), FILTER_SANITIZE_NUMBER_INT); ?>" class="btn btn--small ml-2rem mr-3 mt-0"><?php the_field('footer_phone', 'options'); ?></a>
          <?php
          $link = get_field('contact_link', 'options');

          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="btn btn--large" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/chevron-right.svg" alt="icon" /></a>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>