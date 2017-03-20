<?php
    comment_form();
    printf('<ol>');
        wp_list_comments();
    printf('</ol>');