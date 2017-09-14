<?php
$block_title = $block['project']->post_title;
$block_slides = get_field('slides',$block['project']->ID);
$block_text_slides = get_field('text_slides',$block['project']->ID);
$block_description = get_field('description',$block['project']->ID);

include('str_slides.php');
