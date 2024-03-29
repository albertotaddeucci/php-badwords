<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my style -->
    <link href="style.css" rel="stylesheet">


</head>

<body>


    <div class="container mt-3">
        <h1 class="my_accent text-center">Controllo Badwords</h1>

        <form action="results.php" class="mt-5">

            <div class="mb-3">
                <label for="text" class="form-label fw-bold ">Testo completo</label>
                <textarea class="form-control" id="text" name="text" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="badwords" class="form-label fw-bold ">Parola da censurare</label>
                <input type="text" class="form-control" name="badword" id="badwords">
            </div>

            <button type="submit" class="btn btn-danger mt-3">Ottieni risultato</button>


        </form>




    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>


</html>