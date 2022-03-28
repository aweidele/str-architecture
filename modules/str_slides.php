<?php
$jumpslide = -1;
$jumpset = false;

$slides = array();
foreach ($block_slides as $i => $slide) {
  $slide['type'] = 'image';
  $slides[] = $slide;
}
foreach($block_text_slides as $slide) {
  $slide['type'] = 'text';
  if($slide['text'] != '') {

    if($slide['project_info_slide'] == 1 && !$jumpset) {
      $slide['jumpslide'] = 1;
      $jumpset = true;
    }

    if($slide['slide_position'] != '') {
      array_splice($slides, $slide['slide_position'], 0, [$slide]);
    } else {
      $slides[] = $slide;
    }
  }
}
?>
<section class="str_project"<?php echo $block_name ? ' id="'.$block_name.'"' : ''; ?>>
  <div class="str_project_slider_container <?php echo implode(' ', $block_classlist); ?>">
    <div class="str_project_slider">
<?php
$i = 0;
foreach($slides as $j => $slide) {
  $orientation = get_field('orientation',$slide['ID']);
  $size = 'STR Slider' . ($orientation == 'portrait' ? ' Portrait' : '');
  ?>
      <div class="str_slide<?php echo !$i ? ' active' : ''; ?><?php echo isset($slide['jumpslide']) ? ' project_info' : ''; ?>">
        <?php if($slide['type'] == 'image') { ?>
          <div class="str_slide_image<?php echo $orientation == 'portrait' ? ' str_slide_portrait' : ''; ?>">
            <img src="<?php echo $slide['sizes'][$size]; ?>">
            <a href="<?php echo $slide['url']; ?>" class="str_slide_download" target="_blank">
              <svg viewbox="0 0 32 32" class="icon-download"><use xlink:href="#download"></use></svg>
              <?php //_e('Download'); ?></a>
          </div>
        <?php } else { ?>
          <div class="str_slide_text">
            <div class="typography">
<?php
  if($slide['slide_layout'] == 'text') {
    echo $slide['text'];
  } else if($slide['slide_layout'] == 'quote') { ?>
              <blockquote class="str_quote" cite="<?php echo $slide['quote']['attribution']; ?>"><span><?php echo $slide['quote']['quote']; ?></span></blockquote>
  <?php } ?>
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
    <div class="str_indicator<?php echo !$i ? ' active' : ''; ?>"><?php echo $i + 1; ?></div>
<?php } ?>
    <div class="str_indicator_total"> / <?php echo sizeof($slides); ?></div>
  </div>
  <?php if( in_array('project-slider', $block_classlist) ) { ?>
  <div class="str_project_mobile">
    <?php
      $firstSlide = $slides[0];
      $orientation = get_field('orientation',$firstSlide['ID']);
      $size = 'STR Slider' . ($orientation == 'portrait' ? ' Portrait' : '');

    ?>
    <a href="<?php echo get_permalink($block['project']); ?>"><img src="<?php echo $firstSlide['sizes'][$size]; ?>"></a>
  </div>
  <?php } ?>
  <div class="str_project_description">

<?php if($block_title) { ?>
    <h3 class="str_project_desktop_title"><?php echo $block_title; ?></h3>
    <h3 class="str_project_mobile_title"><a href="<?php echo get_permalink($block['project']); ?>"><?php echo $block_title; ?></a></h3>
<?php } ?>

    <?php echo wpautop($block_description); ?>
<?php if($jumpset) { ?>
    <p class="str_slider_info_link">Info</p>
<?php } ?>
  </div>
  <!-- p class="str_slider_mobile_link"><a href="<?php echo get_permalink($block['project']); ?>">View Project</a></p -->
  <div class="str_project_controls">
    <div class="str_previous">Prev<svg viewbox="0 0 32 32"><use xlink:href="#arrow_left"></use></svg></div>
    <div class="str_next">Next<svg viewbox="0 0 32 32"><use xlink:href="#arrow_right"></use></svg></div>
  </div>
</section>