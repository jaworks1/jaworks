jQuery(function(){
     //scroll-hint

     new ScrollHint('.js-scrollable', {

          suggestiveShadow: true,
          applyToParents: true,
          i18n: {
            scrollable: 'スクロールできます'
          }
        });

     //アコーディオン
     jQuery('.accordion__title').click(function(){
     jQuery(this).next().slideToggle();
     jQuery(this).children().toggleClass('accordion__btn--active');
     });

     //送信
     let $submit = jQuery('.js-submit');
     jQuery('form').attr('id','js-form');
     // MW WP FORMではdisabledが入力できないためjsにて制御。読み込まれた時点で送信できない状態にする。
     $submit.prop('disabled', true);
     // テキストが入力されたとき、全ての項目が入力できたらdisabledが外れるようになる。
     jQuery('#js-form input, #js-form textarea').on('change',function(){
      if(
          jQuery('#js-form input[type="text"]').val() !== "" &&
          jQuery('#js-form input[type="email"]').val() !== "" &&
          jQuery('#js-form textarea').val() !== "" &&
          jQuery('#js-form input[type="checkbox"]').prop('checked') === true
     ){
          // 全て入力されたとき、送信できるようにする。
          $submit.prop('disabled', false);
         
     }else{
          // 全て入力されていないとき
          $submit.prop('disabled', true); //送信できないようにする。
     }
     });
});

