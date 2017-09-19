<?php
$imagesize = 'image_module_'.$block['size'];
$image = get_post($block['image']['ID']);
?>

<section class="str_section">
  <div class="row">
    <div class="image_cell_<?php echo $block['size']; ?>">
      <figure class="image_figure">
        <img src="<?php echo $block['image']['sizes'][$imagesize]; ?>" class="image_cell_image" alt="<?php echo $block['image']['alt']; ?>">
<?php if($image->post_excerpt != '') { ?>
        <figcaption class="image_caption"><?php echo $image->post_excerpt; ?></figcaption>
<?php } ?>
      </figure>
    </div>
  </div>
</section>
