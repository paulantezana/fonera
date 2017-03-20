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
    $news = new WP_Query([
        'post_type' => 'news', 'not_found_rows' => true,
        'update_post_term_cache'    => false, 'post_per_post' => 50,
    ]);
    $newsHTML = '
        <article class="news">
            <a href="%s" class="news__link">
                <div class="news__img-container">
                    <img src="%s" alt="" class="news__img">
                </div>
                <h2 class="news__title"> %s </h2>  
            </a>
        </article>       
    ';
    if($news->have_posts()):
        printf(' <div class="news-container"> ');
            while ($news->have_posts()):
                $news->the_post();
                printf(
                    $newsHTML,
                    get_the_permalink(),
                    has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('img_news_default'),
                    get_the_title()
                );
            endwhile;
            $news->rewind_posts();
        printf('</div>');
    endif;
// End Content Page ---------------------------------------------


printf('</div> 
            <div class="main__content__item">');


// sidebar ------------------------------------------------------
// End sidebar --------------------------------------------------
printf('</div> </div> </div>');
get_footer();