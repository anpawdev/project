<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'post_home');?>
<div class="col-xl-5 col-12 mb-md-7 mb-4 mt-2 news__box px-md-0">
  <a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail[0];?>" alt="img" class="img-fluid w-100"></a>
  <div class="news">
    <div class="news__title mt-3 mb-3">
      <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
    </div>
    <div class="news__description fw-300">
      <p><?php the_excerpt();?></p>
    </div>
    <div class="news__link fw-600 mt-md-4">
      <a href="<?php the_permalink();?>"><?= __("Czytaj więcej", "dip"); ?></a>
    </div>
  </div>    
</div>
