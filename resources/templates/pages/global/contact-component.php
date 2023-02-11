<?php

/**
 * 
 *
 */
?>
<h2><?php the_sub_field('contact_subheading'); ?></h2>
<div>
  <span><?php the_sub_field('contact_phone'); ?></span>
  <a href="tel:<?= filter_var(get_field(get_sub_field('phone_number')), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_sub_field('phone_number'); ?></a>
  <span><?php the_sub_field('contact_form'); ?></span>
  <?php
  $link = get_sub_field('contact_link');

  if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
  ?>
    <a href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
  <?php endif; ?>
</div>