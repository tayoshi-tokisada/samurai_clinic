        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > <?php
            if(is_page()):
              echo post_custom("titleJP");
            else:
              echo get_titleJP();
            endif;
          ?></p>
        </section>