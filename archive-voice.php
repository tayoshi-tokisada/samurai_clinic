<?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <?php get_template_part("breadcrumbs");?>
        <!-- お知らせ -->
        <section id="s_voice">
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <div>
            <?php the_post_thumbnail();?>
            <div>
              <h2>
                <?php the_title();?>
              </h2>
              <p>
                <?php echo get_the_content();?>
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
          ;?></p>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>