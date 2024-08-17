        <!-- メインビジュアル -->
        <section id="s_mainVisual">
          <img class="PC-mainVisual" src="<?php echo get_template_directory_uri();?>/image/About.png" alt="">
          <img class="SP-mainVisual" src="<?php echo get_template_directory_uri();?>/image/SP-About.png" alt="">
          <div id="topLeft">
            <div>
              <p><?php
                if(is_archive()):
                  echo ucfirst(esc_html(get_post_type_object(get_post_type())->name));
                else:
                  echo post_custom("titleEN");
                endif;
              ?></p>
              <p><?php
                if(is_archive()):
                  echo esc_html(get_post_type_object(get_post_type())->label);
                else:
                  echo post_custom("titleJP");
                endif;
              ?></p>
              <img src="<?php echo get_template_directory_uri();?>/image/_x31_7.svg" alt="">
            </div>
            <img id="PC-topLeftImg" src="<?php echo get_template_directory_uri();?>/image/topCarouselLeftpart.svg" alt="">
            <img id="SP-topLeftImg" src="<?php echo get_template_directory_uri();?>/image/SP-topCarouselLeftpart.svg" alt="">
          </div>
        </section>