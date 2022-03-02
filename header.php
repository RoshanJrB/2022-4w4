<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Roshan Jr Bussun</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('site'); ?>>
<header class="site__header">
    <section class="site__header__titre">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <h1 class="header__titre">
            <?php echo get_bloginfo(); ?>
        </h1>
        </a>
        <h2 class="header__description"> <?php echo get_bloginfo('description'); ?></h2>
    </section>
    <section class="util">
        <div class="icone">
            <a href="#" class="icone__lien">
                <svg width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000"><path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zm.006-26.4c.394 0 .781.103 1.122.3l7.16 4.134a2.245 2.245 0 011.122 1.945v8.434c0 .802-.427 1.543-1.122 1.944l-7.161 4.135a2.245 2.245 0 01-2.245 0L7.72 22.357a2.246 2.246 0 01-1.123-1.944v-8.434c0-.802.428-1.543 1.123-1.945L14.88 5.9c.342-.197.73-.301 1.123-.301h.002zm-.002-1.561a3.81 3.81 0 00-1.902.51L6.94 8.682a3.816 3.816 0 00-1.903 3.296v8.434a3.816 3.816 0 001.903 3.296l7.16 4.134c1.178.68 2.629.68 3.806 0l7.161-4.134a3.816 3.816 0 001.903-3.296v-8.434a3.816 3.816 0 00-1.903-3.296l-7.16-4.135a3.81 3.81 0 00-1.904-.51zm4.89 11.91h-1.662a.468.468 0 00-.405.234l-.863 1.493a.468.468 0 000 .468L19 19.936a13.072 13.072 0 001.895-3.987zm-5.767 1.57h1.758a.467.467 0 00.405-.233l.862-1.493a.468.468 0 000-.468l-.862-1.493a.468.468 0 00-.405-.234h-1.758a.468.468 0 00-.406.234l-.861 1.493a.468.468 0 000 .468l.861 1.493a.468.468 0 00.406.234zm-2.349-2.35a.47.47 0 00.406-.234l.861-1.493a.468.468 0 000-.468l-1.074-1.861-2.097 1.144a.468.468 0 00-.243.421c.017.838.115 1.672.291 2.491h1.856zm6.455 0h1.856c.176-.82.274-1.653.291-2.491a.468.468 0 00-.244-.421l-2.096-1.144-1.074 1.861a.468.468 0 000 .468l.862 1.493a.468.468 0 00.405.234zm-3.003-5.59a.468.468 0 00-.448 0l-2.126 1.16 1.066 1.845a.468.468 0 00.405.234h1.758a.467.467 0 00.405-.234l1.066-1.845-2.126-1.16zM15.127 18.3a.468.468 0 00-.406.234l-1.2 2.08a13.21 13.21 0 002.199 2.159.47.47 0 00.573 0 13.21 13.21 0 002.198-2.16l-1.2-2.079a.468.468 0 00-.405-.234h-1.76zm-4.011-2.351a13.072 13.072 0 001.895 3.987l1.035-1.792a.468.468 0 000-.468l-.862-1.493a.468.468 0 00-.405-.234h-1.663z"></path></svg>
            </a>
            <a href="#" class="icone__lien">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"></path></svg>
            </a>
            <a href="#" class="icone__lien">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"></path></svg>
            </a>
            <a href="#" class="icone__lien">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path></svg>
            </a>
            <a href="#" class="icone__lien">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            </a>
        </div>
        <?php get_search_form(); ?>
    </section>

</header>
<section class="site__barre">
    <input type="checkbox" id="chk-burger">
    <label for="chk-burger" id="burger">
        <svg width="35px" height="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </label>
    <?php 
    $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ddd"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>';
    wp_nav_menu(array('menu' => 'principal',
                    "link_before"=>$icone)); ?>
</section>