<?php get_header(); ?>
   <div class="secondary-mainvisual" style="background:transparent url(<?php echo get_template_directory_uri() ?>/img/plan.png) no-repeat center center / cover">
    <h1 class="secondary-mainvisual__title">コース・料金</h1>
   </div>

<?php  get_template_part('template/breadcrumb'); ?>

   <main class="main">
   
    <section class="price-plan section">
      <div class="price-plan__inner inner">
        <h2 class="price-plan__title secondary-util-title ">料金体系</h2>
        <div class="price-plan__content">
          <span class="price-plan__item">入会金 39,800円</span>
          <span class="price-plan__item">月額費用</span>
        </div>
        <div class="price-plan__body">
          <p class="price-plan__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
      </div>
        <!-- /.inner -->
    </section>

       <!-- /.price-plan -->
    <section class="price-list">
      <div class="price-list__inner inner">
        <h2 class="price-list__title secondary-util-title">料金表</h2>
          <div class="js-scrollable-wrap">
             <div class="js-scrollable">
            <ul class="price-boxes">
              <li class="price-boxes__item price-box">
                <div class="price-box__header">
                  <p class="price-box__title">基礎プラン</p>
                </div>

                <div class="price-box__body">
                  <p class="price-box__price"><?php the_field('price'); ?>円~</p>
                  <p class="price-box__price-unit">*月額（税抜価格）</p>

                  <ul class="price-box__list">
                    <li class="price-box__item">カリキュラム作成</li>
                    <li class="price-box__item">TOEFL学習サポート</li>
                    <li class="price-box__item">週一回のビデオMTG</li>
                  </ul>

                </div>
              </li>
              <li class="price-boxes__item price-box">
                <div class="price-box__header">
                  <p class="price-box__title">演習プラン</p>
                </div>

                <div class="price-box__body">
                  <p class="price-box__price"><?php the_field('price2'); ?>円~</p>
                  <p class="price-box__price-unit">*月額（税抜価格）</p>

                  <ul class="price-box__list">
                    <li class="price-box__item">カリキュラム作成</li>
                    <li class="price-box__item">TOEFL学習サポート</li>
                    <li class="price-box__item">週一回のビデオMTG</li>
                    <li class="price-box__item">月二回の模試（解説 付き）</li>
                  </ul>

                </div>
              </li>
              <li class="price-boxes__item price-box price-box--popular">
                <div class="price-box__header">
                  <p class="price-box__title">おすすめ</p>
                  <p class="price-box__title">志望校対策プラン</p>
                </div>

                <div class="price-box__body">
                  <p class="price-box__price"><?php the_field('price3'); ?>円~</p>
                  <p class="price-box__price-unit">*月額（税抜価格）</p>

                  <ul class="price-box__list">
                    <li class="price-box__item">カリキュラム作成</li>
                    <li class="price-box__item">TOEFL学習サポート</li>
                    <li class="price-box__item">週一回のビデオMTG</li>
                    <li class="price-box__item">月二回の模試（解説 付き）</li>
                    <li class="price-box__item">週一の英語面接対策</li>
                  </ul>

                </div>
              </li>
              <li class="price-boxes__item price-box">
                <div class="price-box__header">
                  <p class="price-box__title">フレックスプラン</p>
                </div>

                <div class="price-box__body">
                  <p class="price-box__price"><?php the_field('price4'); ?>円~</p>
                  <p class="price-box__price-unit">*月額（税抜価格）</p>

                  <p class="price-box__contact">＊別途ご相談ください</p>

                </div>
              </li>
            </ul>
          </div>
        <!-- js-scrollable -->
          </div>
     <!-- js-scrollable-wrap -->
        </div>
        <!-- /.inner -->
      </section>
     <!-- /.price-list -->
   </main>
   <!-- /.main -->

 <?php get_footer(); ?>