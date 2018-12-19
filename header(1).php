<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_enqueue_script("jquery"); ?>
          <?php wp_head(); ?>
          <script type="text/javascript"
   src="<?php bloginfo("template_url"); ?>/js/yourScript.js"></script>

    </head>

<body <?php body_class(); ?>>

  <header>
      <div  class="site-header">
    <h1><a href="<?php echo home_url(); ?>"><span>pcmr</span>gaming.com</a></h1>
    <div class="burger">
		<i class="fa fa-bars menu"></i>
        </div>
    <div class="top-nav">
        
        <?php
            
            $args = array(
              'theme_location' => 'primary'
            );

            ?>
            <?php wp_nav_menu($args); ?>

    </div>    
    </div>
    </header>
 