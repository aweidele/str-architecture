<?php
$jumpslide = -1;
$jumpset = false;

$slides = array();
foreach ($block_slides as $i => $slide) {
  $slide['type'] = 'image';
  $slides[] = $slide;
}
foreach($block_text_slides as $slide) {
  echo "<pre>",print_r($slide),"</pre>";
  $slide['type'] = 'text';
  if($slide['text'] != '') {
    if($slide['slide_position'] != '') {
      array_splice($slides, $slide['slide_position'], 0, [$slide]);
    } else {
      $slides[] = $slide;
    }
  }

  if($slide['project_info_slide'] && !$jumpset) {
    $jumpslide = $slide['slide_position'];
    $jumpset = true;
  }
}
?>
<section class="str_project">
  <div class="str_project_slider_container">
    <div class="str_project_slider">
<?php
$i = 0;
foreach($slides as $j => $slide) {
  $orientation = get_field('orientation',$slide['ID']);
  $size = 'STR Slider' . ($orientation == 'portrait' ? ' Portrait' : '');
  ?>
      <div class="str_slide<?php echo !$i ? ' active' : ''; ?><?php echo $j == $jumpslide ? ' project_info' : ''; ?>">
        <?php if($slide[type] == 'image') { ?>
          <div class="str_slide_image<?php echo $orientation == 'portrait' ? ' str_slide_portrait' : ''; ?>">
            <img src="<?php echo $slide['sizes'][$size]; ?>">
            <a href="<?php echo $slide['url']; ?>" class="str_slide_download" target="_blank">
              <svg viewbox="0 0 32 32" class="icon-download"><use href="#download"></use></svg>
              <?php _e('Download Image'); ?></a>
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
  <div class="str_project_indicators">
<?php for($i=0;$i<sizeof($slides);$i++) { ?>
    <div class="str_indicator<?php echo !$i ? ' active' : ''; ?>"><?php echo $i; ?></div>
<?php } ?>
  </div>
  <div class="str_project_indicator_mobile">
    <span class="str_project_indicator_current">1</span> / <?php echo sizeof($slides); ?>
  </div>
  <div class="str_project_description">

<?php if($block_title) { ?>
    <h3><?php echo $block_title; ?></h3>
<?php } ?>

    <?php echo wpautop($block_description); ?>
<?php if($jumpset) { ?>
    <p class="str_slider_info_link">Project Info</p>
<?php } ?>
  </div>
  <div class="str_project_controls">
    <div class="str_previous">Prev<svg viewbox="0 0 32 32"><use href="#arrow_left"></use></svg></div>
    <div class="str_next">Next<svg viewbox="0 0 32 32"><use href="#arrow_right"></use></svg></div>
  </div>
</section>
