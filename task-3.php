<?php

   $sample_file = fopen("Sample.txt", "r") or die("Unable to open file!");
    $pageText = fread($sample_file, 25000);
    // echo nl2br($pageText);
    fclose($sample_file);

//     $parsedString = explode(" ", "{$pageText}");
    $parsedString = preg_split("/\r\n|\n|\r| /", $pageText);

    $keyValueArray = array();

    for($i = 0; $i < count($parsedString) - 2; $i += 2) {
        $keyValueArray[$parsedString[$i]] = $parsedString[$i+1];
    }

    foreach ($keyValueArray as $key => $value) {
        echo "Key: \"${key}\" Value: \"${value}\" </br>";
    }

?>