<!-- 
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php 










 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack2</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <section class="row">
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <input type="text" class="form-control" placeholder="Age" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <input type="email" class="form-control" placeholder="email" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                    <button type="submit">Accedi</button>
                </form>
            </section>
        </div>
    </main>
</body>

</html>