  <!-- Template: breadcrumb.php -->

  <nav class="c-breadcrumb" aria-label="パンくずリスト">
    <div class="l-inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </nav>