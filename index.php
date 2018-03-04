<?php
get_header();
?>
<div class="row">
  <div class="image_cell_content">
    <section class="str_section">
<?php
  if(have_posts()) : while(have_posts()) : the_post();
    $feature_image = get_field('feature_image');
?>
    <article class="news_article" itemscope itemtype="http://schema.org/NewsArticle">
      <meta itemprop="datePublished" content="<?php echo get_the_date("c"); ?>"/>
      <meta itemprop="dateModified" content="<?php echo get_the_date("c"); ?>"/>
      <header class="news_header">
        <h1 class="news_title"><span class="news_date"><?php echo get_the_date("n | j | Y"); ?></span><a href="<?php echo get_permalink(); ?>"><span class="news_headline" itemprop="headline"><?php the_title(); ?></span></a></h1>
      </header>
      <?php
        if($feature_image) {
      ?>
      <pre><?php print_r($feature_image); ?></pre>
      <?php
        }
      ?>
      <main class="typography">
        <?php the_content(); ?>
      </main>
    </article>
<?php
  endwhile;
  endif;
?>
    </div>
  </div>
</div>
<?php
get_footer();
