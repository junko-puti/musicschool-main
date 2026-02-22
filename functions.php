<?php
// --------------------------------------------------
// 最初の設定
// --------------------------------------------------
function custom_theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script'
    )
  );
  add_theme_support('wp-block-styles');
  add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');



// --------------------------------------------------
//ファイル読み込み
// --------------------------------------------------
function add_files()
{
  $now = date('YmdHis');

  /* ------------------------------
    CSS
  ------------------------------ */
  // Splide の CSS
  wp_enqueue_style('splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', array(), null);

  // 共通CSS（style.css）
  wp_enqueue_style('common-style', get_theme_file_uri('/css/style.css'), array(), $now);

  /* ------------------------------
    JavaScript
  ------------------------------ */
  // WordPress の jQuery を使わない場合は解除
  wp_deregister_script('jquery');

  // jQuery（CDN）
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);

  // Splide の JS
  wp_enqueue_script('splide-script', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array('jquery'), null, true);

  // 共通の script.js
  wp_enqueue_script('common-script', get_theme_file_uri('/js/script.js'), array('jquery'), $now, true);

  // トップページ専用 top.js（Splide 初期化）
  // if (is_front_page()) {
  //   wp_enqueue_script('top-script', get_theme_file_uri('/js/top.js'), array('jquery', 'splide-script'), $now, true);
  // }
}
add_action('wp_enqueue_scripts', 'add_files');



// --------------------------------------------------
//ブログ投稿タイプの登録
// --------------------------------------------------

//カスタム投稿タイプ「ブログ」の登録
add_action('init', function () {
  register_post_type('blog', [ //投稿タイプスラッグ
    'label' => 'ブログ',       //複数形のラベル：ブログ
    'public' => true,         //管理画面に表示され、フロントにも公開される設定
    'has_archive' => true,    //アーカイブあり
    'menu_position' => 5,     //管理画面のメニュー位置
    'show_in_rest' => true,   // ブロックエディタが有効
    'supports' => ['title', 'editor', 'thumbnail'], //CPT UI の「サポート」設定に対応
  ]);
});

//タクソノミー（カテゴリー）の登録
add_action('init', function () {
  register_taxonomy(
    'blog_cate', // タクソノミースラッグ
    'blog',      // 紐づける投稿タイプ
    [
      'label' => 'カテゴリー',
      'hierarchical' => true, // 階層あり（カテゴリー型）
      'public' => true,       //このタクソノミー（または投稿タイプ）を“公開”扱いにする
      'show_admin_column' => true, // 管理画面の一覧に表示
      'show_ui' => true,           // 管理画面に UI（編集画面）を表示する
      'show_in_quick_edit' => true, // クイック編集に表示
    ]
  );
});

// --------------------------------------------------
//卒業実績投稿タイプの登録
// --------------------------------------------------

//カスタム投稿タイプ「卒業実績」の登録
add_action('init', function () {
  register_post_type('result', [ //投稿タイプスラッグ
    'label' => '卒業実績',       //複数形のラベル：ブログ
    'public' => true,         //管理画面に表示され、フロントにも公開される設定
    'has_archive' => true,    //アーカイブあり
    'menu_position' => 5,     //管理画面のメニュー位置
    'show_in_rest' => true,   // ブロックエディタが有効
    'supports' => ['title', 'editor', 'thumbnail'], //CPT UI の「サポート」設定に対応
    'taxonomies' => ['genre'],
  ]);
});

//タクソノミー（カテゴリー）の登録
add_action('init', function () {
  register_taxonomy(
    'genre', // タクソノミースラッグ
    'result',      // 紐づける投稿タイプ
    [
      'label' => 'ジャンル',
      'hierarchical' => true, // 階層あり（カテゴリー型）
      'public' => true,       //このタクソノミー（または投稿タイプ）を“公開”扱いにする
      'show_admin_column' => true, // 管理画面の一覧に表示
      'show_ui' => true,           // 管理画面に UI（編集画面）を表示する
      'show_in_quick_edit' => true, // クイック編集に表示
      'show_in_rest' => true, //blogではなくてもよいが必要
    ]
  );
});


// --------------------------------------------------
//一覧1ページに表示する記事数を指定
// --------------------------------------------------
function my_page_conditions($query)
{
  // 管理画面ではなく、メインクエリの場合のみ実行
  if (!is_admin() && $query->is_main_query()) {

    // カスタム投稿タイプ 'blog' または 'result' のアーカイブページの場合
    if (is_post_type_archive(['blog', 'result'])) {
      // 表示件数を10件に設定
      $query->set('posts_per_page', 10);
    }

    // 検索結果ページの場合
    if ($query->is_search()) {
      $query->set('post_type', 'blog');
    }
  }
}
add_action('pre_get_posts', 'my_page_conditions');


// --------------------------------------------------
//管理画面で 投稿メニュー を非表示
// --------------------------------------------------
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');


// ------------------------------------------------------------
//管理画面「外観＞メニュー」 を表示　WordPressでメニューを有効化する
// ------------------------------------------------------------
function register_my_menus()
{
  register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer'  => 'Footer Menu',
    'drawer' => 'ドロワーメニュー',
  ));
}
add_action('after_setup_theme', 'register_my_menus');



// -----------------------
//開発中は管理バーを消し
// -----------------------
add_filter('show_admin_bar', '__return_false');
