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

<?php get_template_part('template-parts/follow-btns'); ?>

<!-- ステータスが 'complete'（送信完了）になった時だけ実行 -->
<script>
  document.addEventListener('smf.submit', function(event) {
    if (event.detail.status === 'complete') {
      const redirectUrl = '<?php echo esc_url(home_url('/contact-send/')); ?>';
      window.location.href = redirectUrl + '?smf_sent=true';
    }
  }, false);
</script>


<?php get_footer(); ?>