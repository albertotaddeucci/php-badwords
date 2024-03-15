<?php

$input_text = $_GET['text'];

$input_badword = $_GET['badword'];

$text_replace = str_replace($input_badword, "***", $input_text);

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

    <p> La lunghezza del testo è pari a <?php echo strlen($input_text) ?> caratteri </p>

    <h2>Testo censurato</h2>

    <p>
        <?php echo $text_replace ?>

    </p>


</body>

</html>