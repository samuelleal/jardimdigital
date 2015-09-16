<div class="comments">
<?php if($comments) : ?>
	<h2 class="title"><?php comments_number('Não há comentários', '1 comentário', '% comentários'); ?> </h2>
	<?php wp_list_comments('type=comment&callback=jd_comments_list');
else : ?>
	<h2 class="title">Nenhum comentário</h2>
<?php endif; ?>
</div>

<?php 

$jd_args = array(
  'id_form'           => 'comment-form',
  'id_submit'         => 'submit',
  'class_submit'      => 'btn btn-default',
  'name_submit'       => 'submit',
  'title_reply'       => __( 'Deixe um comentário' ),
  'title_reply_to'    => __( 'Responder para %s' ),
  'cancel_reply_link' => __( 'Cancelar' ),
  'label_submit'      => __( 'Enviar' ),
  'format'            => 'xhtml',

  'comment_field' =>  '<div class="form-group has-feedback">' .
                      '<label for="comment">Mensagem <?php if($req) echo "(obrigatório)"; ?></label>' .
                      '<textarea class="form-control" rows="8" id="comment" placeholder="" name="comment"></textarea>' .
                      '<i class="fa fa-pencil form-control-feedback"></i>' .
                      '</div>',

  'must_log_in' => '<h2 class="title">' .
    sprintf(
      __( 'Você precisa estar <a href="%s">logado</a> para fazer comentários.' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</h2>',

  'logged_in_as' => '<p>' .
    sprintf(
    __( 'Logado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Sair desta conta">Sair?</a>' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '',

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf(
      __( 'Você pode usar essas tags <abbr title="HyperText Markup Language">HTML</abbr>: %s' ),
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
);

comment_form($jd_args); 

?>


<!-- comments form start -->
<!-- <div class="comments-form">
<?php if(comments_open()) : ?>
  <?php if(get_option('comment_registration') && !$user_ID) : ?>
    <h2 class="title">Você precisa estar <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logado</a> para fazer comentários.</h2>
  <?php else : ?>
    <h2 class="title">Deixe seu comentário</h2>
    <form role="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
      <?php if($user_ID) : ?>
        <p>Logado como <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Deslogar dessa conta">Deslogar &raquo;</a></p>
        <p><small><strong>XHTML:</strong> Você pode usar as seguintes tags: <code><?php echo allowed_tags(); ?></code></small></p>
        <div class="form-group has-feedback">
          <label for="comment">Mensagem <?php if($req) echo "(obrigatório)"; ?></label>
          <textarea class="form-control" rows="8" id="comment" placeholder="" name="comment"></textarea>
          <i class="fa fa-pencil form-control-feedback"></i>
        </div>
      <?php else : ?>
        <div class="form-group has-feedback">
          <label for="author">Nome <?php if($req) echo "(obrigatório)"; ?></label>
          <input type="text" class="form-control" id="author" placeholder="" name="author" value="<?php echo $comment_author; ?>">
          <i class="fa fa-user form-control-feedback"></i>
        </div>
        <div class="form-group has-feedback">
          <label for="email">Email <?php if($req) echo "(obrigatório)"; ?></label>
          <input type="text" class="form-control" id="email" placeholder="" name="email" value="<?php echo $comment_author_email; ?>">
          <i class="fa fa-envelope form-control-feedback"></i>
        </div>
        <div class="form-group has-feedback">
          <label for="url">Website <?php if($req) echo "(obrigatório)"; ?></label>
          <input type="text" class="form-control" id="url" placeholder="" name="url" value="<?php echo $comment_author_url; ?>">
          <i class="fa fa-globe form-control-feedback"></i>
        </div>
        <p><small><strong>XHTML:</strong> Você pode usar as seguintes tags: <code><?php echo allowed_tags(); ?></code></small></p>
        <div class="form-group has-feedback">
          <label for="comment">Mensagem <?php if($req) echo "(obrigatório)"; ?></label>
          <textarea class="form-control" rows="8" id="comment" placeholder="" name="comment"></textarea>
          <i class="fa fa-pencil form-control-feedback"></i>
        </div>
      <?php endif; ?>
      <input type="submit" name="submit" id="submit" value="Enviar" class="btn btn-default">
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
      <?php do_action('comment_form', $post->ID); ?>
    </form>
  <?php endif; ?>
<?php else : ?>
  <h2 class="title">Comentários fechados</h2>
<?php endif; ?>
</div> -->
<!-- comments form end -->