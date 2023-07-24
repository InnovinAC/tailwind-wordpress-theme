<html>


<head>
    <title><?php
        echo the_title();
        ?></title>

</head>
</html>
<?php

while(have_posts()): the_post();
endwhile;