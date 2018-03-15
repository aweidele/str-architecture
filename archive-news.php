<?php
get_header();
?>
<header class="news_index_header">
  <div class="news_index_header_title">News</div>
  <div class="news_index_header_image">
    <div class="news_index_header_image_inner">
    <figure class="news_index_header_figure">
      <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 338 68"><path d="M0,1.21H17.76L32.29,30.47,38.54,45.2h0.4q-0.3-2.62-.71-5.75T37.53,33q-0.3-3.28-.56-6.56t-0.25-6.31v-19H53.27V66.79H35.52L21,37.43,14.73,22.8h-0.4q0.61,5.65,1.41,12.31a105.9,105.9,0,0,1,.81,12.71v19H0V1.21Zm96,0h42.38V15.74h-25V26H134.7V40.56H113.31v11.7h26V66.79H96V1.21Zm78,0H191.7l3.63,28.66q0.5,5.15,1.11,10.29t1.11,10.29H198l1.82-10.29,1.82-10.29,6.26-28.66h14.53l6.26,28.66q0.91,4.94,1.82,10.14t1.82,10.44h0.4q0.5-5.24,1.11-10.39t1.11-10.19l3.63-28.66h16.55l-10.9,65.58h-22l-5-26q-0.81-3.83-1.36-7.77t-1.06-7.57h-0.4q-0.51,3.63-1.06,7.57t-1.36,7.77l-4.84,26H185.45Zm123.5,45.5a33.2,33.2,0,0,0,7.62,4.59,19.48,19.48,0,0,0,7.72,1.77q3.93,0,5.7-1.21a3.92,3.92,0,0,0,1.77-3.43,3.27,3.27,0,0,0-.61-2,6.23,6.23,0,0,0-1.77-1.51,19.67,19.67,0,0,0-2.77-1.36q-1.62-.66-3.73-1.46l-8.17-3.43a24.2,24.2,0,0,1-5-2.67A19.65,19.65,0,0,1,293.91,32a18.08,18.08,0,0,1-2.88-5.2A18.84,18.84,0,0,1,290,20.38a17.67,17.67,0,0,1,1.82-7.92,20.28,20.28,0,0,1,5-6.46,24.34,24.34,0,0,1,7.72-4.39A28.9,28.9,0,0,1,314.39,0a33.23,33.23,0,0,1,11.45,2.12,28.17,28.17,0,0,1,10.34,6.66l-8.68,10.9a31.58,31.58,0,0,0-6.41-3.53,18.18,18.18,0,0,0-6.71-1.21,9.68,9.68,0,0,0-5,1.11,3.65,3.65,0,0,0-1.82,3.33A3.91,3.91,0,0,0,310.1,23q2.57,1.26,7.11,3l8,3.13a21.55,21.55,0,0,1,9.48,6.76Q338,40.16,338,47a19.45,19.45,0,0,1-6.71,14.68,24.83,24.83,0,0,1-8,4.59A32,32,0,0,1,312.37,68a39.48,39.48,0,0,1-12.86-2.27,34.23,34.23,0,0,1-12-7.11Z"/></svg>
    </figure>
    </div>
  </div>
</header>
<div class="row">
  <div class="image_cell_content">
    <section class="str_section news_wrapper">
<?php
  $wp_query->query_vars["orderby"] = "menu_order";
  if(have_posts()) : while(have_posts()) : the_post();
    $feature_image = get_field('feature_image');
    $date = get_field("date");
?>
    <article class="news_article" itemscope itemtype="http://schema.org/NewsArticle">
      <meta itemprop="datePublished" content="<?php echo get_the_date("c"); ?>"/>
      <meta itemprop="dateModified" content="<?php echo get_the_date("c"); ?>"/>
      <header class="news_header">
        <h1 class="news_title"><?php if($date) { ?><span class="news_date"><?php echo $date; ?></span><?php } ?><a href="<?php echo get_permalink(); ?>"><span class="news_headline" itemprop="headline"><?php the_title(); ?></span></a></h1>
      </header>
      <?php
        if($feature_image) {
      ?>
      <figure class="news_figure" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
        <meta itemprop="url" content="<?= $feature_image["sizes"]["image_module_content"] ?>">
        <meta itemprop="width" content="<?= $feature_image["sizes"]["image_module_content-width"] ?>">
        <meta itemprop="height" content="<?= $feature_image["sizes"]["image_module_content-height"] ?>">
        <img src="<?= $feature_image["sizes"]["image_module_content"] ?>">
      </figure>
      <?php
        }
      ?>
      <main class="typography">
        <?php the_content("Read More"); ?>
      </main>
    </article>
<?php
  endwhile;
  endif;
?>
      <div class="news_navigation">
        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
      </div>
    </section>

    </div>
  </div>
</div>
<?php
get_footer();
