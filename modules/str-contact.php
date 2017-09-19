<section class="str_section">
  <div class="row">
      <div class="contact_block">
        <p>
<?php
  if($block['address'] != '') {
          echo '<span class="address_span">'.$block['address'].'</span>';
  }
  if($block['address_2'] != '') {
          echo '<span class="address_span">, '.$block['address_2'].'</span>';
  } ?>
          <span class="address_span"><?php echo $block['city'].', '.$block['state'].' '.$block['zip']; ?></span>
        </p>
        <p>
<?php if($block['address'] != '') { ?>
          <span class="phone_span"><a href="tel:<?php echo str_replace('.','-',$block['phone_number']); ?>"><?php echo $block['phone_number']; ?></a></span>
          <span class="phone_span"><a href="mailto:<?php echo $block['email']; ?>"><?php echo $block['email']; ?></a></span>
<?php } ?>
        </p>
      </div>
    </div>
  </div>
</section>
