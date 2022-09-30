<?php

    $input="C0001,C0002,B0003,B0004";
    $array = explode(",", $input);

    foreach($array as $item){
        echo $item;
        echo "<br>";
    }
    


?>