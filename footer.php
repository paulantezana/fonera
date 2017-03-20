            <footer class="footer" id="footer">
                <div class="footer__content">
                    <div class="footer__content__item">
                        <h4 class="">CONTACTO</h4>
                        <ul class="contact__list">
                            <li class="contact__list__item">
                                <a class="icon-envelope-o fonera--email" href="mailto:<?php echo get_theme_mod('fonera_email');?>"><?php echo get_theme_mod('fonera_email');?></a></li>
                            <li class="contact__list__item">
                                <a class="icon-telephone-accessible foneta--telephone" href="tel:<?php echo get_theme_mod('foneta_telephone');?>"> <?php echo get_theme_mod('foneta_telephone');?></a></li>
                            <li class="contact__list__item">
                                <a class="icon-phone fonera--phone" href="tel:<?php echo get_theme_mod('fonera_phone');?>"> <?php echo get_theme_mod('fonera_phone');?></a></li>
                        </ul>
                        <ul class="follow__socialMedia">
                            <li class=""><a class="icon-facebook fonera--facebook" href="<?php echo get_theme_mod('fonera_facebook');?>" target="_blanck"> </a></li>
                            <li class=""><a class="icon-twitter" href="<?php echo get_theme_mod('fonera_twitter');?>" target="_blanck"></a></li>
                            <li class=""><a class="icon-youtube-play" href="<?php echo get_theme_mod('fonera_youtube');?>" target="_blanck"></a></li>
                        </ul>
                    </div>
                    <div class="footer__content__item">
                        <h4>OFICIONAS</h4>
                        <div class="fonera--offices">
                            <?php echo get_theme_mod('fonera_offices');?>
                        </div>
                    </div>
                    <div class="footer__content__item">
                        <h4>Fan Page Facebook</h4>
                        <div class="fpface">

                        </div>
                    </div>
                </div>
                <script src="<?php echo esc_url( get_template_directory_uri() );?>/assets/js/script.js"></script>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>