  <!-- Template: fix-area.php -->

  <a href="#" class="c-pagetop fixed-btn--pagetop js-btn" aria-label="先頭に戻る"></a>
  <?php if (!is_page('contact')) : ?>
    <a href="<?php echo esc_url(home_url('contact')); ?>" class="c-btn c-btn--f-contact fixed-btn--f-contact js-btn">お問い合わせ</a>
    <!-- <a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="c-btn c-btn--f-contact fixed-btn--f-contact js-btn">お問い合わせ</a> -->
  <?php endif; ?>