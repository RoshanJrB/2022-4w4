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
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php $image = get_field('image');?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="">
        <div class="container__info">
          <div class="date">
               <h3>Date de l'évènement :</h3>
               <p><?php the_field('date'); ?></p>
          </div>
          <div class="heure">
               <h3>Heure de l'évènement :</h3>
               <p><?php the_field('heure'); ?></p>
          </div>
          <div class="endroit">
               <h3>l'endroit</h3>
               <p><?php the_field('endroit'); ?></p>
          </div>
          <div class="organisateur">
               <h3>Organisateur</h3>
               <p><?php the_field('organisateur'); ?></p>
          </div>
        </div>
        
        <h1>Journée d'Accueil</h1>        
   <?php endif ?>
</main>
<?php get_footer() ?>