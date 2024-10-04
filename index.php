<!-- Dato questo array di classi con studenti:
https://pastebin.com/HksnN0aS
Snack 4A:
Stampare in pagina, senza particolare stilizzazione il nome di ogni classe e sotto ognuna, i dati di ogni studente/studentessa presente nella relativa classe.
Snack 4B:
Filtrare il nostro array e mostrare, sempre suddivisi per classe, esclusivamente gli studenti e le studentesse con voto medio sufficiente.
Snack 4C:
Commentiamo il filtro del punto 4B (lasciatelo nel codice, in modo che possiamo comunque vederlo) e aggiungiamo un minimo di stile a piacere. Inseriamo quindi un form in cui l’utente possa inserire un input con il voto medio massimo, e filtriamo in base ad esso solo gli studenti che abbiano una media esclusivamente inferiore al voto inserito.
Snack 4D:
Aggiungiamo un input che consenta l’inserimento del linguaggio di programmazione preferito, e filtriamo in base ad esso solo gli studenti che abbiano quel linguaggio come preferito.
Bonus:
Implementare funzionalita’ di filtraggio aggiuntive basate, ad esempio, su nome, cognome o anni dei relativi studenti, o magari sul nome della nostra classe. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack4</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main>

        <?php
            // data
            include_once __DIR__."/data/classesList.php";
            $studentiMigliori= [];
         ?>

        <!-- stampiano in pagina tutte le classi con i dati degli studenti -->
        <div class="container my-5">
            <?php foreach($classi as $classe => $studenti) { ?>
            <div class="row justify-content-center border border-dark rounded mb-5 bg-primary-subtle">
                <div class="col-12 text-center">
                    <h2> <?php echo($classe); ?></h2>
                </div>

                <?php foreach($studenti as $datiStudente) { ?>
                <div class="col-4">
                    <div class="card mb-2 bg-info shadow-sm">
                        <div class="card-body text-center">
                            <h4 class="card-title ">
                                <?= $datiStudente['nome'].' '.$datiStudente['cognome']; ?></h4>
                            <?= 'id: '.$datiStudente['id']; ?><br>
                            <?= 'anni: '.$datiStudente['anni']; ?><br>
                            <?= 'voto medio: '.$datiStudente['voto_medio']; ?><br>
                            <?= 'linguaggio preferito: '.$datiStudente['linguaggio_preferito']; ?>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
            <?php } ?>

        </div>
        <!-- filtriamo il nostro array e mostrare gli studenti con voto medio sufficiente.-->

        <!-- 
        <?php 
        foreach($classi as $classe => $studenti) {
            foreach($studenti as $datiStudente) {
                if($datiStudente['voto_medio'] >= 6) {
                    $studentiMigliori[$classe] []= $datiStudente;
                }
            }
        }
        ?>

        //stampo l'array filtrato

        <?php foreach($studentiMigliori as $classe => $studenti) { ?>
        <h2> <?php echo($classe); ?></h2>
        <?php foreach($studenti as $studente) { ?>
        <ul>
            <li>
                <?= 'id: '.$studente['id']; ?>
                <?= 'nome: '.$studente['nome']; ?>
                <?= 'cognome: '.$studente['cognome']; ?>
                <?= 'anni: '.$studente['anni']; ?>
                <?= 'voto medio: '.$studente['voto_medio']; ?>
                <?= 'linguaggio preferito: '.$studente['linguaggio_preferito']; ?>
            </li>
        </ul>
        <?php } ?>
        <?php } ?>
        -->

        <!-- aggiungiamo un form e filtriamo gli studenti inserendo un voto medio massimo  -->
    </main>
</body>

</html>