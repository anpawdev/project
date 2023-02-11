<?php

/**
 * 
 */
?>
<footer class="footer text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-12 px-0">
        <h5><?php the_field('contact_title', 'options'); ?></h5>
        <span><?php the_field('call_us', 'options'); ?></span>
        <a class="text-white" href="tel:<?= filter_var(get_field('footer_phone', 'options'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('footer_phone', 'options'); ?></a>
        <span><?php the_field('contact_form', 'options'); ?></span>
      </div>
      <div class="col-md-3 col-12 px-0">
        <h5><?php the_field('company_title', 'options'); ?></h5>
        <?php the_field('company_data', 'options'); ?>
      </div>
      <div class="col-md-3 col-12 px-0">
        <h5><?php the_field('contact_title', 'options'); ?></h5>
        <?php
        $link = get_field('statute', 'options');

        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="text-white" href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
        <?php
        $link = get_field('privacy_policy', 'options');

        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="text-white" href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>
      <div class="col-md-3 col-12 px-0"></div>
    </div>
  </div>
</footer>