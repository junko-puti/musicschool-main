  <!-- Template: breadcrumb.php -->

  <nav class="c-breadcrumb" aria-label="パンくずリスト">
    <div class="l-inner">
      <div class="c-breadcrumb-scroll">
        <?php
        if (function_exists('bcn_display')) {
          bcn_display();
        } 
        ?>
      </div>
    </div>
  </nav>

