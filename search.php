<?php get_header(); ?>


<main class="search">
  <!-- fv(スペースの確保)-->
  <div class="search__fv fv"></div>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- 検索結果一覧 -->
  <section class="search__list search-list blog-list">
    <div class="l-inner">
      <?php if (!empty(get_search_query())): ?>
        <?php
        if (have_posts()):
          $total_posts = $wp_query->found_posts;
        ?>
          <div class="search-list__heading">
            <p class="serch-list__keyword">「<span><?php echo get_search_query(); ?></span>」の検索結果</p>
            <span class="search-list__counter"><?php echo $total_posts ?>件</span>
          </div>

          <ul class="blog-list__items blog-list__items--search">
            <?php
            while (have_posts()):
              the_post();
            ?>
              <!--blog検索-->
              <li class="blog-list__item blog-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="blog-item__img">
                    <span class="c-label c-label--sp-m c-label--pc-s">
                      <?php
                      $terms = get_the_terms(get_the_ID(), 'blog_cate');
                      if (!empty($terms) && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                      }
                      ?>
                    </span>
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                    <?php endif; ?>
                    <!-- <picture>
                <source srcset="./images/blog001.jpg" media="(min-width: 768px)">
                <img src="./images/blog01-sp.jpg" alt="アルペジオが劇的に向上する3つの習慣">
              </picture> -->
                  </div>
                  <div class="blog-item__body">
                    
                    <h2 class="blog-item__title"><?php the_title(); ?></h2>
                    <time class="blog-item__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <div class="blog-item__text">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </a>
              </li>
            <?php
            endwhile;
            ?>
          </ul>
          <!-- ページャー -->
          <div class="c-pager">
            <?php wp_pagenavi(); ?>
          </div>
          <!--else-->
        <?php else : ?>
          <div class="p-search-result__no-result">
            <p>検索されたキーワードにマッチする<br class="u-sp">記事はありませんでした。</p>
            <a onclick="history.back()" class="c-btn c-btn--primary"><span>戻る</span></a>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="p-search-result__no-result">
          <p>検索キーワードが未入力です。</p>
          <a onclick="history.back()" class="c-btn c-btn--primary"><span>戻る</span></a>
        </div>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_template_part('template-parts/follow-btns'); ?>

<?php get_footer(); ?>