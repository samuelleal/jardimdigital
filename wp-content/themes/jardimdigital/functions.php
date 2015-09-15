<?php

/*==========================
   Scripts de inicialização
  ==========================*/

function jardimdigital_enqueue_style() {

// Registro dos estilos
  wp_register_style( 'font-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' );
  wp_register_style( 'font-pt-serif', 'http://fonts.googleapis.com/css?family=PT+Serif' );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css' );
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.css' );
  wp_register_style( 'fontello', get_template_directory_uri() . '/assets/fonts/fontello/css/fontello.css' );
  wp_register_style( 'rs-plugin-settings', get_template_directory_uri() . '/assets/plugins/rs-plugin/css/settings.css', screen );
  wp_register_style( 'rs-plugin-extralayers', get_template_directory_uri() . '/assets/plugins/rs-plugin/css/extralayers.css', screen );
  wp_register_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/plugins/magnific-popup/magnific-popup.css' );
  wp_register_style( 'animations', get_template_directory_uri() . '/assets/css/animations.css' );
  wp_register_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl.carousel.css' );
  wp_register_style( 'idea-css', get_template_directory_uri() . '/assets/css/idea.css' );
  wp_register_style( 'idea-color-css', get_template_directory_uri() . '/assets/css/purple.css' );
  wp_register_style( 'idea-custom-css', get_template_directory_uri() . '/assets/css/custom2.css' );

  // Enfileiramento dos estilos
  wp_enqueue_style( 'font-open-sans' );
  wp_enqueue_style( 'font-pt-serif' );
  wp_enqueue_style( 'bootstrap-css' );
  wp_enqueue_style( 'font-awesome' );
  wp_enqueue_style( 'fontello' );
  wp_enqueue_style( 'rs-plugin-settings' );
  wp_enqueue_style( 'rs-plugin-extralayers' );
  wp_enqueue_style( 'magnific-popup-css' );
  wp_enqueue_style( 'animations' );
  wp_enqueue_style( 'owl-carousel-css' );
  wp_enqueue_style( 'idea-css' );
  wp_enqueue_style( 'idea-color-css' );
  wp_enqueue_style( 'idea-custom-css' );

}

function jardimdigital_enqueue_script() {

  // Registro dos scripts
  wp_register_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery.min.js', true );
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), true );
  wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/plugins/modernizr.js', array( 'jquery' ), true );
  wp_register_script( 'rs-plugin-tools', get_template_directory_uri() . '/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js', array( 'jquery' ), true );
  wp_register_script( 'rs-plugin-revolution', get_template_directory_uri() . '/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js', array( 'jquery' ), true );
  wp_register_script( 'isotope', get_template_directory_uri() . '/assets/plugins/isotope/isotope.pkgd.min.js', array( 'jquery' ), true );
  wp_register_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl.carousel.js', array( 'jquery' ), true );
  wp_register_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), true );
  wp_register_script( 'appear-js', get_template_directory_uri() . '/assets/plugins/jquery.appear.js', array( 'jquery' ), true );
  wp_register_script( 'sharrre-js', get_template_directory_uri() . '/assets/plugins/jquery.sharrre.js', array( 'jquery' ), true );
  wp_register_script( 'countto-js', get_template_directory_uri() . '/assets/plugins/jquery.countTo.js', array( 'jquery' ), true );
  wp_register_script( 'parallax-js', get_template_directory_uri() . '/assets/plugins/jquery.parallax-1.1.3.js', array( 'jquery' ), true );
  wp_register_script( 'validate-js', get_template_directory_uri() . '/assets/plugins/jquery.validate.js', array( 'jquery' ), true );
  wp_register_script( 'browser-js', get_template_directory_uri() . '/assets/plugins/jquery.browser.js', array( 'jquery' ), true );
  wp_register_script( 'smoothscroll', get_template_directory_uri() . '/assets/plugins/SmoothScroll.js', array( 'jquery' ), true );
  wp_register_script( 'template-js', get_template_directory_uri() . '/assets/js/template.js', array( 'jquery' ), true );
  wp_register_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), true );
  
  // Enfileiramento dos scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'boostrap-js' );
  wp_enqueue_script( 'modernizr' );
  wp_enqueue_script( 'rs-plugin-tools' );
  wp_enqueue_script( 'rs-plugin-revolution' );
  wp_enqueue_script( 'isotope' );
  wp_enqueue_script( 'owl-carousel-js' );
  wp_enqueue_script( 'magnific-popup-js' );
  wp_enqueue_script( 'appear-js' );
  wp_enqueue_script( 'sharrre-js' );
  wp_enqueue_script( 'countto-js' );
  wp_enqueue_script( 'parallax-js' );
  wp_enqueue_script( 'validate-js' );
  wp_enqueue_script( 'browser-js' );
  wp_enqueue_script( 'smoothscroll' );
  wp_enqueue_script( 'template-js' );
  wp_enqueue_script( 'custom-js' );
  if ( is_singular() && comments_open() && get_option('thread_comments') ) :
    wp_enqueue_script( 'comment-reply' );
  endif;

}

