<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="news_detail_main">
  <div class="container news_detail_main-container">
    <div class="news_detail_main-left">
      <article class="news_detail_main-article">
        <h4 class="news_article-title"><?php the_title(); ?></h4>
        <time class="news_article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
        <?php the_content(); ?>
      </article>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/contact-banner'); ?>

<?php get_footer(); ?>
