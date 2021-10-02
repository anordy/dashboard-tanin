$(function(){
    $("new-product").click(function(){
      $("new-product-box").stop().slideToggle('slow');
    });
    $("hide-box").click(function(){
        $("new-product-box").stop().slideToggle('slow');
      });
  });

