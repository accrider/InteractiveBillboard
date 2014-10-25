<div id="sidebar">
<?php
//for each category, show all posts
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
  foreach($categories as $category) {
    $args=array(
      'showposts' => -1,
      'category__in' => array($category->term_id),
      'caller_get_posts'=>1
    );
    $posts=get_posts($args);
      if ($posts) {
        echo '<div class="sidebar-section"><h3>' . $category->name . '</h3><div class="textwidget"><ul>';
        foreach($posts as $post) {
          setup_postdata($post); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
          <?php
        } // foreach($posts
		echo '</ul></div></div>';
      } // if ($posts
    } // foreach($categories
?>
<!-- stop -->
</div>