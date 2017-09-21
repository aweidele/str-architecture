<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$sketch = get_field('sketch');
?>
<div class="frontpage_sketch">
  <img src="<?php echo $sketch['url']; ?>">
</div>
<?php
endwhile;
endif;
get_footer();
