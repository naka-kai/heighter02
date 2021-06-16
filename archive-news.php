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
        <article class="news_article">
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

<?php get_template_part('template-parts/contact-banner'); ?>

<?php get_footer(); ?>
