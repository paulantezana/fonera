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
                $externalLinks = new WP_Query([
                    'post_type' => 'external_links',  'not_found_rows' => true,
                    'update_post_term_cache'    => false, 'post_per_post' => 50,
                ]);
                $externalLinksHTML = '<article class="externalLinks">
                                        <a href="s%" target="_blank" class="externalLinks__link">
                                            <h2 class="externalLinks__title"> %s </h2>
                                            <div class="externalLinks__content">%s</div>
                                        </a>
                                    </article>';
                if($externalLinks -> have_posts()):
                    printf(' <div class="externalLinks-container"> ');
                    while ($externalLinks -> have_posts()):
                        $externalLinks -> the_post();
                        printf($externalLinksHTML,
                            get_the_permalink(),
                            get_the_title(),
                            get_the_content()
                        );
                    endwhile;
                    $externalLinks -> rewind_posts();
                    printf('</div>');
                else:
                endif;
                // End Content Page ---------------------------------------------
                printf('</div>
                            <div class="main__content__item">');
                // sidebar ------------------------------------------------------
                get_sidebar();
                // End sidebar --------------------------------------------------
        printf('</div> </div> </div>');
    get_footer();