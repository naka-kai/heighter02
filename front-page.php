<?php get_header(); ?>
<section class="hero">
  <div class="hero_bg-img">
    <div class="hero_text-box">
      <h1 class="hero_text-title">TOEFL対策は<br class="smallDone">Engress</h1>
      <h5 class="hero_text-text">日本人へのTOEFL指導歴豊かな講師陣の<br class="smallNone">コーチング型TOEFLスクール</h5><a href="" class="p circle-request-btn-text">
        <div class="circle-request-btn">資料請求 </div>
      </a>
      <p class="contact-link-text"><a href="">お問い合わせ</a></p>
    </div>
  </div>
</section>
<section class="about">
  <div class="container">
    <h2 class="about_title">TOEFL学習で<br class="smallDone">こんな悩み<br class="smallDone">ありませんか？</h2>
    <div class="about_text-box">
      <div class="about_text-box-inner">
        <h5 class="about_text-text">勉強の習慣が<br class="smallNone">身についていない</h5>
        <h5 class="about_text-text">勉強しているはず<br class="smallNone">なのに点数が伸びない</h5>
        <h5 class="about_text-text">正しい勉強方法が<br class="smallNone">わからない</h5>
      </div>
    </div>
    <div class="about_white-text-box-wrapper">
      <div class="about_white-text-box">
        <h2 class="about_white-text-title">Engressは<br>TOEFLに特化したスクールです</h2>
        <h5 class="about_white-text-text">完全オーダーメイドで、<br class="smallDone">１人１人の悩みに合わせた<br class="smallDone">最適な指導で<br class="smallNone">TOEFLの苦手分野を克服します。</h5>
      </div>
    </div>
  </div>
</section>
<section class="feature">
  <div class="container feature_container">
    <h2 class="feature_title">TOEFL対策に特化したEngress3つの強み</h2>
    <div class="feature_box row-reverse">
      <div class="feature_box-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature01.jpg" alt=""></div>
      <div class="feature_box-text-box">
        <div class="feature_box-text-box-category"><small class="feature_box-text-box-category-text">特長 １</small>
        </div>
        <h4 class="feature_box-text-box-title">TOEFLに最適化された<br>無駄のないカリキュラム</h4>
        <p class="feature_box-text-box-text">
          TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。 </p>
      </div>
      <!-- /.feature_box-text-box -->
    </div>
    <!-- /.feature_box -->
    <div class="feature_box">
      <div class="feature_box-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature02.jpg" alt=""></div>
      <div class="feature_box-text-box feature_box-text-box2">
        <div class="feature_box-text-box-category"><small class="feature_box-text-box-category-text">特長 ２</small>
        </div>
        <h4 class="feature_box-text-box-title">日本人指導歴10年以上の<br>経験豊富な講師陣</h4>
        <p class="feature_box-text-box-text">
          Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
      </div>
      <!-- /.feature_box-text-box -->
    </div>
    <!-- /.feature_box -->
    <div class="feature_box row-reverse">
      <div class="feature_box-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/feature03.jpg" alt=""></div>
      <div class="feature_box-text-box">
        <div class="feature_box-text-box-category"><small class="feature_box-text-box-category-text">特長
            ３</small></div>
        <h4 class="feature_box-text-box-title">平均3ヶ月でTOEFL iBT20点アップ</h4>
        <p class="feature_box-text-box-text">
          Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
      </div>
      <!-- /.feature_box-text-box -->
    </div>
    <!-- /.feature_box -->
  </div>
</section>

<section class="price">
  <div class="container">
    <div class="price_img-box">
      <h4 class="price_img-box-title">Engressの料金プランはこちら</h4>
      <div class="price_img-box-link">
        <p class="price_img-box-text"><a href="">料金を見てみる</a></p>
      </div>
    </div>
  </div>
</section>
</div>
</section>
<section class="example">
  <div class="container example_container">
    <h2 class="example_title">TOEFL成功事例</h2>
    <div class="example_card-box">

      <?php
      $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post_type' => 'example',
        'order' => 'ASC'
      );
      $my_query = new WP_Query($args);
      if ($my_query->have_posts()) :
        while ($my_query->have_posts()) :
          $my_query->the_post();
      ?>
          <div class="example_card-list">
              <p class="example_card-item-title"><?php the_field('title'); ?></p>
              <figure class="example_card-item-img">
                <?php if (get_field('image')) : ?>
                  <img src="<?php the_field('image'); ?>" />
                <?php endif; ?>
              </figure>
              <div class="example_card-item-text-top">
                <p class="example_card-item-profession">会社員</p>
                <p class="example_card-item-name">T.Fujiyamaさん</p>
              </div>
              <!-- example_card-item-text-top -->
              <p class="example_card-item-period">3ヶ月でTOEFL80→108点</p>
          </div>
          <!-- example_card-list -->

      <?php endwhile;
        wp_reset_postdata();
      endif; ?>

    </div>
    <!-- example_card-box -->
  </div>
  <!-- container -->
