<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$sketch1 = get_field('sketch_tile_1');
$sketch2 = get_field('sketch_tile_2');
$mobile_sketch = get_field('mobile_sketch');
$project_page = get_field('project_page');

$sketch = [];
for($i=1;$i<16;$i++) {
  $field = 'sketch_tile_'.$i;
  $sketch[] = get_field($field);
}
include('modules/str-homepage-sketch.php');
?>
<div class="frontpage_mobile_sketch">
  <img src="<?php echo $mobile_sketch['url']; ?>">
</div>
<?php
endwhile;
endif;
get_footer();
