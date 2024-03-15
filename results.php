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

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- my style -->
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div class="container my-4">
        <h1 class="my_accent text-center">Risultati</h1>


        <div class="row gap-2 mt-4">
            <div class="col-auto my_sec_accent flex-grow-1 border border-1 border-black  rounded-2">

                <h2 class="mt-3">Testo originale</h2>

                <p class="p-2 fst-italic">
                    <?php echo $input_text ?>

                </p>

                <p class="border border-2 border-black fw-bold text-danger p-2 bg-light rounded-3 text-center"> La lunghezza del testo è pari a <?php echo strlen($input_text) ?> caratteri </p>


            </div>
            <div class="col-auto my_sec_accent flex-grow-1 border border-1 border-black rounded-2">

                <h2 class="mt-3">Testo censurato</h2>

                <p class="p-2 fst-italic">
                    <?php echo $text_replace ?>

                </p>

                <p class="border border-2 border-black fw-bold text-danger p-2 bg-light rounded-3 text-center "> Adesso la lunghezza è di <?php echo strlen($text_replace) ?> caratteri</p>

            </div>
        </div>





    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>