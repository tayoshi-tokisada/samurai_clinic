    <?php get_header();?>
    <main>
      <article>
        <?php get_template_part("mainVisual");?>
        <!-- breadcrumbs -->
        <section id="s_breadcrumbs">
          <p>ホーム > <?php echo post_custom("titleJP");?></p>
        </section>
        <!-- コース・料金 -->
        <section id="s_course">
          <div>
            <h3>コース・料金</h3>
            <p>
              当院では保険診療、自費診療ともに<br>
              ご対応しております
            </p>
          </div>
          <div id="courseContent">
            <div>
              <img class="img-360-300" src="<?php echo get_template_directory_uri();?>/image/TOP-insurance2.png" alt="">
              <h4>保険診療</h4>
              <ul>
                <li>骨折・打撲・捻挫・脱臼</li>
                <li>スポーツ診療</li>
                <li>交通事故</li>
              </ul>
            </div>
            <div>
              <img class="img-360-300" src="<?php echo get_template_directory_uri();?>/image/TOP-self2.png" alt="">
              <h4>自費診療</h4>
              <ul>
                <li>腰痛・肩こり</li>
                <li>冷え性・だるさ</li>
                <li>骨盤・背骨矯正</li>
              </ul>
            </div>
          </div>
        </section>
        <!-- 保険診療 -->
        <section id="s_insurance">
          <div id="insuranceContent">
            <div class="conceptLeft">
              <div>
                <h2>Insurance<br><span>保険診療</span></h2>
                <p class="pcOnly">
                  健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
                  「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
                </p>
                <ul class="nowrap">
                  <li>骨折・打撲・捻挫・脱臼</li>
                  <li>スポーツ診療</li>
                  <li>交通事故</li>
                </ul>
              </div>
            </div>
            <div class="conceptRight">
              <img class="img-520-320" src="<?php echo get_template_directory_uri();?>/image/TOP-insurance1.png" alt="施術の流れを説明する3枚の画像">
            </div>
          </div>
        </section>
        <!-- 自費診療 -->
        <section id="s_selfPay">
          <div id="selfPayContent">
            <div class="conceptLeft">
              <div>
                <h2>Self-pay<br><span>自費診療</span></h2>
                <p class="pcOnly">
                  慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
                </p>
                <ul class="nowrap">
                  <li>腰痛・肩こり</li>
                  <li>冷え性・だるさ</li>
                  <li>骨盤・背骨矯正</li>
                </ul>
                <div id="selfPayPrice">
                  <p>
                    初回　<br>8,800円（税込） / 50分<br><br>
                  </p>
                  <p>
                    2回目以降　<br>6,600円（税込） / 30分
                  </p>
                </div>
              </div>
            </div>
            <div class="conceptRight">
              <img class="img-520-320" src="<?php echo get_template_directory_uri();?>/image/TOP-self1.png" alt="施術の流れを説明する3枚の画像">
            </div>
          </div>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>