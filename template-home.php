<?php

/**
 * Template Name: Strona główna
 *
 * 
 */
get_header();
while (have_posts()) : the_post();
  while (have_rows('homepage_content')) : the_row();
    if (get_row_layout() == 'hero_section') :
      get_template_part('resources/templates/pages/homepage/hero-section'); ?>
      <main id="content" role="main" class="overflow-hidden">
    <?php
    elseif (get_row_layout() == 'subsidies_section') :
      get_template_part('resources/templates/pages/homepage/subsidies-section');
    elseif (get_row_layout() == 'about_section') :
      get_template_part('resources/templates/pages/homepage/about-section');
    elseif (get_row_layout() == 'numbers_section') :
      get_template_part('resources/templates/pages/homepage/numbers-section');
    elseif (get_row_layout() == 'contact_section') :
      get_template_part('resources/templates/pages/homepage/contact-section');
    elseif (get_row_layout() == 'how-to-get_section') :
      get_template_part('resources/templates/pages/homepage/how-to-get-section');
    endif;
  endwhile;
    ?>
      </main>
    <?php endwhile;
  get_footer();
?>