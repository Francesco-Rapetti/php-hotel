<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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

// Milestone 2
$votoMinimo = $_GET['voto'];

?>

<!-- Milestone 0 -->
<span><?php
    for ($i=0; $i < count($hotels); $i++) { 
        echo var_dump($hotels[$i]);
        echo "<br>";
        echo "<br>";
    }
?></span>

<!-- Milestone 1 -->
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i=0; $i < count($hotels); $i++) {
            // Milestone 2
            if ($hotels[$i]['vote'] >= $votoMinimo) {
                echo "<tr>";
                echo "<td>" . $hotels[$i]['name'] . "</td>";
                echo "<td>" . $hotels[$i]['description'] . "</td>";
                echo "<td>" . ($hotels[$i]['parking'] ? 'Si' : 'No') . "</td>";
                echo "<td>" . $hotels[$i]['vote'] . "</td>";
                echo "<td>" . $hotels[$i]['distance_to_center'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>

</table>

</body>
</html>

<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: #222222;
    color: white;
}
</style>