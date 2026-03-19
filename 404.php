<?php get_header(); ?>

  <main class="error-page">
    <!-- fv -->
    <section class="error-page__fv fv">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/404.jpg" media="(min-width: 768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/images/404-sp.jpg" alt="404ページのファーストビュー">
      </picture>
      <h1 class="fv__catch">404 not found</h1>
    </section>
    <!-- 404 -->
    <div class="error-404">
      <div class="l-inner">
        <p class="c-status-message">申し訳ございませんが、お探しのページが見つかりませんでした。<br>お探しのページは一時的に表示ができない状態にあるか、移動または削除された可能性があります。</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--primary"><span>ホームへ戻る</span></a>
      </div>
    </div>
  </main>
<?php get_footer(); ?>