<?php get_header() ?>
<main class="site__main">
    <?php if(have_posts()): the_post();?>
        <section class="cours">
        <article class="cours__carte__single">
                <?php
                    $titre = get_the_title();
                    $titreCourt = substr(get_the_title(), 8);
                    $titreCourt = substr($titreCourt, 0, strrpos($titreCourt, '('));

                    $posDebutHeures = strrpos($titre, '(') + 1;
                    $posFinHeures = strrpos($titre, ')');
                    $nbHeures = substr($titre, $posDebutHeures, $posFinHeures - $posDebutHeures);
                ?>
                <?php the_post_thumbnail("thumbnail");?>
                <?php echo '<h1 class="carte__titre__single"><a href="'.get_the_permalink().'">'.$titreCourt.'</a></h1>'; ?>
                <p class="carte__code__single"><?= substr(get_the_title(), 0, 7) ?></p>
                <p><?= $nbHeures; ?></p>
                <p class="carte__description__single"><?= get_the_content() ?></p>
        </article>
        </section>
    <?php endif; ?>
</main>
<?php get_footer() ?>