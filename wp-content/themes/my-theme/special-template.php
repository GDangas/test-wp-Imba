<?php
//This make it selectable from admin panel
/*Template Name: Special Template
*/

  get_header();

  if (have_posts()):

      while(have_posts()) : the_post();

        the_content();

      endwhile;

      else :
        echo "<p>No content found</p>";

      endif;

  echo "WP Query stuff below";

//kent posts
  $kentPosts= new WP_Query('cat=4&posts_per_page=2&orderby=title&order=ASC');

  if ($kentPosts->have_posts()):

      while($kentPosts->have_posts()) : $kentPosts->the_post(); ?>
      <h2>Special Kent posts</h2>
      <h3> <?php the_title(); ?> </h3>
      <?php endwhile;

      else :
        echo "<p>No content found</p>";

      endif;
      wp_reset_postdata();

    get_footer();

 ?>
