<?php
$block_title = $block['project']->post_title;
$block_slides = get_field('slides',$block['project']->ID);
$block_text_slides = get_field('text_slides',$block['project']->ID);
$block_description = get_field('description',$block['project']->ID);
$block_name = $block['project']->post_name;

include('str_slides.php');
$current_user = wp_get_current_user();
if (user_can( $current_user, 'administrator' )) {
  edit_post_link( __('Edit Project'), '<p style="text-align: center">', '</p>', $block['project']->ID);
}
