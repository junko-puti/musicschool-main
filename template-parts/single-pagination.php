  <!-- Template: single-pagination.php -->

  <nav class="pager">
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    ?>
    <ul class="pager__items">
      <li>
        <?php if (!empty($prev_post)): ?>
          <a href="<?php echo get_permalink($prev_post->ID); ?>">
            <p class="pager__prev">◀︎ 前の記事</p>
            <div class="pager__item">
              <div class="pager__img pager__img--nolabel">
                <?php if (has_post_thumbnail($prev_post->ID)): ?>
                  <?php echo get_the_post_thumbnail($prev_post->ID); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                <?php endif; ?>
                <!-- <img src="./images/blog-related.jpg" alt="前の記事"> -->
              </div>
              <div class="pager__body">
                <p><?php echo $prev_post->post_title; ?></p>
              </div>
            </div>
          </a>
        <?php endif; ?>
      </li>
      <li>
        <?php if (!empty($next_post)): ?>
          <a href="<?php echo get_permalink($next_post->ID); ?>">
            <p class="pager__next">次の記事 ▶︎</p>
            <div class="pager__item">
              <div class="pager__img pager__img--nolabel">
                <?php if (has_post_thumbnail($next_post->ID)): ?>
                  <?php echo get_the_post_thumbnail($next_post->ID); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png" alt="No image">
                <?php endif; ?>
                <!-- <img src="./images/blog-related.jpg" alt="次の記事"> -->
              </div>
              <div class="pager__body">
                <p><?php echo $next_post->post_title; ?></p>
              </div>
            </div>
          </a>
        <?php endif; ?>
      </li>
    </ul>
  </nav>