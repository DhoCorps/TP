function Test($valeur,$seuil){
    if($valeur <= $seuil){
        $valeurDouble = $valeur*2; 
        echo " La valeur $valeur vaut maintenant $valeurDouble";
    }
    else{
        echo "La valeur $valeur ne bouge pas";
    }
}

$seuil=20;

Test(5,$seuil);
Test(25,$seuil);









