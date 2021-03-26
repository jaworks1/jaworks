
<?php
// 同じカテゴリから記事を3件呼び出す
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID), // 今読んでいる記事を除く
  'posts_per_page'=> 3,
  'category__in' => $category_ID,
  'orderby' => 'rand', // ランダムに記事を選ぶ
);
$query = new WP_Query($args);
if( $query -> have_posts() ): while ($query -> have_posts()) : $query -> the_post();
?>
<a class="wpost-item" href="<?php the_permalink(); ?>">
<div class="wpost-item-img">
  <?php if(has_post_thumbnail()): ?>
  <?php while(the_post_thumbnail('thumbnail')); ?>
  <?php else: ?>
    <?php get_template_part('template/img') ?>
  <?php endif; ?>
</div>
<!-- wpost-item -->
<div class="wpost-item-body">
<div class="wpost-item-title"><?php the_title(); ?></div>
</div><!-- /wpost-item-body -->
</a><!-- /wpost-item -->
<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>