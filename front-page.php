<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$sketch = get_field('sketch');
$mobile_sketch = get_field('mobile_sketch');
include('modules/str-homepage-sketch.php');
?>
<div class="frontpage_mobile_sketch">
  <img src="<?php echo $mobile_sketch['url']; ?>">
</div>
<?php
endwhile;
endif;
get_footer();
