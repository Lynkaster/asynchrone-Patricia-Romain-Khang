<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cbeau.css">
    <title>Trombinoscope</title>
</head>

<body>

<!--liste par défaut-->
    <?php

    require_once "../modele/personnages.php";
    
    if (!empty($_GET['q'])) $query = $_GET['q'];
    if (!empty($_GET['id'])) $id = $_GET['id'];
    if (!empty($_GET['perso'])) $personnage = $_GET['perso'];
    
    $personnageResult = [];

    ?>

</body>

</html>