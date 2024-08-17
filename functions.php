<?php
/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type){
    if ('post' == $post_type) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'archive';
      $args['label'] = '投稿';
    }
    return $args;
  }
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/*------------------------------------------
 *  サムネイル画像を設定する
 *----------------------------------------*/
add_theme_support('post-thumbnails');
?>