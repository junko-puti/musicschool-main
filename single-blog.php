<?php get_header(); ?>

<main class="blog-post">
  <!-- fv(スペースの確保)-->
  <div class="blog-post__fv fv"></div>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- ブログ個別記事ページ -->
  <div class="blog-post__details blog-details">
    <div class="l-inner">
      <div class="l-two-column">
        <!-- ---------- -->
        <!--   メイン   -->
        <!-- ---------- -->
        <div class="l-two-column__main blog-details__main">
          <!-- メイン記事 -->
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>
              <article class="blog-details__article blog-article">
                <div class="blog-article__img">
                  <span class="c-label c-label--sp-m c-label--pc-s">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'blog_cate');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      echo esc_html($terms[0]->name);
                    }
                    ?>
                  </span>
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                  <?php endif; ?>
                </div>
                <div class="blog-article__body">
                  <h1 class="blog-article__title blog-article__title--first"><?php the_title(); ?></h1>
                  <time class="blog-article__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <!-- snsボタン -->
                  <ul class="sns-btn">
                    <?php
                    $url = urlencode(get_permalink());
                    $title = urlencode(get_the_title());
                    ?>
                    <li>
                      <a href="<?php echo esc_url('https://www.facebook.com/share.php?u=' . $url); ?>" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fexample.com%2F"> -->
                        <div class="sns-btn__img">
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/btn-facebook.svg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/btn-facebook-sp.svg" alt="facebookのアイコン">
                          </picture>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo esc_url('https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title); ?>" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fexample.com%2F&text=%E3%83%88%E3%83%83%E3%83%97%E3%83%9A%E3%83%BC%E3%82%B8%E3%81%B8%E3%81%A9%E3%81%86%E3%81%9E"> -->
                        <div class="sns-btn__img">
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/btn-twitter.svg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/btn-twitter-sp.svg" alt="twitterのアイコン">
                          </picture>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo esc_url('http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title); ?>" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="https://b.hatena.ne.jp/entry/https%3A%2F%2Fexample.com%2F"> -->
                        <div class="sns-btn__img">
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/btn-hatena.svg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/btn-hatena-sp.svg" alt="はてなブックマークのアイコン">
                          </picture>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo esc_url('https://social-plugins.line.me/lineit/share?url=' . $url); ?>" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fexample.com%2F"> -->
                        <div class="sns-btn__img">
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/btn-line.svg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/btn-line-sp.svg" alt="LINEのアイコン">
                          </picture>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo esc_url('https://getpocket.com/edit?url=' . $url . '&title=' . $title); ?>" target="_blank" rel="noopener noreferrer">
                        <!-- <a href="https://getpocket.com/edit?url=https%3A%2F%2Fexample.com%2F"> -->
                        <div class="sns-btn__img">
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/images/btn-pocket.svg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/btn-pocket-sp.svg" alt="Pocketのアイコン">
                          </picture>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <!-- --- -->
                  <?php the_content(); ?>
                  <!-- 固定リンク（テンプレート直書き） -->
                  <p class="blog-article__link">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="c-link">
                      テキストリンク
                    </a>
                  </p>
                </div>
              </article>
          <?php
            endwhile;
          endif;
          ?>
          <!-- 前後ページリンク -->
          <div class="blog-details__pager">
            <?php get_template_part('template-parts/single-pagination'); ?>
          </div>
          <!-- 関連記事 -->
          <?php get_template_part('template-parts/related-articles'); ?>
        </div>

        <!-- --------- -->
        <!-- サイドバー -->
        <!-- --------- -->
        <?php get_sidebar(); ?>

      </div>
    </div>
  </div><!-- l-two-column -->
</main>

<?php get_template_part('template-parts/follow-btns'); ?>

<?php get_footer(); ?>