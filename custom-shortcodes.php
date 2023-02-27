<?php
function breadcrumbs_main() {
  
  $post_title = get_the_title();

  $html = '<div class="bread-crumbs breadcrumbs-single">
    <a title="Go to Home" href="../home">Home</a> <p>/</p>
    <a>'.$post_title.'</a>

  </div>';
  return $html;
}
add_shortcode('breadcrumbs-main', 'breadcrumbs_main');

function add_post_title(){
  $post_title = get_the_title();
  $cats = get_the_category_list(', ');
  $tags = get_the_tag_list('', ', ');
  $html = "<h1>".$post_title."</h1><p class='cats-size'>".$cats."</p><p>".$tags."</p>";
  return $html;
}
add_shortcode('add-post-title-tags', 'add_post_title');
function add_title(){
  $post_title = get_the_title();
  $html = "<h1>".$post_title."</h1>";
  return $html;
}
add_shortcode('add-title', 'add_title');
?>