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
            include_once __DIR__."/data/searchInput.php";
            $studentiMigliori= [];
            // assegno un valore di base all'array sulla quale iterare per la visualizzazione degli studenti
            $studentiVisualizzati = $classi;
            
         ?>

        <!-- filtriamo in base ad un voto massimo -->
        <?php 


            if(isset($searchVote) && is_numeric($searchVote) && ($searchVote >= 1) && ($searchVote <= 10) ) {
                $filteredByVote= [];
                foreach($classi as $classe => $studenti) { 
                    foreach($studenti as $datiStudente){ 

                        if($datiStudente['voto_medio'] <= $searchVote) {
                        $filteredByVote [] = $datiStudente;
                        
                        }
                    }
                }
            }
            // se è stato richiesto un filtro per il voto sostituisco il valore dell'array su cui vado ad iterare con quello degli studenti filtrati
            if (!empty($filteredByVote)) {
                $studentiVisualizzati =  ['Studenti filtrati per voto' => $filteredByVote];
            }
            ?>

        <!-- filtro per linguaggio preferito -->
        <?php

            if(isset($languageSearch) ) {
                $filteredByLanguage= [];
                foreach($studentiVisualizzati as $classe => $studenti) { 
                    foreach($studenti as $datiStudente){ 
                        
                        if($datiStudente['linguaggio_preferito'] === $languageSearch) {
                            $filteredByLanguage [] = $datiStudente;
                        }
                    }   
                }
            }
            // se è stato richiesto un filtro per il linguaggio sostituisco il valore dell'array su cui vado ad iterare con quello degli studenti filtrati
            if (!empty($filteredByLanguage)) {
                $studentiVisualizzati =  ['Studenti filtrati per linguaggio' => $filteredByLanguage];
            }
            
            ?>

        <div class="container my-5">
            <section id="display-classes">
                <!-- stampiano in pagina tutte le classi con i dati degli studenti -->
                <?php foreach($studentiVisualizzati as $classe => $studenti) { ?>
                <div class="row justify-content-center border border-dark rounded mb-5 bg-primary-subtle">
                    <div class="col-12 text-center">
                        <h2> <?php echo($classe); ?></h2>
                    </div>

                    <?php foreach($studenti as $datiStudente) { ?>
                    <div class="col-4">
                        <div class="card mb-2 bg-info shadow-sm">
                            <div class="card-body text-center">
                                <h4 class="card-title bg-primary rounded">
                                    <?= $datiStudente['nome'].' '.$datiStudente['cognome']; ?></h4>
                                <div class="card-text fw-bold">
                                    <p><?= 'id: '.$datiStudente['id']; ?></p>
                                    <p><?= 'anni: '.$datiStudente['anni']; ?></p>
                                    <p><?= 'voto medio: '.$datiStudente['voto_medio']; ?></p>
                                    <p><?= 'linguaggio preferito: '.$datiStudente['linguaggio_preferito']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
                <?php } ?>

            </section>

            <section id="form">
                <div class="row bg-success-subtle rounded p-3">
                    <div class="col-12 text-center">
                        <form action="index.php" method="get">

                            <!-- input ricerca voto -->
                            <label class="fw-bold fs-4" for="voteSearch">Ricerca per voto medio</label>
                            <input class="rounded mx-2" type="text" placeholder="Inserisci voto" id="voteSearch"
                                name="voteSearch">

                            <!-- input ricerca linguaggio preferito -->
                            <label class="fw-bold fs-4" for="langSearch">Linguaggio preferito</label>
                            <input class="rounded mx-2" type="text" placeholder="Inserisci un linguaggio"
                                id="langSearch" name="language">

                            <!-- bottoni -->
                            <button class="btn btn-primary" type="submit">Cerca</button>
                            <button class="btn btn-danger ms-2" type="reset">Resetta</button>
                            <a href="./index.php"><button class="btn btn-success ms-2"
                                    type="button">Ricarica</button></a>
                        </form>
                    </div>
                </div>


            </section>
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