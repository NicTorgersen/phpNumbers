<?php
    
    require_once('Numbers.php');

    $file = 'numbers.txt';
    $numbers = new Numbers($file, 0);

    echo $numbers->getMissingNumber();