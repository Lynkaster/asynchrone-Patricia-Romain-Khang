<?php
    $login = "";
    $mdp = "toto8Rrr";



    function controleMDP(string $mdp)
    {
        $mdpValid = true;
        if (strlen($mdp) < 8) {
            echo "Mot de passe inférieur à 8 caractères\n";
            $mdpValid = false;
        } else {
            $chaineC = str_split($mdp);
            foreach ($chaineC as $value) {
                if (ctype_upper($value)) {
                    $mdpValid = TRUE;
                    echo 'ya maj <br>';
                  } else {
                    if (ctype_lower($value)) {
                        $mdpValid = true;
                        echo 'ya min<br>';
                      }
                     else {
                        if (ctype_digit($value)) {
                            $mdpValid = true;
                            echo 'ya chiffre<br>';
                          }
                          else{
                              echo 'true';
                              return TRUE;
                          }
                        }
                    }
                }
            }

        }


    controleMDP($mdp);

    ?>