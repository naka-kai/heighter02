<?php get_header(); ?>
<section class="mainvisual">
  <h3 class="mainvisual_text">ブログ</h3>
</section>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="blog_main">
  <div class="container blog_main_container">
    <div class="articles">
      <h3 class="blog_main_title">記事一覧</h3>

      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
      ?>

          <article class="blog_main_article">
            <figure class="blog_main_article-img-box">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/sample01.jpg'; ?>" alt="">
              <?php endif;
              $categories = get_the_category(); ?>
              <a href="<?php echo get_category_link($categories[0]->term_id); ?>">
                <div class="blog_main_category">
                  <?php
                  if ($categories) {
                    echo $categories[0]->name;
                  }
                  ?></div>
              </a>
            </figure>
            <a href="<?php the_permalink(); ?>">
              <div class="blog_main_article-text-box">
                <time class="blog_main_article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                <h4 class="blog_main_article-title"><?php echo mb_strimwidth(strip_tags(get_the_title()), 0, 50, '…', 'UTF-8'); ?></h4>
                <p class="blog_main_article-text "><?php echo mb_strimwidth(strip_tags(get_the_excerpt()), 0, 100, '…', 'UTF-8'); ?>
                </p>
            </a>
          </article>
        <?php
        endwhile;
        ?>

        <div class="pagiNation">
        <?php if (function_exists('pagination')) :
          pagination($wp_query->max_num_pages, get_query_var('paged'));
        endif;
      endif;
        ?>
        </div>

    </div>
  </div>
</section>

<?php get_template_part('template-parts/contact-banner'); ?>

<?php get_footer(); ?>
