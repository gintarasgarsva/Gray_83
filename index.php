<?php

$greeting_message = rand(1, 3);
if ($greeting_message == 1) {
    $greeting = 'Aloha!!!';
}
if ($greeting_message == 2) {
    $greeting = 'Supp Hommies!!!';
}
if ($greeting_message == 3) {
    $greeting = 'What\'s crackin??';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="10" >
        <style>
            .background{
                background-image: url('https://st4.depositphotos.com/9568760/20501/i/1600/depositphotos_205017032-stock-photo-white-fractured-surface-abstract-background.jpg');
                background-size:cover;
            }
            .text{
                text-align: center;
                color: greenyellow;
            }
            nav{
                text-align:center;
                padding-bottom: 200px;
            }
            nav a{
                border: 1px solid green;
                padding: 10px;
                background-color: green;
                text-decoration: none;
                color: white;
            }
            h1{
                font-size: 100px;
            }
            h2{
                font-size: 70px;
            }
        </style>
    </head>
    <body class="background">
        <nav>
            <a href="index.php">HOME</a> 
            <a href="about.php">ABOUT</a> 
            <a href="pz2a-mat.php">PZ2A-MAT</a> 
            <a href="contact.php">CONTACT</a> 
        </nav>
        <div class="text">
            <h1>GRAY 83</h1>
            <h2><?php print $greeting; ?></h2>
        </div>
    </body>
</html>