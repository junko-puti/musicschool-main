  <!-- Template: related-articles.php -->

  <!-- 関連記事 -->
  <?php

  $post_type = get_post_type(); // 投稿タイプを取得
  $post_id = get_the_ID();
  // 投稿タイプに応じて使うタクソノミーを定義（必要に応じて追加可能）
  $taxonomy_map = [
    'blog' => 'blog_cate',
    'result' => 'genre',
  ];
  // 投稿タイプに対応するタクソノミーが定義されているか確認
  if (!isset($taxonomy_map[$post_type])) {
    return;
  }
  $taxonomy = $taxonomy_map[$post_type]; //タクソノミーを取得
  // $terms = get_the_terms($post->ID, 'blog_cate');
  $terms = get_the_terms($post_id, $taxonomy);

  if (!empty($terms)):
    // 取得したタームのIDだけを配列に取り出す
    $term_ids = wp_list_pluck($terms, 'term_id');
    // 関連記事のクエリ作成
    $args = [
      'posts_per_page' => 3,
      // 'post_type' => 'blog',
      'post_type' => $post_type,
      'post__not_in' => [get_the_ID()],
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => [
        [
          // 'taxonomy' => 'blog_cate',
          'taxonomy' => $taxonomy,
          'field' => 'term_id',
          'terms' => $term_ids,
        ],
      ],
    ];
    $the_query = new WP_Query($args);
    // 関連記事が存在する場合のみ処理
    if ($the_query->have_posts()): ?>
      <!-- <section class="blog-details__related blog-related"> -->
      <section class="blog-details__related blog-related <?php echo esc_attr($post_type); ?>"> <!--8.2.19 blogとresultでスタイルを分けるためにクラス追加-->
        <h2 class="c-heading-deco">関連記事</h2>
        <ul class="blog-related__items">
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li class="blog-related__item">
              <?php
              // 投稿の最初のタームの名前を取得
              $post_terms = get_the_terms(get_the_ID(), $taxonomy);
              $term_name = (!empty($post_terms)) ? $post_terms[0]->name : ''; ?>
              <a href="<?php the_permalink(); ?>">
                <div class="blog-related__img">
                  <!-- <span class="c-label c-label--sp-s c-label--pc-s"><?php echo esc_html($term_name); ?></span> -->
                  <?php
                  //ラベルサイスのクラスを投稿タイプによって切り替える
                  $label_size_class = ($post_type === 'result')
                    ? 'c-label--pc-l'
                    : 'c-label--pc-s';
                  ?>
                  <span class="c-label c-label--sp-s <?php echo esc_attr($label_size_class); ?> c-label--<?php echo esc_attr($post_type); ?>">
                    <?php echo esc_html($term_name); ?>
                  </span>

                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                  <?php endif; ?>
                </div>
                <div class="blog-related__body">
                  <h3 class="blog-related__title"><?php the_title(); ?></h3>
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                </div>
              </a>
            </li>

          <?php endwhile;?>
        </ul>
        <?php wp_reset_postdata(); ?><!--8.3.18-->
      </section>
    <?php endif; ?>

  <?php endif; ?>