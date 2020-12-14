<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cbeau.css">
    <title>Trombinoscope</title>
</head>
<body>
    <?php
        require_once "../controleur/trombinoscope.php";

        if (empty($id) && empty($query)) {
            ?>
                <div class="searchBar">
                    <form action="index.php" value="<?= $query ?>">
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
                            <a href="./index.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
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
                    <form action="index.php" value="<?= $query ?>">
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
                                <a href="./index.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
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
                        <a class="returnSearch" href="index.php"><img src="./homeButton.png" alt="return button" width="50px" height="50px"></a>
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
                        <a class="return" href="index.php"><img src="./homeButton.png" alt="return button" width="50px" height="50px"></a>
                    </div>
                    <div class="searchBar">
                        <form action="index.php" value="<?= $query ?>">
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
                                <a href="./index.php?id=<?= $key ?>&perso=<?= $personnage[2] . '_' . $personnage[1] ?>">
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
    ?>
</body>
</html>