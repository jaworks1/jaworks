<?php
/*
Template Name: contact
*/
?>

<?php get_header(); ?>

   <div class="secondary-mainvisual" style="background:transparent url(<?php echo get_template_directory_uri() ?>/img/cta.png) no-repeat center center / cover">
    <h1 class="secondary-mainvisual__title">お問い合わせ・資料請求</h1>
   </div>

<?php get_template_part('template/breadcrumb' ); ?>

  <main>
  <section class="contact section">
    <div class="contact__inner inner">

      <?php echo do_shortcode('[mwform_formkey key="3010"]'); ?>
      
  </div>
   <!-- /inner -->
 </section>
  </main>
  <!-- /main -->
  <?php get_footer(); ?>