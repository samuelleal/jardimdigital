<div class="overlay-container">
  <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
      the_post_thumbnail(large);
    }
  ?>
  <div class="overlay">
    <div class="overlay-links">
      <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
      <?php
        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo '<a href="'.$feat_image_url.'" class="popup-img-single" title="teste"><i class="fa fa-search-plus"></i></a>';
      ?>
    </div>
  </div>
</div>