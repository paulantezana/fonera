<?php
    $searchHTML = '<div class="blogSearch">%s</div>';
    printf($searchHTML,get_search_form(false));
    if(have_posts()):
        while (have_posts()):
            the_post();
            $templateHTML = '
                            <article class="post">
                                <div class="post__main">
                                    <header class="post__header">
                                        <a class="post__zumbail" href="%s">
                                            <img src="%s" alt="%s">
                                        </a>
                                    </header>
                                    <div class="post__content">
                                        <h2 class="post__title">
                                            <a href="%s">%s</a>
                                        </h2>
                                        <a class="icon-clock" href="">%s</a>
                                        <div class="post__text">%s</div>
                                    </div>
                                </div>
                                <footer class="post__footer">
                                    <div class="post-categories post__footer__item icon-category">%s</div>
                                    <a href="%s" class="post-comment post__footer__item icon-comment">%s Comentarios</a>
                                    <div class="post__footer__item icon-user">%s</div>
                                </footer>
                            </article>';
            printf(
                $templateHTML,
                get_the_permalink(),
                has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('img_post_default'),
                get_the_title(),
                get_the_permalink(),
                get_the_title(),
                get_the_time('l - m - F - Y'),
                get_the_excerpt(),
                get_the_category_list( '-'),
                ('post' == get_post_type()) ? get_comments_link() : '',
                ('post' == get_post_type()) ? get_comments_number() : '',
                get_the_author()
            );
        endwhile;
        rewind_posts();
    else:
        echo 'no hay avisos que mostrar';
    endif;
    printf('<div class="paginationBlog">');
    echo paginate_links();
    printf('</div>');

