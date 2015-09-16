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
  wp_register_style( 'jardimdigital-css', get_template_directory_uri() . '/style.css' );

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
  wp_enqueue_style( 'jardimdigital-css' );

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


/*=========
   Widgets
  =========*/

// Registrar Áreas de Widget
function jd_widgets_init() {
 
  register_sidebar( array(
    'name' => __( 'Barra Lateral', 'jardim_digital' ),
    'id' => 'right_sidebar',
    'description' => __( 'Barra da lateral direita', 'jardim_digital' ),
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="title">',
    'after_title' => '</h3><div class="separator"></div>',
  ) );

  register_sidebar( array(
    'name' => __( 'Pré-Rodapé', 'jardim_digital' ),
    'id' => 'top_footer',
    'description' => __( 'Área com widgets antes do rodapé', 'jardim_digital' ),
    'before_widget' => '<div id="%1$s" class="col-md-6 %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
    'name' => __( 'Rodapé', 'jardim_digital' ),
    'id' => 'main_footer',
    'description' => __( 'Área principal de rodapé, com widgets', 'jardim_digital' ),
    'before_widget' => '<div id="%1$s" class="col-sm-6 %2$s"><div class="footer-content">',
    'after_widget' => '</div></div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'jd_widgets_init' );


/* 
  Widget Informações
  ==================
*/

// register widget
if( class_exists( 'WidgetImageField' ) )
  add_action('widgets_init', create_function('', 'register_widget("jd_info_widget");'));

class jd_info_widget extends WP_Widget {

  var $image_field = 'image';  // the image field ID

  // constructor
  function jd_info_widget() {
    parent::WP_Widget(false, $name = __('JD Info Widget', 'jardim_digital') );
  }

  // widget form creation
  function form($instance) {  

    // Check values
    // if( $instance) {
         $logo = esc_attr( isset( $instance[$this->image_field] ) ? $instance[$this->image_field] : 0 );
         $descricao = esc_textarea($instance['descricao']);
         $endereco = esc_attr($instance['endereco']);
         $email = esc_attr($instance['email']);
         $telefone = esc_attr($instance['telefone']);
         $facebook = esc_attr($instance['facebook']);
         $twitter = esc_attr($instance['twitter']);
         $googleplus = esc_attr($instance['googleplus']);
         $linkedin = esc_attr($instance['linkedin']);
         $github = esc_attr($instance['github']);
         $contato = esc_attr($instance['contato']);
         $image = new WidgetImageField( $this, $logo );
    // } else {
    //      $logo = '';
    //      $descricao = '';
    //      $endereco = '';
    //      $email = '';
    //      $telefone = '';
    //      $facebook = '';
    //      $twitter = '';
    //      $googleplus = '';
    //      $linkedin = '';
    //      $github = '';
    //      $image = '';
    // }
    ?>

    <p>
    <label><?php _e('Logotipo', 'jardim_digital'); ?></label>
    <?php echo $image->get_widget_field(); ?>
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('endereco'); ?>"><?php _e('Endereço:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('endereco'); ?>" name="<?php echo $this->get_field_name('endereco'); ?>" type="text" value="<?php echo $endereco; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('telefone'); ?>"><?php _e('Telefone:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('telefone'); ?>" name="<?php echo $this->get_field_name('telefone'); ?>" type="text" value="<?php echo $telefone; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('descricao'); ?>"><?php _e('Descrição:', 'jardim_digital'); ?></label>
    <textarea class="widefat" id="<?php echo $this->get_field_id('descricao'); ?>" name="<?php echo $this->get_field_name('descricao'); ?>"><?php echo $descricao; ?></textarea>
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('URL do perfil no Facebook:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('URL do perfil no Twitter:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('URL do perfil no Google Plus:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo $googleplus; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('URL do perfil no LinkedIn:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('URL do perfil no Github:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" type="text" value="<?php echo $github; ?>" />
    </p>

    <p>
    <label for="<?php echo $this->get_field_id('contato'); ?>"><?php _e('ID da página de contato:', 'jardim_digital'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('contato'); ?>" name="<?php echo $this->get_field_name('contato'); ?>" type="text" value="<?php echo $contato; ?>" />
    </p>

  <?php
  }

  // widget display
  function widget($args, $instance) {
    extract( $args );
    // $logo = $instance['logo'];
    $logo = $instance[$this->image_field];
    $descricao = apply_filters( 'descricao', empty( $instance['descricao'] ) ? '' : $instance['descricao'], $instance );
    $endereco = $instance['endereco'];
    $email = $instance['email'];
    $telefone = $instance['telefone'];
    $facebook = $instance['facebook'];
    $twitter = $instance['twitter'];
    $googleplus = $instance['googleplus'];
    $linkedin = $instance['linkedin'];
    $github = $instance['github'];
    $contato = $instance['contato'];
    $image = new WidgetImageField( $this, $logo );

    // Display the widget
    echo $before_widget;
    if( $logo ) {
      echo '<div class="logo-footer"><img id="logo-footer" src="'.$image->get_image_src( 'thumbnail' ).'"  /></div>';
    }
    if( $descricao ) { 
      echo wpautop($descricao); 
    }
    echo '<div class="row"><div class="col-md-6"><ul class="list-icons">';
    if ($email) {
      echo '<li><i class="fa fa-at pr-10"></i>'.$email.'</li>';
    }
    if ($telefone) {
      echo '<li><i class="fa fa-phone pr-10"></i>'.$telefone.'</li>';
    }            
    if ($endereco) {
      echo '<li><i class="fa fa-map-marker pr-10"></i>'.$endereco.'</li>';
    }                
    echo '</ul></div>';
    echo '<div class="col-md-6"><ul class="social-links circle">';
    if ($facebook) {
      echo '<li class="facebook"><a target="_blank" href="'.$facebook.'"><i class="fa fa-facebook"></i></a></li>';
    }
    if ($twitter) {
      echo '<li class="twitter"><a target="_blank" href="'.$twitter.'"><i class="fa fa-twitter"></i></a></li>';
    }
    if ($googleplus) {
      echo '<li class="googleplus"><a target="_blank" href="'.$googleplus.'"><i class="fa fa-google-plus"></i></a></li>';
    }
    if ($linkedin) {
      echo '<li class="linkedin"><a target="_blank" href="'.$linkedin.'"><i class="fa fa-linkedin"></i></a></li>';
    }
    if ($github) {
      echo '<li class="github"><a target="_blank" href="'.$github.'"><i class="fa fa-github"></i></a></li>';
    }
    echo '</ul></div></div>';
    if ($contato) {
      echo '<a href="'.get_site_url().'/?page_id='.$contato.'" class="link"><span>mais informações</span></a>';
    }
    echo $after_widget;
    }

  // widget update
  function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance[$this->image_field]    = intval( strip_tags( $new_instance[$this->image_field] ) );
      if ( current_user_can('unfiltered_html') )
        $instance['descricao'] =  $new_instance['descricao'];
      else
      $instance['descricao'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['descricao']) ) );
      $instance['endereco'] = strip_tags($new_instance['endereco']);
      $instance['email'] = strip_tags($new_instance['email']);
      $instance['telefone'] = strip_tags($new_instance['telefone']);
      $instance['facebook'] = strip_tags($new_instance['facebook']);
      $instance['twitter'] = strip_tags($new_instance['twitter']);
      $instance['googleplus'] = strip_tags($new_instance['googleplus']);
      $instance['linkedin'] = strip_tags($new_instance['linkedin']);
      $instance['github'] = strip_tags($new_instance['github']);
      $instance['contato'] = strip_tags($new_instance['contato']);
     return $instance;
  }

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




