<h2>新着記事一覧</h2>
<?php
$paged = (int) get_query_var('paged');
$args = array(
 'posts_per_page' => 10,
 'paged' => $paged,
 'orderby' => 'post_date',
 'post_type' => 'post',
 'category__not_in' => array(2,10,11),
 'post_status' => 'publish'
);
$the_query = new WP_Query($args);?>
<?PHP
if ( $the_query->have_posts() ) :
 while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<article class="side_post">
  <a href="<?php the_permalink(); ?>">
    <p class="side_post_img"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
    <div class="side_post-text">
      <p class="postinfo">公開日:<?php the_time('Y年n月j日'); ?>
          <?php if (get_the_modified_date('Y/n/j') != get_the_time('Y/n/j')) : ?>
            最終更新日:<?php the_modified_date('Y年m月j日') ?>
          <?php endif; ?></p>
      <h2 class="side_post-title"><?php the_title(); ?></h2>
    </div><!--side_post-text-->
  </a>
</article>
<?php endwhile; ?>
<?PHP endif; ?>
<?php wp_reset_postdata(); ?>
