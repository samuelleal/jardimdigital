<div class="owl-carousel content-slider-with-controls">
  <?php
    $images = get_field('galeria');
    if( $images ): foreach ($images as $image ) {
  ?>
	<div class="overlay-container">
		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		<a href="<?php echo $image['url']; ?>" class="popup-img overlay" title="<?php echo $image['alt']; ?>"><i class="fa fa-search-plus"></i></a>
	</div>
  <?php
    } endif;
  ?>
</div>