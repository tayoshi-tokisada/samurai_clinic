<?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <?php get_template_part("breadcrumbs");?>
        <section id="mainContent">
          <?php the_content();?>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>