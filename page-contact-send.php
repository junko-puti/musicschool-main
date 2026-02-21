<!--フォーム送信を経由した場合のみ完了ページを表示する【AI生成】-->
<script>
  if (!sessionStorage.getItem('smf_sent')) {
    window.location.replace('/');
  }
  sessionStorage.removeItem('smf_sent');
</script>
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

<!-- <footer class="footer">
        <div class="l-inner">
          <nav class="footer__nav">
            <ul class="footer__menu">
              <li><a href="./index.html">ホーム</a></li>
              <li><a href="./plan.html">料金</a></li>
              <li><a href="./blog-list.html">ブログ</a></li>
              <li><a href="./result-list.html">卒業実績</a></li>
            </ul>
            <a href="./index.html" class="footer__logo-img">
              <img src="./images/logo-white.svg" alt="きたむらミューシックスクーのロゴマーク">
            </a>
          </nav>
          <p class="footer__copyright">
            <span>Copyright © 0000 KITAMURA music school Inc.</span>
            <span> All Rights</span>
          </p>
          <div class="footer__sns">
            <ul class="footer__sns-menu footer__menu">
              <li>
                <a href="#" class="footer__sns-icn">
                  <img src="./images/icon-twitter.svg" alt="Twitter">
                </a>
              </li>
              <li>
                <a href="#" class="footer__sns-icn">
                  <img src="./images/icon-facebook.svg" alt="Facebook">
                </a>
              </li>
              <li>
                <a href="#" class="footer__sns-icn">
                  <img src="./images/icon-youtube.svg" alt="YouTube">
                </a>
              </li>
              <li>
                <a href="#" class="footer__sns-icn">
                  <img src="./images/icon-instagram.svg" alt="Instagram">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
      <script src="./js/script.js"></script>
    </div>
  </body>
</html> -->