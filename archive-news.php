<?php get_header(); ?>
   <!-- /.header -->
   <div class="secondary-mainvisual" style="background:transparent url(<?php echo get_template_directory_uri() ?>/img/news.png) no-repeat center center / cover">
    <h1 class="secondary-mainvisual__title">お知らせ</h1>
   </div>

 <?php get_template_part('template/breadcrumb') ?>

   <main class="main">
    
    <div class="news-list section">
      <div class="inner">
        <h2 class="news-list__title secondary-util-title">お知らせ一覧</h2>
        <?php if(have_posts()): ?>
        <ul class="news-list__items">
        <?php while(have_posts()): the_post(); ?>
          <li class="news-list__item">
            <a href="<?php the_permalink(); ?>" class="news-list__link">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
              <h3 class="news-list__item-title"><?php the_title(); ?></h3>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>

          <div class="news-list__pager">
             <?php get_template_part('template/pager'); ?>
        </div>
       </div>
       <!-- inner -->
     </div>
     <!-- news-list -->

  </main>
  <!-- main -->


<?php get_footer(); ?>