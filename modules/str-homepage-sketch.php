<div class="homepage_sketch">
<?php foreach($sketch as $i => $tile) {
  //$tile_link = $tile['project_link_page'] ? $tile['project_link_page'] : $project_page;
?>
  <div class="homepage_sketch_tile homepage_sketch_tile_<?php echo $i + 1; ?>">
<?php  /* if($tile['project_link']) { ?>
    <a href="<?php echo $tile_link.'#'.$tile['project_link']->post_name; ?>">
<?php } */ ?>
      <img class="homepage_sketch_image" src="<?php echo $tile['sketch_image']['url']; ?>">
<?php if($tile['photo_image']) { ?>
      <img class="homepage_sketch_photo" src="<?php echo $tile['photo_image']['url']; ?>">
<?php } ?>
<?php /* if($tile['project_link']) { ?>
    </a>
<?php } */ ?>
  </div>
<?php } ?>
</div>
<style type="text/css">
<?php
  $base_height = 815;
  $base_width = 1800;
?>
</style>
