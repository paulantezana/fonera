<?php
    get_header();
    printf('<div class="main">');
    $queryHTML = '%s';
    printf($queryHTML,get_search_query());
    require_once get_template_directory() . '/template/home-blog.php';
    printf('</div>');
    get_footer();