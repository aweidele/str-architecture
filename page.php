<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$content = get_field('modules');
foreach($content as $block) {
  include('modules/str-'.$block['acf_fc_layout'].'.php');
}
endwhile;
endif;
get_footer();