add_action( 'wp_enqueue_scripts', 'jardimdigital_enqueue_style' );  
add_action( 'wp_enqueue_scripts', 'jardimdigital_enqueue_script' );


/*======================
   Configuração do tema
  ======================*/

add_action( 'after_setup_theme', 'jardimdigital_setup' );

function jardimdigital_setup() {

  add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote', 'video', 'audio' ) );

  add_theme_support( 'post-thumbnails' );

}


/*=============
   Comentários
  =============*/

// Lista de comentários
function jd_comments_list($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
  <div id="<?php comment_ID(); ?>" class="comment clearfix">
    <?php if($comment->comment_approved == '0') : ?>
      <div class="alert alert-warning" role="alert">Seu comentário ainda não foi aprovado.</div>
    <?php endif; ?>
    <div class="comment-avatar">
      <?php 
      $author_email = get_comment_author_email();
      echo get_avatar($author_email, $size, $default_avatar ); ?>
    </div>
    <div class="comment-content">
      <!-- <h3>Título do Comentário</h3> -->
      <div class="comment-meta"><?php comment_type(); ?> de <?php comment_author_link(); ?> | <?php comment_date(); ?>, <?php comment_time(); ?></div>
      <div class="comment-body clearfix">
        <p><?php comment_text(); ?></p>
        <div class="btn btn-gray more pull-right"><i class="fa fa-reply"></i><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
        <?php edit_comment_link(__('<i class="fa fa-pencil"></i> Editar'), '<div class="btn more pull-right">', '</div>'); ?>
      </div>
    </div>
  </div>
<?php
}

// Formulário
add_filter('comment_form_default_fields', 'jd_comment_form_fields');
function jd_comment_form_fields( $fields ) {
  $fields['author'] =  '<div class="form-group has-feedback">' . 
                        '<label for="author">Nome <?php if($req) echo "(obrigatório)"; ?></label>' .
                        '<input type="text" class="form-control" id="author" placeholder="" name="author" required>' .
                        '<i class="fa fa-user form-control-feedback"></i>' .
                        '</div>';
  $fields['email']  =   '<div class="form-group has-feedback">' .
                        '<label for="email">Email <?php if($req) echo "(obrigatório)"; ?></label>' .
                        '<input type="text" class="form-control" id="email" placeholder="" name="email" required>' .
                        '<i class="fa fa-envelope form-control-feedback"></i>' .
                        '</div>';
  $fields['url']  =     '<div class="form-group has-feedback">' .
                        '<label for="url">Website <?php if($req) echo "(obrigatório)"; ?></label>' .
                        '<input type="text" class="form-control" id="url" placeholder="" name="url">' .
                        '<i class="fa fa-globe form-control-feedback"></i>' .
                        '</div>';
  return $fields;
}

?>




