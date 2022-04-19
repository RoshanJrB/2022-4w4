<footer class="site__footer">
    <div class="site__footer__colonne">
        <section class="footer__article">
        <?php get_sidebar("footer_colonne_1");  ?>
        </section>
        <section class="footer__lien">
        <?php get_sidebar("footer_colonne_2");  ?>
        </section>
        <section class="footer__adresse">
        <?php get_sidebar("footer_colonne_3");  ?>
        </section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__description">
            <?php get_sidebar("footer_ligne_2");  ?>
        </section>
        <section class="footer__copyright">
            <p>&copy; Tous droit réservé - TIM - Collège de Maisonneuve</p>
        </section>
        <section class="footer_sociaux">
         <?php get_sidebar("footer_ligne_1");  ?>
        </section>
        <section class="footer__auteur">
            <p>Auteur : Roshan Jr Bussun</p>
        </section>
        <section class="footer__menu">
        <?php    
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#f00"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
         wp_nav_menu(array(
                        "menu"=>"simple",
                        "container"=>"nav",
                        "container_class"=>"footer__menu__nav",
                        "menu_class"=>"footer__menu__nav__ul",
                        "link_before"=>$icone)); ?>
                <div class="footer__recherche">
        </section>
        <section class="footer__recherche">
            <?php get_search_form(); ?>
        </section>
    </div>
</footer>

<div class="modal">
    Ceci est un test vérifiant le fonctionnement d'une boite modale
</div>

</body>
<?php wp_footer(); ?>
</html>