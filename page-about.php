    <?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > 当院について</p>
        </section>
        <!-- 特長 -->
        <section id="s_concept">
          <div class="conceptContent">
            <div class="conceptLeft">
              <div class="baseBox">
                <h2>Concept<br><span>特長</span></h2>
                <p class="lightGreen backStr backPos">Concept</p>
                <p class="fz32 green m0 firstLayer nowrap">
                  日々変化する<br>
                  カラダと心を癒す<br>
                  パーソナル<br>
                  トレーナーとして<br>
                </p>
              </div>
              <p id="conceptDetail">
                当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
                <br><br>
                また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
                <br><br>
                ご不安な点や疑問点などお気軽にご相談くださいませ。
              </p>
            </div>
            <div class="baseBox conceptRight">
              <img class="backImg backPos" src="<?php echo get_template_directory_uri();?>/image/background/BGicon_Light.png" alt="">
              <img class="firstLayer conceptRightImg" src="<?php echo get_template_directory_uri();?>/image/Concept-Imagegroup.png" alt="マッサージしている3枚の画像">
            </div>
          </div>
        </section>
        <!-- 施術の流れ -->
        <section id="s_flow">
          <div class="conceptContent">
            <div class="conceptLeft">
              <div class="baseBox">
                <h2>Flow<br><span>施術の流れ</span></h2>
                <p class="lightGreen backStr backPos">Flow</p>
                <ol id="flowDetail">
                  <li>受付</li>
                  <li>問診票のご記入</li>
                  <li>カウンセリング</li>
                  <li>施術</li>
                  <li>アフターカウンセリング</li>
                </ol>
              </div>
            </div>
            <div class="baseBox conceptRight">
              <img class="backImg backPos" src="<?php echo get_template_directory_uri();?>/image/background/BGicon_Light.png" alt="">
              <img class="firstLayer conceptRightImg" src="<?php echo get_template_directory_uri();?>/image/Flow-Imagegroup.png" alt="施術の流れを説明する3枚の画像">
            </div>
          </div>
        </section>
        <!-- 根本改善のポイント -->
        <section id="s_point">
          <h3>根本改善のポイント</h3>
          <p>
            お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br>
            ご自身でできるケアなども含めて施術方針をお作りします。
          </p>
          <div class="point">
            <div>
              <img class="img-320-320" src="<?php echo get_template_directory_uri();?>/image/Point1.png" alt="">
              <p>
                丁寧なカウンセリング
              </p>
            </div>
            <div>
              <img class="img-320-320" src="<?php echo get_template_directory_uri();?>/image/Point2.png" alt="">
              <p>
                徹底的分析
              </p>
            </div>
            <div>
              <img class="img-320-320" src="<?php echo get_template_directory_uri();?>/image/Point3.png" alt="">
              <p>
                施術計画のご提案
              </p>
            </div>
          </div>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>