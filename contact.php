<?php

$vardai = array("Gintaras", "Pavel", "Karolis", "Kestutis");
shuffle($vardai);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klasės darbas, 05.02</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            .back {
                background-image: url('https://image.shutterstock.com/image-photo/funny-portrait-hero-260nw-410898763.jpg');
                background-size: cover;
            }
            nav{
                text-align:center;
            }
            nav a{
                border: 1px solid green;
                padding: 10px;
                background-color: green;
                text-decoration: none;
                color: white;
            }
            .h {
                text-align: center;
                font-size: 60px;
                color: white;
            }
            ul li{
                list-style-type: none;
            }

        </style>        
    </head>
    <body class = "back">
        <nav>    
            <a href="index.php">INDEX</a> 
            <a href="about.php">ABOUT</a> 
            <a href="pz2a-mat.php">PZ2A-MAT</a> 
            <a href="contact.php">CONTACT</a> 
        </nav>
        <div class ="h">
            <h1>
                Makers of PZ2-AMAT
            </h1>
            <div>
                <ul>
                    <?php foreach ($vardai as $number): ?>
                        <li><?php print $number; ?></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </body>
</html>
