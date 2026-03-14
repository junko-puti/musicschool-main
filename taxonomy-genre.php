<?php get_header(); ?>

<main class="result">
  <!-- fv -->
  <section class="result__fv fv fv--result-list">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/result.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/result-sp.jpg" alt="卒業実績ページのファーストビュー" class="fv__img">
    </picture>
    <h1 class="fv__catch">卒業実績</h1>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- 卒業実績一覧 -->
  <section class="result__list result-list">
    <div class="l-inner">
      <?php
      $term = get_queried_object();
      $term_name = isset($term->name) ? $term->name : 'カテゴリー名不明';
      ?>
      <h2 class="c-title"><?php echo esc_html($term_name); ?></h2>
      <!-- <h2 class="c-title">卒業実績一覧</h2> -->
      <ul class="result-list__items">
        <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
            <!--result-->
            <li class="result-list__item result-item">
              <a href="<?php the_permalink(); ?>">
                <div class="result-item__img">
                  <span class="c-label c-label--sp-l c-label--pc-l">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'genre');
                    if (!empty($terms) && !is_wp_error($terms)) {
                      echo $terms[0]->name;
                    }
                    ?>
                  </span>
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                  <?php endif; ?>
                </div>
                <div class="result-item__body">
                  <h3 class="result-item__title"><?php the_title(); ?></h3>
                  <time class="result-item__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
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