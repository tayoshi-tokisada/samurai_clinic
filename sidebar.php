<section id="s_category">
  <h4>カテゴリ</h4>
  <?php
  $args = array(
    "hide_empty" => 0,
    "title_li" => "",
  );
  wp_list_categories($args);
  ;?>
</section>