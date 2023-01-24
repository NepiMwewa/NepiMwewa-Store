<?php
  get_header();
?>

  <div id="front-page-content" class="page-content">
  
    <?php if(have_posts()) :
      while (have_posts()) :the_post();
        ?><section class="banner-hero spacer-bottom no-margin"><?php
        if(has_post_thumbnail() ):
        ?><div class="front-page-img"><?php echo get_the_post_thumbnail();?></div><?php
        endif;
        ?><div class="title-container"><h1 id="front-page-title"><?php the_title(); ?></h1></div>
        <hr class="end-of-banner-hero spacer peaks ">
        </section><?php
        the_content();

      endwhile;

      else:
        echo '<p>No content found</p>';

      endif;
    ?>
    </div>

<?php
  get_footer();
?>
