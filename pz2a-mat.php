<?php

$diena = [
    
    'pradzia' => 'Dienos pradzia, nieko neivyko',
    'px' => 'Pavelavai i darba',
    'bl' => 'Kabantys nx',
    'nx' => 'nusprogo masino tarpine tarp vairo ir sedynes',
    'pz2a' => 'Atsivilkau i paskaitas basas per sniega antra kaledu diena',
]

?>
<!DOCTYPE html>
<html>
    <head>
      <!--  <meta http-equiv="refresh" content="10" > -->
        <style>
            .background{
                background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa49tzLec8V_58e5rE_I-zeyrafEAqR7TQiy3n_aZNmA8wit-a');
                background-size:cover;
            }
            .text{
                text-align: center;
                color: white;
            }
            nav{
                text-align:center;
                padding-bottom: 50px;
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
            <h1>PZ2A-MAT!!</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROWPFIxdzIggabeEqtgbElEKCWBxzstOEvjb-yOgMTQB8ZMHB7">
        </div>
    </body>
</html>