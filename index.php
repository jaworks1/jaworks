<?php get_header(); ?>

   <div class="mainvisual">
		<div class="mainvisual__content">
			<div class="mainvisual__title">TOEFL対策はEngress</div><!-- /.mainvisual__title -->
      <div class="mainvisual__lead">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</div><!-- /.mainvisual__lead -->
      <div class="mainvisual__btn-wrapper"> <a href="#" class="rounded-btn">資料請求</a></div>
			<div class="mainvisual__contact-link-wrapper"><a class="contact-link" href="<?php get_template_part('template/contact') ?>">お問い合わせ</a></div><!-- /.mainvisual__button -->
		</div><!-- /.mainvisual__content -->
	</div><!-- /.mainvisual -->
    
  <main class="main">
    <section class="study-trouble">
      <div class="study-trouble__inner inner">
      <h2 class="study-trouble__title util-title">TOEFL学習でこんな悩みありませんか？</h2>
      <ul class="study-trouble__list">
        <li class="study-trouble__item">勉強の習慣が<br class="hidden-sp">身についていない</li>
        <li class="study-trouble__item">勉強しているはず<br class="hidden-sp">なのに点数が伸びない</li>
        <li class="study-trouble__item">正しい勉強方法が<br class="hidden-sp">わからない</li>
      </ul>
      <div class="study-trouble__content-wrapper">
        <div class="study-trouble__content">
          <div class="study-trouble__catch-copy">Engressは<br><span class="underline">TOEFLに特化したスクール</span>です</div>
          <div class="study-trouble__text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="hidden-sp"> TOEFLの苦手分野を克服します。</div>
        </div>
      </div>
      </div>
        <!-- /.inner -->
    </div>
      <!-- /.study-trouble -->
    </section>

      <section class="features">
        <div class="features__inner inner">
          <h2 class="features__title util-title">TOEFL対策に特化したEngress3つの強み</h2>
          <div class="features__list">
          <div class="features__item media media--reverse">
            <div class="media__img-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/img/feature01story-picture.png" alt="feature" class="media__img">
            </div>
            <div class="media__body">
              <span class="label">特徴　1</span>
              <h3 class="media__title">TOEFLに最適化された<br> 無駄のないカリキュラム</h3>
              <p class="media__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
            </div>
          </div>
          <div class="features__item media">
            <div class="media__img-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/img/feature02story-picture.png" alt="feature" class="media__img">
            </div>
            <div class="media__body">
              <span class="label">特徴　2</span>
              <h3 class="media__title">日本人指導歴10年以上の<br> 経験豊富な講師陣</h3>
              <p class="media__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
            </div>
          </div>
          <div class="features__item media media--reverse">
            <div class="media__img-wrapper">
              <img src="<?php echo get_template_directory_uri() ?>/img/feature03story-picture.png" alt="feature" class="media__img">
            </div>
            <div class="media__body">
              <span class="label">特徴　3</span>
              <h3 class="media__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
              <p class="media__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
            </div>
          </div>
          </div>
           <!-- /.features__list -->

           <div class="features__price-access price-access">
             <h3 class="price-access__title">Engressの料金プランはこちら</h3>
             <?php $price = get_page_by_path('price');
             $price_permalink = get_permalink($price->ID);
             ?>
             <div class="price-access__wrapper"><a href="<?php echo $price_permalink;  ?>" class="rounded-btn rounded-btn--border">料金を見てみる</a></div>
           </div>
        </div>
           <!-- /.inner -->
      </section>
         <!-- /.features -->

    <section class="comments">
      <div class="comments__inner inner">
        <h2 class="comments__title util-title">TOEFL成功事例</h2>
        <ul class="cards cards--colum3">
          <li class="cards__item card">
            <p class="card__title"><?php the_field('comment'); ?></p>
            <div class="card__img-wrapper">
            <?php 
            $image = get_field('picture');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ): 
            echo wp_get_attachment_image( $image, $size );
            ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/img/model01.png" alt="model" class="card__img">
            <?php endif; ?> 
            </div>
            <div class="card__profile">
              <span class="card__profession"><?php the_field('profession'); ?></span>
              <span class="card__name"><?php the_field('name'); ?>さん</span>
              <span class="card__score"><?php the_field('result'); ?></span>
            </div>
          </li>
          <li class="cards__item card">
            <p class="card__title"><?php the_field('comment2'); ?></p>
            <div class="card__img-wrapper">
            <?php 
            $image = get_field('picture2');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ): 
            echo wp_get_attachment_image( $image, $size );
            ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/img/model01.png" alt="model" class="card__img">
            <?php endif; ?> 
            </div>
            <div class="card__profile">
              <span class="card__profession"><?php the_field('profession2'); ?></span>
              <span class="card__name"><?php the_field('name2'); ?>さん</span>
              <span class="card__score"><?php the_field('result2'); ?></span>
            </div>
          </li>
          <li class="cards__item card">
            <p class="card__title"><?php the_field('comment3'); ?></p>
            <div class="card__img-wrapper">
            <?php 
            $image = get_field('picture3');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $image ): 
            echo wp_get_attachment_image( $image, $size );
            ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri() ?>/img/model03.png" alt="model" class="card__img">
            <?php endif; ?> 
            </div>
            <div class="card__profile">
              <span class="card__profession"><?php the_field('profession3'); ?></span>
              <span class="card__name"><?php the_field('name3'); ?>さん</span>
              <span class="card__score"><?php the_field('result3'); ?></span>
            </div>
          </li>
        </ul>
      </div>
       <!-- /.inner -->
    </section>
      <!-- /.comments -->

    <section class="user-guide">
      <div class="user-guide__inner inner">
        <h2 class="user-guide__title util-title">ご利用の流れ</h2>
        <dl class="user-guide__list">
          <div class="user-guide__row">
            <dt class="user-guide__row-title">お問い合わせ</dt>
            <dt class="user-guide__row-body">
              <p>まずはフォームまたはお電話からお申し込みください。</p> 
            </dt>
          </div>
          <div class="user-guide__row">
            <dt class="user-guide__row-title">ヒアリング</dt>
            <dt class="user-guide__row-body">
              <p>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p> 
            </dt>
          </div>
          <div class="user-guide__row">
            <dt class="user-guide__row-title">学習プランのご提供</dt>
            <dt class="user-guide__row-body">
              <p>目標達成のために最適な学習プランをご提案致します。</p> 
            </dt>
          </div>
          <div class="user-guide__row">
            <dt class="user-guide__row-title">ご入会</dt>
            <dt class="user-guide__row-body">
              <p>お申込み完了後、レッスンがスタートします。</p> 
            </dt>
          </div>
        </dl>
      </div>
      <!-- /.inner -->
    </section>
      <!-- /.user-guide -->

    <section class="faq">
      <div class="faq__inner inner">
        <h2 class="faq__title util-title">よくある質問</h2>
        <dl class="accordion">
          <dt class="accordion__title">
            <button class="accordion__btn" type="button">Engressはサラリーマンでも学習を続けられるでしょうか？</button>
          </dt>
          <dd class="accordion__body accordion__body--active">
            <p class="accordion__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
          <dt class="accordion__title">
            <button class="accordion__btn " type="button">教材はオリジナルのものを使用しているのでしょうか？</button>
          </dt>
          <dd class="accordion__body">
            <p class="accordion__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
          <dt class="accordion__title">
            <button class="accordion__btn" type="button">講師に日本人はいますか？</button>
          </dt>
          <dd class="accordion__body">
            <p class="accordion__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
          <dt class="accordion__title">
            <button class="accordion__btn" type="button">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</button>
          </dt>
          <dd class="accordion__body">
            <p class="accordion__text">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
          </dd>
        </dl>
      </div>
        <!-- /.inner -->
    </section>
      <!-- /.faq -->
    </main>
    <!-- /.main -->

    <aside class="top-aside">
      <div class="top-aside__inner inner">
        <section class="blog">
          <h2 class="top-aside__title">ブログ</h2>

          <?php $args = array(
            'posts_per_page'   => 3,
            'post_type'        => 'post',
          );
        $posts = get_posts( $args ); ?>
          <div class="blog__items">
            <?php foreach($posts as $post): setup_postdata($post); ?>
            <article class="blog__item article-media-wrapper">
              <a href="<?php the_permalink(); ?>" class="article-media">
                <div class="article-media__img-wrapper">
                  <span class="article-media__label label-main"><?php my_the_post_category(false); ?></span>
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
                  <?php get_template_part('template/img'); ?>
                  <?php endif; ?>
                </div>
                <div class="article-media__body">
                  <h3 class="article-media__title"><?php the_title(); ?></h3>
                  <time class="article-media__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                </div>
            </a>
            </article>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        </section>
          <!-- /.blog -->
          <section class="news">
            <h2 class="top-aside__title">お知らせ</h2>
            <?php $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
            ); ?>
            <?php $the_query = new WP_Query($args); ?>
            <?php if($the_query->have_posts()): ?>
            <div class="news__items">
            <?php while($the_query->have_posts()): $the_query->the_post();  ?>
              <article class="news__item-wrapper">
                <a href="<?php the_permalink(); ?>" class="news__item">
                  <time class="info-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                  <h3 class="news__title"><?php the_title(); ?></h3>
              </a>
              </article>
          <?php endwhile; wp_reset_postdata(); ?>   
          </div>
          <?php endif; ?>
          </section>
          <!-- /.news -->
      </div>
       <!-- /.inner -->
    </aside>
    <!-- /.aside -->
    
 <?php get_footer(); ?>