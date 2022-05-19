<?php
/**
* Template Name: Atelier
*
* @package WordPress
* @subpackage cidw_4w4
*/
?>
<?php get_header() ?>
<main class="site__main site__main__atelier">
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <h2>Description de l'atelier</h3>
        <h3 class="atelier__animateur">L'animateur de l'atelier : <?php the_field('animateur') ?></h3>
        <h3 class="atelier__local"> L'atelier sera donné au local : <?php the_field('local_atelier') ?></h3>
        <p><?php the_field('description') ?></p>
        <h2>Horaire et dates de l'atelier</h3>
        <h3 class="atelier__duree__seance">Durée de chacune des séances est de <?php the_field('duree_seance') ?> heures</h3>
        <h3 class="atelier__date__debut">Date de début : <?php the_field('date_de_debut') ?></h3>
        <h3 class="atelier__date__fin">Date de fin : <?php the_field('date_de_fin') ?></h3>
        <h3 class="atelier__jour">La formation se donnera : <?php the_field('jour_de_la_semaine') ?></h3>
        <h3 class="atelier__horaire">L'horaire : <?php the_field('heure_debut') ?> à <?php the_field('heure_fin') ?></h3>
   <?php endif ?>
</main>
<?php get_footer() ?>