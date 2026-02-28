  <?php get_header(); ?>

  <main class="top">
    <!-- fv -->
    <section class="top__fv fv">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/fv.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/fv-sp.jpg" alt="HOMEページ ファーストビュー">
      </picture>
      <h2 class="fv__catch">「音楽で生きる」<br class="u-sp">を叶える<br>ミュージックスクール</h2>
    </section>
    <!-- vision -->
    <section class="top__vision top-vision" id="vision">
      <div class="l-inner">
        <div class="top-vision__message">
          <h2 class="top-vision__title">全人類、<br class="u-sp">ミュージシャン計画。</h2>
          <p class="top-vision__text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
          <div class="top-vision__semicircle">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/semicircle.svg" media="(min-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/semicircle-sp.svg" alt="">
            </picture>
          </div>
        </div>
        <div class="top-vision__step top-vision-step">
          <div class="top-vision-step__item">
            <div class="top-vision-step__en">Enthusiasm</div>
            <div class="top-vision-step__ja">熱狂し</div>
          </div>
          <div class="top-vision-step__item">
            <div class="top-vision-step__en">Envision</div>
            <div class="top-vision-step__ja">想像し</div>
          </div>
          <div class="top-vision-step__item">
            <div class="top-vision-step__en">Effulgent</div>
            <div class="top-vision-step__ja">輝く存在へ</div>
          </div>
        </div>
      </div>
    </section>
    <!-- support サポート -->
    <section class="top__support top-support" id="support">
      <div class="l-inner">
        <h2 class="c-title c-title--top-page c-title--white">音楽業界初！<br>収益化までサポートする<br class="u-sp">ミュージックスクール</h2>
        <p class="top-support__text">楽器や作詞作曲などの<br class="u-sp">技術・知識はもちろんのこと<br>自分で稼ぎつづけるための<br class="u-sp">ビジネス面もサポートします！</p>
      </div>
    </section>
    <!-- reason 理由 -->
    <section class="top__reason top-reason" id="reason">
      <div class="l-inner">
        <h2 class="c-title c-title--top-page">きたむらミュージック<br class="u-sp">スクールが選ばれる理由</h2>
        <ul class="top-reason__items">
          <!-- <ul class="top-reason__wrapper card-lists"> -->
          <!--reason1-->
          <li class="top-reason__item">
            <!-- <li class="p-card p-card--horizontal p-card--reason"> -->
            <div class="top-reason__img">
              <!-- <div class="p-card__img"> -->
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason01.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/reason01-sp.jpg" alt="選ばれる理由１">
              </picture>
            </div>
            <div class="top-reason__body">
              <h3 class="top-reason__title">技術面はプロによるマンツーマン授業！</h3>
              <p class="top-reason__text">
                第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。
              </p>
            </div>
          </li>
          <!--reason2-->
          <li class="top-reason__item">
            <!-- <li class="p-card p-card--horizontal p-card--reason"> -->
            <div class="top-reason__img">
              <!-- <div class="p-card__img"> -->
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason02.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/reason02-sp.jpg" alt="選ばれる理由２">
              </picture>
            </div>
            <div class="top-reason__body">
              <h3 class="top-reason__title">収益化するためのビジネスサポート！</h3>
              <p class="top-reason__text">
                コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。
              </p>
            </div>
          </li>
          <!--reason3-->
          <li class="top-reason__item">
            <!-- <li class="p-card p-card--horizontal p-card--reason"> -->
            <div class="top-reason__img">
              <!-- <div class="p-card__img"> -->
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/images/reason03.jpg" media="(min-width: 768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/images/reason03-sp.jpg" alt="選ばれる理由３">
              </picture>
            </div>
            <div class="top-reason__body">
              <h3 class="top-reason__title">24時間365日使える練習ROOMを完備！</h3>
              <p class="top-reason__text">
                一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- voice 生徒さんたちの声 -->
    <section class="top__voice top-voice splide" id="voice" aria-labelledby="voice__title">
      <div class="top-voice__inner">
        <!-- <div class="l-inner l-inner__top-voice"> -->
        <h2 class="c-title c-title--top-page c-title--white" id="voice__title">生徒さんたちの声</h2>
        <div class="splide__track">
          <ul class="top-voice__lists splide__list">

            <?php
            $args = array(
              'posts_per_page' => 6,
              'post_type' => 'result',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                <!-- voice -->
                <li class="top-voice__list top-voice-list splide__slide">
                  <a href="<?php the_permalink(); ?>">
                    <div class="top-voice-list__img">
                      <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                      <?php endif; ?>
                    </div>
                    <div class="top-voice-list__text">
                      <h3 class="top-voice-list__name"><?php the_field('job'); ?>&emsp;<?php the_field('name'); ?>さん</h3>
                      <div class="top-voice-list__comment">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </a>
                </li>

            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="splide__arrows">
          <button type="button" class="splide__arrow splide__arrow--prev custom-arrow prev">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-l.svg" alt="前へ">
          </button>
          <button type="button" class="splide__arrow splide__arrow--next custom-arrow next">
            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-r.svg" alt="次へ">
          </button>
        </div>
      </div>
    </section>
    <!-- flow ご利用の流れ -->
    <section class="top__flow top-flow">
      <div class="l-inner">
        <h2 class="c-title c-title--top-page">ご利用の流れ</h2>
        <dl class="top-flow__list">
          <dt class="top-flow__title">お問い合わせ</dt>
          <dd class="top-flow__discriptiom">
            まずはフォームまたはメールにてお問い合わせください。<br>
            ヒアリングの日程を調整します。
          </dd>
          <dt class="top-flow__title">ヒアリング</dt>
          <dd class="top-flow__discriptiom">
            現在の技術面や将来の目標などをお伺いします。<br>
            悩みや不安な事もお気軽にご相談ください。
          </dd>
          <dt class="top-flow__title">プランのご提案</dt>
          <dd class="top-flow__discriptiom">
            ライフスタイルや目標によって最適なプランをご提案します。<br>
            継続できるようサポートいたします。
          </dd>
          <dt class="top-flow__title">ご入学</dt>
          <dd class="top-flow__discriptiom">
            お申し込み完了後、レッスンがスタートします。<br>
            マンツーマン指導なので、いつからでもスタートが可能です。
          </dd>
        </dl>
      </div>
    </section>
    <!-- faq よくあるご質問 -->
    <section class="top__faq top-faq">
      <div class="l-inner">
        <h2 class="c-title c-title--top-page">よくあるご質問</h2>
        <div class="top-faq__accordion top-faq-accodion">
          <!-- Q1 -->
          <div class="top-faq-accordion__wrapper">
            <h3 class="top-faq-accordion__question">
              <span>
                どのような生徒さんがどれぐらいの期間で稼いでいますか？
              </span>
              <span class="top-faq-accordion__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/faq-arrow.svg" alt="アコーディオンメニューの矢印">
              </span>
            </h3>
            <div class="top-faq-accordion__answer">
              <p>
                テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
          <!-- Q2 -->
          <div class="top-faq-accordion__wrapper">
            <h3 class="top-faq-accordion__question">
              <span>
                途中でプランを変更することは可能ですか？
              </span>
              <span class="top-faq-accordion__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/faq-arrow.svg" alt="アコーディオンメニューの矢印">
              </span>
            </h3>
            <div class="top-faq-accordion__answer">
              <p>
                途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。
              </p>
            </div>
          </div>
          <!-- Q3 -->
          <div class="top-faq-accordion__wrapper">
            <h3 class="top-faq-accordion__question">
              <span>
                入学金などの分割払いはできますか？
              </span>
              <span class="top-faq-accordion__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/faq-arrow.svg" alt="アコーディオンメニューの矢印">
              </span>
            </h3>
            <div class="top-faq-accordion__answer">
              <p>
                テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>
          <!-- Q4 -->
          <div class="top-faq-accordion__wrapper">
            <h3 class="top-faq-accordion__question">
              <span>
                休学することも可能ですか？
              </span>
              <span class="top-faq-accordion__icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/faq-arrow.svg" alt="アコーディオンメニューの矢印">
              </span>
            </h3>
            <div class="top-faq-accordion__answer">
              <p>
                テキストが入ります。テキストが入ります。テキストが入ります。
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- blog ブログ -->
    <section class="top__blog top-blog">
      <div class="l-inner">
        <h2 class="c-title c-title--top-page">ブログ</h2>
        <ul class="top-blog__items">
          <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'blog',
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_query' => array(
              array(
                'key'     => 'recommend', // SCFのフィールド名
                'value'   => '1',         // チェックが入っていると1
                'compare' => 'LIKE',         // 完全一致
              ),
            ),
          );
          $the_query = new WP_Query($args);

          if ($the_query->have_posts()):
            while ($the_query->have_posts()): $the_query->the_post();
          ?>
              <!-- blog -->
              <li class="top-blog__item">
                <a href="<?php the_permalink(); ?>">
                  <div class="top-blog__img">
                    <span class="c-label c-label--sp-m c-label--pc-s">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'blog_cate');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?>
                    </span>
                    <?php if (has_post_thumbnail()) : ?>
                      <?php (the_post_thumbnail()); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                    <?php endif; ?>
                  </div>
                  <div class="top-blog__body">
                    <h3><?php the_title(); ?></h3>
                    <time class="top-blog__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  </div>
                </a>
              </li>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </ul>
        <!-- <div class="top-blog__link c-link">
          <a href="<?php echo esc_url(home_url('blog')); ?>">ブログ一覧へ</a>
        </div> -->
        <div class="top-blog__link">
          <a href="<?php echo esc_url(home_url('blog')); ?>" class="c-link c-link--blog">ブログ一覧へ</a>
        </div>
      </div>
    </section>
  </main>

  <?php get_footer(); ?>