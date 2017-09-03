<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">

<?php /*
  <meta property="og:image" content="<?php echo $gallery[0]['sizes']['Homepage Portfolio']; ?>" />
  <meta property="og:title" content="<?php wp_title ( ' | ', true,'right' ); echo get_bloginfo('name'); ?>" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />


  <link rel="icon" type="image/png" href="assets/img/favicon.png">
*/ ?>

  <title><?php
if (is_front_page()) {
  echo get_bloginfo('name');
  if (get_bloginfo('description')!="") { echo " | ".get_bloginfo('description'); }
} else {
  wp_title ( ' | ', true,'right' );
  echo get_bloginfo('name');
} ?></title>
  <?php wp_head(); ?>
</head>
<body>
