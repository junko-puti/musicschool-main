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
              <span class="c-label c-label--sp-l c-label--pc-l">
                <?php
                  $terms = get_the_terms(get_the_ID(), 'genre');
                  if (!empty($terms) && !is_wp_error($terms)) {
                    echo $terms[0]->name;
                  }
                ?>
              </span>
              <!-- <span class="c-label c-label--sp-l c-label--pc-l">ポップス</span> -->
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

    </div>
  </div>
</main>

<?php get_template_part('template-parts/follow-btns'); ?>

<?php get_footer(); ?>