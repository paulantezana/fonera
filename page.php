<?php
get_header();
printf(
    '<div class="main">
        <div class="main__header">');


// Content Page Header ------------------------------------------

// End Content Page Header --------------------------------------


printf('</div>
        <div class="main__content">
            <div class="main__content__item">');


// Content Page -------------------------------------------------
    // require_once get_template_directory() . '/template/home-blog.php';
    echo "page";
// End Content Page ---------------------------------------------


printf('</div>
            <div class="main__content__item">');


// sidebar ------------------------------------------------------
    get_sidebar();
// End sidebar --------------------------------------------------


printf('</div> </div> </div>');
get_footer();