<?php get_header() ?>
<main class="site__main">

<section class="animation">
    <?php
        wp_nav_menu(array('menu'=> "menu_accueil",
                        'container'=>'nav',
                        "container_class"=>"animation__nav",
                        "menu_class"=>"animation__nav__ul"));?> 

    <?php
        wp_nav_menu(array('menu'=> "menu_accueil_deux",
                        'container'=>'nav',
                        "container_class"=>"animation__nav",
                        "menu_class"=>"animation__nav__ul"));?>
    <h2 class="titre__nav__atelier">Les ateliers à venir</h2>
    <?php
        wp_nav_menu(array('menu'=> "menu_atelier",
                        'container'=>'nav',
                        "container_class"=>"animation__nav",
                        "menu_class"=>"animation__nav__ul"));?> 
</section>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>