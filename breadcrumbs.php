        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > <?php
            if(is_archive()):
              echo post_type_archive_title();
            else:
              echo post_custom("titleJP");
            endif;
          ?></p>
        </section>