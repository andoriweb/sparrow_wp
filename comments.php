<?php if (comments_open()) { ?>
  <h4><?php comments_number('No comments', '1 comment', '% comments'); ?> </h4>
    <?php if (get_comments_number() == 0) { ?>
      
    <?php } else { ?>
    <ol class="commentlist">
      <?php
        function verstaka_comment($comment, $args, $depth){
          $GLOBALS['comment'] = $comment; ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
          <div id="comment-<?php comment_ID(); ?>">

            <div class="avatar">
              <?php echo get_avatar($comment, 50, '', array( 'class' => 'avatar' )); ?>
            </div>

            <div class="comment-info">
              <cite><?php echo get_comment_author_link(); ?></cite>
              <div class="comment-meta">
                <time class="comment-time" datetime="2014-01-14T23:05"><?php echo get_comment_date(); ?> @ 23:05</time>
                <span class="sep">/</span>
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
              </div>
            </div>

            <div class="comment-text">
              <?php if ($comment->comment_approved == '0') : ?>
                <em class="text-red"><?php _e('Ваш комментарий ждёт модерации.') ?></em>
                <br>
              <?php endif; ?>

                <?php comment_text(); ?>
                
            </div>

          </div>
        </li>
      <?php }
        $args = array(
          'reply_text' => 'Replay',
          'callback' => 'verstaka_comment'
        );
        wp_list_comments($args);
      ?>
    </ol>
  <?php } ?>

    <h3>Leave a Comment</h3>
  
    <?php
      $fields = array(
        'author' => '<div class="cf"><label for="cName">' . __( 'Name ' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="cName" name="author"' . esc_attr($commenter['comment_author']) . '" placeholder="" pattern="[A-Za-zА-Яа-я]{3,}" maxlength="30" autocomplete="on" tabindex="1" required' . $aria_req . '></div>',

        'email' => '<div class="cf"><label for="cEmail">' . __( 'Email ') . ($req ? '<span class="required">*</span>' : '') . '</label><input type="email" id="cEmail" name="email"' . esc_attr($commenter['comment_author_email']) . '" placeholder="example@example.com" maxlength="30" autocomplete="on" tabindex="2" required' . $aria_req . '></div>',

        'url' => '<div class="cf"><label for="cWebsite">' . __( 'Website ' ) . ($req ? '<span class="required">*</span>' : '') . '</label><input type="text" id="cWebsite" name="url"' . esc_attr($commenter['comment_author_url']) . '" placeholder="www.example.com" maxlength="30" tabindex="3" autocomplete="on"></div>'
      );

      $args = array(
        'comment_notes_before' => '',
        'comment_field' => '<div class="message cf"><label for="cMessage">' . _x( 'Comment', 'noun' ) . '</label><textarea id="cMessage" name="comment" cols="50" rows="10" aria-required="true" placeholder=""></textarea></div>',
        'submit_button' => '<button type="submit" class="submit">Submit</button>',
        'label_submit' => 'Отправить',
        'fields' => apply_filters('comment_form_default_fields', $fields)
      );
      comment_form($args);
    ?>
    <?php } else { ?>
    <h3>Обсуждения закрыты для данной страницы</h3>
  <?php }
?>
