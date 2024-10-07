<?php
include_once __DIR__."/functions/functions.php";
$textToCheck = $_GET['textToCheck'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <main>
        <form action="index.php" method="get">
            <label class="fw-bold fs-4" for="textToCheck">Insert a word to check</label>
            <input class="rounded mx-2" type="text" placeholder="Inserisci un linguaggio" id="langSearch"
                name="textToCheck">
            <button class="btn btn-primary" type="submit">Cerca</button>
        </form>

        <?php
        
        ?>
    </main>
</body>

</html>