</section>

<section class="flow">
  <div class="container">
    <h2 class="flow_title">ご利用の流れ</h2>
    <ul class="flow_list">
      <li class="flow_list-item">
        <div class="flow_list-item-number-box">
          <p class="flow_list-item-number">01</p>
        </div>
        <div class="flow_list-item-text-box">
          <h5 class="flow_list-item-title">お問い合わせ</h5>
          <p class="flow_list-item-text">まずはフォームまたはお電話からお申し込みください。</p>
        </div>
      </li>
      <li class="flow_list-item">
        <div class="flow_list-item-number-box">
          <p class="flow_list-item-number">02</p>
        </div>
        <div class="flow_list-item-text-box">
          <h5 class="flow_list-item-title">ヒアリング</h5>
          <p class="flow_list-item-text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
        </div>
      </li>
      <li class="flow_list-item">
        <div class="flow_list-item-number-box">
          <p class="flow_list-item-number">03</p>
        </div>
        <div class="flow_list-item-text-box">
          <h5 class="flow_list-item-title">学習プランのご提供</h5>
          <p class="flow_list-item-text">目標達成のために最適な学習プランをご提案致します。</p>
        </div>
      </li>
      <li class="flow_list-item">
        <div class="flow_list-item-number-box">
          <p class="flow_list-item-number">04</p>
        </div>
        <div class="flow_list-item-text-box">
          <h5 class="flow_list-item-title">ご入会</h5>
          <p class="flow_list-item-text">お申込み完了後、レッスンがスタートします。</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="faq">
  <div class="container">
    <h2 class="faq_title">よくある質問</h2>
    <div class="faq_accordion-container">
      <hr>
      <p class="faq_accordion-title js-accordion-title">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
      <div class="faq_accordion-toggle">
        <p class="faq_accordion-content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
      </div>
      <hr>
      <p class="faq_accordion-title js-accordion-title">教材はオリジナルのものを使用しているのでしょうか？</p>
      <div class="faq_accordion-toggle">
        <p class="faq_accordion-content">内容</p>
      </div>
      <hr>
      <p class="faq_accordion-title js-accordion-title">講師に日本人はいますか？</p>
      <div class="faq_accordion-toggle">
        <p class="faq_accordion-content">内容</p>
      </div>
      <hr>
      <p class="faq_accordion-title js-accordion-title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
      <div class="faq_accordion-toggle">
        <p class="faq_accordion-content">内容</p>
      </div>
      <hr>
    </div>
  </div>
</section>

<div class="blog-news">
  <div class="container blog-news-container">
    <section class="section_blog">
      <h3 class="blog_title">ブログ</h3>
      <div class="blog_articles">

        <?php
        $args = array(
          'posts_per_page' => 2,
          'post_status' => 'publish',
          'post_type' => 'post'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="">
              <article class="blog_article">
                <figure class="blog_article-img-box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sample01.svg" alt="">
                  <small class="blog_category">カテゴリー</small>
                </figure>
                <div class="blog_article-text-box">
                  <p class="blog_article-title .text"><?php the_title(); ?></p><small class="blog_article-date">2020-12-27</small>
                </div>
              </article>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>
    </section>
    <section class="news">
      <h3 class="news_title">お知らせ</h3>
      <div class="news_articles">
        <article class="news_article"><small class="news_article-date">2020-12-01</small>
          <p class="news_article-title">2021年のスケジュールについて</p>
        </article>
      </div>
      <div class="news_articles">
        <article class="news_article"><small class="news_article-date">2019-11-02</small>
          <p class="news_article-title">11月休校日のお知らせ</p>
        </article>
      </div>
      <div class="news_articles">
        <article class="news_article"><small class="news_article-date">2020-10-01</small>
          <p class="news_article-title">10月休校日のお知らせ</p>
        </article>
      </div>
    </section>
  </div>
</div>

<section class="contact">
  <div class="contact_bg-img">
    <div class="contact_text-box">
      <h3 class="contact_text-title">まずは無料で資料請求から</h3>
      <div class="circle-request-btn contact_circle-request-btn"><a href="" class="p circle-request-btn-text contact_circle-request-btn-text">資料請求 </a></div>
      <p class="contact-link-text contact_contact-link-text"><a href="">お問い合わせ</a></p>
    </div>
  </div>
  <div class="contact_tel-contact-box">
    <p class="contact_tel-contact-title">お電話でのお問い合わせはこちら</p>
    <h2 class="contact_tel-contact-number"><a href="tel:0123-456-7890">0123-456-7890</a></h2>
    <p class="contact_tel-contact-hour">平日 08:00~20:00</p>
  </div>
</section>

<?php get_footer(); ?>
