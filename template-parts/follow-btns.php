  <!-- Template: follow-btns.php -->


  <!-- <div class="l-follow-btns-wrap">
    <div class="follow-btns follow" id="floatBtns" aria-label="クイックアクション">

      <a href="#" class="follow-btn c-pagetop" data-label="TOPへ戻る" aria-label="先頭に戻る"></a>
      <a href="<?php echo esc_url( home_url('contact') ); ?>" 
        class="follow-btn c-btn c-btn--f-contact" 
        data-label="お問い合わせ" 
        aria-label="お問い合わせ">
        お問い合わせ
      </a>

    </div>
  </div> -->



<div class="l-follow-btns-wrap">
  <?php
  // お問い合わせページなら 'is-contact-page' クラスを付与
  $contact_class = is_page('contact') ? 'is-contact-page' : '';
  ?>
  
  <div class="follow-btns follow <?php echo esc_attr($contact_class); ?>" id="floatBtns" aria-label="クイックアクション">

    <a href="#" class="follow-btn c-pagetop" data-label="TOPへ戻る" aria-label="先頭に戻る"></a>

    <?php if ( !is_page('contact') ) : ?>
      <a href="<?php echo esc_url( home_url('contact') ); ?>" 
         class="follow-btn c-btn c-btn--f-contact" 
         data-label="お問い合わせ" 
         aria-label="お問い合わせ">
        お問い合わせ
      </a>
    <?php endif; ?>

  </div>
</div>