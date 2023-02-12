<?php

/**
 * 
 */
?>
<footer class="footer text-white pt-9 pb-9">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-12 px-0">
        <h5><?php the_field('contact_title', 'options'); ?></h5>
        <div class="footer__block">
          <span class="d-block"><?php the_field('call_us', 'options'); ?></span>
          <a class="text-white fw-700 d-block" href="tel:<?= filter_var(get_field('footer_phone', 'options'), FILTER_SANITIZE_NUMBER_INT); ?>"><?php the_field('footer_phone', 'options'); ?></a>
          <span class="footer__form d-block"><?php the_field('contact_form', 'options'); ?></span>
          <?php
          $link = get_field('contact_link', 'options');

          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a href="<?php echo esc_url($link_url); ?>" class="fw-700" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/chevron-right.svg" alt="icon" /></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-3 col-12 px-1">
        <h5><?php the_field('company_title', 'options'); ?></h5>
        <div class="footer__block fw-700">
          <?php the_field('company_data', 'options'); ?>
        </div>
      </div>
      <div class="col-md-3 col-12 px-2">
        <h5><?php the_field('contact_title', 'options'); ?></h5>
        <div class="footer__block">
          <?php
          $link = get_field('statute', 'options');

          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="text-white text-uppercase d-block text-underline fw-700" href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
          <?php
          $link = get_field('privacy_policy', 'options');

          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="text-white text-uppercase d-block text-underline fw-700" href="<?php echo esc_url($link_url); ?>" class="" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>

      </div>
      <div class="footer__copyright col-md-3 col-12 px-2">
        <h5>&copy;<?php echo date('Y '); ?></h5>
        <div class="footer__block text-uppercase fw-700">
          <p><?php the_field('copyright', 'options'); ?></p>
        </div>
        <h5 class="mt-7"><?= __('Projekt i Realizacja:'); ?><span class="text-white"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/public/images/icons/studio-logo.svg" alt="icon" class="mx-1"/><?= __('One White Studio'); ?></span></h5>
      </div>
    </div>
  </div>
</footer>