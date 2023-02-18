<?php 
if ( isset( $attributes['image-parallax']['id'] ) ) {
  ?>
    <div class="image-parallax-container">
      <?php
        echo wp_get_attachment_image( $attributes['image-parallax']['id'], 'full-size', "", array( "class" => "image-parallax" ));
      ?>
    </div>
  <?php
}
?>