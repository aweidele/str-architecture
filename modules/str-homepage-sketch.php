<div class="homepage_sketch">
<?php foreach($sketch as $i => $tile) {

  //consolelog($tile);
  //$tile_link = $tile['project_link_page'] ? $tile['project_link_page'] : $project_page;
?>
    <div class="homepage_sketch_tile homepage_sketch_tile_<?php echo $i + 1; ?>">
<?php  if($tile['project_link']) { ?>
      <a href="<?php echo $tile_link.'#'.$tile['project_link']->post_name; ?>">
<?php }  ?>
        <img class="homepage_sketch_image" src="<?php echo $tile['sketch_image']['sizes']['homepage_sketch']; ?>">
<?php if($tile['photo_image']) { ?>
        <div class="homepage_sketch_photo"><img class="homepage_sketch_photo_image" src="<?php echo $tile['photo_image']['sizes']['homepage_sketch']; ?>"></div>
<?php } ?>
<?php if($tile['project_link']) { ?>
      </a>
<?php } ?>
    </div>
<?php } ?>
</div>
