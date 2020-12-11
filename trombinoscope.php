<?php

$donneestableau = [
    0 => ['./photos/ursula.jpg', 'Pieuvre', 'Ursula', 60, 'Personnage du dessin animé : La Petite sirène'],
    1 => ['./photos/aladdin.png', 'RoiDesVoleurs', 'Aladdin', 22, 'Personnage du dessin animé : Aladdin'],
    2 => ['./photos/anna.JPG', 'Neige', 'Anna', 16, 'Personnage du dessin animé : La Reine des neiges'],
    3 => ['./photos/ariel.jpg', 'Sirène', 'Airel', 16, 'Personnage du dessin animé : La Petite sirène'],
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
    23 => ['./photos/prince_charmant.png', 'Prince', 'Chanmant', 18, 'Personnage du dessin animé : Cendrillon'],
    24 => ['./photos/reine_enfer.jpg', 'Reine', 'Enfer', 50, 'Personnage du dessin animé : Blanche Neige'],
    25 => ['./photos/thomas_o_malley.jpg', 'O\'Maley', 'Thomas', 5, 'Personnage du dessin animé : Les Aristochats'],
];
if (isset($_GET['q'])) $query = $_GET['q'];
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
            background-color: grey;
        }

        h2 {
            color: white;
        }
        
        .result {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        a {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            border: solid black 1px;
            margin: 1em;
        }

        .card {
            background-color: white;
            width: 10em;
        }

        
    </style>
</head>

<body>
    <h2 style="text-align:center">trombinosearch</h2>
    <form style="text-align:center" action="trombinoscope.php" value="<?= $query ?>">
        <label for="table">rechercher un personnage : </label>
        <input type="text" name="q" placeholder="entrez un nom...">
        <input type="submit" value="OK">
    </form>

    <h2>Personnages Disney</h2>
    <div class="result">
        <?php
        foreach ($donneestableau as $key => $personnage) :
            if (!empty($query)) {
                $prenom = stripos($personnage[2], $query);
                $nom = stripos($personnage[1], $query);
                if (($prenom !== false || $nom !== false)) {
                    $personnageResult[] = $personnage;
                }
            }
        ?>
            <a href="./trombinoscope.php?q=<?= $personnage[2] ?>">
                <div class="card">
                    <img src="<?= $personnage[0] ?>" alt="" width="120px" height="140px">
                    <span><?= $personnage[1] ?></span>
                    <span><?= $personnage[2] ?></span>
                </div>
            </a>
        <?php
        endforeach;
        ?>

    </div>
</body>

</html>