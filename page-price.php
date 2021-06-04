<?php get_header(); ?>
<section class="mainvisual">
  <h3 class="mainvisual_text">コース・料金</h3>
</section>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="price_main">
  <div class="container">
    <div class="price_system">
      <h3 class="price_system-title">料金体系</h3>
      <div class="price_system-content">
        <div class="price_system-initiation price_system-box">
          入会金 39,800円
        </div>
        <div class="price_system-plus-box">
          <span class="price_system-plus"></span>
        </div>
        <div class="price_system-monthly price_system-box">
          月額費用
        </div>
      </div>
      <p class="price_system-text">
        Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
    </div>

    <div class="price_list">
      <h3 class="price_title">料金表</h3>
      <div class="nav-wrap">
        <div class="scroll-nav">
          <div class="js-scrollable">
            <ul class="price_cards">


              <li class="price_card">
                <p class="price_card-title">基礎プラン</p>
                <div class="price_card-inner">
                  <?php $basic_field_number = (float)get_field('basic'); ?>
                  <h2 class="price_card-amount"><?php echo number_format($basic_field_number) . '円〜'; ?></h2>
                  <p class="price_card-monthly-text">*月額（税抜価格）</p>
                  <div class="price_card-content-text-box">
                    <p class="price_card-content-text">カリキュラム作成</p>
                    <p class="price_card-content-text">TOEFL学習サポート</p>
                    <p class="price_card-content-text">週一回のビデオMTG</p>
                  </div>
                </div>
              </li>
              <li class="price_card">
                <p class="price_card-title">演習プラン</p>
                <div class="price_card-inner">
                  <?php $exercise_field_number = (float)get_field('exercise'); ?>
                  <h2 class="price_card-amount"><?php echo number_format($exercise_field_number) . '円〜'; ?></h2>
                  <p class="price_card-monthly-text">*月額（税抜価格）</p>
                  <div class="price_card-content-text-box">
                    <p class="price_card-content-text">カリキュラム作成</p>
                    <p class="price_card-content-text">TOEFL学習サポート</p>
                    <p class="price_card-content-text">週一回のビデオMTG</p>
                    <p class="price_card-content-text">月二回の模試（解説<br>付き）</p>
                  </div>
                </div>
              </li>
              <li class="price_card price_card-recommend">
                <p class="price_card-title price_card-title-recommend1">おすすめ</p>
                <p class="price_card-title price_card-title-recommend2">志望校対策プラン</p>
                <div class="price_card-inner">
                  <?php $steps_field_number = (float)get_field('steps'); ?>
                  <h2 class="price_card-amount"><?php echo number_format($steps_field_number) . '円〜'; ?></h2>
                  <p class="price_card-monthly-text">*月額（税抜価格）</p>
                  <div class="price_card-content-text-box">
                    <p class="price_card-content-text">カリキュラム作成</p>
                    <p class="price_card-content-text">TOEFL学習サポート</p>
                    <p class="price_card-content-text">週一回のビデオMTG</p>
                    <p class="price_card-content-text">月二回の模試（解説<br>付き）</p>
                    <p class="price_card-content-text">週一の英語面接対策</p>
                  </div>
                </div>
              </li>
              <li class="price_card price_card-recommend-after">
                <p class="price_card-title">フレックスプラン</p>
                <div class="price_card-inner">
                  <?php $flex_field_number = (float)get_field('flex'); ?>
                  <h2 class="price_card-amount"><?php echo number_format($flex_field_number) . '円〜'; ?></h2>
                  <p class="price_card-monthly-text">*月額（税抜価格）</p>
                  <div class="price_card-content-text-box">
                    <p class="price_card-content-text">＊別途ご相談ください</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/contact-banner'); ?>

<?php get_footer(); ?>
