  <!-- Template: breadcrumb.php -->

  <nav class="c-breadcrumb" aria-label="パンくずリスト">
    <div class="l-inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
      <!-- <ol>
          <li><a href="./index.html">ホーム</a></li>
          <li>ブログ</li>
        </ol> -->
    </div>
  </nav>