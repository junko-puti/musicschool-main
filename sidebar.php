<!-- Template: sidebar.php -->

<aside class="l-two-column__sidebar blog-details__sidebar sidebar">
  <!-- 無料メールマガジン -->
  <div class="sidebar__newsletter sidebar-newsletter sidebar__content">
    <p class="c-heading-deco">無料メールマガジン</p>
    <div class="sidebar-newsletter__container">
      <a href="#">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/images/220-170.png" media="(min-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/images/295-228.png" alt="バナーダミー画像">
        </picture>
        <p>バナー広告</p>
      </a>
    </div>
  </div>
  <!-- ブログ内を検索 -->
  <div class="sidebar__search sidebar-search sidebar__content">
    <p class="c-heading-deco">ブログ内を検索</p>
    <div class="sidebar-search__container">
      <?php get_search_form(); ?>
    </div>
  </div>
  <!-- おすすめの記事 -->
  <div class="sidebar__recommend sidebar-recommend sidebar__content">
    <p class="c-heading-deco">おすすめの記事</p>
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
    ?>
    <?php if ($the_query->have_posts()): ?>
      <ul class="sidebar-recommend__items">
        <?php 
        while ($the_query->have_posts()): $the_query->the_post(); 
        ?>
          <li class="sidebar-recommend__item">
            <a href="<?php the_permalink(); ?>">
              <div class="sidebar-recommend__img">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                <?php endif; ?>
              </div>
              <div class="sidebar-recommend__body">
                <p class="sidebar-recommend__title"><?php the_title(); ?></p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?><!--8.3.18-->
    <?php else : ?><!-- 8.3.7 -->
      <div class="sidebar__recommend--no-post">
      <!-- <div class="top-blog--no-post"> -->
        <p>おすすめ記事はありません。</p>
      </div>
    <?php endif; ?>
  </div>

  <!-- カテゴリー -->
  <div class="sidebar__category sidebar-category sidebar__content">
    <p class="c-heading-deco">カテゴリー</p>
    <ul class="sidebar-category__list">
      <?php
      $terms = get_terms([
        'taxonomy' => 'blog_cate',
        'hide_empty' => true,
      ]);
      if (!is_wp_error($terms) && !empty($terms)) :
        foreach ($terms as $term) :
          $term_link = get_term_link($term->term_id);
      ?>
          <li>
            <a href="<?php echo esc_url($term_link); ?>">
              <?php echo esc_html($term->name); ?>
            </a>
          </li>
      <?php
        endforeach;
      endif;
      ?>
    </ul>
  </div>
</aside>