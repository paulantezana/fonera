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
$advertising = new WP_Query([
    'post_type' => 'advertising',  'not_found_rows' => true,
    'update_post_term_cache'    => false, 'post_per_post' => 50,
]);
$advertisingHTML = '<article class="advertising">
                                    <a href="%s" class="advertising__link">
                                        <div class="advertising__img-container">
                                            <img src="%s" alt="" class="advertising__img">
                                        </div>
                                        <h2 class="advertising__title"> %s </h2>
                                    </a>
                                </article>';
if($advertising -> have_posts()):
    printf(' <div class="advertising-container"> ');
    while ($advertising -> have_posts()):
        $advertising -> the_post();
        printf($advertisingHTML,
            get_the_permalink(),
            has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('img_advertising_default'),
            get_the_title()
        );
    endwhile;
    $advertising -> rewind_posts();
    printf('</div>');
else:
endif;
// End Content Page ---------------------------------------------
printf('</div>
            <div class="main__content__item">');
// sidebar ------------------------------------------------------
get_sidebar();
get_footer();