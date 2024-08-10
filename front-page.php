    <?php get_header();?>
    <main>
      <article>
        <!-- トップカルーセル -->
        <section id="s_topCarousel">
          <div class="topCarousel">
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/TOP_Carousel1.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/TOP_Carousel2.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/TOP_Carousel3.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/TOP_Carousel4.png">
            </div>
          </div>
          <div class="SP-topCarousel">
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-TOP-Carouselgroup1.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-TOP-Carouselgroup2.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-TOP-Carouselgroup3.png">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-TOP-Carouselgroup4.png">
            </div>
          </div>
          <div id="topLeft">
            <div>
              <p>サポートします</p>
              <p>根本的な症状改善を</p>
              <img src="<?php echo get_template_directory_uri();?>/image/_x32_1.svg" alt="">
              <img src="<?php echo get_template_directory_uri();?>/image/_x31_7.svg" alt="">
            </div>
            <img id="topLeftImg" src="<?php echo get_template_directory_uri();?>/image/topCarouselLeftpart.svg" alt="">
            <img id="SP-topLeftImg" src="<?php echo get_template_directory_uri();?>/image/SP-topCarouselLeftpart.svg" alt="">
          </div>
        </section>
        <!-- お知らせバー -->
        <section id="s_newsBar">
          <div>
            <div>
              <span class="merriweather-sans green">News </span>
              <span class="green">お知らせ</span>
            </div>
            <div id="newsBarDetail">
              <div id="newsBarDate">
                <span>2022/12/21</span>
                <span class="openingHours tag">営業日時</span>
              </div>
              <div id="newsBarContent">
                <span>年末年始の営業時間について</span>
              </div>
            </div>
          </div>
          <div id="newsListLink">
            <a href="<?php echo home_url();?>/news">→お知らせ一覧へ</a>
          </div>
        </section>
        <!-- 特長 -->
        <section id="s_concept">
          <div class="flex-center">
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
              <div class="d_detailBtn">
                <button class="detailBtn"><a href="<?php echo home_url();?>/about">当院について</a></button>
              </div>
            </div>
            <div class="baseBox conceptRight">
              <img class="backImg backPos" src="<?php echo get_template_directory_uri();?>/image/background/BGicon_Light.png" alt="">
              <img class="firstLayer conceptRightImg" src="<?php echo get_template_directory_uri();?>/image/Concept-Imagegroup.png" alt="マッサージしている3枚の画像">
            </div>
          </div>
        </section>
        <!-- コース・料金 -->
        <section id="s_course">
          <img src="<?php echo get_template_directory_uri();?>/image/wave.svg" alt="">
          <div class="baseBox">
            <h3>コース・料金</h3>
            <p>
              当院では保険診療、自費診療ともに
              ご対応しております
            </p>
            <p class="lowerMiddleLightGreen backStr backPos">Course</p>
          </div>
          <div id="courseContents">
            <div>
              <img class="img-360-300 firstLayer" src="<?php echo get_template_directory_uri();?>/image/TOP-insurance2.png" alt="">
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
          <div class="tac baseBox">
            <button class="detailBtn"><a href="<?php echo home_url();?>/course">コース・料金詳細へ</a></button>
            <img class="backImg backPos" src="<?php echo get_template_directory_uri();?>/image/background/BGicon_Green.png" alt="">
          </div>
        </section>
        <!-- お客様の声 -->
        <section id="s_voice">
          <div class="bottomCarousel">
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/Bottom-Carouselgroup1.png" alt="">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/Bottom-Carouselgroup2.png" alt="">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/Bottom-Carouselgroup3.png" alt="">
            </div>
          </div>
          <div class="SP-bottomCarousel">
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-Bottom-Carouselgroup1.png" alt="">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-Bottom-Carouselgroup2.png" alt="">
            </div>
            <div>
              <img class="carouselImg" src="<?php echo get_template_directory_uri();?>/image/SP-Bottom-Carouselgroup3.png" alt="">
            </div>
          </div>
          <div class="semicircle">
            <h3>お客様の声</h3>
            <p>
              痛みの改善に加えて<br>
              自分で予防もできるようになりました
            </p>
          </div>
          <div class="voice">
            <div>
              <img class="circleImg" src="<?php echo get_template_directory_uri();?>/image/TOP-user1.png" alt="">
              <h4>S・K様　30代女性</h4>
              <p>
                1ヶ月で腰の痛みが軽減しました。
                自分で自宅でできるケアも教えていただき、お任せしてよかったです。
              </p>
            </div>
            <div>
              <img class="circleImg" src="<?php echo get_template_directory_uri();?>/image/TOP-user2.png" alt="">
              <h4>T・M様　40代男性</h4>
              <p>
                マラソンで右膝が痛むので、施術を受けています。
                なぜ痛みが生じるのかを身体の仕組みから教えていただき、
                普段の練習メニューも工夫できています。
              </p>
            </div>
            <div>
              <img class="circleImg" src="<?php echo get_template_directory_uri();?>/image/TOP-user3.png" alt="">
              <h4>S・T様　60代女性</h4>
              <p>
                転倒して足を骨折したのをきっかけに、
                痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。
                今は毎日元気に近所を散歩できています。
              </p>
            </div>
          </div>
          <div>
            <button class="detailBtn"><a href="<?php echo home_url();?>/voice">お客様の声一覧へ</a></button>
          </div>
        </section>
        <?php get_template_part("access");?>
      </article>
    </main>
    <?php get_footer();?>