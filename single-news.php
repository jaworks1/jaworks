<?php get_header(); ?>

 <?php get_template_part('template/breadcrumb'); ?>

  <main>
    <div class="single-news section">
      <div class="inner">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <article class="entry">

        <!-- entry-header -->
        <div class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

          <!-- entry-meta -->
          <div class="entry-meta">
            <time class="entry-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
          </div><!-- /entry-meta -->

        </div><!-- /entry-header -->

        <!-- entry-body -->
        <div class="entry-body">
        <?php the_content(); ?>
        </div><!-- /entry-body -->

         <!-- entry-img -->

      </article>
   <!-- article -->
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- inner -->
  </div>
   <!-- single-news -->
</main>
  <!-- /.main-->
 <?php get_footer(); ?>