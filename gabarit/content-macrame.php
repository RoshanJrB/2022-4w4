
<article class="formation__cours">
    <?php
                        $titre = get_the_title();
                        ?>
    <?php the_post_thumbnail("thumbnail") ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titre; ?>
        </a>
    </h3>
    <?php the_category(); ?>
    <?php the_content(); ?>
</article>