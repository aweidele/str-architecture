<div class="homepage_sketch">
<?php foreach($sketch as $i => $tile) { ?>
  <div class="homepage_sketch_tile homepage_sketch_tile_<?php echo str_pad($i, 3, '000', STR_PAD_LEFT); ?>">
    <img class="homepage_sketch_image" src="<?php echo $tile['sketch_image']['url']; ?>">
    <img class="homepage_sketch_photo" src="<?php echo $tile['photo_image']['url']; ?>">
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
<?php consolelog($sketch); ?>
