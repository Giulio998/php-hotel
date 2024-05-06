<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$vote = $_GET["vote"];
$park = $_GET["park"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="get" class="p-3">
        <label for="park">Disponibilità parcheggio</label>
        <select name="park" id="">
            <option value="">Non indicato</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        <label for="vote">Voto</label>
        <select name="vote" id="">
            <option value="">Non indicato</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button type="submit">Cerca</button>
    </form>


    <table class="table">

        <table>
            <thead>
                <tr>
                    <th class="px-3" scope="col">Nome</th>
                    <th class="px-3" scope="col">Descrizione</th>
                    <th class="px-3" scope="col">Parcheggio</th>
                    <th class="px-3" scope="col">Voto</th>
                    <th class="px-3" scope="col">Distanza da centro</th>
                </tr>
            </thead>
            <?php foreach ($hotels as $hotel) {
                if ($park == "" ||  $park == "0" && !$hotel["parking"] || !isset($park) || $park == "1" && $hotel["parking"]) {
                    if ($vote == "" || $vote <= $hotel["vote"] || !isset($vote)) {
                        ?>
                        <tr>
                            <td class="px-3"><?= $hotel["name"]; ?></td>
                            <td class="px-3"><?= $hotel["description"]; ?></td>
                            <? if ($hotel["parking"] == true): ?>
                                <td class="px-3">Si</td>
                            <? else: ?>
                                <td class="px-3">No</td>
                            <? endif; ?>

                            <td class="px-3"><?= $hotel["vote"]; ?></td>
                            <td class="px-3"><?= $hotel["distance_to_center"]; ?></td>
                        </tr>
                        <?php
                    }
                }
            }
            ?>



        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>