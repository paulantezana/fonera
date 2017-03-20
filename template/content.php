<?php
    if(have_posts()):
        while (have_posts()):
            the_post();
            the_title();
            the_content();
        endwhile;
        rewind_posts();
    else:
        echo 'no hay contenido que mostrar';
    endif;