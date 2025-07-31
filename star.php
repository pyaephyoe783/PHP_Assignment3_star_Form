<?php
    require('session.php');

    $number = $_SESSION['number'] ;

    for($star=1; $star <= $number; $star++){
       echo str_repeat('*',$star) . '<br>';
    }
