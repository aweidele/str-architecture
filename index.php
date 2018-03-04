<?php
get_header();
?>
<div class="row">
  <div class="cell">
<?php
  if(have_posts()) : while(have_posts()) : the_post();
?>
  <article class="news_article">
    <h1 class="news_title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
    <?php the_content(); ?>
  </article>
<?php
  endwhile;
  endif;
?>
  </div>
</div>
<?php
get_footer();
