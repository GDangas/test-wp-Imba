<?php
//This make it selectable from admin panel
/*Template Name: Home Template
*/

  get_header();

  if (have_posts()):

      while(have_posts()) : the_post(); ?>

      <article class="post page">
        <h2>
        <?php the_title(); ?>
        </h2>
        <?php the_content(); ?>
        <h3>Home TEMPLATE</h3>
      </article>
      <?php endwhile;

      else :
        echo "<p>No content found</p>";

      endif;

    get_footer();

 ?>
