<?php

/**
 * 
 */
?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-12 px-0">
        <a href="<?php bloginfo('url'); ?>">
          <img src="<?php the_field('logo', 'options'); ?>" alt="logo">
        </a>
        <div>
          <span><?php the_field('contact_title', 'options'); ?></span>
          <a href="tel:<?= filter_var(get_field(get_field('footer_phone', 'options')), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('footer_phone', 'options'); ?></a>
          <?php
          $link = get_field('contact_link', 'options');

          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</header>