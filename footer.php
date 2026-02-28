  <footer class="footer">
    <div class="l-inner">
      <nav class="footer__nav">
        <?php
        wp_nav_menu(
          array(
            'menu_class' => 'l-footer__nav-ul',
            'theme_location' => 'footer',
            'container'       => false,
          )
        );
        ?>
        <!-- <ul class="footer__menu">
          <li><a href="<?php echo get_template_directory_uri(); ?>/index.html">ホーム</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/plan.html">料金</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/blog-list.html">ブログ</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/result-list.html">卒業実績</a></li>
        </ul> -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo-img">
          <!-- <a href="<?php echo get_template_directory_uri(); ?>/index.html" class="footer__logo-img"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" alt="きたむらミュージックスクールのロゴマーク">
        </a>
      </nav>
      <p class="footer__copyright">
        <!-- <span>Copyright © 0000 KITAMURA music school Inc.</span> -->
        <span>Copyright © <?php echo date('Y'); ?> KITAMURA music school Inc.</span>
        <span> All Rights</span>
      </p>
      <div class="footer__sns">
        <ul class="footer__sns-menu footer__menu">
          <li>
            <a href="<?php echo esc_url('https://x.com/'); ?>" class="footer__sns-icn" target="_blank" rel="noopener noreferrer">
            <!-- <a href="#" class="footer__sns-icn"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon-twitter.svg" alt="Twitter">
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url('https://www.facebook.com/'); ?>" class="footer__sns-icn" target="_blank" rel="noopener noreferrer">
            <!-- <a href="#" class="footer__sns-icn"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon-facebook.svg" alt="Facebook">
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url('https://www.youtube.com/'); ?>" class="footer__sns-icn" target="_blank" rel="noopener noreferrer">
            <!-- <a href="#" class="footer__sns-icn"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon-youtube.svg" alt="YouTube">
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url('https://www.instagram.com/'); ?>" class="footer__sns-icn" target="_blank" rel="noopener noreferrer">
            <!-- <a href="#" class="footer__sns-icn"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt="Instagram">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- 固定ボタン -->
  <?php
  // スラッグが 'contact-send' の場合
  if (!is_404() && !is_page('contact-send')) {
    get_template_part('template-parts/fix-area');
  }
  ?>

  <?php wp_footer(); ?>
  </body>

  </html>