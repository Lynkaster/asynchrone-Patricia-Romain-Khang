<h2 style="text-align:center">trombinosearch</h2>
<form style="text-align:center" action="trombinoscope.php" method="get">
    <label for="table">rechercher un personnage : </label>
    <input type="text" name="personnage" placeholder="entrez un nom...">
    <input type="submit" value="OK">
</form>

<?php

$donneestableau = [
    1 => ['./photos/aladdin.png','RoiDesVoleurs','Aladdin',22,'Personnage du dessin animé : Aladdin'],
    2 => ['./photos/anna.JPG','Neige','Anna',16,'Personnage du dessin animé : La Reine des neiges'],
    3 => ['./photos/ariel.jpg','Sirène','Airel',16,'Personnage du dessin animé : La Petite sirène'],
    4 => ['./photos/belle.jpg','Nature','Belle',18,'Personnage du dessin animé : La Belle et la Bête'],
    5 => ['./photos/blanche_neige.jpg','Neige','Blanche',16,'Personnage du dessin animé : Blanche Neige'],
    6 => ['./photos/cendrillon.jpg','Douce','Cendrillon',17,'Personnage du dessin animé : Cendrillon'],
    7 => ['./photos/daisy_duck.png','Duck','Daisy',80,'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    8 => ['./photos/donald_duck.png','Duck','Donald',80,'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    9 => ['./photos/duchess.jpg','Elegante','Duchess',4,'Personnage du dessin animé : Les Aristochats'],
    10 => ['./photos/dumbo.jpg','Elephant','Dumbo',1,'Personnage du dessin animé : Dumbo'],
    11 => ['./photos/elisa.JPG','Neige','Elisa',15,'Personnage du dessin animé : La Reine des neiges'],
    12 => ['./photos/jafar.jpg','DesSables','Jafar',40,'Personnage du dessin animé : Aladdin'],
    13 => ['./photos/la_bete.jpg','La','Bête',55,'Personnage du dessin animé : La Belle et la Bête'],
    14 => ['./photos/lady.jpg','Ouaf','Lady',2,'Personnage du dessin animé : La Belle et le Clochard'],
    15 => ['./photos/merida.jpg','Rebelle','Merida',17,'Personnage du dessin animé : Rebelle'],
    16 => ['./photos/merlin.jpg','Enchanteur','Merlin',120,'Personnage du dessin animé : Merlin l\'Enchanteur'],
    17 => ['./photos/mickey_mouse.jpg','Mouse','Mickey',98,'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    18 => ['./photos/minnie_mouse.jpg','Mouse','Minnie',95,'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    19 => ['./photos/mulan.JPG','LégendeChinoise','Mulan',17,'Personnage du dessin animé : Mulan'],
    20 => ['./photos/pinocchio.jpg','Bois','Pinocchio',5,'Personnage du dessin animé : Pinocchio'],
    21 => ['./photos/pluto.png','Chien','Pluto',3,'Personnage des dessins animés :Mickey Mouse et Donald Duck '],
    22 => ['./photos/pocahontas.jpg','LégendeIndienne','Pocahontas',17,'Personnage du dessin animé : Pocahontas'],
    23 => ['./photos/prince_charmant.png','Prince','Chanmant',18,'Personnage du dessin animé : Cendrillon'],
    24 => ['./photos/reine_enfer.jpg','Reine','Enfer',50,'Personnage du dessin animé : Blanche Neige'],
    25 => ['./photos/thomas_o_malley.jpg','O\'Maley','Thomas',5,'Personnage du dessin animé : Les Aristochats'],
    26 => ['./photos/ursula.jpg','Pieuvre','Ursula',60,'Personnage du dessin animé : La Petite sirène'],
];

function displayTable(array $arr): void
{
    echo '<table style="margin-left:auto; margin-right:auto">';
    echo '<tr style="border:1px solid black">';
        echo '<td style="text-align:center">photo</td>';
        echo '<td style="text-align:center">Nom</td>';
        echo '<td style="text-align:center">Prénom</td>';
        echo '<td style="text-align:center">age</td>';
    echo '</tr>';
    foreach ($arr as $value) {
        echo '<a href="#"><tr>';
            echo '<td><img src="' . $value[0] . '" alt="photo de ' . $value[2] . '" width="120" height="140"></td>';
            echo '<td>' . $value[1] . '</td>';
            echo '<td>' . $value[2] . '</td>';
            echo '<td>' . $value[3] . ' ans</td>';
        echo '</tr></a>';
    }
    echo '</table>';
}

displayTable($donneestableau);

?>