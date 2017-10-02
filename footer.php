</main>
<footer>
  <div class="footer_logo"><a href="<?php echo get_home_url(); ?>">
    <span><?php echo get_bloginfo('name'); ?></span>
    <?php echo $logo; ?>
  </a></h1>
  <a class="back_to_top" href="#">
    <span><svg viewbox="0 0 32 32"><use href="#arrow_up"></use></svg>
      <span><?php _e('Back To Top'); ?></span>
    </span>
  </a>
</footer>
<?php wp_footer(); ?>
</body>
</html>
