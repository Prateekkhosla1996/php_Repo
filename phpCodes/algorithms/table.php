<?php

    function table($n){
        for($i=1;$i<=10;$i++){
            echo $n .'x' .$i . '='. $n*$i ."<br>";
        }
    }
    table(17);