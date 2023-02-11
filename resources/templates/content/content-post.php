<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'news_img');?>
<div class="row spacer">
  <div class="col-md-7 col-xxl-5 col-12">
    <a href="<?php the_permalink();?>"><img src="<?php echo $thumbnail[0];?>" class="img-fluid" alt=""></a>
  </div>
  <div class="col-md-5 col-12 d-flex flex-column content mt-3 mt-md-0">
  <a href="<?php the_permalink();?>"><p class="title"><?php the_title();?></p></a>
    <div class="article"><?php the_excerpt();?></div>
    <a href="<?php the_permalink();?>" class="czytaj-wiecej mt-3">Czytaj więcej</a>
  </div>
</div>