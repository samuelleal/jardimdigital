<?php
/*
Template Name: Arquivos
*/
get_header(); ?>

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12">

        <!-- page-title start -->
        <!-- ================ -->
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="separator-2"></div>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas nulla suscipit <br class="hidden-sm hidden-xs"> unde rerum mollitia dolorum.</p>
        <!-- page-title end -->

        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            
            <!-- timeline start -->
            <div class="timeline row">

              <div class="timeline-icon hidden-xs"><i class="fa fa-angle-double-up"></i></div>

                <?php

                  $blogtime = date('Y');
                  $prev_limit_year = $blogtime - 1;
                  $prev_month = '';
                  $prev_year = '';

                  $args = array(
                   'posts_per_page' => 20,
                   'ignore_sticky_posts' => 1
                  );

                  $postsbymonth = new WP_Query($args);

                  while( $postsbymonth->have_posts() ) {
                    $postsbymonth->the_post();
                    if(get_the_time('F') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {
                       echo '<div class="timeline-date-label clearfix">'.get_the_time('F, Y').'</div>';
                    }
                ?>

                    <!-- timeline item start -->
                    <div class="timeline-item object-non-visible <?php echo ($postsbymonth->current_post%2 == 0?'':'pull-right'); ?>" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
                      <!-- blogpost start -->
                      <article class="clearfix blogpost">

                      <?php
                        $format = get_post_format();
                        get_template_part( 'format', $format );
                      ?>

                        <div class="blogpost-body">
                          <div class="post-info">
                            <span class="day"><?php the_time('d') ?></span>
                            <span class="month"><?php the_time('M Y') ?></span>
                          </div>
                          <div class="blogpost-content">
                            <header>
                              <h2 class="title"><a href="blog-post.html"><?php the_title(); ?></a></h2>
                              <div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#"><?php the_author(); ?></a></div>
                            </header>
                            <p><?php the_excerpt(); ?></p>
                          </div>
                        </div>
                        <footer class="clearfix">
                          <ul class="links pull-left">
                            <li><i class="fa fa-comment-o pr-5"></i> <a href="#"> <?php comments_number('nenhum comentário', '1 comentário', '% comentários') ?></a> |</li> 
                            <li><i class="fa fa-tags pr-5"></i> <a href="#"><?php the_tags(); ?></a></li>
                          </ul>
                          <a class="pull-right link" href="<?php the_permalink(); ?>"><span>Leia Mais</span></a>
                        </footer>
                      </article>
                      <!-- blogpost end -->
                    </div>
                    <!-- timeline item end -->

                <?php
                    $prev_month = get_the_time('F');
                    $prev_year = get_the_time('Y');
                  }
    
                ?> 
              </div>

            <div class="text-center">
              <a href="#" class="btn btn-default">Load more</a>
            </div>

          </div>
        </div>

      </div>
      <!-- main end -->

    </div>
  </div>
</section>


<?php get_footer(); ?>