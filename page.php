<?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > ご予約・お問い合わせ</p>
        </section>
        <?php the_content();?>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>