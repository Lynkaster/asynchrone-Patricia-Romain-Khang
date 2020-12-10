<?php

$donneestableau = [
    ['./photos/Aladdin.png','roi-des-voleurs','aladdin',28],
    ['./photos/Aladdin.png','roi-des-voleurs','aladdin',28],
    ['./photos/Aladdin.png','roi-des-voleurs','aladdin',28],
    ['./photos/Aladdin.png','roi-des-voleurs','aladdin',28]
];

function displayTable(array $arr): void
{
    echo '<table>';
    echo '<tr>';
        echo '<td>photo</td>';
        echo '<td>Nom</td>';
        echo '<td>Prénom</td>';
        echo '<td>age</td>';
    echo '<tr/>';
    foreach ($arr as $value) {
        echo '<tr>';
            echo '<td><img src="' . $value[0] . '" alt="photo de ' . $value[2] . '</td>';
            echo '<td>' . $value[1] . '</td>';
            echo '<td>' . $value[2] . '</td>';
            echo '<td>' . $value[3] . ' ans</td>';
        echo '</tr>';
    }
    echo '</table>';
}

displayTable($donneestableau);

?>