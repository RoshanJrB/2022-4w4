<?php
/**
* Template Name: Évenement
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>

<?php get_header() ?>
<main class="site__main">
    <h1>---- Template evenement ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php $image = get_field('image');?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="">
        <h3>l'endroit</h3>
        <p><?php the_field('endroit'); ?></p>
        <p>Date de l'évènement : <?php the_field('date'); ?></p>
        <p>Heure de l'évènement : <?php the_field('heure'); ?></p>
        <h3>Organisateur</h3>
        <p><?php the_field('organisateur'); ?></p>        
   <?php endif ?>
</main>
<?php get_footer() ?>