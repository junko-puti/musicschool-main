<?php
//フォーム送信を経由した場合のみ完了ページを表示する【AI生成
// PHPの命令で、URLに「?smf_sent=true」がない場合は即座にトップへ飛ばす
if (!isset($_GET['smf_sent'])) {
  wp_safe_redirect(home_url('/'));
  exit;
}
?>
<!-------------------------------------------------->
<?php get_header(); ?>

<main class="thanks">
  <!-- fv -->
  <section class="thanks__fv fv">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/contact.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact-sp.jpg" alt="送信完了ページのファーストビュー">
    </picture>
    <h1 class="fv__catch">お問い合わせ</h1>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- お問い合わせ -->
  <div class="contact-send">
    <div class="l-inner">
      <p class="c-status-message">お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。</p>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn c-btn--primary">ホームへ戻る</a>
      <!-- </form> -->
    </div>
  </div>
</main>

<?php get_footer(); ?>