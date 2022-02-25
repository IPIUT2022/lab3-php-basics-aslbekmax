<?php

   $ordered_nums = array('1', '2', '3', '4', '5');

    echo "Original Array </br>";
    foreach($ordered_nums as $nums) {
        echo $nums . "\n";
    }

    print "</br>";

    array_splice($ordered_nums, 3, 0,'$');
    echo "After inserting $ </br>";
    foreach($ordered_nums as $nums) {
        echo $nums ."\n";
    }

?>