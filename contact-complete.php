<?php
/*
Template Name: contact-complete
*/
?>

<?php get_header(); ?>

<?php get_template_part('template/breadcrumb' ); ?>

  <main>
  <div class="contact-complete">
    <p class="contact-complete__message">
    お問い合わせいただきありがとうございます<br> 内容を確認した後、担当者よりご連絡いたします
    </p>
   <div class="contact-complete__submit-wrapper"> <a href="<?php echo esc_url(home_url()); ?>" class="contact-submit__home-link">ホームへ戻る</a></div>
  </div>
  </main>
  <!-- /main -->
  <?php get_footer(); ?>