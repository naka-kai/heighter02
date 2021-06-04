<?php get_header(); ?>
<section class="mainvisual">
  <h3 class="mainvisual_text">お知らせ</h3>
</section>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="news_main">
  <div class="container">
    <h3 class="news_title">お知らせ一覧</h3>

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
    ?>
        <article class="news_article news_first-article">
          <time class="news_article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
          <p class="news_article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</section>

<div class="pagiNation">
  <?php if (function_exists('pagination')) :
    pagination($wp_query->max_num_pages, get_query_var('paged'));
  endif;
  ?>
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
