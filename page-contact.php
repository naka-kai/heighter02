<?php get_header(); ?>
<section class="mainvisual">
  <h3 class="mainvisual_text">お問い合わせ・資料請求</h3>
</section>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="contact_main">
  <div class="container">
    <div class="contact_main-container">
      <?php
      $page = get_post(2513);
      echo apply_filters('the_content', $post->post_content);
      ?>
      <p>asodf</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>
