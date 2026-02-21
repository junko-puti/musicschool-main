      <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="c-search-form"><!--method="get"入れる(GET送信)-->
        <label for="search-input" class="c-search-form__label">
          <input type="text" id="search-input" name="s" class="c-search-form__input" placeholder="検索ワード">
        </label>
        <button type="submit" class="c-search-form__button" aria-label="検索">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg" alt="検索" class="c-search-form__icon">
        </button>
      </form>