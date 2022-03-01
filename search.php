<?php
/**
 * Affiche les résultats des recherches
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package cidw-4w4
 */

get_header();
?>
<main class="site__main">
    <section class="site__main__recherche">
        <h1>
            Résultat de la recherche
        </h1>
    </section>
    <section class="cours">
<?php if(have_posts()): while(have_posts()) : the_post(); ?>
<article class="cours__carte">
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr(get_the_title(), 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                ?>
                <h2 class="carte__titre"><?= $titreCourt; ?></h2>
                <p class="carte__code"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="carte__description"><?= get_the_excerpt() ?></p>
            </article>
        <?php endwhile; ?>
        </section>
        <?php else : ?>
            <h1>Aucun Résultat</h1>
    <?php endif; ?>
</main>
<?php get_footer(); ?>