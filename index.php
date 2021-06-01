<?php get_header(); ?>
<section class="mainvisual">
  <h3 class="mainvisual_text">ブログ</h3>
</section>

<section class="breadcrumb">
  <div class="breadcrumb-list-box">
    <div class="container">
      <ul class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a class="item" href="https://kaiblo.com/portfolio/heighter/"><small>ホーム</small></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="breadcrumb-item">
          <small>ブログ</small>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="blog_main">
  <div class="container blog_main_container">
    <div class="articles">
      <h3 class="blog_main_title">記事一覧</h3>

      <?php
      query_posts('&posts_per_page=10');
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>

          <a href="">
            <article class="blog_main_article">
              <figure class="blog_main_article-img-box">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/sample01.jpg'; ?>" alt="">
                <?php endif; ?>
                <div class="blog_main_category"><?php the_category(); ?></div>
              </figure>
              <div class="blog_main_article-text-box">
                <time class="blog_main_article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                <h4 class="blog_main_article-title"><?php the_title(); ?></h4>
                <p class="blog_main_article-text .text"><?php the_excerpt(); ?></p>
              </div>
            </article>
          </a>
      <?php
        endwhile;
      endif;
      ?>

    </div>
  </div>
</section>

<section class="pageNumber">
  <div class="pageNumber_wrapper">
    <div class="pageNumber_first pageNumber_current pageNumber_navyBlue">
      <a href="">
        <p>1</p>
      </a>
    </div>
    <div class="pageNumber_next pageNumber_white">
      <a href="">
        <p>2</p>
      </a>
    </div>
    <div class="pageNumber_next_next pageNumber_white">
      <a href="">
        <p>3</p>
      </a>
    </div>
    <div class="pageNumber_dots pageNumber_white">
      <a href="">
        <p>…</p>
      </a>
    </div>
    <div class="pageNumber_last pageNumber_white">
      <a href="">
        <p>5</p>
      </a>
    </div>
  </div>
</section>

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
