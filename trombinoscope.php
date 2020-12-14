<?php

$donneestableau = [
    1 => ['./photos/aladdin.png', 'RoiDesVoleurs', 'Aladdin', 22, 'Personnage du dessin animé : Aladdin'],
    2 => ['./photos/anna.JPG', 'Neige', 'Anna', 16, 'Personnage du dessin animé : La Reine des neiges'],
    3 => ['./photos/ariel.jpg', 'Sirène', 'Ariel', 16, 'Personnage du dessin animé : La Petite sirène'],
    4 => ['./photos/belle.jpg', 'Nature', 'Belle', 18, 'Personnage du dessin animé : La Belle et la Bête'],
    5 => ['./photos/blanche_neige.jpg', 'Neige', 'Blanche', 16, 'Personnage du dessin animé : Blanche Neige'],
    6 => ['./photos/cendrillon.jpg', 'Douce', 'Cendrillon', 17, 'Personnage du dessin animé : Cendrillon'],
    7 => ['./photos/daisy_duck.png', 'Duck', 'Daisy', 80, 'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    8 => ['./photos/donald_duck.png', 'Duck', 'Donald', 80, 'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    9 => ['./photos/duchess.jpg', 'Elegante', 'Duchess', 4, 'Personnage du dessin animé : Les Aristochats'],
    10 => ['./photos/dumbo.jpg', 'Elephant', 'Dumbo', 1, 'Personnage du dessin animé : Dumbo'],
    11 => ['./photos/elisa.JPG', 'Neige', 'Elisa', 15, 'Personnage du dessin animé : La Reine des neiges'],
    12 => ['./photos/jafar.jpg', 'DesSables', 'Jafar', 40, 'Personnage du dessin animé : Aladdin'],
    13 => ['./photos/la_bete.jpg', 'La', 'Bête', 55, 'Personnage du dessin animé : La Belle et la Bête'],
    14 => ['./photos/lady.jpg', 'Ouaf', 'Lady', 2, 'Personnage du dessin animé : La Belle et le Clochard'],
    15 => ['./photos/merida.jpg', 'Rebelle', 'Merida', 17, 'Personnage du dessin animé : Rebelle'],
    16 => ['./photos/merlin.jpg', 'Enchanteur', 'Merlin', 120, 'Personnage du dessin animé : Merlin l\'Enchanteur'],
    17 => ['./photos/mickey_mouse.jpg', 'Mouse', 'Mickey', 98, 'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    18 => ['./photos/minnie_mouse.jpg', 'Mouse', 'Minnie', 95, 'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    19 => ['./photos/mulan.JPG', 'LégendeChinoise', 'Mulan', 17, 'Personnage du dessin animé : Mulan'],
    20 => ['./photos/pinocchio.jpg', 'Bois', 'Pinocchio', 5, 'Personnage du dessin animé : Pinocchio'],
    21 => ['./photos/pluto.png', 'Chien', 'Pluto', 3, 'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    22 => ['./photos/pocahontas.jpg', 'LégendeIndienne', 'Pocahontas', 17, 'Personnage du dessin animé : Pocahontas'],
    23 => ['./photos/prince_charmant.png', 'Prince', 'Charmant', 18, 'Personnage du dessin animé : Cendrillon'],
    24 => ['./photos/reine_enfer.jpg', 'Reine', 'Enfer', 50, 'Personnage du dessin animé : Blanche Neige'],
    25 => ['./photos/thomas_o_malley.jpg', 'O\'Maley', 'Thomas', 5, 'Personnage du dessin animé : Les Aristochats'],
    26 => ['./photos/ursula.jpg', 'Pieuvre', 'Ursula', 60, 'Personnage du dessin animé : La Petite sirène']
];
if (!empty($_GET['q'])) $query = $_GET['q'];
if (!empty($_GET['id'])) $id = $_GET['id'];
if (!empty($_GET['perso'])) $personnage = $_GET['perso'];
$personnageResult = [];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trombinoscope</title>
    <style>
        body {
            background-image: url("./disneybg.jpg");
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .searchBar {
            text-align: center;
            background-color: white;
            margin-top: 1em;
            padding: 1em;
            border-radius: 30px;
        }

        .list {
            width: 90em;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .list h2 {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            padding: 0.1em;
        }

        .list h3 {
            text-align: center;
            background-color: white;
            border-radius: 15px;
            padding: 0.5em;
        }

        .returnSearch {
            display: flex;
            align-items: center;
        }

        .result {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
        }

        .result a {
            border: solid grey 2px;
            border-radius: 10px;
            background-color: white;
            margin: 1em;
            text-decoration: none;
            color: black;
        }

        .result a:hover {
            border: solid 2px blue;
            border-radius: 10px;
            background-color: lightblue;
        }

        .returnHome {
            background-color: white;
            border-radius: 30px;
            width: max-content;
            padding: 0.5em;
            display: flex;
            align-self: center;
        }

        .card {
            width: 8em;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 0.5em;
        }

        .card img {
            margin: auto;
            border-radius: 5px;
            width: 120px;
            height: 140px;
            border: solid 1px grey;
        }

        .pagePerso {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cardPersonnage {
            display: flex;
            flex-direction: row;
            background-color: white;
            padding: 1em;
            border: solid 1px black;
            border-radius: 5px;
            width: 35em;
        }

        .return {
            display: flex;
            align-self: flex-end;
            border: solid white 1px;
        }

        .return:hover {
            border: solid 1px lightblue;
        }

        .cardPersonnage .imagePerso {
            width: 240px;
            height: 280px;
            margin-right: 1em;
            border-radius: 5px;
            border: solid 1px grey;
        }

        .cardPersonnage .infos {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>

<!--liste par défaut-->
    <?php
    if (empty($id) && empty($query)) {
    ?>
        <div class="searchBar">
            <form action="trombinoscope.php" value="<?= $query ?>">
                <label for="table">rechercher un personnage :</label>
                <input type="text" name="q" placeholder="entrez un nom...">
                <input type="submit" value="OK">
            </form>
        </div>
        <div class="list">
            <h2>Personnages Disney</h2>
            <div class="result">
                <?php
                foreach ($donneestableau as $key => $personnage) :
                ?>
                    <a href="./trombinoscope.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
                        <div class="card">
                            <img src="<?= $personnage[0] ?>" alt="image de <?= $personnage[2] ?>" width="120px" height="140px">
                            <span><b><?= $personnage[1] ?></b></span>
                            <span><?= $personnage[2] ?></span>
                        </div>
                    </a>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    <?php
    } elseif (!empty($query)) {
    ?>
<!--page résultat de la recherche-->

        <div class="searchBar">
            <form action="trombinoscope.php" value="<?= $query ?>">
                <label for="table">rechercher un personnage :</label>
                <input type="text" name="q" placeholder="entrez un nom...">
                <input type="submit" value="OK">
            </form>
        </div>
        <div class="list">
            <h2>Résultat de la recherche "<?= $query ?>" </h2>
            <div class="result">
                <?php
                foreach ($donneestableau as $key => $personnage) :
                    $prenom = stripos($personnage[2], $query);
                    $nom = stripos($personnage[1], $query);
                    if (($prenom !== false || $nom !== false)) {
                        $personnageResult[$key] = $personnage;
                    }
                endforeach;
                if (empty($personnageResult))
                {
                    ?>
                        <h3>pas de résultat</h3>
                    <?php
                }
                else
                {
                    foreach ($personnageResult as $key => $personnage) :
                    ?>
                        <a href="./trombinoscope.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
                            <div class="card">
                                <img src="<?= $personnage[0] ?>" alt="image de <?= $personnage[2] ?>" width="120px" height="140px">
                                <span><b><?= $personnage[1] ?></b></span>
                                <span><?= $personnage[2] ?></span>
                            </div>
                        </a>
                    <?php
                    endforeach;
                }
                ?>
            </div>
            <div class="returnHome">
                <a class="returnSearch" href="trombinoscope.php"><img src="./homeButton.png" alt="return button" width="50px" height="50px"></a>
            </div>
        </div>
    <?php
    } else {
    ?>
<!--page du perso-->
        <div class="pagePerso">
            <div class="cardPersonnage">
                <img class="imagePerso" src="<?= $donneestableau[$id][0] ?>" alt="image de <?= $personnage[2] ?>">
                <div class="infos">
                    <span><u>Nom</u> : <?= $donneestableau[$id][1] ?></span>
                    <span><u>Prénom</u> : <?= $donneestableau[$id][2] ?></span>
                    <span><u>Age</u> : <?= $donneestableau[$id][3] ?> ans</span>
                    <span><u>Description</u> : <br><?= $donneestableau[$id][4] ?></span>
                </div>
                <a class="return" href="trombinoscope.php"><img src="./homeButton.png" alt="return button" width="50px" height="50px"></a>
            </div>
            <div class="searchBar">
                <form action="trombinoscope.php" value="<?= $query ?>">
                    <label for="table">rechercher un personnage : </label>
                    <input type="text" name="q" placeholder="entrez un nom...">
                    <input type="submit" value="OK">
                </form>
            </div>
            <div class="list">
                <h2>Personnages Disney</h2>
                <div class="result">
                    <?php
                    foreach ($donneestableau as $key => $personnage) :
                    ?>
                        <a href="./trombinoscope.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
                            <div class="card">
                                <img src="<?= $personnage[0] ?>" alt="image de <?= $personnage[2] ?>" width="120px" height="140px">
                                <span><?= $personnage[1] ?></span>
                                <span><?= $personnage[2] ?></span>
                            </div>
                        </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</body>

</html>