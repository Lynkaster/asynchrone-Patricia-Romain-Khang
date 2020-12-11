<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_multiplication</title>
</head>
<body>


<!--http://localhost/TP_PHP/getMultipication/multiplication.php?table=9&max=24-->


<!--Transmettre données pour le GET-->
 <form action="multiplication.php" method="get">
        <div>
            <label for="table">Entrez la table de multiplication souhaitée : </label>
            <input type="text" name="table">
        </div>
        <div>
            <label for="max">Entrez le nombre max :</label>
            <input type="text" name="max">
        </div>
        <div>
            <input type="submit">
        </div>       
    </form>

<BR><BR>

<!--Appeler GET-->
<?php

$table = $_GET['table'];
$max = $_GET['max'];


function multiplication( int $table , int $max ): void
{
    $red = 'red';
    for($base=0; $base<=$max; $base ++)
    {
        $resultat = $table * $base;
        if($resultat%2 == 1)//s'il reste rien au modulo c'est un chiffre pair et donc si non il est impair
        {
            echo "$table x $base = $resultat<br>\n"; 
        }
        else
        {
            echo "<span style='color:$red'> $table x $base =  $resultat</span><br>\n";
        }
    }
}
multiplication($table, $max);

?>





Code alexandre Ahmad :
<?php
    
    $lTable =  $_GET['table'];
    $lMax = $_GET['max'];
        
    
    
    echo "La table demandée est de celle de " . ($lTable) . "<BR>\n";
        
        for($i=0; $i<=$lMax ;$i++)
        {
            $lCalcul = $lTable*$i;
            $lColor = "black";

            if($lCalcul % 2 == 0)
            {
                $lColor = "red";
            }
            echo "<span style='color:$lColor'> $lTable x $i = " . $lTable*$i . "</span><br>", PHP_EOL;
        }


?>

<form action="mult.php" method="get">
    <label for="table">Quel chiffre à multiplier ?</label>
    <input type="text" name="table">
    <BR>
    <label for="max">Jusqu'à quelle valeur ?</label>
     <input type="text" name="max">
    <BR>
     <input type="submit">
</form>


</body>
</html>