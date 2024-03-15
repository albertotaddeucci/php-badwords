<?php

$input_text = $_GET['text'];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>

<body>

    <h1>Risultati</h1>

    <h2>Testo originale</h2>

    <p>
        <?php echo $input_text ?>

    </p>

    <h2>Testo censurato</h2>

</body>

</html>