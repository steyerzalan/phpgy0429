<?php
include "Tablazat.php";
include "HTMLTablazat.php";

//Példányosítás HTMLTablazat NOT
$p2= new Tablazat(array("I", "h", "n", "a", "t"));
$p2->uj_Sor(array(5, 5, 5, 5, 5));
$p2->uj_Sor(array(2, 2, 3, 1, 1));
$p2->uj_Sor(array("GÓÓÓL", "GÓL", "Ggól", "ÖNGÓL", "kispad"));

//HTML táblázatos
$proba= new HTMLTablazat(array("T", "o", "r", "m", "i"), 255, 0, 0);
$proba->cellaMargoAllit("15px");
$proba->uj_Sor(array(1, 2, 3, 4, 5));
$proba->uj_Sor(array(5, 5, 3, 4, 2));
$proba->uj_Sor(array("gitár", "ke", "emez", "amaz", "késés"));
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablazat</title>
    <style>
        :root {
            --fejlec-hatter: rgb(<?php echo $proba->getR(); ?>, <?php echo $proba->getG(); ?>, <?php echo $proba->getB(); ?>);
            --cella-szin: rgb(<?php echo $proba->getR(); ?>, <?php echo $proba->getG(); ?>, <?php echo $proba->getB(); ?>);
            --cella-padding: <?php echo $proba->getCellaMargo();?>;
        }   
    </style>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
        <?php
            $p2->kiir();
            $proba->kiir();
        ?>
</body>
</html>

