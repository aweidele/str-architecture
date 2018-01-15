<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();

  $block = [
    "project" => $post
  ];
  include('modules/str-project_slider.php');

endwhile;
endif;
get_footer();
