  <?php get_header(); ?>

  <main class="blog">
    <!-- fv -->
    <section class="blog__fv fv">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/blog.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-sp.jpg" alt="ブログ一覧ページのファーストビュー">
      </picture>
      <h1 class="fv__catch">ブログ</h1>
    </section>
    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- ブログ一覧 -->
    <section class="blog__list blog-list">
      <div class="l-inner">
        <?php
        $term = get_queried_object();
        $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
        ?>
        <h2 class="c-title"><?php echo esc_html($term_name); ?></h2>
        <!-- <h2 class="c-title">ブログ一覧</h2> -->
        <ul class="blog-list__items">
          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>
              <!--blog-->
              <li class="blog-list__item blog-item">
                <a href="<?php the_permalink(); ?>">
                  <div class="blog-item__img">
                    <span class="c-label c-label--sp-m c-label--pc-s">
                      <?php $terms = get_the_terms(get_the_ID(), 'blog_cate');
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
                  </div>
                  <div class="blog-item__body">
                    <h3 class="blog-item__title"><?php the_title(); ?></h3>
                    <time class="blog-item__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <div class="blog-item__text">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </a>
              </li>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
        <!-- ページャー -->
        <div class="c-pager">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>
  </main>

  <?php get_template_part('template-parts/follow-btns'); ?>

  <?php get_footer(); ?>