<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La table de multiplication avec formulaire</title>
</head>
<body>

<?php
    
    if(!empty($_POST))
    {
        if( !empty($_POST['table']) || !empty($_POST['max']))
        {
            $lTable =  htmlspecialchars($_POST['table']);
            $lMax = htmlspecialchars($_POST['max']);
            $verifTable = false;
            $verifMax = false;

            if( is_numeric($lMax) )
            {
                $lMax = (int)($lMax);
                $lMax = $lMax > 1000 ? 1000:$lMax;
                echo gettype($lMax), "<BR>";
                $verifMax = !$verifMax;
            }
            
            if( is_numeric($lTable) )
            {
                $lTable = (int)($lTable);
                echo gettype($lTable), "<BR>";
                $verifTable = true;
            }
        
            if( $verifMax && $verifTable )
            {
                echo "<BR>La table demandée est de celle de " . ($lTable) . "<BR>\n";
                
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
            }
        }
}

?>

<form action="multiplication2.php" method="post">
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