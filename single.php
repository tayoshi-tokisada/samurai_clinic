<?php
function get_titleJP(){
  return "お知らせ";
}
function get_titleEN(){
  return "News";
}
$cat = get_the_category();
$slug = $cat[0]->slug;
$cat_name = $cat[0]->cat_name;

$prev_post = get_previous_post();
$next_post = get_next_post();
?>

<?php get_header();?>
    <main>
    <article>
        <?php get_template_part("mainVisual");?>
        <?php get_template_part("breadcrumbs");?>
        <section id="mainContent">
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <h1><?php the_title();?></h1>
          <p>
            <?php echo get_the_date("Y年m月d");?>&nbsp;&nbsp;
            <span class="openingHours tag"><?php echo $cat_name;?></span>
          </p>
          <?php the_post_thumbnail();?>
          <?php the_content();?>
          <?php if($next_post || $prev_post):?>
          <p>
            <?php if($prev_post):?>
            <a href="<?php echo get_permalink($prev_post->ID)?>">
              ＜&nbsp;前の記事へ&nbsp;&nbsp;
            </a>
            <?php endif;?>
            <span class="pcOnly">お知らせ</span>一覧&nbsp;&nbsp;
            <?php if($next_post):?>
            <a href="<?php echo get_permalink($next_post->ID);?>">
              次の記事へ&nbsp;＞
            </a>
            <?php endif;?>
          </p>
          <?php endif;?>
          <?php endwhile; endif;?>
          </section>
          <?php get_template_part("sidebar");?>
          <?php get_template_part("access");?>
        </article>
      </main>
      <?php get_footer();?>