<?php

$randomas = rand(0, 1);

if ($randomas) {
    $css_class = 'bg_1';
    $text = 'Penguin Random House is the international home to nearly 250 editorially and creatively independent publishing imprints. Together, our mission is to foster a universal passion for reading by partnering with authors to help create stories and communicate ideas that inform, entertain, and inspire, and to connect them with readers everywhere. In our largest ever single volunteering effort, over 570 colleagues volunteered in their local communities in London, Frating and Grantham, as well as literacy-vulnerable areas across the capital. We hosted interactive sessions in over 160 nurseries, children’s centres and schools, including storytelling with little ones and quizzing with Years 2-4 in primary schools. To inspire and encourage pupils to continue reading beyond World Book Day, we gifted a total of 5,000 books through book prizes and donations to all schools participating. Our dedicated team of publishing professionals is committed to helping authors realize their very best work and to finding innovative new ways of bringing stories and ideas to audiences worldwide. ';
} else {
    $css_class = 'bg_2';
    $text = 'Our dedicated team of publishing professionals is committed to helping authors realize their very best work and to finding innovative new ways of bringing stories and ideas to audiences worldwide. By leveraging our global reach, embracing new technologies, and collaborating with authors at every stage of the publishing process—from editorial and design, to sales and marketing, to production and distribution—we aim to provide them with the greatest platform possible. At the same time, we fiercely protect our authors’ intellectual property and champion freedom of expression, ensuring that their voices carry beyond the page and into the folds of communities and societies around the globe. Our dedicated team of publishing professionals is committed to helping authors realize their very best work and to finding innovative new ways of bringing stories and ideas to audiences worldwide. Our dedicated team of publishing professionals is committed to helping authors realize their very best work and to finding innovative new ways of bringing stories and ideas to audiences worldwide.';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="refresh" content="10">
        <meta charset="UTF-8">
        <title>title</title>
        <style>
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
            .bg_1 {
                background-image: url("https://wallpaperplay.com/walls/full/b/8/c/45638.jpg");
                color: #fff;
                width: 100%;
                background-size: cover;
                font-family: 'Anton', sans-serif;
                text-align: center;
            }
            .bg_2 {
                background-image: url("https://newevolutiondesigns.com/images/freebies/white-wallpaper-2.jpg");
                color: black;
                width: 100%;
                background-size: cover;
                font-family: 'Anton', sans-serif;
                text-align: center;
            }
            p {
                margin: 20px;
                line-height: 2.2;
                font-size: 30px;
            }
            h1{
                padding:20px 0;
            }
            h2{
                padding:20px 0;
            }
        </style>
    </head>
    <body class="<?php print $css_class; ?>">
        <nav>
            <a href="index.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="pz2a-mat.php">PZ2A-MAT</a>
            <a href="contact.php">CONTACT</a>
        </nav>
        <h1>WE ARE GRAY 83!</h1>
        <h2>WHY WE MADE PZ2AMAT?</h2>
        <p><?php print $text; ?></p>
    </body>
</html>
