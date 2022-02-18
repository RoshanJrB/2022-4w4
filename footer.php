<footer class="site__footer">
    <section>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam rerum quaerat repudiandae enim ullam minima, sit perspiciatis fugiat necessitatibus cum voluptate neque blanditiis facere? Aperiam vero excepturi modi a unde!</p>
        <p>3 800, rue Sherbrooke Est Montréal <br>(Québec) H1X 2A2 <br>514 254-7131 <br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?<br>Lorem ipsum dolor quaerat?</p>
        
    </section>
    <?php
            $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#ddd"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>';
            wp_nav_menu(array("menu"=>"simple",
                            "container"=>"nav",
                            "menu_class"=>"footer__menu",
                            "container_class" =>"site__footer__nav",
                            "link_before"=>$icone));
        ?>
    <p>Copyright &copy; 2022 - Collège de Maisonneuve. Tous droits réservés.</p>
</footer>