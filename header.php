<?php
session_start();
if ( is_front_page() && ( !isset($_SESSION['hp_visit']) || !$_SESSION['hp_visit'] ) ) {
  $first_visit = true;
  $_SESSION['hp_visit'] = true;
}
?>
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
?>
</head>
<figure class="svg_hidden">
<svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
  <path id="arrow_left" d="M11.433 15.992L22.69 5.712c.393-.39.393-1.03 0-1.42-.393-.39-1.03-.39-1.423 0l-11.98 10.94c-.21.21-.3.49-.285.76-.015.28.075.56.284.77l11.98 10.94c.393.39 1.03.39 1.424 0 .393-.4.393-1.03 0-1.42l-11.257-10.29" opacity="1" />
  <path id="arrow_right" d="M10.722 4.293c-.394-.39-1.032-.39-1.427 0-.393.39-.393 1.03 0 1.42l11.283 10.28-11.283 10.29c-.393.39-.393 1.02 0 1.42.395.39 1.033.39 1.427 0l12.007-10.94c.21-.21.3-.49.284-.77.014-.27-.076-.55-.286-.76L10.72 4.293z" opacity="1" />
  <path id="arrow_up" class="st0" d="M4.3,21.3c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L16,11.4l10.3,11.3c0.4,0.4,1,0.4,1.4,0 c0.4-0.4,0.4-1,0-1.4l-10.9-12C16.6,9.1,16.3,9,16,9c-0.3,0-0.6,0.1-0.8,0.3L4.3,21.3L4.3,21.3z"/>
  <path id="download" class="st0" d="M27.5,29h-23v-8.4c0-0.6,0.4-1,1-1s1,0.4,1,1V27h19v-6.4c0-0.6,0.4-1,1-1s1,0.4,1,1V29z M26.3,12.6c-0.4-0.4-1-0.4-1.4,0L17,20.9V4c0-0.6-0.4-1-1-1s-1,0.4-1,1v16.9l-7.9-8.3c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4 l9.6,10.1c0.2,0.2,0.4,0.3,0.7,0.3s0.5-0.1,0.7-0.3L26.4,14C26.7,13.6,26.7,13,26.3,12.6z"/>
</svg>
<?php
echo file_get_contents( get_stylesheet_directory_uri() . '/images/logo.svg' );
?>
</figure>
<body<?php
  if(is_front_page()) {
    $c = 'body_frontpage';
    $c .= $first_visit ? ' body_frontpage_load' : '';
    //$c .= ' body_frontpage_load';
    echo ' class="'.$c.'"';
  }

?>>
<header class="header">
  <div class="logo_wrapper">
    <div class="row">
      <div class="cell">
        <h1 class="header_logo"><a href="<?php echo get_home_url(); ?>">
          <span><?php echo get_bloginfo('name'); ?></span>
          <svg viewBox="0 0 207.6 46.6"><use href="#logo"></use></svg>
        </a></h1>
      </div>
    </div>
  </div>
  <div class="row navigation_row">
    <div class="cell">
      <nav class="main_nav">
        <?php wp_nav_menu( array('theme_location' => 'primary-menu') ); ?>
      </nav>
    </div>
  </div>
</header>
<main class="main">
