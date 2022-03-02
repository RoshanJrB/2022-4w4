<?php get_header() ?>
<main class="site__main">
    <section class="animation">
        <div class="animation__bloc">1</div>
        <div class="animation__bloc">2</div>
        <div class="animation__bloc">3</div>
        <div class="animation__bloc">4</div>
        <div class="animation__bloc">5</div>
    </section>
    <section class="front_page">
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <h1 class="front_page__titre"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </section>
    
</main>
<?php get_footer() ?>