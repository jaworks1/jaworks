<?php get_header(); ?>
   <!-- /.header -->
<?php get_template_part('template/breadcrumb'); ?>

<div class="single-blog section">
  <div class="inner">
    <main class="main">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <!-- entry -->
          <article class="entry">

            <!-- entry-header -->
            <div class="entry-header">
              <span class="label-main"><?php my_the_post_category(false); ?></span>
              <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

              <!-- entry-meta -->
              <div class="entry-meta">
              <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                <time class="entry-published" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y-m-d'); ?></time>
              </div><!-- /entry-meta -->

              <!-- entry-img -->
              <div class="entry-img">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                  <?php get_template_part('template/img') ?>
                <?php endif; ?>
              </div><!-- /entry-img -->

            </div><!-- /entry-header -->

            <!-- entry-body -->
            <div class="entry-body">
             <?php the_content(); ?>
            </div><!-- /entry-body -->    
         </article>
     <!-- article -->
      <?php endwhile; ?>
      <?php endif; ?>

  <!-- pickup -->
  <div id="pickup">
      <h2 class="pickup__title">おすすめの記事</h2>
      <?php
         $pickup_posts = get_posts( array(
           'post_type' => 'post', // 投稿タイプ
           'posts_per_page' => '3', // 3件取得
           'tag' => 'pickup', // pickupタグがついたものを
           'orderby' => 'DESC', // 新しい順に
           ) );
        ?>
        <div class="pickup-items">
          <?php foreach ( $pickup_posts as $post ) : setup_postdata($post); ?>
            <article class="blog__item article-media-wrapper">
              <a href="<?php the_permalink(); ?>" class="article-media">
                <div class="article-media__img-wrapper">
                  <span class="article-media__label label-main"><?php my_the_post_category(false); ?></span>
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                  <?php else: ?>
                    <?php get_template_part('template/img') ?>
                  <?php endif; ?>
                </div>
                <div class="article-media__body">
                  <time class="article-media__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                  <h3 class="article-media__title"><?php the_title(); ?></h3>
                </div>
            </a>
          </article>
          <?php endforeach; wp_reset_postdata(); ?>
      </div><!-- /pickup-items -->

  </div><!-- /pickup -->
 </main>
    <!-- /.main -->

    <aside class="aside">

      	<!-- widget -->
				<div class="widget widget_related">
					<div class="widget-title">関連記事</div>

					<div class="wpost-items">

					<?php get_template_part('template/categories'); ?>

          </div> 
        <!-- wpost-items -->  
         </div>   
        <!-- widget widget_related -->
      <div class="widget widget_archive">
        <div class="widget-title">カテゴリー</div>
        <ul>
        <?php
        $categories = get_categories();
        foreach($categories as $category) {
        echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
        }
        ?>
        </ul>
      </div><!-- /widget -->
    </aside>
      <!-- /.aside -->
   </div>
   <!-- /.inner -->
</div>
 <!-- /.wrap -->
 <?php get_footer(); ?>