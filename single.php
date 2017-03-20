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
$templateHTML = '<div class="postSingle">
                    <h1 class="postSingle__title">%s</h1>
                    <div class="postSingle__content">%s</div>
                    <div class="postSingle__footer">
                        <div class="postSingle__footer__item icon-category">%s</div>
                        <div class="postSingle__footer__item icon-user">%s</div>
                        <div class="postSingle__footer__item"></div>
                    </div>
                </div>';
if(have_posts()):
    while (have_posts()):
        the_post();
        edit_post_link( __( 'Edit', 'fonera' ), '<div class="postSingle__edit">', '</div>' );
        printf($templateHTML,
            get_the_title(),
            get_the_content(),
            get_the_category_list( '-'),
            get_the_author()
        );
        printf('<div class="postSingle__navigation"> <div class="postSingle__navigation__prev">'); previous_post_link();
        printf('</div><div class="postSingle__navigation__next">'); next_post_link(); printf('</div></div>');
    endwhile;
endif;
comments_template();
// End Content Page ---------------------------------------------
printf('</div>
                    <div class="main__content__item">');
// sidebar ------------------------------------------------------
get_sidebar();
// End sidebar --------------------------------------------------
printf('</div> </div> </div>');
get_footer();