<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <?php
        wp_nav_menu(array(
            "menu"=>"simple",
            "container"=>"nav",
            "container_class"=>"animation__nav",
            "menu_class"=>"animation__nav__ul"));?> 
</section>

   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>