<?php get_header(); ?>

<main class="result-post">
  <!-- fv(スペースの確保)-->
  <div class="fv"></div>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- 卒業実績個別記事ページ -->
  <div class="result-post__details result-details">
    <div class="l-inner">
      <!-- メイン記事 -->
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
      ?>
          <article class="result-details__article result-article">
            <div class="result-article__img">
              <span class="c-label c-label--sp-l c-label--pc-l">ポップス</span>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
              <?php endif; ?>
              <!-- <picture>
            <source srcset="./images/result01.jpg" media="(min-width: 768px)">
            <img src="./images/result01-sp.jpg" alt="アルペジオが劇的に向上する3つの習慣">
          </picture> -->
            </div>
            <div class="result-article__body">
              <h1 class="result-article__title"><?php the_title(); ?></h1>
              <time class="result-article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
              <div class="result-article__table-area">
                <table class="c-table">
                  <tbody>
                    <tr>
                      <th>名前</th>
                      <td><?php the_field('name'); ?></td>
                    </tr>
                    <tr>
                      <th>職業</th>
                      <td><?php the_field('job'); ?></td>
                    </tr>
                    <tr>
                      <th>ジャンル</th>
                      <td>
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'genre');
                        echo $terms ? $terms[0]->name : '';
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>実績</th>
                      <td><?php the_field('achievements'); ?></td>
                    </tr>
                    <tr>
                      <th>SNS</th>
                      <td><?php the_field('sns'); ?></td>
                    </tr>
                  </tbody>
                </table>
                <!-- <p class="result-article__text">
                  <?php the_content(); ?>
                </p> -->
                <div class="result-article__text">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </article>
      <?php
        endwhile;
      endif;
      ?>
      <!-- 前後ページリンク -->
      <nav class="result-details__pager pager">
        <?php get_template_part('template-parts/single-pagination'); ?>

      </nav>
      <!-- 関連記事 -->
      <?php get_template_part('template-parts/related-articles'); ?>

      <!-- <section class="result-details__related result-related">
        <h2 class="c-heading-deco">関連記事</h2>
        <ul class="result-related__items">
          <li class="result-related__item">
            <a href="./result-details.html">
              <div class="result-related__img">
                <span class="c-label c-label--sp-s c-label--pc-l">ギター</span>
                <picture>
                  <source srcset="./images/result02.jpg" media="(min-width: 768px)">
                  <img src="./images/result02-sp.jpg" alt="関連記事">
                </picture>
              </div>
              <div class="result-related__body">
                <h3 class="result-related__title">タイトルが入ります。タイトル<span class="u-pc">が入ります。タイトルが入ります。</span></h3>
                <time class="result-related__date" datetime="2025-11-30">0000.00.00</time>
              </div>
            </a>
          </li>
          <li class="result-related__item">
            <a href="./result-details.html">
              <div class="result-related__img">
                <span class="c-label c-label--sp-s c-label--pc-l">ギター</span>
                <picture>
                  <source srcset="./images/result03.jpg" media="(min-width: 768px)">
                  <img src="./images/result03-sp.jpg" alt="関連記事">
                </picture>
              </div>
              <div class="result-related__body">
                <h3 class="result-related__title">タイトルが入ります。タイトル<span class="u-pc">が入ります。タイトルが入ります。</span></h3>
                <time class="result-related__date" datetime="2025-11-30">0000.00.00</time>
              </div>
            </a>
          </li>
          <li class="result-related__item">
            <a href="./result-details.html">
              <div class="result-related__img">
                <span class="c-label c-label--sp-s c-label--pc-l">ギター</span>
                <picture>
                  <source srcset="./images/result04.jpg" media="(min-width: 768px)">
                  <img src="./images/result04-sp.jpg" alt="関連記事">
                </picture>
              </div>
              <div class="result-related__body">
                <h3 class="result-related__title">タイトルが入ります。タイトル<span class="u-pc">が入ります。タイトルが入ります。</span></h3>
                <time class="result-related__date" datetime="2025-11-30">0000.00.00</time>
              </div>
            </a>
          </li>
        </ul>
      </section> -->
    </div>
  </div>
</main>

<?php get_footer(); ?>