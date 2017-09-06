<?php
$jumpslide = -1;
$jumpset = false;

$slides = array();
foreach ($block_slides as $i => $slide) {
  $slide['type'] = 'image';
  $slides[($i + 1) * 10] = $slide;
}
foreach($block_text_slides as $slide) {
  $slide['type'] = 'text';
  if($slide['text'] != '') {
    if($slide['slide_position'] != '') {
      $pos = (($slide['slide_position'] - 1) * 10) + 5;
      $slides[$pos] = $slide;
    } else {
      $slides[] = $slide;
    }
  }

  if($slide['project_info_slide'] && !$jumpset) {
    $jumpslide = $pos;
    $jumpset = true;
  }
}
ksort($slides);
?>
<section class="str_project">
  <div class="str_project_slider_container">
    <div class="str_project_slider">
<?php
$i = 0;
foreach($slides as $j => $slide) { ?>
      <div class="str_slide<?php echo !$i ? ' active' : ''; ?><?php echo $j == $jumpslide ? ' project_info' : ''; ?>">
        <?php if($slide[type] == 'image') { ?>
          <div class="str_slide_image">
            <img src="<?php echo $slide['sizes']['STR Slider']; ?>">
          </div>
        <?php } else { ?>
          <div class="str_slide_text">
            <div class="typography">

<?php echo $slide['text']; ?>

            </div>
          </div>
        <?php } ?>
      </div>
<?php
$i++;
} ?>
    </div>
  </div>
  <div class="str_project_description">

<?php if($block_title) { ?>
    <h3><?php echo $block_title; ?></h3>
<?php } ?>

    <?php echo wpautop($block_description); ?>
    <p class="str_slider_info_link">Project Info</p>
  </div>
  <div class="str_project_controls">
    <div class="str_previous">Prev<svg viewbox="0 0 32 32"><use href="#arrow_left"></use></svg></div>
    <div class="str_next">Next<svg viewbox="0 0 32 32"><use href="#arrow_right"></use></svg></div>
  </div>
  <div class="str_project_indicators">
<?php for($i=0;$i<sizeof($slides);$i++) { ?>
    <div class="str_indicator<?php echo !$i ? ' active' : ''; ?>"><?php echo $i; ?></div>
<?php } ?>
  </div>
</section>
