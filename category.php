<?php get_header(); ?>
   <div class="secondary-mainvisual" style="background:transparent url(<?php echo get_template_directory_uri() ?>/img/blog.png) no-repeat center center / cover">
    <h1 class="secondary-mainvisual__title">ブログ</h1>
   </div>

 <?php get_template_part('template/breadcrumb'); ?>

   <main class="main">
    
    <section class="entries section">
      <div class="entries__inner inner">
        <h2 class="entries__title secondary-util-title"><?php my_the_post_category(false); ?>一覧</h2>
        <?php if(have_posts()):  ?>
          <div class="entries__list">
           <?php while(have_posts()): the_post(); ?>
          <article class="blog__item article-media-wrapper">
            <a href="<?php the_permalink(); ?>" class="article-media">
              <div class="article-media__img-wrapper">
                <span class="article-media__label label-main"><?php my_the_post_category(false); ?></span>
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                 <?php get_template_part('template/img') ?>
                <?php endif; ?>
              </div>
              <div class="article-media__body">
                <time class="article-media__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h3 class="article-media__title"><?php the_title(); ?></h3>
                <p class="article-media__text">
                  <?php the_excerpt(); ?>
                </p>
              </div>
          </a>
          </article>
          <?php endwhile ?>
      </div>
      
      <?php endif; ?>
       <!-- /entries__list -->
      <div class="entries__pager-wrapper">
      <?php get_template_part('template/pager'); ?>
    </div> 
      <!-- pager -->
      </div>
        <!-- /inner -->
    </section>
    <!-- /entries -->

   </main>
   <!-- /.main -->

 <?php get_footer(); ?>