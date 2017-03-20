<?php
    get_header();
    printf(
        '<div class="main">
            <div class="main__header">');
            // Content Page Header ------------------------------------------
            require_once get_template_directory() . '/template/services/header.php';
            // End Content Page Header --------------------------------------
            printf('</div>
            <div class="main__content">
                <div class="main__content__item">');
                // Content Page -------------------------------------------------
                    require_once get_template_directory() . '/template/services/platform.php';
                    require_once get_template_directory() . '/template/services/prices.php';
                    require_once get_template_directory() . '/template/services/question.php';
                // End Content Page ---------------------------------------------
                printf('</div>
                <div class="main__content__item">');
                // sidebar ------------------------------------------------------
                    require_once get_template_directory() . '/template/services/methods.php';
                // End sidebar --------------------------------------------------
        printf('</div> </div> </div>');
    get_footer();