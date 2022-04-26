<?php 
    $categories = get_the_category();
    //var_dump($categories);
    //echo $categories[1]->slug;
    
?>
<article class="formation__cours <?=$categories[1]-> slug; ?>">
    <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 7, -6);
                        $nbHeures = substr($titre, -6);
                        $sigleCours = substr($titre, 0, 7);
                        $descComplet = get_the_content();
                        $radioBouton = "582 – TIM - Technique d’intégration multimédia";
                        $descCours =  wp_trim_words(get_the_content(), 15, 
                        '<button class="cours__desc__suite">voir la suite...</button>');
                        ?>
    <code class="cours__desc__complet" style="display: none;"><?= $descComplet; ?></code>
    <?php the_post_thumbnail("thumbnail") ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= $descCours; ?></p>
    <p class="cours__dep"><?= $radioBouton; ?></p>
</article>