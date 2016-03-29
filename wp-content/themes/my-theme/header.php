<!DOCTYPE html>
<html<?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title> <?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div class='container'>
      <header class="site-header">
        <div class="hd-search">
          <?php get_search_form(); ?>
        </div>

        <h1>
          <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <h5>
          <?php bloginfo('description');

          /*Make the Subheader only shown on Portfolio*/
           if (is_page('portfolio')) {?>
            - Only shown on the portfolio
          <?php  } ?>

        </h5>

        <nav class="site-nav">

          <?php $args= array(
            'theme_location' => 'primary'
           ); ?>

          <?php wp_nav_menu($args); ?>
        </nav>

      </header>