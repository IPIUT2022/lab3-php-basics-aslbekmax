<?php

  $color = array('white', 'green', 'red');

    for ($i = 0; $i < count($color); $i++) {
        if ($i == count($color) - 1) {
            print $color[$i];
        } else {
             print $color[$i] .", ";
        }
    }

    print "<ul>";
    sort($color);

    for ($i = 0; $i < count($color); $i++) {
          print "<li>". $color[$i] ."</li>";
    }

    print "</ul>";

?>