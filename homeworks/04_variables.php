<title>04_Variables</title>

<?php
    $word_1 = 'Hello';
    $word_2 = ' World';
    $word_3 = '!';

    $greeting = $word_1 . $word_2 . $word_3;

    echo "$greeting \n";
    echo str_repeat('=', 40) . "\n";
    echo str_repeat("$greeting  ", 3);
?>