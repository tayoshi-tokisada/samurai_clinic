<?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > <?php echo post_custom("titleJP");?></p>
        </section>
        <section id="mainContent">
          <?php the_content();?>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>