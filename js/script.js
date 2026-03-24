//Splide
$(function () {

  //表示崩れを解消するために、ページ読み込み完了後にbody内の要素が表示する
  //<body style="display:none;とセット
 $('body').show();
 //------------------------------------------------------------------

  if ($('body').hasClass('top-page')) {//top-pageの時のみ使用
    new Splide(".splide", {
      type: 'loop', //無限ループ
      perPage: 3,
      perMove: 1,//1枚ずつ移動
      pagination: false,//ページネーションを非表示
      arrows: true,//ここでは消さない（デフォルト矢印を無効化）
      // gap: '35px',//スライド間の余白を指定
      gap: '2.1875rem',//35px スライド間の余白を指定
      padding: { left: 0, right: 0 }, // ← 余白をゼロに明示
      breakpoints: {
        767: {
          perPage: 1,
          perMove: 1,//SPでも1枚ずつ移動
        },
      },
      autoplay: false,//自動再生（デフォルトはfalse）
      // autoplay: true,//自動再生（デフォルトはfalse）
      interval: 4000,//自動再生の間隔
      speed: 400,//スライドの移動速度
      reducedMotion: {
        autoplay: true, // ← これで「動きを減らす」設定でも autoplay を強制
        speed: 400
      }
    }).mount();
  }
});



// triggerボタン、ドロワーメニュー開閉
$(function(){
  $('.c-humburger').on('click', function() {
    $(this).toggleClass('active');
    $('#drawer').toggleClass('is-open');
    return false;
  });

  // メニュー内リンククリックで閉じる
  $('#drawer a').on('click', function() {
    $('#drawer').removeClass('is-open');
    $('.c-humburger').removeClass('active');
  });

  // メニュー外クリックで閉じる
  $(document).on('click', function(e) {
    const $drawer = $('#drawer');
    const $btn = $('.c-humburger');
    if (!$drawer.is(e.target) && $drawer.has(e.target).length === 0 &&
        !$btn.is(e.target) && $btn.has(e.target).length === 0) {
      $drawer.removeClass('is-open');
      $btn.removeClass('active');
    }
  });

  // スクロールでトップに戻ったら閉じる
  $(window).on('scroll', function() {
    if ($(window).scrollTop() === 0) {
      $('#drawer').removeClass('is-open');
      $('.c-humburger').removeClass('active');
    }
  });
});



$('.top-faq-accordion__wrapper').click(function() {
  const $question = $(this).find('.top-faq-accordion__question');
  const $answer   = $question.next('.top-faq-accordion__answer');

  $answer.slideToggle();
  $question.toggleClass('active');
});



const SHOW_THRESHOLD = 100;
const floatBtns = document.getElementById('floatBtns');

function onScroll() {
  // floatBtns（お問い合わせボタン等）がページに存在しない場合は何もしない
  if (!floatBtns) return;

  if (window.scrollY >= SHOW_THRESHOLD) {
    floatBtns.classList.add('visible');
  } else {
    floatBtns.classList.remove('visible');
  }
}

window.addEventListener('scroll', onScroll, { passive: true });

// --- ページトップボタンの処理 ---
const pageTopBtn = document.querySelector('.c-pagetop');

// ボタンがページ内に存在する場合のみ、クリックイベントを設定する
if (pageTopBtn) {
  pageTopBtn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}



//contactフォーム
//Enterで送信されないで次の要素にフォーカス
//送信ボタンをクリックしたときだけ送信
//AI参照
$(function() {
  // 入力欄（input, textarea, select）でEnterキーを押したら次へ移動
  $('.form input, .form textarea, .form select').on('keydown', function(e) {
    if (e.key === 'Enter') {
      e.preventDefault(); // Enterで送信されないようにする

      // 現在の要素のインデックスを取得
      var inputs = $('.form input, .form textarea, .form select');
      var idx = inputs.index(this);

      // 次の要素にフォーカス
      if (idx + 1 < inputs.length) {
        inputs.eq(idx + 1).focus();
      }
    }
  });

  // 送信ボタンをクリックしたときだけ送信
  $('.c-btn--primary').on('click', function() {
    $('.form').submit();
  });
});




