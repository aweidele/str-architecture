<div class="homepage_sketch">
<?php foreach($sketch as $i => $tile) {
  $tile_link = $tile['project_link_page'] ? $tile['project_link_page'] : $project_page;
?>
  <div class="homepage_sketch_tile homepage_sketch_tile_<?php echo str_pad($i, 3, '000', STR_PAD_LEFT); ?>">
    <a href="<?php echo $tile_link; ?>#<?php echo $tile['project_link']->post_name; ?>">
      <img class="homepage_sketch_image" src="<?php echo $tile['sketch_image']['url']; ?>">
<?php if($tile['photo_image']) { ?>
      <img class="homepage_sketch_photo" src="<?php echo $tile['photo_image']['url']; ?>">
<?php } ?>
    </a>
  </div>
<?php } ?>
</div>
<style type="text/css">
<?php
  $base_height = 815;
  $base_width = 1800;

  foreach($sketch as $i => $tile) {
    $w = (intval($tile['sketch_image']['width']) / $base_width) * 100;
    $l = (intval($tile['position_left']) / $base_width) * 100;
    $t = (intval($tile['position_top']) / $base_height) * 100;
  ?>
  <?php echo '.homepage_sketch_tile_'.str_pad($i, 3, '000', STR_PAD_LEFT); ?> {
    width: <?php echo $w; ?>%;
    top: <?php echo $t; ?>%;
    left: <?php echo $l; ?>%;
  }
<?php } ?>
</style>
