<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>
<?php get_header() ?>
<main class="site__main">
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        
   <?php endif ?>
</main>
<?php get_footer() ?>