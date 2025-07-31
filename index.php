<?php

    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $number = $_POST['number'];
        $_SESSION['number']=$number;
        $logfile = 'logfile.txt';
        $logMessage = "You Input $number stars".PHP_EOL;
        file_put_contents($logfile,$logMessage,FILE_APPEND);

        header('Location: star.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>String Adding Form</h1>

    <form action="index.php" method="POST">

        <label for="forminput">Please fill the Amount of Stars</label> <br>
        <input type="number" name='number'>
        <br><br>
        <input type="submit">

    </form>
    
</body>
</html>
