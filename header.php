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
<?php
  wp_head();
  $logo = get_option('theme_logo');
?>
</head>
<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <path id="arrow_left" d="M11.433 15.992L22.69 5.712c.393-.39.393-1.03 0-1.42-.393-.39-1.03-.39-1.423 0l-11.98 10.94c-.21.21-.3.49-.285.76-.015.28.075.56.284.77l11.98 10.94c.393.39 1.03.39 1.424 0 .393-.4.393-1.03 0-1.42l-11.257-10.29" opacity="1" />
  <path id="arrow_right" d="M10.722 4.293c-.394-.39-1.032-.39-1.427 0-.393.39-.393 1.03 0 1.42l11.283 10.28-11.283 10.29c-.393.39-.393 1.02 0 1.42.395.39 1.033.39 1.427 0l12.007-10.94c.21-.21.3-.49.284-.77.014-.27-.076-.55-.286-.76L10.72 4.293z" opacity="1" />
</svg>
<body>
<header class="header">
  <div class="row">
    <div class="cell">
      <h1 class="header_logo"><a href="<?php echo get_home_url(); ?>">
        <span><?php echo get_bloginfo('name'); ?></span>
        <img src="<?php echo $logo; ?>">
      </a></h1>
    </div>
  </div>
  <div class="row">
    <div class="cell">
      <nav class="main_nav">
        <?php wp_nav_menu( array('theme_location' => 'primary-menu') ); ?>
      </nav>
    </div>
  </div>
</header>
<main>
