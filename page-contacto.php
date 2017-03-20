<?php
    get_header();
    printf(
        '<div class="main">
            <div class="main__header">');
                // Content Page Header ------------------------------------------

                // End Content Page Header --------------------------------------
    printf('</div>
        <div class="main__content main__content--50">
            <div class="main__content__item">
                <div class="contact--page">
            ');

                // Content Page -------------------------------------------------
                require_once get_template_directory() . '/template/content.php';
                // End Content Page ---------------------------------------------
    printf('</div></div>
            <div class="main__content__item">');
                // sidebar ------------------------------------------------------
                require_once get_template_directory() . '/template/contact/adress.php';
                // End sidebar --------------------------------------------------
    printf('</div> </div> </div>');
get_footer();