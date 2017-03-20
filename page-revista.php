<?php
get_header();
printf(
    '<div class="main">
        <div class="main__header">');


// Content Page Header ------------------------------------------

// End Content Page Header --------------------------------------


printf('</div>
        <div class="main__content main__content--full">
            <div class="main__content__item">');



    // Content Page -------------------------------------------------
        $magazine = new WP_Query([
            'post_type' => 'magazine', 'not_found_rows' => true,
            'update_post_term_cache'    => false, 'post_per_post' => 50,
        ]);
        $magazineHTML = '<article class="magazine">
                            <a href="%s" class="magazine__link">
                                <h2 class="magazine__title">%s</h2>
                                <img src="%s" alt="" class="magazine__img">
                            </a> 
                          </article>';
        if($magazine->have_posts()):
            printf('<div class="magazine-container">');
            while ($magazine->have_posts()):
                $magazine->the_post();
                printf(
                    $magazineHTML,
                    get_the_permalink(),
                    get_the_title(),
                    get_theme_mod('img_magazine_default')
                );
            endwhile;
            $magazine->rewind_posts();
            printf('</div>');
        else:
            echo 'Empty';
        endif;
    // End Content Page ---------------------------------------------



printf('</div> </div> </div>');
get_footer();