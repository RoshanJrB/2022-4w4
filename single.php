<?php get_header() ?>
<main class="site__main">
    <h1>---------------single.php-------</h1>
    <?php if(have_posts()): ?>
        <section class="cours">
            <?php  the_post(); ?>
            <article class="cours__contenu">
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr($titre, 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                ?>
                <h2 class="contenu__titre"><?= $titreCourt; ?></h2>
                <?php the_post_thumbnail("thumbnail"); ?>
                <p class="contenu__code"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="contenu__description"><?= get_the_content() ?></p>
            </article>
   
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>