<?php 
    $frase = "Che la forza sia con te";
    $numero = strlen($frase);
    $fraseModificata = str_replace($_GET["parola"], "***", $frase);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <h2>Testo originale</h2>

    <p><?php echo $frase; ?></p>
    <p>Questo testo è lungo <?php echo $numero; ?> caratteri</p>


    <h2>testo censurato</h2>

    <p><?php echo $fraseModificata; ?></p>
    <p>Questo testo è lungo <?php echo $numero; ?> caratteri</p>


</body>
</html>