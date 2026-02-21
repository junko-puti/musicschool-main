<?php get_header(); ?>

<main class="contact">
  <!-- fv -->
  <section class="contact__fv fv">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact-sp.jpg" alt="お問い合わせページのファーストビュー">
    </picture>
    <h1 class="fv__catch">お問い合わせ</h1>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- お問い合わせ -->
  <div class="contact__page contact-page">
    <div class="l-inner">
      <p class="c-status-message">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。</p>
      <p class="c-status-message">通常３営業日以内にメールにてご連絡させていただきます。</p>

      <!-- お問い合わせフォーム -->
      <div class="contact-page__form contact-form">
        <!-- <?php
              if (have_posts()) :
                while (have_posts()) : the_post();
                  remove_filter('the_content', 'wpautop');
                  the_content();
                endwhile;
              endif;
              ?> -->
        <!--↑↑↑４回ループしてしまう↑↑↑-->
        <?php
        echo apply_filters(
          'the_content',
          '<!-- wp:snow-monkey-forms/snow-monkey-form {"formId":165} /-->'
        );
        ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>