<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$sketch = get_field('mobile_sketch');
?>
<div class="frontpage_mobile_sketch">
  <img src="<?php echo $sketch['url']; ?>">
</div>
<?php
endwhile;
endif;
get_footer();
