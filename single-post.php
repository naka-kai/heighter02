<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="blog_detail_main">
  <div class="container blog_detail_main-container">
    <div class="blog_detail_main-left">
      <article class="blog_detail_main-article">
        <div class="blog_detail_main_category">
          <?php
          $categories = get_the_category();
          if ($categories) {
            echo $categories[0]->name;
          }
          ?></div>
        <h4 class="blog_article-title"><?php the_title(); ?></h4>
        <div class="blog_article-snsDate-wrapper">
          <div class="blog_article-date-wrapper">
            いいね
          </div>
          <time class="blog_article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
        </div>
        <figure class="blog_article-main-img"><?php the_post_thumbnail(); ?></figure>
        <?php the_content(); ?>
      </article>

      <div class="blog_recommend">
        <h4 class="blog_recommend-title">おすすめの記事</h4>

        <?php
        $custom_posts = get_posts('post_type=post&order=DESC&orderby=date&showposts=3&tag_id=pickup');
        foreach ($custom_posts as $post) :
          setup_postdata($post);
        ?>

          <article class="blog_recommend-article">
            <figure class="blog_recommend-article-img">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/sample01.jpg'; ?>" alt="">
              <?php endif;

              $categories = get_the_category(); ?>
              <a href="<?php echo get_category_link($categories[0]->term_id); ?>">
                <div class="blog_recommend-category">
                  <?php
                  if ($categories) {
                    echo $categories[0]->name;
                  }
                  ?></div>
            </figure>
            <div class="blog_recommend-article-text-box">
              <time class="blog_recommend-article-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
              <p class="blog_recommend-article-title"><?php echo mb_strimwidth(strip_tags(get_the_title()), 0, 50, '…', 'UTF-8'); ?></p>
            </div>
          </article>
        <?php endforeach;
        wp_reset_postdata();
        ?>

      </div>
    </div>

    <div class="blog_detail_main-right">
      <div class="blog_sidebar">
        <div class="blog_sidebar-related">
          <h5 class="blog_sidebar-related-title">関連記事</h5>

          <?php
          $categories = get_the_category($post->ID);
          $category_ID = array();
          foreach ($categories as $category) :
            array_push($category_ID, $category->cat_ID);
          endforeach;

          $args = array(
            'post__not_in' => array($post->ID),
            'posts_per_page' => 3,
            'category__in' => $category_ID,
            'orderby' => 'rand',
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
          ?>
              <article class="blog_related-article blog_related-first-article">
                <figure class="blog_related-article-img-box">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/sample01.jpg'; ?>" alt="">
                  <?php endif; ?>
                </figure>
                <div class="blog_related-article-text-box">
                  <small class="blog_related-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></small>
                </div>
              </article>
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>

        <?php if (is_active_sidebar('main-sidebar')) : ?>
          <ul class="menu">
            <?php dynamic_sidebar('main-sidebar'); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="contact blog_detail_contact">
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
