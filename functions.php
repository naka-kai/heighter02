<?php

function add_css_js()
{

  //css
  //全てのページ
  //reset.css
  wp_enqueue_style('resetcss', get_template_directory_uri() . '/assets/css/share_css/reset.css');
  //style.css
  wp_enqueue_style('stylecss', get_template_directory_uri() . '/assets/css/share_css/style.css');
  //header.css
  wp_enqueue_style('headercss', get_template_directory_uri() . '/assets/css/share_css/header.css');
  //hero.css
  wp_enqueue_style('herocss', get_template_directory_uri() . '/assets/css/share_css/hero.css');
  //mainvisual.css
  wp_enqueue_style('mainvisualcss', get_template_directory_uri() . '/assets/css/share_css/mainvisual.css');
  //breadcrumb.css
  wp_enqueue_style('breadcrumbcss', get_template_directory_uri() . '/assets/css/share_css/breadcrumb.css');
  //footer.css
  wp_enqueue_style('footercss', get_template_directory_uri() . '/assets/css/share_css/footer.css');
  //contact.css
  wp_enqueue_style('contactcss', get_template_directory_uri() . '/assets/css/share_css/contact.css');

  //front-page.php
  if (is_front_page()) :
    //about.css
    wp_enqueue_style('aboutcss', get_template_directory_uri() . '/assets/css/home_css/about.css');
    //blog.css
    wp_enqueue_style('blogcss', get_template_directory_uri() . '/assets/css/home_css/blog.css');
    //example.css
    wp_enqueue_style('examplecss', get_template_directory_uri() . '/assets/css/home_css/example.css');
    //faq.css
    wp_enqueue_style('faq', get_template_directory_uri() . '/assets/css/home_css/faq.css');
    //feature.css
    wp_enqueue_style('featurecss', get_template_directory_uri() . '/assets/css/home_css/feature.css');
    //flow.css
    wp_enqueue_style('flowcss', get_template_directory_uri() . '/assets/css/home_css/flow.css');
    //news.css
    wp_enqueue_style('newscss', get_template_directory_uri() . '/assets/css/home_css/news.css');
    //price.css
    wp_enqueue_style('pricecss', get_template_directory_uri() . '/assets/css/home_css/price.css');
  endif;

  //page-price.php
  //price_main.css
  if (is_page('price')) :
    wp_enqueue_style('aboutcss', get_template_directory_uri() . '/assets/css/price_css/price_main.css');
  endif;

  //index.php
  if (is_singular('post')) :
    //blog_main.css
    wp_enqueue_style('blog_maincss', get_template_directory_uri() . '/assets/css/blog_css/blog_main.css');
    //blog_mainvisual.css
    wp_enqueue_style('blog_mainvisualcss', get_template_directory_uri() . '/assets/css/blog_css/blog_mainvisual.css');
    //pagenumber.css
    wp_enqueue_style('pagenumber', get_template_directory_uri() . '/assets/css/share_css/pagenumber.css');
  endif;

  //single-post.php
  if (is_single('post')) :
    //blog_detail_contact.css
    wp_enqueue_style('blog_detail_contact', get_template_directory_uri() . '/assets/css/blog_detail_css/blog_detail_contact.css');
    //blog_detail_main.css
    wp_enqueue_style('blog_detail_main', get_template_directory_uri() . '/assets/css/blog_detail_css/blog_detail_main.css');
  endif;

  //archive-news.php
  if (is_archive('news')) :
    //news_main.css
    wp_enqueue_style('blog_maincss', get_template_directory_uri() . '/assets/css/news_css/news_main.css');
    //news_mainvisual.css
    wp_enqueue_style('news_mainvisualcss', get_template_directory_uri() . '/assets/css/news_css/news_mainvisual.css');
  endif;

  //single-news.php
  if (is_singular('news')) :
    //news_detail_main.css
    wp_enqueue_style('blog_maincss', get_template_directory_uri() . '/assets/css/news_detail_css/news_detail_main.css');
  endif;

  //page-contact.php
  if (is_page('contact')) :
    //contact_main.css
    wp_enqueue_style('contact_maincss', get_template_directory_uri() . '/assets/css/contact_css/contact_main.css');
    //contact_mainvisual.css
    wp_enqueue_style('contact_mainvisualcss', get_template_directory_uri() . '/assets/css/contact_css/contact_mainvisual.css');
  endif;

  //page-thanks.php
  //contact_detail_main.css
  if (is_page('thanks')) :
    wp_enqueue_style('contact_detail_maincss', get_template_directory_uri() . '/assets/css/contact_detail_css/contact_detail_main.css');
  endif;


  //jQuery
  wp_enqueue_script('jquery');
  wp_enqueue_script('scriptjquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');


  //js
  //全てのページ
  wp_enqueue_script('scriptjs', get_template_directory_uri() . '/assets/js/script.js');

  //page-price.php
  if (is_page('price')) :
    //scrollHint.css
    wp_enqueue_script('scrollHintjs', get_template_directory_uri() . '/assets/js/scrollHint.js');
  endif;
}
add_action('wp_enqueue_scripts', 'add_css_js');

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

