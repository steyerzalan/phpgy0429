<?php
// Alap php beállítás (rgb)
$r = 255;
$g = 0;
$b = 0;

/* feldolgoz */
if ($_SERVER['REQUEST-METHOD']==='POST')
{
    //Űrlapon átküldött $r érték számmá lesz alakítva és csak 0-255 értékű lehet
    $r=max(0, min(255, (int)$_POST['r']));
    
    $g=max(0, min(255, (int)$_POST['g']));
    $b=max(0, min(255, (int)$_POST['b']));
}
/*html űrlappal */

?>
<!DOCTYPE html>
<html lang="hu">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB téglalap</title>
    <!-- Dinamikus : headben feldolgozásra kerülnek -->
    <style>
        :root {
            --fejlec-hatter: rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>);
            --cella-szin: rgb(<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>);
            --cella-padding: 20px;
        }   
    </style>
    <!-- külső CSS -->
     <link rel="stylesheet" href="./CSS/kstyle.css">
</head>
<body>
    
    <h1>Állítsd be az RGB színkeverést!</h1>

    <form method = "POST">
        <label>R: <input type="number" name="r" min="0" max="255" value="<?php echo htmlspecialchars($r); ?>"></label>
        <label>G: <input type="number" name="g" min="0" max="255" value="<?php echo htmlspecialchars($g); ?>"></label>
        <label>B: <input type="number" name="b" min="0" max="255" value="<?php echo htmlspecialchars($b); ?>"></label>
        <br>
        <button type="submit">Színt beállít</button>
    </form>

    <div class="color-box"></div>

</body>
</html>