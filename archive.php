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
?>

<?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <?php get_template_part("breadcrumbs");?>
        <section id="mainContent">
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <div>
            <?php the_post_thumbnail();?>
            <div>
              <h2><a href="<?php the_permalink();?>"><?php echo wp_trim_words(get_the_title(), 50, "...");?></a></h2>
              <p>
                <?php echo get_the_date("Y年m月d");?>&nbsp;&nbsp;
                <span class="openingHours tag"><?php echo $cat_name;?></span>
              </p>
            </div>
          </div>
          <?php endwhile; endif;?>
          <p class="pagination"><?php
            echo paginate_links(array(
              "total" => $wp_query->max_num_pages,
              "show_all" => false,
              "endsize" => 1,
              "midsize" => 2,
              'prev_next' => false,
            ));
          ?></p>
        </section>
        <?php get_template_part("sidebar");?>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>