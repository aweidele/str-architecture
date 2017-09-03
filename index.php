<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
$content = get_field('modules');
?>
<pre><?php print_r($content); ?></pre>
<?php
endwhile;
endif;
get_footer();
