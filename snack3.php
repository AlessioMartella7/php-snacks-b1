<?php 


 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach($db as $person => $elements) {?>

            <p class="fs-2 fw-bold"><?= $person ?></p>

            <?php foreach($elements as $personalData => $value) { ?>

            <ul>
                <li class=" fw-medium fs-5">
                    <?php echo $value['name'], $value['lastname'];?>
                </li>
            </ul>

            <?php } ?>
            <?php } ?>
        </div>
    </div>

</body>

</html>