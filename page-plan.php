<!-- Template: page-plan.php -->

<?php get_header(); ?>
<main class="plan">
  <!-- fv -->
  <section class="plan__fv fv">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/images/plan.jpg" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/images/plan-sp.jpg" alt="プラン・料金ページのファーストビュー">
    </picture>
    <h1 class="fv__catch">プラン・料金</h1>
  </section>
  <!-- パンくずリスト -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- プラン・料金 -->
  <div class="plan__list plan-list">
    <section class="plan-list__pricing">
      <div class="l-inner">
        <h2 class="c-title">料金体系</h2>
        <ul>
          <li>入会金 39,000円</li>
          <li class="plan-list__plus"><img src="<?php echo get_template_directory_uri(); ?>/images/plus.png" alt="プラスマーク"></li>
          <li>月額料金</li>
        </ul>
        <p>きたむらミュージックスクールでは、個人に合わせたサポートを行う完全オーダーメイドのプランを用意しており、サポート内容により月額料金が異なります。担当者があなたに最適なプランを提案いたしますので、お気軽にお問い合わせください。※すべての料金は税込価格となります。</p>
      </div>
    </section>
    <section class="plan-list__detail">
      <div class="l-inner">
        <h2 class="c-title">プラン内容・月額料金</h2>
        <div class="plan-list__table-wrapper">
          <table class="plan-list__table">
            <thead class="plan-list__head">
              <tr class="plan-list__head--line1">
                <th scope="col" rowspan="2">
                  <div class="plan-list__name plan-list__name--nul">
                  </div>
                </th>
                <th scope="col">
                  <div class="plan-list__name plan-list__name--nul"></div>
                </th>
                <th scope="col" rowspan="2">
                  <div class="plan-list__name plan-list__name--red">
                    <span class="plan-list__label">おすすめ</span>
                    <span class="plan-list__title">スタンダード<br class="u-sp">プラン</span>
                  </div>
                </th>
                <th scope="col">
                  <div class="plan-list__name plan-list__name--nul"></div>
                </th>
              </tr>
              <tr class="plan-list__head--line2">
                <th scope="col">
                  <div class="plan-list__name plan-list__name--black">ベーシック<br class="u-sp">プラン</div>
                </th>
                <th scope="col">
                  <div class="plan-list__name plan-list__name--black">プレミアム<br class="u-sp">プラン</div>
                </th>
              </tr>
            </thead>
            <tbody class="plan-list__class">
              <tr class="plan-list__price">
                <th scope="row">月額料金</th>
                <td>39,000円</td>
                <td class="plan-list__price--standard">59,000円</td>
                <td>128,000円</td>
              </tr>
              <tr>
                <th scope="row">マンツーマン授業</th>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">週１回</span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker plan-list__marker--standard" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">週２回</span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">無制限</span>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">ビジネス基本講座</th>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker plan-list__marker--standard" aria-label="該当あり" role="img"></span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">練習ROOM利用</th>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">月10時間</span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker plan-list__marker--standard" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">月20時間</span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">無制限</span>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">ビジネスコンサル</th>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker--none" aria-label="該当なし" role="img"></span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker plan-list__marker--standard" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">月２回</span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group u-pt5">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                    <span class="plan-list__schedule">月３回</span>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">コミュニティ<br class="u-sp">参加資格</th>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker--none" aria-label="該当なし" role="img"></span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker--none" aria-label="該当なし" role="img"></span>
                  </span>
                </td>
                <td>
                  <span class="plan-list__marker-group">
                    <span class="plan-list__marker" aria-label="該当あり" role="img"></span>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <p class="plan-list__note">※各サービスは１回ごとのオプション追加が可能です。詳しくは事務局までお問い合わせください。</p>
      </div><!--inner-->
    </section>
  </div>
</main>

<?php get_footer(); ?>