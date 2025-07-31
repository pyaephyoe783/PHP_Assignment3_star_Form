<?php
session_start();

    $number = $_SESSION['number'] ;

    for($i=1; $i <= $number; $i ++){
       echo str_repeat('*',$i) . '<br>';
    }
