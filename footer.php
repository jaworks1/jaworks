<?php if(!is_page_template( 'contact.php' ) && !is_page_template('contact-complete.php')): ?>
<div class="cta-area">
      <h2 class="cta-area__title">まずは無料で資料請求から</h2>
      <div class="cta-area__btn-wrapper">
        <a href="#" class="rounded-btn rounded-btn--large">資料請求</a>
      </div>
      <div class="cta-area__contact-link-wrapper">
        <a href="<?php get_template_part('template/contact') ?>" class="contact-link">お問い合わせ</a>
      </div>
    </div>
      <!-- /.cta -->

      <div class="footer-info">
        <p class="footer-info__text">お電話でのお問い合わせはこちら</p>
        <address class="footer-info__tell">
          <a href="tel:+810123-456-7890" class="footer-info__tell-link">0123-456-7890</a>
        </address>
        <span class="footer-info__time">平日 08:00~20:00</span>
      </div>
       <!-- /.footer-info -->
<?php endif; ?>

       <footer class="footer">
         <div class="footer__inner inner">
            <?php
            wp_nav_menu(
            //.header-listを置き換えて、PC用メニューを動的に表示する
            array(
            'depth' => 1,
            'theme_location' => 'footer', //グローバルメニューをここに表示すると指定
            'container' => 'nav',
            'container_class' =>'footer__nav',
            'menu_class' => 'footer__list',
            )
            );
            ?>
            <div class="footer__right">
              <div class="footer__logo-wrapper">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-story-picture.png" alt="footer-logo" class="footer__logo">
              </div>
              <div class="footer__address">
                <a href="tel:+8101234567890" class="info-tell">0123-456-7890</a>
                <div class="info-time">平日08:00〜20:00</div>
              </div>
           </div>
         </div>
           <!-- /.inner-->
       </footer>
       <!-- /.footer -->
       <div class="copyright">
        <div class="copyright__inner inner">
          <small class="copyright-text">&copy; 2020 Engress.</small>
        </div>
       </div>
        <!-- /.copyright -->
<?php wp_footer(); ?>
</body>
</html>