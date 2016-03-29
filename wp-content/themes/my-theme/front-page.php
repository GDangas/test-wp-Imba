<?php
  //Standard control for pages

  get_header();

  if (have_posts()):

      while(have_posts()) : the_post(); ?>

      <article class="post page">

        <?php the_content(); ?>
        Från front-page.php
      </article>
      <?php endwhile;

      else :
        echo "<p>No content found</p>";

      endif;

    get_footer();

 ?>
