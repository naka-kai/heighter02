$(function () {

  //ハンバーガーメニュー開閉
  $('.ham').on('click', function () {
    $('#js-black-bg').toggleClass('open');
    $('.header-sp-nav').toggleClass('open');
    $('.ham-line, .ham-line1, .ham-line2, .ham-line3').toggleClass('open');
  });

  //ハンバーガーメニューのナビリンククリック後自動で閉じる
  $('.header-sp-menu-list a').on('click', function () {
    $('.ham').click();
  });

  //背景とhamクリックで閉じる
  $('.ham, .black-bg').on('click', function () {
    if ($(this).hasClass("open")) {
      $('.ham').click();
    }
  });

  //faqのアコーディオン
  //最初のコンテンツ以外は非表示
  $(".faq_accordion-toggle:not(:first-of-type)").css("display", "none");
  //矢印の向きを変えておく
  $(".js-accordion-title:first-of-type").addClass("open");

  //タイトルがクリックされたら
  $(".js-accordion-title").on('click', function () {
    //クリックしたjs-accordion-title以外のずべてのopenを取る
    $(".js-accordion-title").not(this).removeClass("open");
    //クリックされたjs-accordion-title以外のfaq_accordion-toggleを閉じる
    $(".js-accordion-title").not(this).next().slideUp(300);
    //thisにopenクラスを付与
    $(this).toggleClass("open");
    //thisのfaq_accordion-toggleを展開、開いていれば閉じる
    $(this).next().slideToggle(300);
  });

  $(function () {
    $(".ham").click(function () {  // トリガーをクリックした時の条件分岐
      if ($(".header-sp-nav").hasClass("open")) {  // ナビを閉じるときの処理
        $("html").addClass("is-fixed");  // 背景固定解除！
      } else {                              // ナビを開くときの処理
        $("html").removeClass("is-fixed");     // 背景固定！
      }
    });
  });

});
