<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('main col-md-8'); ?> >

	<!-- page-title start -->
	<!-- ================ -->
	<?php
	if ( is_single() ) :
		the_title( '<h1 class="page-title">', '</h1>' );
	else :
		// the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	endif;
	?>
	<!-- page-title end -->

	<!-- blogpost start -->
	<article class="clearfix blogpost full">
		<div class="blogpost-body">
			<div class="side">
				<div class="post-info">
					<span class="day"><?php the_time('d') ?></span>
					<span class="month"><?php the_time('M Y') ?></span>
				</div>
				<div id="affix"><span class="share">Compartilhe</span><div id="share"></div></div>
			</div>
			<div class="blogpost-content">
				<header>
					<div class="submitted"><i class="fa fa-user pr-5"></i> publicado por <a href="#"><?php the_author(); ?></a></div>
				</header>
        <?php
          $format = get_post_format();
          get_template_part( 'format', $format );
        ?>
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<footer class="clearfix">
			<ul class="links pull-left">
				<li><i class="fa fa-comment-o pr-5"></i> <a href="#"><?php comments_number('nenhum comentário', '1 comentário', '% comentários') ?></a> |</li> 
				<li><i class="fa fa-tags pr-5"></i><?php the_tags(); ?></li>
			</ul>
		</footer>
	</article>
	<!-- blogpost end -->

	<?php comments_template(); ?> 

</div>
<!-- main end -->

<?php get_sidebar(); ?>